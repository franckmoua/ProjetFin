<?php

function getAllLabels()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM labels');
	$labels =  $query->fetchAll();

    return $labels;
}

function getArtistLabels($artistId)
{
    $db = dbConnect();

    $query = $db->prepare("
        SELECT l.*
        FROM labels l
        INNER JOIN artists_labels al ON l.id=al.label_id
        WHERE al.artist_id = ?
    ");
    $query->execute([
        $artistId
    ]);

    return  $query->fetchAll();
}

function getLabel($id)
{
	$db = dbConnect();

	$query = $db->prepare("SELECT * FROM labels WHERE id = ?");
	$query->execute([
		$id
	]);

	$result = $query->fetch();

	return $result;
}
function updateLabel($id, $informations)
{
	$db = dbConnect();
	
	$query = $db->prepare('UPDATE labels SET name = ? WHERE id = ?');
	
	$result = $query->execute(
		[
			$informations['name'],
			$id,
		]
	);
	
	return $result;
}
function addLabel($informations)
{
	$db = dbConnect();
	
	$query = $db->prepare("INSERT INTO labels (name) VALUES( :name)");
	$result = $query->execute([
		'name' => $informations['name'],
	]);

	return $result;
}
function deleteLabel($id)
{
	$db = dbConnect();
	
	//ne pas oublier de supprimer le fichier lié s'il y en un
	//avec la fonction unlink de PHP
	
	$query = $db->prepare('DELETE FROM labels WHERE id = ?');
	$result = $query->execute([$id]);
	
	return $result;
}