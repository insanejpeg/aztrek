<?php


function getAllSejoursByPays(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                sejour.*,
                sejour_niveau.label AS niveau,
                sejour_niveau.picto AS niveau_picto
            FROM sejour
            INNER JOIN sejour_niveau ON sejour_niveau.id = sejour.sejour_niveau_id
            WHERE sejour.pays_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}




function getOneSejour(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                sejour.*,
                sejour_niveau.label AS niveau,
                sejour_niveau.picto AS niveau_picto
            FROM sejour
            INNER JOIN sejour_niveau ON sejour_niveau.id = sejour.sejour_niveau_id
            WHERE sejour.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertSejour(string $title, string $picture, string $description, int $duration, string $date_start, string $date_end) {
        /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO sejour (title, picture, description, duration, date_start, date_end, )
                VALUES (:title, :picture, :description, :duration, :date_start, :date_end, );";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":description", $description);
      $stmt->bindParam(":duration", $duration);
    $stmt->bindParam(":date_start", $date_start);
    $stmt->bindParam(":date_end", $date_end);
//    $stmt->bindParam(":category_id", $category_id);
    $stmt->execute();
}




function updateSejour(string $title, string $picture, string $description, int $duration, string $date_start, string $date_end) {
        /* @var $connection PDO */
    global $connection;

    $query = "UPDATE INTO sejour (title, picture, description, duration, date_start, date_end, )
                VALUES (:title, :picture, :description, :duration, :date_start, :date_end, );";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":description", $description);
      $stmt->bindParam(":duration", $duration);
    $stmt->bindParam(":date_start", $date_start);
    $stmt->bindParam(":date_end", $date_end);
//    $stmt->bindParam(":category_id", $category_id);
    $stmt->execute();
}