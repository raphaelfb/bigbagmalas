<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>BigBag Malas</title>

<link href="css/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<section id="content">
		<header>
			<section id="top" class="content-interno">
				<div id="cont-header">
					<a href="./index.php">
						<img src="imgs/logo-BigBag.png">
					</a>
					<social>
						<a href="https://www.facebook.com/bigbagmalascomvc" target="_blank">
							<fb>FACEBOOK  / BIGBAGMALASCOMVC</fb>
						</a>
						<br>
						<a href="http://instagram.com/bigbagmalas" target="_blank">
							<in id="insta">INSTAGRAM  / BIGBAGMALAS</in>
						</a>
					</social>
				</div>
				<div id="menu-header">
					<nav id="menu">
					<a href="#quemsomos" class="menu">QUEM SOMOS</a> |
					<a href="#nossaslojas" class="menu">NOSSAS LOJAS</a> |
					<a href="#bolsasmalas" class="menu">BOLSAS</a> |
					<a href="#bolsasmalas" class="menu">MALAS</a> |
					<a href="#mochilas" class="menu">MOCHILAS</a> |
					<a href="#acessoriosekits" class="menu">ACESSÓRIOS & KITS</a> |
					<a href="#contatos" class="menu">CONTATO</a>
				</nav>
				</div>
			</section>
			<section id="img-praia"></section>
			<section id="banner" class="content-interno">
				<div id="slider">
					<ul class="bxslider">
					  <li><img src="imgs/pic1.jpg" /></li>
					  <li><img src="imgs/pic2.jpg" /></li>
					  <li><img src="imgs/pic3.jpg" /></li>
					  <li><img src="imgs/pic4.jpg" /></li>
					</ul>
				</div>
			</section>
			<section id="quemsomos" class="content-interno">
				<div id="hr"><hr></div>
				<div id="anuncio1" class="anuncio"></div>
				<div id="anuncio2" class="anuncio"></div>
				<div id="qs-conteudo">
					<div id="qs-titulo">
					<h1>Quem Somos</h1>
					</div>
					<div id="qs-texto">
					<h2>A Big Bag oferece malas para qualquer destino, seja para longas viagens ou
						work-trips, nós temos a solução pra você!</h2><p>
					<h2>Sempre priorizando a qualidade dos produtos, a Big Bag vai buscar o
						equilíbrio perfeito entre capacidade e praticidade para atender as necessidades de cada cliente.</h2>
					</div>
				</div>
				<div id="botons">
					<img src="imgs/botons.png" />
				</div>
			</section>
			<section id="marcas" class="content-interno">
				<img src="imgs/box-marcas.jpg" />
			</section>
			<section id="nossaslojas" class="content-interno">
				<h1>Nossas Lojas</h1>
				<img id="mapa" src="imgs/map.png" />
				<div id="map"></div>
				<div id="enderecos"></div>
			</section>
			<section id="bolsasmalas" class="content-interno">
				<div id="bm-left">
					<h1>Bolsas</h1>
					<h2>Bolsas são uma paixão feminina que vai muito além de carregar os pertences. Para as mulheres, bolsas são declarações de estilo!</h2>
					<p><h2>Na Big Bag você encontra bolsas que unem praticidade e modernidade. São modelos de diversos estilistas, com os mais diferentes designs e sempre com preço justo!</h2>
					<img src="imgs/malas.png" />
				</div>
				<div id="bm-right">
					<img src="imgs/bolsas.png" />
					<h1>Malas</h1>
					<h2>A Big Bag vai muito além de malas de viagem. Aqui nós temos pastas, carteiras, bolsas e mochilas infantis e adultas feitas especialmente pra você.</h2>
					<p><h2>São produtos de qualidade com preço justo! Visite nossa loja e saiba mais sobre nossos produtos, ofertas e kits! Big Bag, venha já!</h2>
				</div>
			</section>
			<section id="mochilas" class="content-interno">
				<div id="m-conteudo">
					<h1>Mochilas</h1>
					<h2>Mochilas são companheiras para qualquer aventura e devem (acompanhar) suportar nosso ritmo diário! Seja para viajar ou para trabalhar, é importante prezar pelo conforto e pela qualidade.</h2>
					<p><h2>A Big Bag oferece diversos modelos, cores, marcas e estilos de mochilas para agradar qualquer pessoa. Não importa qual seja o seu destino, a Big Bag tem uma mochila pra você!</h2>
				</div>
				<div id="img-produtos"></div>
			</section>
			<section id="acessoriosekits" class="content-interno">
				<div id="aek">
					<h1>Acessorios e Kits</h1>
					<div id="aek-produtos"></div>
				</div>
			</section>
			<section id="contatos" class="content-interno">
				<div id="c-conteudo">
					<h1>Contatos</h1>
					<div id="c-left">
						<img src="imgs/caderno.png" />
						<form action="#" autocomplete="on">
						  First name:<input type="text" name="fname"><br>
						  Last name: <input type="text" name="lname"><br>
						  E-mail: <input type="email" name="email" autocomplete="off"><br>
						  <input type="submit">
						</form> 
					</div>
					<div id="c-right">
						<div id="texto-contatos"></div>
					</div>
				</div>
			</section>
		</header>


		<footer></footer>
	</section>


</body>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js"></script>
<script src="js/script.js"></script>
</html>