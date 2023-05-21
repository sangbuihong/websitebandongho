@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width:50px">ID</th>
            <th>Tiêu Đề</th>
            <th>Ảnh</th>
            <th>Active</th>
            <th>Update</th>
            <th style="width:100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($infors as $key =>$infor)
            <tr>
                <td>{{$infor->id}}</td>
                <td>{{$infor->name}}</td>
                <td>
                    <a href="{{ $infor->thumb}}" target="_blank">
                        <img src="{{ $infor->thumb}}" width="50px" height="50px">
                    </a>
                </td>
                <td>{!! \App\Helpers\Helper::active($infor->active) !!}</td>
                <td>{{$infor->updated_at}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/infors/edit/{{$infor->id}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow( {{$infor->id}}, '/admin/infors/destroy' )">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div class="card-dooter clearfix">
        {!! $blogs->links() !!}
    </div> --}}
@endsection
