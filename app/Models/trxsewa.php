<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trxsewa extends Model
{
    protected $table = 'trxsewa';
    protected $primaryKey = 'fidsewa';
    protected $fillable = ['ftglawal','ftglakhir','fnoplat','fiduser'];
    use HasFactory;

    public function sewa(){
        return $this->where('fidmobil','1')->get();
    }
}
