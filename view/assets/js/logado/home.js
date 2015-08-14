var height = 0;
var width = 0;

window.onresize = function(event) {
	
	height = $(window).height();
	width = $(window).width();
	
	dimensionar_Elementos();
	
}

function dimensionar_Elementos()
{

	$('div[block_space_message]').css('height', (height-160) + "px");
	$('div[block_space_message]').perfectScrollbar();
	
}

// Configurações

function abrir_Configuracoes()
{

	$('div[block_config]').css('right', '0px');

}

function fechar_Configuracoes()
{

	$('div[block_config]').css('right', '-310px');

}

// FIM - Configurações



function fechar_bloco_busca(){

	$('div[container_search] div.icon-search').hide();
	$('div[container_search] div.icon-user-plus').hide();
	$('div[container_search] span.icon-cross').hide();
	$('div[container_search] input').hide();
	$('div[container_search] input').val('');
	
	$('div[container_request]').hide();
	$('div[inner_container_request]').fadeIn();

}

// Search

function abrir_busca()
{

	fechar_bloco_busca();
	
	$('div[inner_container_request]').hide();
	$('div[container_request]').fadeIn();
	
	$('div[container_search] input').fadeIn();
	$('div[container_search] div.icon-search').fadeIn();
	$('div[container_search] span.icon-cross').fadeIn();
	$('div[container_search]').fadeIn();
	
}

// FIM - Search

// Add Amigos

function abrir_add_amigos()
{
	
	fechar_bloco_busca();
	
	$('div[inner_container_request]').hide();
	$('div[container_request]').fadeIn();

	$('div[container_search] input').fadeIn();
	$('div[container_search] div.icon-user-plus').fadeIn();
	$('div[container_search] span.icon-cross').fadeIn();
	$('div[container_search]').fadeIn();
	
}

// FIM - Add Amigos

$(document).ready(function(){
	
	height = $(window).height();
	width = $(window).width();
	
	dimensionar_Elementos();
	fechar_bloco_busca();
	
	
	// CONFIGURAÇÕES - Status 
	$('.status_check').click(function(){
		
		$('.status_check').children('div[check]').removeClass('icon-checkbox-checked');
		$('.status_check').children('div[check]').addClass('icon-checkbox-unchecked');
		
		$(this).children('div[check]').removeClass('icon-checkbox-unchecked');
		$(this).children('div[check]').addClass('icon-checkbox-checked');
		
	});
	
	// TAB BAR - escolher aba
	$('.bar').click(function(){
		
		$('.bar').removeClass('active');
		$(this).addClass('active');
		
	});

	
});