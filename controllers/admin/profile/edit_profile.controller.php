<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST["user_id"]) && !empty($_POST["first_name"]) &&
        !empty($_POST["last_name"]) && !empty($_POST["phone"]) &&
        !empty($_POST["email"])
    ) {

        $user_id = $_POST["user_id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $profile = !empty($_FILES["profile"]) ? $_FILES["profile"] : $admin["profile"];
        $tartget_dir = "./assets/images/uploads/admin_profile/";
        $tartget_dir2 = "./assets/images/uploads/owner_profile/";

        if (!is_array($profile) || $profile == NULL) {
            if (editUser($first_name, $last_name, $email, $phone, $profile, $user_id, 1)) {
                $_SESSION["admin"] = accountExist($email, 1);
                $admin = $_SESSION["admin"];
            }
            header("Location: /admin/profile");
            
        } else if (checkImage($profile, $tartget_dir)) {
            changeImage($tartget_dir, $profile, $admin["profile"]);
            changeImage($tartget_dir2, $profile, $admin["profile"]);
            if (edituser($first_name, $last_name, $email, $phone, $profile["name"], $user_id, 1)) {
                $_SESSION["admin"] = accountExist($email, 1);
                $admin = $_SESSION["admin"];
            }
            header("Location: /admin/profile");
        }
    }
}
