<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class segment extends Model
{
    use HasFactory;
    protected $table = 'segment';
    protected $primarykey = 'id';
    protected $fillable = ['segment_name'];
}
