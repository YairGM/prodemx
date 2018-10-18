<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>gestor de nominas</t
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
            <a class="navbar-brand" href="#"></a>
            <img src="https://res.cloudinary.com/dna5ogpht/image/upload/v1536102822/icon.png">
            </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#nosotros">NOSOTROS</a></li>
                <li><a href="#services">SERVICIOS</a></li>
                <li><a href="#contact">CONTACTO</a></li>
            </ul>
        </div>
        </div>
</nav>
<div class="jumbotron text-center">
        <h2>PRODEMEX</h2> 
        <h2>Sistema gestor de nomina</h2> 
    </div>
<div class="container">
		<h4>Iniciar sesi&oacute;n</h4>
	<center>
		<form method="POST" action="validar.php">
			<input type="text" style="width:400px;" name="nnombre" placeholder="Usuario" />
            <br/>
            <input type="password" style="width:400px;" name="npassword" placeholder="Contraseña" />
            <br/>
            <button type="submit" style="width:400px;">Iniciar Sesión</button>
		</form>
	</center>
    <center>
        <form method="POST" action="registroUsuarios.php">
            <input type="text" style="width:400px;" name="idengreso" placeholder="Usuario" /> 
    <br />
    <input type="text" style="width:400px;" name="concepto" placeholder="Contraseña" />
            <br/>
          <button type="submit" style="width:400px;">Iniciar Sesi&oacute;n</button>
        </form>
    </center>
</div>
    
<div id="caja_4">
		<h4>             Video</h4>
        <center>
		<br>
	</div>
<div class="youtube" id="video_1"  align="center">
  <iframe id="YouTube1" src="https://www.youtube.com/embed/Dw9OwmXYOR0?rel=1&amp;autoplay=1&amp;autohide=0"></iframe>
</div>
</body>
</html>
