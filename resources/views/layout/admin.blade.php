<!DOCTYPE html>
<html>
    <head>

    <style>
.fotos {
  background: url("images/fotos.jpg") #000;

  background-size : 1000px;
  background-position: -50px;
  width:-1000px;
  height: 700px;

  
} 

</style>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/grid.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/camera.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-1.2.1.js')}}"></script>

    </head>
    <body>
        @yield('content')

        <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}



input[type=submit]:hover {
  background-color: #45a049;
}



.col-25 {
  float: left;
  width: 20%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 40%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 300px) {
  .col-80, .col-20, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2></h2>
<p></p>
<div class="fotos">
<div class="container">

  <form class="form-group" method="POST" action="/adm">
  {{csrf_field()}}
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel-body">
          <form>
            <div class="form-group ">
              <h5 style="color:black;" ><label for="username">Nombre</label></h5>
              <input class="form-control"
                     type="text"
                     name="username"
                     id="username"
                     placeholder="Ingresa tu nombre "
                     style="width:300px;height:40px" 
                     required >
                     
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
              <h5 style="color:black;" ><label for="password">Contraseña</label></h5>
              <input class="form-control"
                     type="password"
                     name="password"
                     id="password"
                     placeholder="   Ingresa tu contraseña "
                     style="width:300px;height:40px"
                     required >
                    
            </div>
            <button type="submit" class="btn btn-primary" 
            data-toggle="button" aria-pressed="false" autocomplete="off">Ingresar</button>
            
          </form>
        </div>

      </div>

    </div>
  </form>
 </div>
</body>
</html>