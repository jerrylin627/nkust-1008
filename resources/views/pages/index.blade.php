@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
<h2>Hello, {{ $username }}</h2>
<hr>

<table class='table table-hover table-dark'>
<thead>
    <tr><th>ID</th><th>name</th></tr>
</thead>
<tbody>
@forelse ($titles as $title)
    <tr>
    <td>{{ $title->id }}</td>
    <td>{{ $title->name }}</td>
    </tr>
@empty
    <tr><td>No users</td></tr>
@endforelse
</tbody>
</table>

@endsection