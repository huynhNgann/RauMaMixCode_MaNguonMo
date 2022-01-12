@extends('layouts.admin')
@section('title','Thêm mới tài khoản')
@section('main')
<form action="{{route('user_create')}}" method="POST" class="form-inline" role="form">
    @csrf 
    <div class="row">
        
      <div class="form-group">
        <label for="">Tên tài khoản</label>
        <input type="text" name="name" class="form-control" requied placeholder="Nhập....">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
       </div>
      <div class="form-group">
        <label for="">Email</label>
       <textarea name="email" class="form-control" placeholder="Nhập....">
       </textarea>
        @error('email')
        <small class="help-block">{{$message}}</small>
        @enderror
        </div> 
        <div class="form-group">
        <label for="">Phone</label>
        <textarea name="phone" class="form-control" placeholder="Nhập....">
       </textarea>
        @error('phone')
        <small class="help-block">{{$message}}</small>
        @enderror
        </div> 
      <div class="form-group">
        <label for="">Password</label>
       <textarea name="password" class="form-control" placeholder="Nhập....">
       </textarea>
        @error('password')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>   
    <div class="form-group">
        <label for="">Address</label>
       <textarea name="address" class="form-control" placeholder="Nhập....">
       </textarea>
        @error('addresss')
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