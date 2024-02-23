<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Approval</title>
</head>

<body>

    <h2>Pending User Registrations</h2>
    <form method="post" action="regist.php">
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>001</td>
                <td>ryry</td>
                <td>ryry@gmail.com</td>
                <td>
                    <input type="hidden" name="user_id" value="id">
                    <input type="submit" name="approve_user" value="Approve">
                </td>
            </tr>
        </table>
    </form>
