@extends("mytheam.template")
@push('titel')
<title>Demo</title>
    
@endpush
@section("content")
<h1>hello</h1>
{{$name}}
    {{$id}}
@endsection