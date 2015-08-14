
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf=8"/>
	
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	
		<link type="text/css" rel="stylesheet" href="<?=$this->absolute_path?>view/assets/css/logado/index.css"/>
		<link type="text/css" rel="stylesheet" href="<?=$this->absolute_path?>view/assets/css/logado/home.css"/>
															 
		<link type="text/css" rel="stylesheet" href="/chat/view/assets/vendor/icomoon/style.css"/>
		
		<!-- Perfect scrollbar -->
		<link href="<?=$this->absolute_path?>view/assets/vendor/perfect-scrollbar/src/src/perfect-scrollbar.css" rel="stylesheet">
		<!-- FIM - Perfect scrollbar -->		
		
		<script type="text/javascript" src="<?=$this->absolute_path?>view/assets/vendor/jquery.js"></script>
		
		<!-- Perfect scrollbar -->
		<script type="text/javascript" src="<?=$this->absolute_path?>view/assets/vendor/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="<?=$this->absolute_path?>view/assets/vendor/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<!-- FIM perfect scrollbar -->
		
		<script type="text/javascript" src="<?=$this->absolute_path?>view/assets/js/logado/home.js"></script>
		
	</head>
	
	<body>
		
		<?php require 'view/inc/logado/header.php'; ?>
		<?php require 'view/inc/logado/config.php'; ?>
		
		<div container_users >
		
			<div container_request style="display: none;">
		
				<div container_search style="display: none;">
					<div class="icon-search" style="display: none;"></div>
					<div class="icon-user-plus"></div>
					<input type="text" placeholder="Digite aqui o nome do contado de deseja adicionar"/>
					<span class="icon-cross" onclick="fechar_bloco_busca();"></span>
				</div>
				
				<?php for($i=0;$i<10;$i++){ ?>
				
				<div block_user_chat>
					<div image></div>
					<div block_user_data>
						<div name>Felipe Oliveira</div>
						<div status></div>
					</div>
				</div>
				
				<?php } ?>
			
			</div>
			
			<div inner_container_request>
			
				<div tabs_bar>
					<ul>
						<li class="bar active left">Meus Amigos</li>
						<li class="bar">Grupos</li>
						<li class="bar right">Conversas</li>				
					</ul>
				</div>
				
				<?php for($i=0;$i<10;$i++){ ?>
				
				<div block_user_chat>
					<div image></div>
					<div block_user_data>
						<div name>Felipe Oliveira</div>
						<div status></div>
					</div>
				</div>
				
				<?php } ?>
				
			</div>
		
		</div>
		
		<div container_feed>
			
			<div block_space_message>
			
				<div inner_block_space_message>
			
				<?php for($i=0;$i<10;$i++){ ?>
			
					<div mensagem class="left">
						<img avatar src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4hwJaSQP7TNvKrG2SJ00mmJphnQlpXGhyfbmn9jajy_F9OicVEQ"/>
						<div triangulo></div>
						<span message>asdas</span>
						<span hora>12/08/2015 as 12:50</span>
					</div>
					
					<div mensagem>
						<img avatar src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4hwJaSQP7TNvKrG2SJ00mmJphnQlpXGhyfbmn9jajy_F9OicVEQ"/>
						<div triangulo></div>
						<span message>asdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd asasdas asd as dasd as</span>
						<span hora>12/08/2015 as 12:50</span>
					</div>
					
					<div mensagem class="left">
						<img avatar src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4hwJaSQP7TNvKrG2SJ00mmJphnQlpXGhyfbmn9jajy_F9OicVEQ"/>
						<div triangulo></div>
						<span message> sadas dasd as das das das dasaiso dasijod jasiod ass iofjsd  foisd jfidosas iudashudi asuid asui dhasui huasdas</span>
						<span hora>12/08/2015 as 12:50</span>
					</div>
					
				<?php } ?>
				
				</div>
			
			</div>
			
			<div block_escrever_mensagem>
				<textarea placeholder="Digite sua mensagem aqui"></textarea>
				<button class="icon-quill"></button>
				<button class="icon-images"></button>
			</div>
		
		</div>
		
	</body>
</html>