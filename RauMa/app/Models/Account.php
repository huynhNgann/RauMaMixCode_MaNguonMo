<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table="tbl_admin";
    protected $fillable=['admin_name','admin_email','admin_password','admin_phone'];

    protected $hidden=['password'];

    protected $cats=[
        'email_verified_at'=>'datetime'
    ];
    //
    public function scopeSearch($query){
        if($key = request()-> key)
        {
            $query = $query-> where('admin_name','like','%'.$key.'%');
        }
        return $query;
    }
}
