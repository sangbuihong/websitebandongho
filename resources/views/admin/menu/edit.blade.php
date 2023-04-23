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
          <input type="text" name="name" value="{{ $menu->name}}" class="form-control" placeholder="Nhập tên danh mục">
        </div>

        <div class="form-group">
          <label>Danh Mục</label>
          <select class="form-control" name="parent_id">
            <option value="0" {{ $menu->parent_id == 0?'selected':''}}>Danh Mục Cha</option>
            @foreach($menus as $menuParent)
            <option value="{{$menuParent->id}}"
                {{ $menu->parent_id == $menuParent->id ?'selected':''}}>
                {{$menuParent->name}}
            </option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Mô Tả</label>
          <textarea name="description" class="form-control">{{$menu->description}}</textarea>
        </div>

        <div class="form-group">
          <label>Mô Tả Chi Tiết</label>
          <textarea  name="content" id="content" class="form-control">{{$menu->content}}</textarea>
        </div>

        <div class="form-group">
            <label for="menu">Ảnh</label>
            <input type="file"  class="form-control" id="upload">
            <div class="form-group mt-3" id="image_show">
                <a href="{{ $menu->thumb}}" target="_blank">
                    <img src="{{ $menu->thumb}}" width="50px" height="50px">
                </a>
            </div>
            <input type="hidden" name="thumb" id="thumb">
        </div>

        <div class="form-group">
          <label for="">Kích Hoạt</label>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" value="1" id="active" type="radio"
            name="active"{{ $menu->active == 1 ? 'checked = ""':''}}>
            <label for="active" class="custom-control-label">Có</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" value="0" id="no_active" type="radio"
            name="active" {{ $menu->active == 0 ? 'checked = ""':''}}>
            <label for="no_active" class="custom-control-label">Không</label>
          </div>

        </div>

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
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
