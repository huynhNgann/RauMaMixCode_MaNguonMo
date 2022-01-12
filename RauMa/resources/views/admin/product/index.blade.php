@extends('layouts.admin')

@section('title','Product List')

@section('main')

<form action="{{route('product.store')}}" class="form-inline" role="form">

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
             <th>Price</th>
             <th>Category</th>
             <th>Description</th>
             <th>Status</th>
             <th>Create Date</th>
             <th>Image</th>
             <th>Action</th>


     </thead>
     <tbody>
    @foreach ($product_all as $key => $cat )
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->price}}</td>     
            <td>{{$cat->category_id}}</td>            
            <td>{{$cat->descreption}}</td>
            <td>
                @if($cat->status == 0)
                <span class="badge badge-danger">Private</span>
                @else
                <span class="badge badge-success">Public</span>
                @endif
            </td>
            <td>
                <img src="{{url('public/frontend/img/product')}}/{{$cat->image}}" width="60"></td>
         
          
            <td>           
                    @csrf @method('DELETE')                     
                    <a href="{{route('product.edit',$cat->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i> </a>
                    <a href="{{route('product.destroy',$cat->id)}}" class="btn btn-sm btn-danger btndelete">
                    <i class="fas fa-trash "></i> </a>
                
                  
            </td>

        </tr>
        
    @endforeach

 </table>
 <form method="POST" action="" id="form-delete">
     @csrf @method('DELETE')
 </form>
 <hr>

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