!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula MARMITA DONA RITA</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="Tutoriais" alt="Tutoriais">Tutoriais</a></li>
				<li><a href="#" title="Artigos" alt="Artigos">Artigos</a></li>
				<li><a href="#" title="Suporte" alt="Suporte">Suporte</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Aqui você aprende tudo o que é necessário para trabalhar como um desenvolvedor web PHP.</h1>
                    </header>
                    <p> Confira os artigos e tutoriais</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Nosso Ultimos tutoriais</h1>
				<p>Desfrute dos tutoriais, eles vão lhe auxiliar nesta caminhada!</p>
			</header>
						<article>
				<a href="pagina2.php?id=1"><img src=img/bd1.jpg></a>
				<h2>PHP</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,...</p>
			</article>
						<article>
				<a href="pagina2.php?id=2"><img src=img/bd3.png></a>
				<h2>PHP+HTML</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,...</p>
			</article>
						<article>
				<a href="pagina2.php?id=3"><img src=img/ds1.jpg></a>
				<h2>PHP+HTML+CSS</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,...</p>
			</article>
						<article>
				<a href="pagina2.php?id=4"><img src=img/ds2.jpg></a>
				<h2>PHP+NODE</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,...</p>
			</article>
						<article>
				<a href="pagina2.php?id=5"><img src=img/ds3.jpg></a>
				<h2>PHP+JAVA</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,...</p>
			</article>
						
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<!-- preparar o footer -->
	</footer>

	<?php
$valores = [1, 2];
$count = $valores[0] + $valores[1];
//echo "Count = " . $count;
$valores[4] = 10;
/*echo "<pre>";
var_dump($valores, $count);
echo "</pre>";
*/

/*echo "<pre>";
print_r($valores);
echo "</pre>";
*/

/*for($i=0; $i < 10; $i++){
    echo "<br>MARMITA";
}*/

/*$i=0; 
while($i < 10){
    echo "<br>MARMITA+SAUDAVEL";
    $i++;
}*/

$i=0; 
do{
    echo "<br>MARMITA+SAUDAVEL+SUCO";
    $i++;
}while($i < 10);

?>
</body>
</html>