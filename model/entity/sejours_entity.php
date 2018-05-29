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