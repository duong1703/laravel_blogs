<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CategoryAdmin;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(){
        return view('admin/pages/post/list');
    }

    public function add(){
        $data = DB::table('category_admins') 
                ->select(DB::raw('MIN(id) as id'), 'category')
                ->groupBy('category')
                ->get();

        // dd($data);
        return view('admin/pages/post/add', ['data' => $data]);
    }

    public function getSubcategories($id)
    {
        $subcategories = DB::table('category_admins')
                            ->where('id', $id)
                            ->pluck('subcategory');
        return response()->json($subcategories);
    }

    public function edit(){
        return view('admin/pages/post/edit');
    }
}
