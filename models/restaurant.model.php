<?php

function createPost(string $title, string $description) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description

    ]);

    return $statement->rowCount() > 0;
}

function getPost(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function getPosts() : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts");
    $statement->execute();
    return $statement->fetchAll();
}

function updateRestaurant(string $restaurant_name, string $owner_name, int $restaurant_id, string $email, string $password, int $rating ) : bool
{
    global $connection;
    $statement = $connection->prepare("update Restaurants set restaurant_name = :restaurant_name, owner_name = :owner_name where restaurant_id = :restaurant_id,
    email = :email, password = :password, location = :location, rating = : rating");
    $statement->execute([
        ':restaurant_name' => $restaurant_name,
        ':owner_name' => $owner_name,
        ':restaurant_id' => $restaurant_id,
        ':email' => $email,
        'password' => $password,
        ':rating' => $rating

    ]);

    return $statement->rowCount() > 0;
}

function deletePost(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}