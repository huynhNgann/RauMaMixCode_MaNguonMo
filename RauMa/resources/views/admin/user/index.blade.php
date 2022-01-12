@extends('layouts.admin')

@section('title','Quản lý tài khoả0n admin')

@section('main')

<form action="{{route('user.store')}}" class="form-inline" role="form">

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
    @foreach ($user as $cat )
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->email}}</td>
            <td>{{$cat->create_at}}</td>
            <td>
                @if($cat->status == 0)
                <span class="badge badge-danger">Private</span>
                @else
                <span class="badge badge-success">Public</span>
                @endif
            </td>
            <td>           
                    @csrf @method('DELETE')                     
                    <a href="{{route('account.edit',$cat->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i> </a>
                    <a href="{{route('category.destroy',$cat->id)}}" class="btn btn-sm btn-danger btndelete">
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
     {{$user->appends(request()->all())->links()}}
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