<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="{{url('/')}}/reigster" method="POST">
        @csrf
  <div class="container">
    <h1 class="text-center">Registration</h1>
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}">
     
      <span class="text-danger">
        @error('name')
        {{$message}}
            
        @enderror
      </span>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{old('email')}}">
        <span class="text-danger">   @error('email')
            {{$message}}
                
            @enderror</span>
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <span class="text-danger">   @error('password')
            {{$message}}
                
            @enderror</span>   
      </div>
      
      <button type="submit" class="btn btn-primary" style="margin-top:5px;">Submit</button>
  </div>
</form>
</body>

</html>
