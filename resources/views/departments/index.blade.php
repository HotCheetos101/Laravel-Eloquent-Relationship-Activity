@extends('layouts.app')

@section('content')
<h1>All Departments</h1>
<ul>


    @foreach($departments as $department)
    <li>
        {{ $department->deptfullname }}
    </li>
    @endforeach



</ul>
@endsection