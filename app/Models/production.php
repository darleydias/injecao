<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class production extends Model
{
    use HasFactory;
    protected $table ='production';
    protected $primarykey = 'production_id';
    protected $fillable = ['product_id','customer_id','production_opNum','production_qnty','production_deliveryDate','production_obs'];

}
