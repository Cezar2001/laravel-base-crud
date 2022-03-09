@extends("layout.default")
@section("pageTitle", "Comics Edit")

@section("content")
<form action="{{route('comics.update', $comic->id)}}" method="post">
    @csrf
    @method('put')
    <div>
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{$comic->title}}">
    </div>

    <div>
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value="{{$comic->description}}">
    </div>

    <div>
        <label class="form-label">Image</label>
        <input type="url" class="form-control" name="thumb" value="{{$comic->thumb}}">
    </div>

    <div>
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" value="{{$comic->price}}">
    </div>

    <div>
        <label class="form-label">Series</label>
        <input type="text" class="form-control" name="series" value="{{$comic->series}}">
    </div>

    <div>
        <label class="form-label">Date</label>
        <input type="date" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
    </div>

    <div>
        <label class="form-label">Type</label>
        <input type="text" class="form-control" name="type" value="{{$comic->type}}">
    </div>

    <div>
        <button type="reset">Back</button>
        <button type="submit">Edit Comics</button>
    </div>
</form>
@endsection