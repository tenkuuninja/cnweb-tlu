@extends('layouts.app')

@section('title', 'Detail for student {{ $student->fullname }}')

@section('content')
  <h1>Detail for student {{ $student->fullname }}</h1>
  <div class="text-left mb-3">
    <a href="{{ route('student.get.index') }}" class="btn btn-outline-primary">Back to list</a>
  </div>
  <p><b>ID: </b>{{ $student->id }}</p>
  <p><b>Fullname: </b>{{ $student->fullname }}</p>
  <p><b>Birthday: </b>{{ $student->birthday }}</p>
  <p><b>Address: </b>{{ $student->address }}</p>

@endsection
