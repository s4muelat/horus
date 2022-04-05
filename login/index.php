<?php
require_once "../geral/global.php";
require_once "aut.php";
			
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
	<!-- Topo fim -->
   
    <!--Carousel e login -->
    <div class="container-1">        
        <div class="item item2">
            <!-- Carousel início -->
			    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
				    <ol class="carousel-indicators">
					    <li data-target="#carousel" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel" data-slide-to="1"></li>
					    <li data-target="#carousel" data-slide-to="2"></li>
					    </ol>
				    <div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="1000">
					<img src="../imagens/login_carousel/g1.jpg" class="w-100">
					<div class="carousel-caption d-none d-md-block">
    					<h5>Tenha seu hotel na palma da sua mão</h5>
    					<p>Acessível de qualquer lugar que tenha conexão de Internet</p>
  					</div>
				
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
        <!-- Carousel e login fim -->
            
        <!-- Form login -->         
        <div class="item item3">
			<form action="" method="post">
				<!-- 
					<div class="alert alert-danger" role="alert">
					Ops... dados incorretos.	
				</div>
				-->
				<!-- Alerta falha login -->
				<?php
					if(!empty($_SESSION['errologin']) == 'errorlogin') {
						echo "<div id='botaoalerta' class='alert alert-danger alert-dismissible fade show' role='alert'>
  						<b>Dados incorretos</b>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    					<span aria-hidden='true'>&times;</span>
  						</button>
						</div>
						<script>
							setTimeout(function() {
							$('#botaoalerta').remove()
							}, 5000)
							</script>";
						unset($_SESSION['errologin']);
					}
					
					if(!empty($_SESSION['oklogin']) == 'oklogin') {
						echo "<div id='botaoalerta' class='alert alert-success alert-dismissible fade show' role='alert'>
								<div class='spinner-border text-success' role='status'>
							  </div>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    								<span aria-hidden='true'>&times;</span>
								</button>
							</div>				
						<script>
							setTimeout(function() {
								$('#botaoalerta').remove()
								window.location.href = '$dominio_ip_sistema/$dir_sistema'
							}, 2000)						
							</script>";
						unset($_SESSION['oklogin']);
					}
					
					

				?>		
				<input type="email" name='email' class="form-control btn-lg" id="email"  placeholder="meu@email.com" autocomplete='on' autofocus required maxlength='50'> 
				<br>  
				<input type="password" name='senha' class="form-control btn-lg" id="senha" placeholder="********" required maxlength='8'>
				<br>
				<div class="box-btn-login">
				    <input type="submit" name='submit' id="submit" class="btn" value="Entrar">
				</div>	
				<div class='AlterarSenha'>Esqueceu a senha?</div>
			</form>
		</div>
		<!-- Form login fim -->
        </div>
    </div>

	
</body>
</html>
