@extends('layouts.admin')
@section('title','Cập nhật sản phẩm')
@section('main')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
             
              <!-- /.card-header -->
              <!-- form start -->
              @foreach ( $edit_product as $key =>$ep)
              <form id="quickForm" action="{{URL::to('update_product/'.$ep->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" name="name" value="{{$ep->name}}" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" name="image" value="{{url('public/frontend/img/product')}}/{{$ep->image}}" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giá</label>
                    <input type="text" name="price" value="{{$ep->price}}"class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea name="descreption" value="{{$ep->descreption}}" class="form-control" ">
               </textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="">Trạng thái</label>
                      <div class="radio">
                    <label>
                    <input type="radio" name="status" value="{{$ep->status}}" value="1" checked>
                        Public
                    </label>
                    <label>
                    <input type="radio" name="status" value="{{$ep->status}}" value="0" checked>
                        Private
                    </label>
                     </div>
                <div class="clear"></div>
                   </div>
                <div class="form-group">
                      <label for="">Loại sản phẩm</label>
                    

                      <select name="category_id" class="form-group">
                      @foreach( $add_product as $key=> $ep)
                        <option value="{{$ep->id}}">{{$ep->name}}</option>                          
                        @endforeach
                      </select>
                  </select>
                         
                  </div>            
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
                </div>
              </form>
              @endforeach
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