<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::orderBy('create_at','DESC')->paginate(3);
        /**
         *  if($key = request()-> key){
         * data = Category::orderBy('create_at','DESC')-> where('name','like','%'.$key.'%')->paginate(10);
         * 
         */
         $user = User::orderBy('create_at','DESC')-> search()->paginate(1);
        

        return view('admin.user.index',compact('user'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $model=User::find($user);
        return view('admin.user.create');
    }
    public function post_add(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'password'=>'required',
            'email'=>'required|email|unique:user,email',
            
        ],[
            'name.required'=>'Tên admin không để trống',
            'password.required'=>'Mật khẩu không được để trống',
            'email.required'=>'Email không để trống',
            'email.unique'=>'Email này đã có',
        ]);
        $password=bcrypt($request->password);
        $request->merge(['password'=>$password]);

        User::created($request ->all());
        return redirect()->route('account');
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // if($user->count()>0){
        //     return redirect()->route('user.index')->with('error','không thể xóa danh mục này');
        // }
        // else{
        //     $user->delete();
        //     return redirect()->route('user.index')->with('success','không thể xóa danh mục này');
        // }
      
    }
}
