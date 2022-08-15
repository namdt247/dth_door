<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'note'];
//    protected $with = ['product'];

    public function product(){
        return $this->hasMany('App\Models\Product','category_id','id');
    }
}
