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
          <td>
            <a class="btn btn-primary my-2" href="{{route('comics.show', ['comic'=> $comic->id])}}">Open</a>
            <a class="btn btn-warning my-2" href="{{route('comics.edit', ['comic'=>$comic])}}">Edit</a>
            
            <form action="{{route('comics.destroy', ['comic'=>$comic])}}" method="POST">
              @csrf
              @method ('DELETE')
              <button class="btn btn-danger my-2" type="submit">Delete</button>
            </form>
          </td>
          
        
        </tr>
        

        @endforeach

      </tbody>
    </table>
    </div>

@endsection