<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\LoginAdmin;
use Hash;
use DB;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $data = DB::table('login_admins')->get();
        return view('admin/pages/account/list', ['data' => $data]);
    }

    public function add(){
        return view('admin/pages/account/add');
    }

    public function create(Request $request){
       $request->validate([
        'email' => 'required|email|max:255|unique:login_admins,email',
        'name' => 'required|string|max:255',
        'password' => 'required|string|min:8|confirmed',
       ]);

       $adminaccount = new LoginAdmin();
       $adminaccount -> email = $request->input('email');
       $adminaccount -> name = $request->input('name');
       $adminaccount -> password = Hash::make($request->input('password'));
       $adminaccount->save();

       return redirect()->route('addAccount')->with('success', 'User created successfully!');
    
    }
    public function edit($id){
        $data = LoginAdmin::findOrFail($id);
        return view('admin/pages/account/edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:login_admins,email,' . $id,
            'password' => 'nullable|string|min:8|max:16|confirmed',
        ]);
    
        $adminaccount = LoginAdmin::findOrFail($id);
        $adminaccount->name = $request->input('name');
        $adminaccount->email = $request->input('email');
        $adminaccount -> password = Hash::make($request->input('password'));
    
        $adminaccount->save();
        return redirect()->route('EditAccount', $id)->with('success', 'Cập nhật tài khoản thành công');
    }
    

    public function delete($id){
        $category = LoginAdmin::findOrFail($id);
        $category->delete();
        session()->flash('success', 'Tài khoản đã được xóa thành công!');
        return redirect()->back();
    }

}
