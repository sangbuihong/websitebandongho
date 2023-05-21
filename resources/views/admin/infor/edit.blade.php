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
                        <input type="text" name="name" value="{{ $infor->name}}" class="form-control"  placeholder="Nhập tên sản phẩm">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control">{{ $infor->content}}</textarea>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Sản Phẩm</label>
                <input type="file"  class="form-control" id="upload">
                <div class="form-group mt-3" id="image_show">
                    <a href="{{ $infor->thumb}}" target="_blank">
                        <img src="{{ $infor->thumb}}" alt="" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb" value="{{ $infor->thumb}}"  id="thumb">
            </div>

            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                    {{ $infor -> active ==1 ? 'checked="':'' }}>>
                    <label for="active" class="custom-control-label">Có</label>
                     </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                    {{ $infor -> active ==0 ? 'checked="':'' }}>>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </div>
        @csrf
    </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
