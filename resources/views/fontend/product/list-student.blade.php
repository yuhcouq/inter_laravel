
@extends('layouts.layout-menu')

@section('title', 'Danh sách sản phẩm')

@section('content')
    @if(isset($message))
        <div class="alert alert-success" role="alert">{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <tr class="success">
            <th>ID</th>
            <th>email</th>
        </tr>
        @foreach($student as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->email }}</td>

                <td>
                    <a href="{{ '/product/' . $p->id . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{ '/product/' . $p->id }}"><span class="glyphicon glyphicon-trash">Delete</span></a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $student->links() }}
@endsection
