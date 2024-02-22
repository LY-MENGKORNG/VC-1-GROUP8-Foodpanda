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

function updateRestaurant(string $restaurant_name, string $owner_name,string $email,string $password, string $location, int $rating, $opening_hours, string $contact_info, string $description, $is_open, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE Restaurants SET restaurant_name = :restaurant_name, owner_name = :owner_name, email = :email, password = :password, location = :location,
    rating = :rating, opening_hours = :opening_hours, contect_ifo = :contect_info, description = :description, is_open = :is_open WHERE restaurant_id = :restaurant_id");
    $statement->execute([
        ':restaurant_name' => $restaurant_name,
        ':owner_name' => $owner_name,
        ':email' => $email,
        ':password' => $password,
        ':location' => $location,
        ':rating' => $rating,
        ':opening_hours' => $opening_hours,
        ':contact_info' => $contact_info,
        ':description' => $description,
        ':is_open' => $is_open,
        ':restaurant_id' => $id

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