@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="card" style="width: 18rem;">
        <div class="card-header">
          Student
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">nome : {{$student['name']}}</li>
          <li class="list-group-item">anni : {{$student['age']}}</li>
          <li class="list-group-item">azienda : {{$student['azienda']}}</li>
          {{-- @forelse ($student as $k => $value)
            <li class="list-group-item">{{ $k }}: {{ $value }}</li>

          @empty
            <p>Non esiste questo studente</p>

          @endforelse --}}
        </ul>
      </div>
    </div>
  </div>



{{--
  <div class="container">
    <div class="row">
      <div class="show">
        <ul>
          @forelse ($student as $k => $value)
            <li>{{ $k }}: {{ $value }}</li>
          @empty
            <p>Non esiste questo studente</p>

          @endforelse
        </ul>
      </div>

    </div>
  </div> --}}
@endsection
