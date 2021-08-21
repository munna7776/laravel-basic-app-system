<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','p_name','f_name','school','p_age','p_contact'];
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
