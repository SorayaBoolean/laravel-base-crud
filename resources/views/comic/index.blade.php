@extends('layout.app')

@section('title', 'Lista dei Comics')

@section('content')

    <div class="container">

      <a class="btn btn-primary" href="{{route('comics.create')}}">New</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Series</th>
          <th scope="col">Sale Date</th>
          <th scope="col">Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($comics as $comic)

        <tr>
          <th scope="row">{{$comic->id}}</th>
          <td>{{$comic->title}}</td>
          <td>{{$comic->description}}</td>
          <td>{{$comic->series}}</td>
          <td>{{$comic->sale_date}}</td>
          <td>{{$comic->type}}</td>
          <td><a class="btn btn-primary" href="{{route('comics.show', ['comic'=> $comic->id])}}">Open</a></td>
        </tr>
        

        @endforeach

      </tbody>
    </table>
    </div>

@endsection