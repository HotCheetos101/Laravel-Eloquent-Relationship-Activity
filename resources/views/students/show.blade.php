@extends('layouts.app')

@section('content')


<p style="font-weight: bold;">Student ID: {{ $student->studid }}</p>
<p>{{ $student->studfirstname }} {{ $student->studmidname }} {{ $student->studlastname }}</p>
<p>Student Program ID: {{ $student->studprogid }}</p>
<p>Student College ID: {{ $student->studcollid }}</p>
<p>Year: {{ $student->studyear }}</p>
@endsection