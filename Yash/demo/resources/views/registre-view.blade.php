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
            <th>Action</th>
            <th>id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Registration as $registre)

        <tr>
    
            <td>{{$registre->name}}</td>
            <td>{{$registre->email}}</td>
            <td>{{$registre->password}}</td>
            <td>
                <a href="{{url('/reigster/delete/')}}/{{$registre->u_id}}"><Button class="btn btn-danger">Delete</Button></a>
               <a href="{{url('/reigster/edit/')}}/{{$registre->u_id}}"> <Button class="btn btn-info">Edit</Button></a></td>
                <td>{{$registre->u_id}}</td>
        </tr>
          @endforeach
    </tbody>
</table>
</div>
@endsection