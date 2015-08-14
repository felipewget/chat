<?php
	
	require_once '../source/PagSeguroLibrary/PagSeguroLibrary.php';

	try {
	
		$credentials = PagSeguroConfig::getAccountCredentials(); // getApplicationCredentials()
		$response = PagSeguroNotificationService::checkTransaction(
				$credentials,
				$notificationCode
		);
	
	} catch (PagSeguroServiceException $e) {
		die($e->getMessage());
	}

?>