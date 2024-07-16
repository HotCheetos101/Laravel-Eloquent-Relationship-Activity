@extends('layouts.app')

@section('content')


<h1>{{ $college->collfullname }} - {{ $college->collshortname }}</h1>
<h2>College ID: {{ $college->collid }} </h2>
<h3>Departments</h3>

<ul>
    @foreach($college->departments as $department)

    <li>{{ $department->deptfullname }}</li>

    @endforeach

</ul>

<h3>Programs</h3>

<ul>


    @foreach($college->programs as $program)

    <li>{{ $program->progfullname }}</li>

    @endforeach




</ul>
@endsection