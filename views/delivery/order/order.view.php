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
                <thead class="" style="border-bottom: 1px solid gray;">
                    <tr class="place-holder">
                        <th>No</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Purchase Date</th>
                        <th>Status</th>
                        <th>Prive</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="users-table-info">
                        <td>
                            <input type="checkbox" class="check-all">
                        </td>
                        <td><?= $delivery["first_name"] ?></td>
                        <td><?= $delivery["last_name"] ?></td>
                        <td><?= $delivery["email"] ?></td>
                        <td><?= $delivery["phone"] ?></td>
                        <td><?= $delivery["phone"] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>