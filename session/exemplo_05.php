<?php 

require_once("config.php");

echo session_status();

var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessão desabilitada";
		break;

	case PHP_SESSION_NONE:
		echo "Sessão habilitada, não iniciada";
		break;
	
	case PHP_SESSION_ACTIVE:
		echo "Sessão habilitada e iniciada";
		break;

	default:
		echo "Nenhuma sessão encontrada!";
		break;
}

 ?>