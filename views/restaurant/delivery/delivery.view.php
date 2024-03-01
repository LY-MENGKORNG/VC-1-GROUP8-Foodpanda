<!-- Main -->
<main class="main users chart-page" id="skip-target">
    <div class="px-5">
        <div class="px-5 pt-2">
            <h2 class="text-primary">List of Delivery</h2>

            <div class="container mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Registration Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($delivery as $item) { ?>
                            <tr>
                                <td><?= $item["user_id"] ?></td>
                                <td><?= $item["first_name"] ?></td>
                                <td><?= $item["last_name"] ?></td>
                                <td><?= $item["email"] ?></td>
                                <td><?= $item["phone"] ?></td>
                                <td><?= $item["registration_date"] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
