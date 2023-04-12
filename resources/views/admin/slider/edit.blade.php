@extends('admin.main')

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Tiêu Đề</label>
                    <input type="text" name="name" value="{{ $slider->name }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Đường Dẫn</label>
                    <input type="text" name="url" value="{{ $slider->url }}" class="form-control"  >
                </div>
            </div>
        </div>





        <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" id="upload">
            <div class="form-group mt-3" id="image_show">
                <a href="{{ $slider->thumb}}" target="_blank">
                    <img src="{{ $slider->thumb}}" width="50px" height="50px">
                </a>
            </div>
            <input type="hidden" name="thumb" id="thumb">
        </div>

        <div class="col-md">
            <div class="form-group">
                <label for="menu">Sắp Xếp</label>
                <input type="text" name="sort_by" value="{{ $slider->sort_by }}" class="form-control"  placeholder="">
            </div>
        </div>

        <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                {{ $slider -> active ==1 ? 'checked="':'' }}>>
                <label for="active" class="custom-control-label">Có</label>
                 </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                {{ $slider -> active ==0 ? 'checked="':'' }}>>
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập nhật Slider</button>
    </div>
    @csrf
</form>

@endsection

