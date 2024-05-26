<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CategoryAdmin;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $totalCategory = DB::table('category_admins')->select('category')->distinct()->count('category');
        $totalSubCategory = DB::table('category_admins')->select('subcategory')->count('category');
        return view('admin/pages/home', ['totalCategory' => $totalCategory, 'totalSubCategory'=> $totalSubCategory]);
    }
}
