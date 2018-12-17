<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalinfo extends Model
{
    protected $fillable = [
    	'fname', 'lname' , 'gender' ,'email','bday','wdlive','pno','profession','education','marriage','marriedb','height','weight','hear','beforeworked','ytell','challenge','passion','religion','fb','linkedin'
    ];
}
