@extends("layout.default")
@section("pageTitle", "NewComics")

@section("content")

@if ($errors->any())

    <div>
        <ul>
            @foreach ( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div>
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
    </div>

    <div>
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value="{{ old('description') }}">
    </div>

    <div>
        <label class="form-label">Image</label>
        <input type="url" class="form-control" name="thumb" value="{{ old('thumb') }}">
    </div>

    <div>
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" value="{{ old('price') }}">
    </div>

    <div>
        <label class="form-label">Series</label>
        <input type="text" class="form-control" name="series" value="{{ old('series') }}">
    </div>

    <div>
        <label class="form-label">Date</label>
        <input type="date" class="form-control" name="sale_date" value="{{ old('sale_date') }}">
    </div>

    <div>
        <label class="form-label">Type</label>
        <input name="type" class="form-control" >
    </div>

    <div>
        <button type="submit">Create Comics</button>
    </div>
</form>
@endsection