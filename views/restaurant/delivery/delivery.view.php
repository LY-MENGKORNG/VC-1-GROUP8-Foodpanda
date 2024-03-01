<div class="container p-4">
    <div class="delivery mb-5">
        <h2>Delivery Onwer</h2>
    </div>
    <table class="table">
        <thead table-light>
            <tr>
                <th class="border">User ID</th>
                <th class="border">First Name</th>
                <th class="border">Last Name</th>
                <th class="border">Email</th>
                <th class="border">Phone</th>
            </tr>
        </thead>

        <tbody class="table-active">
            <?php foreach ($delivery as $item) { ?>
                <tr>
                    <td class="border"><?= $item["user_id"] ?></td>
                    <td class="border"><?= $item["first_name"] ?></td>
                    <td class="border"><?= $item["last_name"] ?></td>
                    <td class="border"><?= $item["email"] ?></td>
                    <td class="border"><?= $item["phone"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</main>