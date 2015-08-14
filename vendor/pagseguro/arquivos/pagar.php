<?php
	
	require_once '../source/PagSeguroLibrary/PagSeguroLibrary.php';
	
	$paymentRequest = new PagSeguroPaymentRequest();
	
	//Adiciono Produdo
	$paymentRequest->addItem('0001', 'Notebook', 1, 2430.00);
	
	// Dados Do Usuario
	$paymentRequest->setSender(
			'João Comprador',
			'email@comprador.com.br'
	);
	
	// ADD TIPO DE MOEDA ( R$ )
	$paymentRequest->setCurrency("BRL");
	
	// Referenciando a transação do PagSeguro em seu sistema
	$paymentRequest->setReference("REF123");
	
	// URL para onde o comprador será redirecionado (GET) após o fluxo de pagamento
	$paymentRequest->setRedirectUrl("http://retorno.com.br");
	
	// URL para onde serão enviadas notificações (POST) indicando alterações no status da transação
	$paymentRequest->addParameter('notificationURL', 'http://www.lojamodelo.com.br/nas');
	
	try {
	
		$credentials = PagSeguroConfig::getAccountCredentials(); // getApplicationCredentials()
		$checkoutUrl = $paymentRequest->register($credentials);
		
		header('Location: '.$checkoutUrl);
	
	} catch (PagSeguroServiceException $e) {
		die('#Cod 203 - Problema na Requisição');
		die($e->getMessage());
	}

?>