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
    protected $fillable = ['name', 'note', 'thumbnail'];
//    protected $with = ['product'];

    private static $cloudinary_link = 'https://res.cloudinary.com/tena2472/image/upload/v1650096971/';

    public function product(){
        return $this->hasMany('App\Models\Product','category_id','id');
    }

    public function getProductAttribute() {
        return $this->product()
            ->where(Query::STATUS, Query::EQUAL, Config::STATUS_ACTIVE)
            ->get();
    }

    public function getLargePhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array();
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getThumbnailArrayAttribute()
    {
        return explode(',', $this->thumbnail);
    }

    public function getLastLargePhotoAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return null;
        }
        $photos = explode(',', $this->thumbnail);
        $lastPhoto = $photos[count($photos) - 2];
        return self::$cloudinary_link . $lastPhoto . '.jpg';
    }
}
