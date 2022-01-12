<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $account= DB::table('tbl_admin')->orderBy('id','DESC')->paginate(3);
        /**
         *  if($key = request()-> key){
         * data = Category::orderBy('create_at','DESC')-> where('name','like','%'.$key.'%')->paginate(10);
         * 
         */
        // $account =DB::table('tbl_admin')->orderBy('id','DESC')-> search()->paginate(1);
       $account =DB::table('tbl_admin')->orderBy('admin_id','DESC')->get();
        

        return view('admin.account.index',compact('account'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.account.create');
    }
    public function post_add(Request $request){
        $request->validate([
            'admin_name'=>'required',
            'admin_password'=>'required',
            'admin_email'=>'required|email|unique:account,email',
            
        ],[
            'name.required'=>'Tên admin không để trống',
            'password.required'=>'Mật khẩu không được để trống',
            'email.required'=>'Email không để trống',
            'email.unique'=>'Email này đã có',
        ]);
        $password=bcrypt($request->password);
        $request->merge(['password'=>$password]);
        $account=DB::table('tbl_admin')->created($request ->all());
        return redirect()->route('account',compact('account'));
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if((DB::table('tbl_admin')->create($request->all()))){
            return redirect()->route('product.index')->with('success','Thêm mới sản phẩm thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        // return view('admin.account.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model=DB::table('tbl_admin')->find($id);
        return view('admin.account.create',compact('model'));
        
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
