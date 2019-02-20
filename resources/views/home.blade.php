@extends('layouts.app')
@section('title')
  Home
@endsection

@section('content')
  <div class="jumbo">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1>Diventa <br> sviluppatore web</h1>
          <p>6 mesi di corso intensivo online in diretta per imparare da zero il mestiere di web developer e trovare un nuovo lavoro nelle aziende top del settore
          </p>
          <button class="btn btn-primary" type="button" name="button">Scopri il corso</button>
        </div>
        <div class="col-6">
          <img src="{{ asset('img/mac2x.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>

@endsection
