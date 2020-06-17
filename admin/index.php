<?php

if(!isset($_SESSION['user']) || $_SESSION['user']['is_admin'] == 0){
    header('Location:../index.php');
}
require ('../helpers.php');

if(isset($_GET['controller'])){
	switch ($_GET['controller']){
		case 'artists' :
            require 'controllers/artistController.php';
			break;
		case 'labels':
			require 'controllers/labelController.php';
		break;
		case 'albums' :
			require 'controllers/albumController.php';
		break;
		case 'songs' :
			require 'controllers/songController.php';
		break;

        default :
            require 'controllers/indexController.php';
	}
}
else{
	require 'controllers/indexController.php';
}

require('views/admin.php');

if(isset($_SESSION['messages'])){
	unset($_SESSION['messages']);	
}
if(isset($_SESSION['old_inputs'])){
	unset($_SESSION['old_inputs']);	
}
