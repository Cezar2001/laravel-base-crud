@extends("layout.default")
@section("pageTitle", "Comics")

@section("content")
    <div class="container">
        @foreach ($data as $comics => $comic)
        <div class="card">
            <img src="{{$comic->thumb}}">
            <div class="info-box">
                <p>{{$comic->title}}</p>
                <p>{{$comic->series}}</p>
                <p>{{$comic->price}}$</p>
                <p>{{$comic->type}}</p>
                <p>{{$comic->sale_data}}</p>
                {{-- <p><a href="{{ route("comics.show", $comic->id) }}">Details</a></p> --}}
                {{-- <p><a href="{{ route("comics.edit", $comic->id) }}">Edit</a></p> --}}
            </div>
        </div>
        @endforeach
    </div>
@endsection