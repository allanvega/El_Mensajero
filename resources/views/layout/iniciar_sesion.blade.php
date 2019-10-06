<!DOCTYPE html>
<html>
    <head>

    <style>
.color-azul-1 {
  background: url("images/color-azul-1.jpg") #000;

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

<h2></h2>
<p></p>
<div class="color-azul-1">
<div class="container">

  <form action="/action_page.php">
  <div class="row">
    <div class="col-100">
  
      <h5 style="color:black;" ><label for="fname">Nombre</label></h5>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="">
    </div>
  </div>
  
  <div class="row">
    <div class="col-100">
    <h5 style="color:black;" ><label for="fname">Contraseña</label></h5>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="">
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Entrar
</button>
    
  
  <!--<div class="row">
    <input type="submit" value="Submit">
  </div>-->
  </form>
</div>

    </body>

</html>