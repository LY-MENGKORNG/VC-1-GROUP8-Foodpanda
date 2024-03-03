<!-- Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container">

        <div class="d-flex flex-row justify-content-sm-between px-3">
        <h1 class="main-title">Delivery</h1>
            <button class="btn btn-primary font-weight-bold text-gray rounded" data-bs-toggle="modal" data-bs-target="#reg-modal">
                Add Delivery
            </button>
            
        </div>
        <div class="users-table table-wrapper rounded-lg add-border mt-5">
            <div class="main-nav-start row p-4 d-flex justify-content-between">
                <div class="search-wrapper">
                    <i data-feather="search" aria-hidden="true"></i>
                    <input type="text" placeholder="Search Here" class="form-control border" required>
                </div>
                <div class="filter">
                    <button type="button" class="btn btn-primary">
                        <i data-feather="filter" class="" aria-hidden="true"></i>
                        Filter
                    </button>
                </div>
            </div>
            <table class="posts-table table table-striped">
                <thead>
                    <tr class="users-table-info">
                        <th>Food Name</th>
                        <th>Delivery Name</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($delivery as $item) { ?>
                        <tr class="users-table-info">
                            <td><?= $item["first_name"] ?></td>
                            <td><?= $item["last_name"] ?></td>
                            <td><?= $item["email"] ?></td>
                            <td><?= $item["registration_date"] ?></td>
                            <td>Action</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</main>


</div>
</div>