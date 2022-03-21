<?php
include("../geral/global.php");
?>
<!DOCTYPE html>
<header>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		    <div class="box1">
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
		</div>
		</div>
        <!-- Carousel fim -->
            
        <!-- Formulário de login -->         
        <div class="item item3">
		    <div class="box2">
			    <div class="box-doc">
				    <div class="box-login">
					    <form action="/action_page.php" method="get">
					        <input type="email" id="form-control2" class="form-control btn-lg" id="email"  placeholder="Seu email" checked autocomplete="off">
					        <br>  
					        <input type="password" id="form-control3" class="form-control btn-lg" id="senha" placeholder="Senha">
					        <br>
					        <div class="box-btn-login">
						    <input type="submit" id="submit" class="btn btn-warning btn-lg" value="Entrar">
					        </div>
						    <div class='AlterarSenha'>Não consigo acesar</div>
						    <div class='CadastrarMe'>Quero me cadastrar</div>
					        </form>
				    </div>		
			</div>
		</div>
		<!-- Fim div box2 -->
        </div>
    </div>
</body>
</html>
