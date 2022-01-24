<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $guarded;
    //perfect
    protected $fillable=['category_id','brand_id','product_price','product_quantity','short_description','long_description','productImage','publication_status'];
}
