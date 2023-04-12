@extends('admin.main')
@section('header')
  <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')

<div class="card card-primary">
    <form action="" method="POST">
      <div class="card-body">


        <div class="form-group">
          <label for="menu">Tên Danh Mục</label>
          <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
        </div>

        <div class="form-group">
          <label>Danh Mục</label>
          <select class="form-control" name="parent_id">
            <option value="0">Danh Mục Cha</option>
            @foreach($menus as $menu)
            <option value="{{$menu->id}}">{{$menu->name}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Mô Tả</label>
          <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label>Mô Tả Chi Tiết</label>
          <textarea  name="content" id="content" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label for="">Kích Hoạt</label>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" value="1" id="active" type="radio" name="active">
            <label for="active" class="custom-control-label">Có</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" value="0" id="no_active" type="radio" name="active">
            <label for="no_active" class="custom-control-label">Không</label>
          </div>
        
        </div>
        
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
      </div>
      @csrf
    </form>
  </div>

@endsection
@section('footer')
  <script>
    CKEDITOR.replace( 'content' );
  </script>
@endsection