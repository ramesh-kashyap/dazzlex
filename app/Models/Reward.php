<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    use HasFactory;
    
    protected $fillable = [
        'amount', 'level', 'remarks', 'user_id_fk', 'user_id','status','total_business','tdate','Inactive_status',
    ];

      public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    } 
}
