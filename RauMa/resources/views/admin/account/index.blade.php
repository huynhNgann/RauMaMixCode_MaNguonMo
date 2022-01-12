@extends('layouts.admin')

@section('title','Quản lý tài khoản')

@section('main')

<form action="{{route('account.store')}}" class="form-inline" role="form">

    <div class="form-group">
        <input class="form-control" name="key" placeholder="Tìm kiếm">
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
</form>
 
 <table class="table table-hover">
   
 <thead>
         <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Email</th>
             <th>Create Date</th>
             <th>Actions</th>
         </tr>
     </thead>
     <tbody>
    @foreach ($account as $cat )
        <tr>
            <td>{{$cat->admin_id}}</td>
            <td>{{$cat->admin_name}}</td>
            <td>{{$cat->admin_email}}</td>
            <td>{{$cat->admin_phone}}</td>
            
            <td>           
                    @csrf @method('DELETE')                     
                    <a href="{{route('account.edit',$cat->admin_id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i> </a>
                    <a href="{{route('category.destroy',$cat->admin_id)}}" class="btn btn-sm btn-danger btndelete">
                    <i class="fas fa-trash "></i> </a>
                
                  
                
            </td>
        </tr>
        
    @endforeach

 </table>
 <form method="POST" action="" id="form-delete">
     @csrf @method('DELETE')
 </form>
 <hr>
 <div class="">
     {{$account->appends(request()->all())->links()}}
 </div>
@endsection

@section('js')

<script>
$('.btndelete').click(function(ev){
    ev.preventDefault();
    var _href=$(this).attr('href');
    alert(_href);
    $('form#form-delete').attr('action',_href);
    if(confirm('Bạn có muốn xóa không ?')){
        $('form#form-delete').submit();
    }
})
    

</script>
@endsection