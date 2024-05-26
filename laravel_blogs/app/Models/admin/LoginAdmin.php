<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginAdmin extends Model
{
    use HasFactory;

    protected $table = 'login_admins';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'email', 'password'];
}
