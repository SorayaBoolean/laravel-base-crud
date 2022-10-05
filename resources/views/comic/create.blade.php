@extends ('layout.app')
@section ('title', 'Create your Comic')

@section ('content')

<div class="container">
    <form action="{{route('comics.store')}}" method="POST">

        @csrf
        
            <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{(old('title'))}}" >
            </div>
    
            <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"value="{{(old('description'))}}" >
            </div>
    
            <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{(old('price'))}}">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{(old('series'))}}">
                </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{(old('sale_date'))}}">
            </div>
    
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-select" aria-label="Default select example">
                <option value="1">comic book</option>
                <option value="2">graphic novel</option>
              </select>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </form>
    
</div>


@endsection 