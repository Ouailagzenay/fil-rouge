<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showFormLogin(){
        return view('admin.login');
    }
    public function adminLogin(Request $request){
 if( $request->password = 'admin '){
    return redirect('/admin/materail');
 }else{
    echo 'erro';
 }
    }
}
