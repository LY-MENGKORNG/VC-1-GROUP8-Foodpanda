<?php

function admin_edit(string $name,string $menu, string $hours,string $contact) {
    global $connection;
    $name = htmlspecialchars($name);
    $menu = htmlspecialchars($menu);
    $hours = htmlspecialchars($hours);
    $contact =htmlspecialchars($contact);

    $sql = $connection-> prepare ("UPDATE restaurant SET menu='$menu', hours='$hours', contact='$contact' WHERE name='$name'");
    $sql->execute([

        ":name" => $name,
        ":menu" => $menu,
        ":hours" => $hours,
        ":contact" => $contact,

    ]);

    if ($sql === true) {
        echo "Update successful";
    } else {
        echo "Update failed";
    }
}
admin_edit($_POST['name'], $_POST['menu'], $_POST['hours'], $_POST['contact']);