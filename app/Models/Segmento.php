<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segmento extends Model
{
    use HasFactory;
    protected $table = 'segmento';
    protected $primarykey = 'id';
    protected $fillable = ['nome'];
}
