<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $fillable =  ['category_id', 'name', 'description', 'image', 'stock', 'vote',
    'vote_count','page_count', 'status', 'purchase_price', 'sale_price'
];
    protected $appends = ['image_path', 'profit_percent'];

   //attr
    public function getImagePathAttribute()
    {
        if ($this->image) {
            return asset('uploads/product_images/' . $this->image);
        }
            return asset('uploads/product_images/default_Product.png');

    }//end of image path attribute

    public function getProfitPercentAttribute()
    {
        $profit = $this->sale_price - $this->purchase_price;
        $profit_percent = $profit * 100 / $this->purchase_price;
        return number_format($profit_percent, 2);

    }//end of get profit attribute

   //scope
   public function scopeWhenSearch($query, $search)
   {
       return $query->when($search, function ($q) use ($search) {

           return $q->where('name', 'like', '%' . $search . '%');

       });

   }// end of scopeWhenSearch


   //rel
    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_category');

    }//end fo category

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product_order');

    }//end of orders

    //fun
    public function hasImage()
    {
        return $this->image != null;

    }// end of hasImage

}//end of model

