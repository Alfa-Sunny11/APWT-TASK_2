@extends('layout.app')

@section('content')
      <h1>Our products: </h1><br>
      @foreach($services as $service)
            <h3>{{$service}}</h3>
      @endforeach      
@endsection