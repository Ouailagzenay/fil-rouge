<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin')->except('')
    }
    public function index()
    {
        return view('admin.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdminLoginForm()
    {
        return view('admin.auth.login');
    }

   
    public function adminLogin()
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);
        if(auth()->guard('admin')->attempt([
            'email'=> $request->email,
            'password'=>$request->password
        ],$request->get('remember'))){
            return redirect('/admine');
        }else{
            return redirect()->route('admin.login');
        }
    }


    public function adminLogout()
    {
        auth()->guard('admin')->logout();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
