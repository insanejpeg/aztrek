<?php

function getAllDepartBySejour(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
            depart.*,
            DATE_ADD(depart.date_start, INTERVAL sejour.duration DAY) AS date_end
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id
            WHERE sejour_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}