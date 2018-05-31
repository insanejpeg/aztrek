<?php

function insertPays(string $title, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO pays (label, picture)
                VALUES (:title, :picture);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}

function updatePays(int $id, string $title, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE pays
                SET label = :title,
                    picture = :picture
                WHERE id = :id;";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}