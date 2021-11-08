@extends("layouts.main")
@section("container")
<h1>
    {{$post["judul"]}}
</h1>
<p>
    {{ $post["deskripsi"]}}
</p>
<a href="/inventory">Back to Inventory</a>
@endsection
