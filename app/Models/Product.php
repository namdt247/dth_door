<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $appends = ['category'];
    protected $fillable = ['category_id', 'name', 'title', 'thumbnail', 'description', 'type'];

    private static $cloudinary_link = 'https://res.cloudinary.com/tena2472/image/upload/v1650096971/';

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function getCategoryAttribute() {
        return $this->category()->first();
    }

    public function getSmallPhotoAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return null;
        }
        $photos = explode(',', $this->thumbnail);
        return self::$cloudinary_link . 'w_100,c_scale/' . $photos[0] . '.jpg';
    }

    public function getLargePhotoAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return null;
        }
        $photos = explode(',', $this->thumbnail);
        return self::$cloudinary_link . $photos[0] . '.jpg';
    }

    public function getLargePhoto2Attribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return null;
        }
        $photos = explode(',', $this->thumbnail);
        return self::$cloudinary_link . $photos[1] . '.jpg';
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

    public function getSmallPhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array();
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'w_100,c_scale/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPhotoIdsAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array();
        }
        $list_ids = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_ids, $p);
            }
        }
        return $list_ids;
    }

    public function getPreviewPhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array();
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'c_limit,h_60,w_90/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getThumbnailArrayAttribute()
    {
        return explode(',', $this->thumbnail);
    }
}
