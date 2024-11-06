<?php

namespace App\Models;

use App\Observers\CopyImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected  $table = 'noticias';

    protected $guarded = [];



}
