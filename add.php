<?php require_once "connect.php";

	/*$sql = "INSERT INTO `content`
	(`type`, `band`, `guitar1`, `bass`, `drum`, `amp`, `commentaire`)
	VALUES 
	(:type, :band, :guitar1, :bass, :drum, :amp, :commentaire)";*/

/*
	$sql ="INSERT
    INTO
       `content`(
        `type`,
        `band`,
        `guitar1`,
        `bass`,
        `drum`,
        `amp`,
        `commentaire`,
        `img_band`,
      )
    VALUES(
       type = :type,
       band = :band,
       guitar1 = :guitar1,
       bass = :bass,
       drum = :drum,
       amp = :amp,
       commentaire = :commentaire,
       img_band = :img_band
    )";*/

    $sql = "INSERT INTO `content`(
            `type`, 
            `band`, 
            `guitar1`, 
            `bass`, 
            `drum`, 
            `amp`
            )
            VALUES 
            (
            :type, 
            :band, 
            :guitar1, 
            :bass, 
            :drum, 
            :amp
            );";


    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":type", $_POST['type'], PDO::PARAM_STR);
    $stmt->bindValue(":band", $_POST['band'], PDO::PARAM_STR);
    $stmt->bindValue(":guitar1", $_POST['guitar1'], PDO::PARAM_STR);
    $stmt->bindValue(":bass", $_POST['bass'], PDO::PARAM_STR);
    $stmt->bindValue(":drum", $_POST['drum'], PDO::PARAM_STR);
    $stmt->bindValue(":amp", $_POST['amp'], PDO::PARAM_STR);
    $stmt->execute();

    header('Location: liste.php');

/*if($stmt->errorCode() != '00000'){
    die($stmt->errorInfo()[2]);
}

    if(isset($stmt)){
        var_dump($stmt);
        var_dump($pdo);
    }else{
        die();
    };




    var_dump($_POST);
    var_dump($stmt->fetchAll());
        //header('Location: groupes2.php');
        //die();
*/