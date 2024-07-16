@extends('layouts.app')

@section('content')
<h1>Student Listing</h1>
<ul>
    @foreach($students as $student)
    <li>
        {{ $student->studfirstname}} {{$student->studlastname }} - {{ $student->studid }}

        <a href="{{ url('/show/student', $student->studid) }}">Show</a>

        <!-- <a href="{{ url('/show/student', $student->studid) }}">Show</a> -->
    </li>
    @endforeach
</ul>
@endsection