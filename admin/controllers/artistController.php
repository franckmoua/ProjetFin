<?php 

require('models/Artist.php');
require('models/Label.php');

if($_GET['action'] == 'list'){
	$artists = getAllArtists();
    $pageTitle='Liste de tous les artistes';
    $pageDescription='test';
    $view ='views/artistList.php';
	//require('views/artistList.php');
}
elseif($_GET['action'] == 'new'){
	$labels = getAllLabels();
    $pageTitle='Ajouter un nouvel artiste';
    $pageDescription='';
	$view= 'views/artistForm.php';
	//require('views/artistForm.php');
}
elseif($_GET['action'] == 'add'){

	if(empty($_POST['name'])){
		
		if(empty($_POST['name'])){
			$_SESSION['messages'][] = 'Le champ nom est obligatoire !';
		}

		$_SESSION['old_inputs'] = $_POST;
		header('Location:index.php?controller=artists&action=new');
		exit;
	}
	else{
		$resultAdd = add($_POST);
		
		$_SESSION['messages'][] = $resultAdd ? 'Artiste enregistrée !' : "Erreur lors de l'enregistrement de l'artiste... :(";
		
		header('Location:index.php?controller=artists&action=list');
		exit;
	}
}
elseif($_GET['action'] == 'edit'){
    $pageTitle='Modification d\'un artiste' ;
	$labels = getAllLabels();

	if(!empty($_POST)){
		if(empty($_POST['name'])){
		
			if(empty($_POST['name'])){
				$_SESSION['messages'][] = 'Le champ nom est obligatoire !';
			}
			
			$_SESSION['old_inputs'] = $_POST;
			header('Location:index.php?controller=artists&action=edit&id=' . $_GET['id']);
			exit;
		}
		else{
			$resultAdd = update($_GET['id'], $_POST);
			$_SESSION['messages'][] = $resultAdd ? 'Artiste mis à jour !' : 'Erreur lors de la mise à jour... :(';
			header('Location:index.php?controller=artists&action=list');
			exit;
		}
	}
	else{
		if(!isset($_SESSION['old_inputs'])){
			if(isset($_GET['id'])){

				$artist = getArtist($_GET['id']);
				$artistLabels = getArtistLabels($_GET['id']);

				if($artist == false){
					header('Location:index.php?controller=artists&action=list');
					exit;
				}
			}
			else{
				header('Location:index.php?controller=artists&action=list');
				exit;
			}
		}
		$labels = getAllLabels();
		$view = 'views/artistForm.php';
		//require('views/artistForm.php');
	}

}
elseif($_GET['action'] == 'delete'){
	if(isset($_GET['id'])){
		$result = delete($_GET['id']);
	}
	else{
		header('Location:index.php?controller=artists&action=list');
		exit;
	}

	$_SESSION['messages'][] = $result ? 'Artiste supprimé !' : 'Erreur lors de la suppression... :(';
	
	header('Location:index.php?controller=artists&action=list');
	exit;
}

