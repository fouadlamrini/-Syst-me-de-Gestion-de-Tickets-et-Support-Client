<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md p-4">
            <h1 class="text-xl font-bold mb-4">{{Auth::user()->name }}</h1>
            <nav>
                <ul>
                    <li class="p-2 bg-gray-200 rounded-md mb-2">Dashboard</li>
                    <li class="p-2 hover:bg-gray-200 rounded-md">Tickets</li>
                    <li class="p-2 hover:bg-gray-200 rounded-md">Category</li>
                    <li class="p-2 hover:bg-gray-200 rounded-md">  <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
            <div>
                <h1>Category</h1>
                <form method="POST" action="{{route('category.store')}}">
                    <input name="name" type="text" placeholder="entrer nouveau categeory">
                    <input name="description" type="text" placeholder="entrer description">
                    <button type="submit">save</button>
                </form>
        
            </div>
        </main>
    </div>

   

</body>
</html>
