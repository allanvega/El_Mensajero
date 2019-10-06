<!DOCTYPE html>
<html>
    <head>

    <style>
.escribir {
  background: url("images/escribir.jpg") #000;

  background-size : 1000px;
  background-position: -50px;
  width:-1200px;
  height: 800px;

  
} 

</style>
        <title>Niño Mensajero</title>
        <link rel="stylesheet" href="{{asset('css/grid.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/camera.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-1.2.1.js')}}"></script>

    </head>
    <body>
        @yield('content')
        <style> 
.textarea {
  width: 50%;
  height: 300px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>
</head>
<body>
<div class="escribir">
<div class="container">

<div class="panel panel-default">
  <div class="panel-heading">
  <h2><span class="glyphicon glyphicon-envelope"></span> MI CARTA</h2>
      </div>
     
  <div class="panel-body">
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
  <form class="form-horizontal" action="{{url('store')}}" method="POST" enctype="multipart/form-data"   >
    {{csrf_field()}}
    

     <div class="form-group">
     <label form="title">Contenido De La Carta</label>
      <textarea id="contenido" name="contenido" class="form-control" ></textarea>
        
     </div>
    <label for="Imagen">{{'Imagen'}}</label>
    <input  type="file" name="imagen" id="imagen" value="" >
<br/>
     <input type="submit" name="enviar" id="enviar"  class="btn btn-success" value="enviar">
     <input type="reset" name="cancelar" id="cancelar"  class="btn btn-danger" value="cancelar">
    
    </form>
    </div>
      </div>
      </div>
      </div>
      </div>
    </body>
</html>