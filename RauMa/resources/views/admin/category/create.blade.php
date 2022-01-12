@extends('layouts.admin')
@section('title','Thêm danh mục sản phẩm')
@section('main')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm danh mục sản phẩm <small></small></h3>
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{route('category.store')}}" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                    <input type="text" name="name" class="form-control" >
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
                      <label for="">Số lượng</label>
                      <input type="number" class="form-control" name="prioty" placeholder="">
                         
                    </div>

                  </div>
                </div>
              
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
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@stop