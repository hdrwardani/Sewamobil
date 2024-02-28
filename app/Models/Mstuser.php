<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mstuser extends Model
{
    protected $table = 'mstuser';
    protected $primaryKey = 'id';
    protected $fillable = ['fnama','falamat','fnotelp','fnosim','femail','fpassword'];

    

}
