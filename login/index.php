<?php
		include("../geral/global.php");
		include("valida_sessao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<header>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema gerenciador completo para hotéis e pousadas">
	
	<link rel='stylesheet' href='grid.css' />
    <link rel='stylesheet' href='style.css' />
    <title>Hórus - entre ou cadastre-se</title>

</header>
<body>
   
    <!-- Topo -->
    <div class="container">
        <div class="item item1">
        </div>
    </div>
   
    <!--Carousel e login -->
    <div class="container-1">        
        <div class="item item2">
            <!-- Carousel início -->
			    <div id="carousel" class="slide carousel" data-bs-ride="carousel">
				    <ol class="carousel-indicators">
					    <li data-target="#carousel" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel" data-slide-to="1"></li>
					    <li data-target="#carousel" data-slide-to="2"></li>
					    </ol>
				    <div class="carousel-inner">
					<div class="carousel-item active">
					<img src="../imagens/login_carousel/g1.jpg" class="w-100">
				</div>
				<div class="carousel-item">
					<img src="../imagens/login_carousel/g2.jpg" class="w-100">
				</div>
				<div class="carousel-item">
					<img src="../imagens/login_carousel/g3.jpg" class="w-100">
				</div>
			</div>
			
			<a class="carousel-control-prev" href="#carousel" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			
			<a class="carousel-control-next" href="#carousel" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>	
		</span>
		</div>
        <!-- Carousel fim -->
            
        <!-- Formulário login -->         
        <div class="item item3">
				<form action="/action_page.php" method="get">
					<input type="email" class="form-control btn-lg" id="email"  placeholder="meu@email.com" autofocus required maxlength='50'> 
					<br>  
					<input type="password" class="form-control btn-lg" id="senha" placeholder="********" required maxlength='8'>
					<br>
					<div class="box-btn-login">
						    <input type="submit" id="submit" class="btn btn-warning btn-lg" value="Entrar">
					        </div>
						    <div class='AlterarSenha'>Esqueci minha senha</div>
						    </form>
			</div>
		</div>
		<!-- Fim div login -->
        </div>
    </div>
</body>
</html>
