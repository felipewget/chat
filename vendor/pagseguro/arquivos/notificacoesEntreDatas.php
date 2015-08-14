<?php

	require_once '../source/PagSeguroLibrary/PagSeguroLibrary.php';

	//yyyy-MM-ddTHH:mm
	
	//Transações concluídas - por intervalo de datas

	$pageNumber = 1;
	$maxPageResults = 20;
	$initialDate = '2015-04-22T05:00';
	$finalDate = '2015-05-15T05:00';
	$credentials = PagSeguroConfig::getAccountCredentials();
	
	try {  
	  
	  $credentials = PagSeguroConfig::getAccountCredentials(); // getApplicationCredentials()  
	  $response = PagSeguroTransactionSearchService::searchByDate(  
	    $credentials,  
	    $pageNumber,  
	    $maxPageResults,  
	    $initialDate,  
	    $finalDate
	  );  
	  
	} catch (PagSeguroServiceException $e) {  
	  die($e->getMessage());  
	}
	
?>