@extends("layout.default")
@section("pageTitle", "Comics Details")

@section("content")
    <div>
        <p><strong>Title</strong>: {{$comic->title}}</p>
        <p><strong>Description</strong>: {{$comic->description}}</p>
        <p><strong>Image</strong>: <img src="{{$comic->thumb}}"></p>
        <p><strong>Price</strong>: {{$comic->Price}}</p>
        <p><strong>Series</strong>: {{$comic->series}}</p>
        <p><strong>Date</strong>: {{$comic->sale_date}}</p>
        <p><strong>Type</strong>: {{$comic->type}}</p>
    </div>

    <form method="get" action="{{route('comics.index')}}">
        @csrf
        <button type="submit">Home</button>
    </form>
@endsection