@extends('layouts.app')
@section('content')
<body class="bg-light">
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Description</th>
            <th>option</th>
        </tr>
    </thead>
    <tbody>
        @foreach($repositories as $index =>$repository)
        <tr>
            <td>{{$index +1}}</td>
            <td>{{$repository->title}}</td>
            <td>{{$repository->author}}</td>
            <td>{{$repository->year}}</td>
            <td>{{$repository->description}}</td>
        <td>
            <a href="#" class="nav-link text-success">edit</a>
            <a href="#" class="nav-link text-success">delete</a>
        </td>
        </tr>

        @endforeach
    </tbody>
</table>
</div>
@endsection

