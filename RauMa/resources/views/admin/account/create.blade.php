@extends('layouts.admin')
@section('title','Thêm mới tài khoản')
@section('main')
<form action="route('user.create')" method="POST" class="form-inline" role="form">
    @csrf 
    <div class="row">
      <div class="form-group">
        <label for="">Tên tài khoản</label>
        <input type="text" name="admin_name" class="form-control" requied placeholder="Nhập....">
        
       </div>
      <div class="form-group">
        <label for="">Email</label>
       <textarea name="admin_email" class="form-control" placeholder="Nhập....">
       </textarea>
        
        </div> 
        <div class="form-group">
        <label for="">Phone</label>
        <input name="admin_phone" class="form-control" placeholder="Nhập....">
     
       
        </div> 
      <div class="form-group">
        <label for="">Password</label>
       <textarea name="admin_password" class="form-control" placeholder="Nhập....">
       </textarea>
        @error('password')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>   
        <button type="submit" class="btn btn-primary">Save Data </button>
  
</form>   
</form>
    
@stop
@section('css')
<link rel="stylesheet" href="{{url('public/admin')}}/plugins/summernote/summernote-bs4.min.css">
@stop
@section('js')
<script src="{{url('public/admin')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#content').summernote({
        height:200,
        placeholder:"Product description"
    });

  })
</script>
@stop