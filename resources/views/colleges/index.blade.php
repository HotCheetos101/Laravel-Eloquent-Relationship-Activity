@extends('layouts.app')

@section('content')
<h1>All Colleges</h1>
<ul>
    @foreach($colleges as $college)
    <li>
        {{ $college->collfullname }} - {{ $college->collshortname }}

        <p>College ID: {{ $college->collid }} </p>

        <ul>
            @foreach($college->departments as $department)

            <li>{{ $department->deptfullname }}</li>

            @endforeach
        </ul>

        <a href="{{ url('/show/college', $college->collid) }}">Show</a>

    </li>

    <br>
    @endforeach

</ul>

@endsection