<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_status extends Model
{
    use HasFactory;

    protected $table = 'contact_statuses';
    protected $primaryKey = 'id';

    public function contact(){
        return $this->hasMany('App\Models\Contact','status','id');
    }
}
