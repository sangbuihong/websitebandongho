@extends('admin.main')
@section('header')
  <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')

<form action="" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Tiêu Đề Giới Thiệu</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"  placeholder="Nhập tên bài viết">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Thông Tin Giới Thiệu</label>
            <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="menu">Hình Ảnh</label>
            <input type="file"  class="form-control" id="upload">
            <div class="form-group mt-3" id="image_show">

            </div>
            <input type="hidden" name="thumb" id="thumb">
        </div>

        <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
                 </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm Giới Thiệu</button>
    </div>
    @csrf
</form>

@endsection
@section('footer')
  <script>
    CKEDITOR.replace( 'content' );
  </script>
@endsection
