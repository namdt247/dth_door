<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['fullName', 'phone', 'email', 'message'];
    protected $appends = ['fullName', 'phone', 'email', 'message', 'ct_content'];

    public function status(){
        return $this->belongsTo('App\Models\Contact_status', 'status', 'id');
    }

    public function getStatusParentAttribute() {
        return $this->status()->first();
    }
}
