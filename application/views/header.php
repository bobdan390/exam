<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>REGISTRO DE EMPRESAS</title>
	<script src='http://code.jquery.com/jquery-1.9.1.min.js' type='text/javascript'></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <style type="text/css">
  hr{
    height: 8px;
    background: #1e5799; /* Old browsers */
    background: -moz-linear-gradient(left,  #1e5799 0%, #2989d8 50%, #7db9e8 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left,  #1e5799 0%,#2989d8 50%,#7db9e8 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right,  #1e5799 0%,#2989d8 50%,#7db9e8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 */

  }
  form{
    margin-left: 35px;
  }
  .ft{
    float: right;
    width: 23%;
  }
  .ft span , .ft1 span{
    font-weight: bold;
  }
  .ft ul{  
    list-style-type:none;  
  }
  .ft li{
    margin-left: -40px;
  }
  .ft1{
    float: right;
    width: 85%;
    margin-top: 20px;
    text-align: justify;
  } 

  .sub{
    padding: 15px 15px 15px 15px;
    color: white;
    font-weight: bold;
    background-color: #267cc7;
    float: right;
    margin-top: -80px;
  }

  .fieldset1{
    color: grey;font-size: 18px;margin-left: 10px;
  }
  .fieldset2{
    margin-top: 20px;color: grey;font-size: 18px;margin-left: -20px;
  }

  .cont{
    width: 65%;float: left;
  }
  .row1{
    width: 50%;float: left;
  }
  .row2{
    width: 50%;float: left; margin-left: 2%;
  }
  .row3{
    width: 33%;float: left;
  }
  .row4{
    width: 33%;float: left; margin-left: 2%;
  }
  .l_{
    margin-top: 20px;
  }
  .row31{
      width: 33%;float: left;
  }
  @media only screen and (max-width: 810px) {
      .control-label{
        font-size: 11px !important;
      }
  }

  @media only screen and (max-width: 510px) {
    .cont{
      width: 100%;
    }
      .row1{
      width: 100%;
    }
    .row2{
      width: 100%;
      margin-left: -15px;
      
    }
    .row3{
      width: 100%;
      float: initial;
    }
    .row4{
      width: 100%;
      float: left;
      margin-left: -15px;
      
    }
    .row31{
        width: 100%;float: left;
    }
    .ft{
      width: 50%;
    }
    .ft1{
      width: 100%;
      float: left;

    }
  }

  @media only screen and (max-width: 350px) {
    .sub{
      margin-top: -105px;
    }
  }
</style>

</head>
<body>


<div class="container" style="padding-top: 1em;">
<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">INICIO</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li style="background-color: #272727;"><a href="#">EMPRESAS</a></li>
      <li><a href="#">SERVICIOS</a></li>
      <li><a href="#">VALORA UN SERVICIO</a></li>
      <li><a href="#">CONTACTO</a></li>
    </ul>
 


	<ul class="nav navbar-nav navbar-right">
	      <li style="background-color: #267cc7;"><a href="http://localhost/formulario/index.php/cform/" style="color: white;font-weight: bold;">REGISTRO</a></li>
	      <li style="background-color: #267cc7;"><a href="#" style="color: white;font-weight: bold;">INICIAR SESION</a></li>
	</ul>

  </div>
</nav>
  
<!--</div>


</body>
</html> -->