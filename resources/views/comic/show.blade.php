@extends ('layout.app')
@section ('title', 'Single Comic')

@section('content')


    <div class="container">
        <h1>Title Comic:{{$comic->title}}</h1>
        <p class="my-4">{{$comic->description}}</p>
        <p><strong>Price: </strong>{{$comic->price}}</p>
        <p><strong>Series: </strong>{{$comic->series}}</p>
        <p><strong>Sale Date: </strong>{{$comic->sale_date}}</p>
        <p><strong>Type: </strong>{{$comic->type}}</p>
    </div>
    <div class="container">
        <img src="{{asset('images/r.jfif')}}" alt="copertina">
    </div>

    
    

@endsection