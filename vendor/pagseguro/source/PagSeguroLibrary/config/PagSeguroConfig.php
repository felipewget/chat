<?php

/*
 ************************************************************************
 PagSeguro Config File
 ************************************************************************
 */

$PagSeguroConfig = array();

$PagSeguroConfig['environment'] = "production"; // production, sandbox

$PagSeguroConfig['credentials'] = array();
$PagSeguroConfig['credentials']['email'] = "felipeestrona@gmail.com";
$PagSeguroConfig['credentials']['token']['production'] = "929F0E4BA0FE43E1A81FD028CFE057F7";
$PagSeguroConfig['credentials']['token']['sandbox'] = "929F0E4BA0FE43E1A81FD028CFE057F7";

$PagSeguroConfig['application'] = array();
$PagSeguroConfig['application']['charset'] = "UTF-8"; // UTF-8, ISO-8859-1

$PagSeguroConfig['log'] = array();
$PagSeguroConfig['log']['active'] = false;
$PagSeguroConfig['log']['fileLocation'] = "";
