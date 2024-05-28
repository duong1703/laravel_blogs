<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAdmin extends Model
{
    use HasFactory;

    protected $table = 'category_admins';

    protected $primaryKey = 'id';

    protected $fillable = ['category', 'subcategory'];


}
