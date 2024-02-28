<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars($_POST["password"]);
    
    $restaurant_owner = restaurantOwnerExist($email);
        
    if (count($restaurant_owner) > 0) {
        if (password_verify($password, $restaurant_owner['password'])) {
            $_SESSION['restaurant'] = $restaurant_owner;
            header("Location: /restaurant");
        }else {
            $_SESSION['is_restaurant_password'] = "Invalid password";
        }
    }else {
        $_SESSION['is_restaurant_email'] = "Invalid email";
        header("Location: /restaurant/signin");
    }
}

