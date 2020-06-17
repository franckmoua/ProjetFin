<?php

function getAllArtists()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM artists');
	$artists =  $query->fetchAll();

    return $artists;
}

function getArtist($id)
{
	$db = dbConnect();
	
	$query = $db->prepare("SELECT * FROM artists WHERE id = ?");
	$query->execute([
		$id
	]);

	return $query->fetch();
}

function update($artistId, $informations)
{
	$db = dbConnect();

	if($_SESSION['id'] !=$informations['id']){
	    return false;
    }

	else{


	$query = $db->prepare('UPDATE artists SET name = ?, biography = ? WHERE id = ?');
	
	$result = $query->execute(
		[
			$informations['name'],
			$informations['biography'],
			$artistId,
		]
	);

    $query = $db->prepare("DELETE FROM artists_labels WHERE artist_id=?");
    $result= $query->execute(
        [
            $artistId,
        ]
    );

    if(isset($informations['label_id'])){
    insertArtistLabelsLinks($artistId, $informations['label_id']);
    }
	//vérifier si nouveau fichier à été envoyé, et écraser l'ancien si c'est le cas
	
	return $result;
    }
}

function add($informations)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO artists (name, biography) VALUES( :name, :biography)");
    $result = $query->execute([
        'name' => $informations['name'],
        'biography' => $informations['biography'],

    ]);

    if ($resultInsertArtist) {
        $artistId = $db->lastInsertId();

        if (isset($informations['label_id'])) {
            insertArtistLabelsLinks($artistId, $informations['label_id']);
        }

        if (!empty($_FILES['image']['tmp_name'])) {

            $allowed_extensions = array('jpg', 'jpeg', 'gif', 'png');
            $my_file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if (in_array($my_file_extension, $allowed_extensions)) {
                $new_file_name = $artistId . '.' . $my_file_extension;
                $destination = '../assets/images/artist/' . $new_file_name;
                $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

                $db->query("UPDATE artists SET image = '$new_file_name' WHERE id = $artistId");
            }
        }

        return $resultInsertArtist;
    }
}


function insertArtistLabelsLinks($artistId,$labelIds){
    $db = dbConnect();


    $queryString ="INSERT INTO artists_labels (artist_id, label_id) VALUES ";
    $queryValues=array();

    foreach($labelIds['label_id'] as $key=>$labelId){
        //génération dynamique de $queryString ;::
        $queryString .= "(:artist_id_$key, :label_id_$key)";
        if ($key != array_key_last($labelIds)) {
            $queryString .= ',';
        }
        else {
            $queryString .= ';';
        }

        //génération dynamique de $queryValues
        //à chaque boucle , on ajoute au tableau les valeurs correspondantes à (?,?)
        $queryValues["artist_id_$key"] =$artistId;
        $queryValues["label_id_$key"] = $labelId;
    }

    $query=$db->prepare($queryString);
    $query->execute($queryValues);


}



function delete($id)
{
	$db = dbConnect();


	$artist = getArtist($id);
	if(!empty($artist['image'])){
	   $unlink = unlink("../assets/images/artist/". $artist['image']);
    }


	$query = $db->prepare('DELETE FROM artists WHERE id = ?');
	$result = $query->execute([$id]);
	
	return $result;
}