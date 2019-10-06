<!DOCTYPE html>
<html>
    <head>
    <style>
.imagen5 {
  background-image: url("images/imagen5.jpg") ;
  
  background-size : 1000px;
  background-position: 0px;
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
<div class="imagen5">
<h2 style="color:white;">Registrate</h2>
<p></p>

<div class="container">
@if (count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all()as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      </div>
      @endif

      @if(session('mensaje'))
      <div class="alert alert-success" >
      {{session('mensaje')}}
      </div>
      @endif
<form class="form-group"  method="POST" action="{{url('registro')}}">
          {{ csrf_field() }}
        
          <div class="row">
           <div class="col-25">
             <h5 style="color:black;" ><label for="nombre">Nombre</label></h5>
           </div>
            <div class="col-75">
             <input type="text" id="nombre" name="nombre" placeholder="nombre" >
            </div>
          </div>
         
          <div class="row"> 
          <div class="col-25">
          <h5 style="color:black;" ><label for="apellido">Apellido</label></h5>
          </div>
          <div class="col-75">
          <input type="text" id="apellido" name="apellido" placeholder="apellido" >
          </div>
          </div>


            <div class="row">
            <div class="col-25">
          <h5 style="color:black;" ><label for="documento">ci</label></h5>
          </div>
           <div class="col-75">
          <input type="num" id="ci" name="ci" placeholder="carnet de identidad">
          </div>
          </div>


            <div class="row">
            <div class="col-25">
            <h5 style="color:black;" ><label for="telefono">Telefono</label></h5>
              </div>
             <div class="col-75">
            <input type="num" id="telefono" name="telefono" placeholder="telefono" >
             </div>
              </div>


             <div class="row">
             <div class="col-25">
              <h5 style="color:black;" ><label for="correo">Correo</label></h5>
              </div>
              <div class="col-75">
              <input type="email" id="correo" name="correo" placeholder="correo" >
            </div>
            </div>


            <div class="row">
             <div class="col-25">
                <h5 style="color:black;" ><label for="contraseña">Contraseña</label></h5>
              </div>
              <div class="col-75">
              <input type="password" id="contraseña" name="contraseña" placeholder="contraseña" >
              </div>
              </div>


                <div class="row">
               <div class="col-25">
              <h5 style="color:black;" ><label for="frol">Rol</label></h5>
               </div>
                <div class="col-75">
               <select id="country" name="country">
               <option value="periodista">Periodista</option>
               <option value="psicologo">Psicologo</option>
               <option value="redactor">Redactor</option>
               </select>
               </div>
               </div>  
               <!-- haciendo el selector-->
               <!-- fin del selector-->


           <button type="submit" class="btn btn-success">Guardar</button>
           <button type="submit" class="btn btn-danger">Cancelar</button>
  
        </form>
        </form>
</div>
    </body>
</html>