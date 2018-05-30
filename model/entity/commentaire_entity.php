<?php

function getAllcommentaireBySejour(int $id) {
    /* @var $connection PDO */
    global $connection;
    
    
  $query ="  SELECT
	user_has_sejour.grade,
    user_has_sejour.commentaire,
    user.pseudo
FROM user_has_sejour
INNER JOIN user ON user.id = user_has_sejour.user_id
WHERE user_has_sejour.sejour_id = :id;";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}