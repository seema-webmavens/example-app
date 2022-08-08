<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table='products';

    protected $fillable= ['name','price','discription','category_id','photo'];

    public function Category()
    {
        return $this->belongsTo('Category::class');
    }
}
