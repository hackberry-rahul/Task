@extends("mytheam.template")
@push('titel')
<title>registre-view</title>
    
@endpush
@section("content")
<div class="container">
    

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Registration as $registre)
        
        <tr>
            <td>{{$registre->name}}</td>
            <td>{{$registre->email}}</td>
            <td>{{$registre->password}}</td>
        </tr>
          @endforeach
    </tbody>
</table>
</div>
@endsection