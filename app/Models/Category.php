<?php

namespace App\Models;

use App\Helper\Config;
use App\Helper\Query;
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

    public function getProductAttribute() {
        return $this->product()
            ->where(Query::STATUS, Query::EQUAL, Config::STATUS_ACTIVE)
            ->get();
    }
}
