<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CategoryAdmin;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function list(){
        $data = DB::table('category_admins')->get();
       
        return view('admin/pages/category/list', ['data' => $data]);
    }

    public function add(){
        return view('admin/pages/category/add');
    }

    public function create(Request $request)
    {
        $request->validate([
            'categories' => 'required|array',
            'subcategories' => 'required|array',
            'categories.*' => 'required|string|max:255',
            'subcategories.*' => 'required|string|max:255',
        ]);

        // Duyệt qua từng cặp danh mục và danh mục con và lưu vào cơ sở dữ liệu
        for ($i = 0; $i < count($request->categories); $i++) {
            $category = new CategoryAdmin();
            $category->category = $request->categories[$i];
            $category->subcategory = $request->subcategories[$i];
            $category->save();
        }

        $request->session()->flash('success', 'Danh mục đã được thêm thành công!');

        return redirect()->back()->with('success', 'Danh mục đã được thêm thành công!');
    }

    public function delete($id){
        $category = CategoryAdmin::findOrFail($id);
        $category->delete();
        session()->flash('success', 'Danh mục đã được xóa thành công!');
        return redirect()->back();
    }

    public function edit(){
        return view('admin/pages/category/edit');
    }
}
