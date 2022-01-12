@extends('layouts.layout')
@section('main')
<button class="btn btn-success">Đặt hàng thành công</button>
<button href="{{URL::to('/trangchu')}}" type="submit" class="btn btn-warning">Tiếp tục mua </button>
@stop