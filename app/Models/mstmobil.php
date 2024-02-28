<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mstmobil extends Model
{
    protected $table = 'mstmobil';
    protected $primaryKey = 'fidmobil';
    protected $fillable = ['fmodel','fmerek','fnoplat','ftarif'];
    use HasFactory;
}
