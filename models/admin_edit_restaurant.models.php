<?php

function admin_edit($name,$menu,$hours,$contact) {
    global $connection;
    $name = toString($name);
    $menu = toString($menu);
    $hours = toString($hours);
    $contact =toString($contact);

    // Update restaurant details in the database
    $sql = $connection-> prepare ("UPDATE restaurant SET menu='$menu', hours='$hours', contact='$contact' WHERE name='$name'");
    $sql->execute();

    if ($sql === true) {
        echo "Update successful";
    } else {
        echo "Error updating items";
    }

    
}

// Example usage
admin_edit($_POST['name'], $_POST['menu'], $_POST['hours'], $_POST['contact']);
