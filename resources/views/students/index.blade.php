@extends('layouts.app')
@section('content')


  <div class="container">
    <div class="row">
      @foreach (config('students') as $student)
        <div class="col-6">
          <div class="student">
            <div class="student-left">
              <img src="{{ $student['img']}}" alt="{{ $student['name']}}">
            </div>
            <div class="student-right">
              <h3>
                <a href="{{ route('students.show', $student['slug'])}}">{{ $student['name']}} ({{ $student['age']}})</a>
              </h3>
              <small>Ora web developer in {{ $student['azienda']}}</small>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
