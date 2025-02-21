<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Termwind\Components\Hr;

class tickets extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'status',
    ];

    public function Users():HasOne
    {
        return $this->hasOne(User::class);

    }
    public function category():HasOne 
    {
        return $this->hasOne(category::class);

    }

}
