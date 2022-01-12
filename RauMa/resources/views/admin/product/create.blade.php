@extends('layouts.admin')
@section('title','Thêm sản phẩm')
@section('main')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm <small></small></h3></div></div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Mã sản phẩm</label>
                    <input type="text" name="id" class="form-control" >
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" name="image" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giá</label>
                    <input type="text" name="price" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea name="descreption" class="form-control" placeholder="Nhập....">
               </textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="">Trạng thái</label>
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
                <div class="clear"></div>
                   </div>
                <div class="form-group">
                      <label for="">Loại sản phẩm</label>
                      <select name="category_id" class="form-group">
                       @foreach ($add_product as $i)
                     <option value="{{$i->id}}">{{$i->name}}</option>
                      @endforeach
                  </select>
                         
                  </div>            
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="create" class="btn btn-primary">Thêm</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@stop