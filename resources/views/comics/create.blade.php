@extends("layout.default")
@section("pageTitle", "NewComics")

@section("content")
<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div>
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div>
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description">
    </div>

    <div>
        <label class="form-label">Image</label>
        <input type="url" class="form-control" name="thumb">
    </div>

    <div>
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price">
    </div>

    <div>
        <label class="form-label">Series</label>
        <input type="text" class="form-control" name="series">
    </div>

    <div>
        <label class="form-label">Date</label>
        <input type="date" class="form-control" name="sale_date">
    </div>

    <div>
        <label class="form-label">Type</label>
        <input name="type" class="form-control" >
    </div>

    <div>
        <button type="reset">Back</button>
        <button type="submit">Create Comics</button>
    </div>
</form>
@endsection