<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'username',
        'password',
    ];
}
