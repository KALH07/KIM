<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //filable = ["nom"......] fait la meme chose que proctected mais permet les insertions
}
