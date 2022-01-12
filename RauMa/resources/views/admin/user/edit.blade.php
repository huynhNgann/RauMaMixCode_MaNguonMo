@extends('layouts.admin')

@section('title','Edit Category')

@section('main')
<form action="{{route('category.update',$category->id)}}" method="POST" class="form-inline" role="form">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên món</label>
        <input type="text" value="{{$category->name}}" class="form-control" name="name" placeholder="Nhập món">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    
    </div>
    <div class="form-group">
        <label for="">Status</label>

        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" checked>
                Public
            </label>
            <label>
                <input type="radio" name="status" value="0" checked>
                Private
            </label>
        </div>
  
    <div class="form-group">
        <label for="">Số lượng</label>
        <input type="number" value="$category->prioty" class="form-control" name="prioty" placeholder="">
                @error('prioty')
        <small class="help-block">{{$message}} </small>
                @enderror
     
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Save Data </button>
</form>
    
@stop