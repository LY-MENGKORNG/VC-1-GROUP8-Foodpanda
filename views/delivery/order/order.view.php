<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <!-- <div class="container">
        <h3 class="title">Hi, <?= ($delivery["first_name"]) ?> 👋🏻</h2>
    </div> -->
    <div class="container mt-5">
        <h4 class="title">List Delivery Order</h4>
        <div class="users-table table-wrapper rounded-lg  mt-3">
            <nav class="navbar navbar-light bg-light">
                <form class="d-flex">
                    <input class="form-control me-2 border border-gray" type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
            </nav>
            <table class="posts-table table table-striped">
                <thead class="" style="border-bottom: 2px solid gray;">
                    <tr class="" style="background: #FF2B85">
                        <th class="text-white">No</th>
                        <th class="text-white">Product</th>
                        <th class="text-white">Customer</th>
                        <th class="text-white">Purchase Date</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Prive</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order) { ?>
                        <tr style="border-bottom: 2px solid pink;">
                            <td>
                                <input type="checkbox" class="check-all">
                            </td>
                            <td><?= $order["first_name"] ?></td>
                            <td><?= $order["last_name"] ?></td>
                            <td><?= $order["email"] ?></td>
                            <td><?= $order["phone"] ?></td>
                            <td><?= $order["phone"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>