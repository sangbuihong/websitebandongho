@extends('admin.main')



@section('content')

<form action="" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Tiêu Đề</label>
                    <input type="text" name="name" value="{{ $logo->name }}" class="form-control"  placeholder="Nhập tên tiêu đề">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Đường Dẫn</label>
                    <input type="text" name="url" value="{{ $logo->url }}" class="form-control"  placeholder="Nhập đường dẫn">
                </div>
            </div>
        </div>





        <div class="form-group">
            <label for="menu">Ảnh</label>
            <input type="file"  class="form-control" id="upload">
            <div class="form-group mt-3" id="image_show">
                <a href="{{ $logo->thumb}}" target="_blank">
                    <img src="{{ $logo->thumb}}" width="50px" height="50px">
                </a>
            </div>
            <input type="hidden" name="thumb" id="thumb">
        </div>

        <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                {{ $logo -> active ==1 ? 'checked="':'' }}>>
                <label for="active" class="custom-control-label">Có</label>
                 </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                {{ $logo -> active ==0 ? 'checked="':'' }}>>
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập nhật Logo</button>
    </div>
    @csrf
</form>

@endsection

