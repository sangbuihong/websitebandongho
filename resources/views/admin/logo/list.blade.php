@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width:50px">ID</th>
            <th>Tiêu đề</th>
            <th>Link</th>
            <th>Ảnh</th>
            <th>Active</th>
            <th>Update</th>
            <th style="width:100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($logos as $key =>$logo)
            <tr>
                <td>{{$logo->id}}</td>
                <td>{{$logo->name}}</td>
                <td>{{$logo->url}}</td>
                <td>
                    <a href="{{ $logo->thumb}}" target="_blank">
                        <img src="{{ $logo->thumb}}" width="50px" height="50px">
                    </a>
                </td>
                <td>{!! \App\Helpers\Helper::active($logo->active) !!}</td>
                <td>{{$logo->updated_at}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/logos/edit/{{$logo->id}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow( {{$logo->id}}, '/admin/logos/destroy' )">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {!! $logos->links() !!}
@endsection
