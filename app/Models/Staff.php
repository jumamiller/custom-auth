<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'company_email',
        'phone_number',
        'password',
        'resume',
        'avatar',
        'is_phone_verified',
        'ipaddress',
        'device',
    ];
    protected $hidden=[
        'password'
    ];
    protected $casts=[
        'first_name'    =>'string',
        'last_name'     =>'string',
        'company_email' =>'string',
        'phone_number'  =>'string',
        'password'      =>'string',
        'resume'        =>'string',
        'avatar'        =>'string',
        'is_phone_verified'=>'boolean',
    ];
    protected $attributes=[
        'is_phone_verified'=>false,
    ];
    protected $primaryKey='staff_id';

    public function getFirstNameAttribute($fname){
        return strtoupper($fname);
    }
    public function getLastNameAttribute($lname){
        return strtoupper($lname);
    }
    public function getCompanyEmailAttribute($email){
        return strtoupper($email);
    }
    public function setFirstNameAttribute($fname){
        $this->attributes['first_name']=strtolower($fname);
    }
    public function setLastNameAttribute($lname){
        $this->attributes['last_name']=strtolower($lname);
    }
    public function setEmailAddressAttribute($email){
        $this->attributes['company_email']=strtolower($email);
    }
}
