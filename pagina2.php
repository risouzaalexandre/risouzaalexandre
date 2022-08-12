<?php
	include("dados.php");
	//var_dump($Marmita);//utilizei para testar o conteúdo recebido
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="MarmitaGrande" alt="Tutoriais">Tutoriais</a></li>
				<li><a href="#" title="MarmitaMedia" alt="Artigos">Artigos</a></li>
				<li><a href="#" title="MarmitaPequenq" alt="Suporte">Suporte</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_Marmitas">
			<header class="main_Marmitas_header">
				<h1>melhores marmitas do Brasil</h1>
				<p>Desfrute das melhores marmitas do BRASIL!</p>
			</header>
			<?php
                $id = $_GET['id'];//na próxima aula iremos realizar a validação deste valor
                echo "id = " . $id;

				foreach($Marmita as $key => $value){
                    if($value['id'] == $id){
			?>
			<article><!-- é necessário melhorar o css desta parte-->
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['MaritaGrande'];?></h2>
				<p><?=$value['descricao'];?></p>
			</article>
			<?php
                    }
				}
			?>
			
		</section>


        <section class="main_Marmita">
			<header class="main_Marmita_header">
				<h1>Ver MarmitaMedia</h1>
				<p>xxxxx</p>
			</header>
			<?php
				foreach($Marmita as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['MarmitaMedia'];?></h2>
	    	</article>
			<?php
                    }
				}
			?>
			
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
</body>
</html>