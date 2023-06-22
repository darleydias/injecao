<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primarykey = 'customer_id';
    protected $fillable = ['customer_name','customer_CNPJ','customer_cel','customer_email','customer_contact','customer_insEst','customer_insMun','segment_id'];
}
