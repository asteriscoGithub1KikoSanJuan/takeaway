<?php
//Se comprueba que llegan datos por método POST
if ($_POST) {
	echo $_POST['email'];
	echo "<br>";
	$email = $_POST['email'];
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'takeaway');
	mysqli_set_charset($mysqli,"utf8");
	if ($mysqli){
		$sql="INSERT INTO newsletter (email) VALUES ('$email');";
		$query=$mysqli->query($sql);
		if ($query) {
			echo "
			<script>
			$(document).ready(function(){
			$('#modal1').modal('close');
			alert('Gracias por su suscricion')
			});
			</script>";
		}
		else 
		{
			echo "Ha habido un problema con el registro del formulario";
		}
		$mysqli->close();
	}
}
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!--Import Font Awesome-->
		<link rel="stylesheet" href="css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script>
		$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
	$('#modal1').modal('open');
  });
	  </script>
	<nav>
    <div class="nav-wrapper  teal lighten-3">
      <a href="#" class="brand-logo"><img src="img/butlerx.png">takeAway</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="desplegable">
		  <a href="index.html"><img src="img/menux.png"></a>
			<ul class="submenu">
						<li><a href="#">Ensaladas</a></li>
						<li><a href="#">Principales</a></li>
						<li><a href="#">Postres</a></li>
			</ul>
		</li>
        <li><a href="info.html"><img src="img/infox.png"></a></li>
        <li><a href="fotos.html"><img src="img/fotox.png"></a></li>
        <li><a href="contacto.html"><img src="img/email.png"width="70%"></a></li>
        <li><a href="#"><img src="img/cashx.png"></a></li>
      </ul>
    </div>
  </nav>
<!--##############################################################################################################################################-->
  <!-- section de ensaladas -->
  <section id="ensaladas">
	<h2 class="center-align teal lighten-3 white-text">Ensaladas</h2>
	<div class="row">
		<div class="col s12 m6 l3">
			<div class="card">
				<span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/ensaladaCaprichosa.jpg">
				</div>
				<div class="card-content">
					<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; bottom: 13px; right: 13px">
						<a class="btn-floating btn-large red">
							<i class="large material-icons">shopping_cart</i>
						</a>
						<ul>
							<li><a class="btn-floating red"><!--<i class="material-icons"></i>-->x4</a></li>
							<li><a class="btn-floating yellow darken-1"><!--<i class="material-icons">format_quote</i>-->x3</a></li>
							<li><a class="btn-floating green"><!--<i class="material-icons">publish</i>-->x2</a></li>
							<li><a class="btn-floating blue"><!--<i class="material-icons">attach_file</i>-->x1</a></li>
						</ul></div>
					<!-- <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		 -->
					<!-- <p><a href="#">This is a link</a></p> -->
				</div>
				<div class="card-reveal">
					<span class="card-title white-text text-darken-4">Ensalada Caprichosa<i class="material-icons right">close</i></span>
					<p>Deliciosa combinaci&oacute;n gracias a la base vegetal, rica en vitaminas, al jam&oacute;n dulce y al queso, que aportan 
						prote&iacute;nas y calcio al plato. El toque dulce del ma&iacute;z y la zanahoria dan un sabor agradable en boca.</p>
				</div>
			</div>
		</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------->
		<div class="col s12 m6 l3">
			<div class="card">
				<span class="card-title activator grey-text text-darken-4">Ensalada de Pasta</span>		
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/ensaladaPasta.jpg">
				</div>
				<div class="card-content">
					<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; bottom: 14px; right: 14px">
						<a class="btn-floating btn-large red">
							<i class="large material-icons">shopping_cart</i>
						</a>
						<ul>
							<li><a class="btn-floating red"><!--<i class="material-icons"></i>-->x4</a></li>
							<li><a class="btn-floating yellow darken-1"><!--<i class="material-icons">format_quote</i>-->x3</a></li>
							<li><a class="btn-floating green"><!--<i class="material-icons">publish</i>-->x2</a></li>
							<li><a class="btn-floating blue"><!--<i class="material-icons">attach_file</i>-->x1</a></li>
						</ul></div>
					<!-- <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		 -->
					<!-- <p><a href="#">This is a link</a></p> -->
				</div>
				<div class="card-reveal">
					<span class="card-title white-text text-darken-4">Ensalada de Pasta<i class="material-icons right">close</i></span>
					<p>Ensalada fresca con la base de pasta Fusilli, junto con el at&uacute;n y las hortalizas forman un plato completo. 
						Acompa&ntilde;ado con mayonesa.</p>
				</div>
			</div>
		</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------->
		<div class="col s12 m6 l3">
			<div class="card">
				<span class="card-title activator grey-text text-darken-4">Ensalada de Arroz</span>		
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/ensaladaArroz.jpg">
				</div>
				<div class="card-content">
					<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; bottom: 14px; right: 14px">
						<a class="btn-floating btn-large red">
							<i class="large material-icons">shopping_cart</i>
						</a>
						<ul>
							<li><a class="btn-floating red"><!--<i class="material-icons"></i>-->x4</a></li>
							<li><a class="btn-floating yellow darken-1"><!--<i class="material-icons">format_quote</i>-->x3</a></li>
							<li><a class="btn-floating green"><!--<i class="material-icons">publish</i>-->x2</a></li>
							<li><a class="btn-floating blue"><!--<i class="material-icons">attach_file</i>-->x1</a></li>
						</ul></div>
					<!-- <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		 -->
					<!-- <p><a href="#">This is a link</a></p> -->
				</div>
				<div class="card-reveal">
					<span class="card-title white-text text-darken-4">Ensalada de Arroz<i class="material-icons right">close</i></span>
					<p>Deliciosa y refrescante ensalada de arroz, donde a&ntilde;adimos unos taquitos de jam&oacute;n cocido y verduritas que 
						equilibran el plato.</p>
				</div> 
			</div>
		</div>
<!----------------------------------------------------------------------------------------------------------------------------------------->			<div class="col s12 m6 l3">
			<div class="card">
				<span class="card-title activator grey-text text-darken-4">Ensalada Ceasar</span>		
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/ensaladaCeasar.jpg">
				</div>
				<div class="card-content">
					<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; bottom: 14px; right: 14px">
						<a class="btn-floating btn-large red">
							<i class="large material-icons">shopping_cart</i>
						</a>
						<ul>
							<li><a class="btn-floating red"><!--<i class="material-icons"></i>-->x4</a></li>
							<li><a class="btn-floating yellow darken-1"><!--<i class="material-icons">format_quote</i>-->x3</a></li>
							<li><a class="btn-floating green"><!--<i class="material-icons">publish</i>-->x2</a></li>
							<li><a class="btn-floating blue"><!--<i class="material-icons">attach_file</i>-->x1</a></li>
						</ul></div>
					<!-- <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		 -->
					<!-- <p><a href="#">This is a link</a></p> -->
				</div>
				<div class="card-reveal">
					<span class="card-title white-text text-darken-4">Ensalada Caesar<i class="material-icons right">close</i></span>
					<p>Has probado ya nuestra ensalada cl&aacute;sica? Con base vegetal rica en vitaminas, pollo rebozado crujiente y queso que nos 
						ofrece una buena fuente de calcio. </p>
				</div>
			</div>
		</div>
	</div>
  </section>
<!--##########################################################################################################################################-->		
  <!-- La section de los platos principales -->
  <section id="principales">
	<h2 class="center-align orange lighten-3 white-text">Platos Principales</h2>
	<div class="row">
<!------------------------------------------------------------------------------------------------------------------------------------------>
			<div class="col s12 m6 l3">
			<div class="card">
				<span class="card-title activator grey-text text-darken-4">Alb&oacute;ndigas</span>		
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/principalAlbondiga.jpg">
				</div>
				<div class="card-content">
					<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; bottom: 14px; right: 14px">
						<a class="btn-floating btn-large red">
							<i class="large material-icons">shopping_cart</i>
						</a>
						<ul>
							<li><a class="btn-floating red"><!--<i class="material-icons"></i>-->x4</a></li>
							<li><a class="btn-floating yellow darken-1"><!--<i class="material-icons">format_quote</i>-->x3</a></li>
							<li><a class="btn-floating green"><!--<i class="material-icons">publish</i>-->x2</a></li>
							<li><a class="btn-floating blue"><!--<i class="material-icons">attach_file</i>-->x1</a></li>
						</ul></div>
					<!-- <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		 -->
					<!-- <p><a href="#">This is a link</a></p> -->
				</div>
				<div class="card-reveal">
					<span class="card-title white-text text-darken-4">Alb&oacute;ndigas<i class="material-icons right">close</i></span>
					<p>Alb&oacute;ndigas (54%) [carne de cerdo, carne de vacuno, tocino, pan de molde (harina de trigo , agua, manteca de cerdo, sal, levadura, dextrosa, emulgentes (E471, E472e), prote&iacute;nas de la leche, lactosa , harina de soja, harina de malta de trigo y conservador (E330)], nata l&iacute;quida UHT (nata y estabilizante (E407)), huevo pasteurizado, pan rallado (harina de trigo, agua, levadura y sal), sal, perejil, ajo y pimienta negra], salsa (46%) [caldo de carne (agua, carcasa de pollo, hueso de ternera, zanahoria, cebolla, patata, apio , puerro y huesos de jam&oacute;n) tomate, cebolla, guisantes, zanahoria, vino blanco (contiene sulfitos), aceite de orujo de oliva, ajo, sal y az&uacute;car].</p>
				</div>
			</div>
		</div>
<!------------------------------------------------------------------------------------------------------------------------------------------>
			<div class="col s12 m6 l3">
			<div class="card">
				<span class="card-title activator grey-text text-darken-4">Lomo asado</span>		
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/principalLomo.jpg">
				</div>
				<div class="card-content">
					<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; bottom: 14px; right: 14px">
						<a class="btn-floating btn-large red">
							<i class="large material-icons">shopping_cart</i>
						</a>
						<ul>
							<li><a class="btn-floating red"><!--<i class="material-icons"></i>-->x4</a></li>
							<li><a class="btn-floating yellow darken-1"><!--<i class="material-icons">format_quote</i>-->x3</a></li>
							<li><a class="btn-floating green"><!--<i class="material-icons">publish</i>-->x2</a></li>
							<li><a class="btn-floating blue"><!--<i class="material-icons">attach_file</i>-->x1</a></li>
						</ul></div>
					<!-- <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		 -->
					<!-- <p><a href="#">This is a link</a></p> -->
				</div>
				<div class="card-reveal">
					<span class="card-title white-text text-darken-4">Lomo asado<i class="material-icons right">close</i></span>
					<p>Lomo de cerdo (46%), cebolla, zanahoria, tomate, puerro, caldo de carne (agua, pollo, vacuno, zanahoria, cebolla, patata, apio , puerro y hueso de jamón), vino negro (contiene sulfitos ), ajo y especias.</p>
				</div>
			</div>
		</div>
<!---------------------------------------------------------------------------------------------------------------------->
			<div class="col s12 m6 l3">
			<div class="card">
				<span class="card-title activator grey-text text-darken-4">Menestra de Verduras</span>		
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/principalVerdura.jpg">
				</div>
				<div class="card-content">
					<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; bottom: 14px; right: 14px">
						<a class="btn-floating btn-large red">
							<i class="large material-icons">shopping_cart</i>
						</a>
						<ul>
							<li><a class="btn-floating red"><!--<i class="material-icons"></i>-->x4</a></li>
							<li><a class="btn-floating yellow darken-1"><!--<i class="material-icons">format_quote</i>-->x3</a></li>
							<li><a class="btn-floating green"><!--<i class="material-icons">publish</i>-->x2</a></li>
							<li><a class="btn-floating blue"><!--<i class="material-icons">attach_file</i>-->x1</a></li>
						</ul></div>
					<!-- <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		 -->
					<!-- <p><a href="#">This is a link</a></p> -->
				</div>
				<div class="card-reveal">
					<span class="card-title white-text text-darken-4">Menestra de Verduras<i class="material-icons right">close</i></span>
					<p>Mix de verduras variadas que nos aportan vitaminas y minerales. Plato digestivo y fácil de tomar tanto en frío como en caliente. Combínalo con una de nuestras carnes o pescados para conseguir el equilibrio perfecto.</p>
				</div>
			</div>
		</div>
<!---------------------------------------------------------------------------------------------------------------------->
			<div class="col s12 m6 l3">
			<div class="card">
				<span class="card-title activator grey-text text-darken-4">Crema de Verduras</span>		
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/principalCrema.jpg">
				</div>
				<div class="card-content">
					<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; bottom: 14px; right: 14px">
						<a class="btn-floating btn-large red">
							<i class="large material-icons">shopping_cart</i>
						</a>
						<ul>
							<li><a class="btn-floating red"><!--<i class="material-icons"></i>-->x4</a></li>
							<li><a class="btn-floating yellow darken-1"><!--<i class="material-icons">format_quote</i>-->x3</a></li>
							<li><a class="btn-floating green"><!--<i class="material-icons">publish</i>-->x2</a></li>
							<li><a class="btn-floating blue"><!--<i class="material-icons">attach_file</i>-->x1</a></li>
						</ul></div>
					<!-- <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa</span>		 -->
					<!-- <p><a href="#">This is a link</a></p> -->
				</div>
				<div class="card-reveal">
					<span class="card-title white-text text-darken-4">Crema de Verduras<i class="material-icons right">close</i></span>
					<p>Mix de verduras variadas que nos aportan vitaminas y minerales. Plato digestivo y fácil de tomar tanto en frío como en caliente. Combínalo con una de nuestras carnes o pescados para conseguir el equilibrio perfecto.</p>
				</div>
			</div>
		</div>			
		</div>
	</div>
  </section>
<!--######################################################################################################################-->		
<!-- Postres -->		
  <section id="postres">
	<h2 class="center-align yellow lighten-2 white-text">Postres</h2>
	<div class="row">
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/postreCrema.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Crema Catalana<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Crema Catalana<i class="material-icons right">close</i></span>
					<p>Crema Catalana</p>
				</div>
			</div>
		</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------->		
	<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/PostreHelado.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Helados<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Helados<i class="material-icons right">close</i></span>
					<p>Helados</p>
				</div>
			</div>
		</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------->		
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/postrePina.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Pi&ntilde;a fresca<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Pi&ntilde;a fresca<i class="material-icons right">close</i></span>
					<p>Pi&ntilde;a fresca</p>
				</div>
			</div>
		</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------->		
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/postreKitkat.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Tartita KitKat<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Tartita KitKat<i class="material-icons right">close</i></span>
					<p>Tartita KitKat</p>
				</div>
			</div>
		</div>
	</div>
  </section>
<!--######################################################################################################################################-->       <footer class="page-footer teal lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"><img src="img/butlerx.png">takeAway</h5>
                <p class="grey-text text-lighten-4">Plaza Peixateria N&ordm; 17</p>
                <p class="grey-text text-lighten-4">E 08800 Vilanova i la Geltr&uacute;</p>
                <p class="grey-text text-lighten-4"><img src="img/phonex.png"> 666 666 666 &nbsp;&nbsp;&nbsp;servicio@takeaway.es</p>
              </div>
			 <div class="col l4 offset-l2 s12">
               <!-- <h5 class="white-text">white</h5> -->
				  <span class="actions">
  					<ul>
      					<li><i class="fa fa-facebook fa-2x"></i></li>
      					<li><i class="fa fa-twitter fa-2x"></i></li>
      					<li><i class="fa fa-google-plus fa-2x"></i></li>
      					<li><i class="fa fa-youtube fa-2x"></i></li>
      					<li><i class="fa fa-instagram fa-2x"></i></li>
      					<li><i class="fa fa-linkedin fa-2x"></i></li>
      					<li><i class="fa fa-pinterest fa-2x"></i></li>
      					<li><i class="fa fa-tumblr fa-2x"></i></li>
      					<li><i class="fa fa-vine fa-2x"></i></li>
      					<li><i class="fa fa-snapchat fa-2x"></i></li>
      					<li><i class="fa fa-reddit fa-2x"></i></li>
  					</ul>
				  </span>
				  <!--<ul class="fa-ul">
  					<li><i class="fa-li fa fa-facebook fa-2x"></i></li><br><br>
					<li><i class="fa-li fa fa-twitter fa-2x"></i></li><br><br>
					<li><i class="fa-li fa fa-google-plus fa-2x"></i></li><br><br>
					<li><i class="fa-li fa fa-facebook fa-2x"></i></li><br><br>
					<li><i class="fa-li fa fa-wheelchair fa-2x"></i></li><br><br>
					<li><i class="fa-li fa fa-thump-up fa-2x"></i></li>
				 </ul>-->
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            &copy; 2014 The Webinator
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
		<!----------------------------- Modal Structure ------------------------------->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Suscribete a nuestra Newsletter</h4>
      <form method="post">
	  <input maxlength="100" type="email" name="email" id="email"
	  <label for="email">Tu correo</label>
    </div>
	<button class="btn waves-effect waves-light" type="submit">suscribirme</button>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
      <!----------------------------- Modal End ------------------------------->   
		<?php
//Se comprueba que llegan datos por método POST
if ($_POST) {
	echo $_POST['email'];
	echo "<br>";
	$email = $_POST['email'];
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'takeaway');
	mysqli_set_charset($mysqli,"utf8");
	if ($mysqli){
		$sql="INSERT INTO newsletter (email) VALUES ('$email');";
		$query=$mysqli->query($sql);
		if ($query) {
			echo "
			<script>
			$(document).ready(function(){
			$('#modal1').modal('close');
			alert('Gracias por su suscricion')
			});
			</script>";
		}
		else 
		{
			echo "Ha habido un problema con el registro del formulario";
		}
		$mysqli->close();
	}
}
?>
	</body>
  </html>