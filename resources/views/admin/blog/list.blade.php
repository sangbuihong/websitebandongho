@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width:50px">ID</th>
            <th>Tin Tức</th>
            <th>Ảnh</th>
            <th>Active</th>
            <th>Update</th>
            <th style="width:100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($blogs as $key =>$blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->name}}</td>
                <td>
                    <a href="{{ $blog->thumb}}" target="_blank">
                        <img src="{{ $blog->thumb}}" width="50px" height="50px">
                    </a>
                </td>
                <td>{!! \App\Helpers\Helper::active($blog->active) !!}</td>
                <td>{{$blog->updated_at}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/blogs/edit/{{$blog->id}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow( {{$blog->id}}, '/admin/blogs/destroy' )">
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
