@extends('layouts.admin')

@section('title','Category List')

@section('main')

<form action="{{route('category.store')}}" class="form-inline" role="form">
    
    {{csrf_field()}}
    <div class="form-group">
        <input class="form-control" name="key" placeholder="Tìm kiếm">
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
   <a href="{{route('category.create')}}" class="btn btn-success">Thêm mới </a>
</form>
 
 <table class="table table-hover">
   
 <thead>
         <tr>
             <th>ID</th>
             <th>Tên danh mục</th>
             <th>Tổng </th>
             <th>Trạng thái</th>
             <th>Create Date</th>
             <th>Actions</th>
         </tr>
     </thead>
     <tbody>
    @foreach ($all_category_product as $model )
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name}}</td>
            <td>
            {{$model->prioty}}
            </td>
            <td>
                @if($model->status == 0)
                <span class="badge badge-danger">Private</span>
                @else
                <span class="badge badge-success">Public</span>
                @endif
            </td>
           
            <td>           
                    @csrf @method('DELETE')                     
                    <a href="{{route('category.edit',$model->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i> </a>
                    <a href="{{route('category.destroy',$model->id)}}" class="btn btn-sm btn-danger btndelete">
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