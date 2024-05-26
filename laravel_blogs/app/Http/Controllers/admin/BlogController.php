<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(){
        return view('admin/pages/post/list');
    }

    public function add(){
        $columCate = DB::table('category_admins')->pluck('category');
        $columSubCate = DB::table('category_admins')->pluck('subcategory');
        // dd($columCate, $columSubCate );
        return view('admin/pages/post/add', ['columCate' => $columCate, 'columSubCate'=> $columSubCate]);
    }

    public function edit(){
        return view('admin/pages/post/edit');
    }
}
