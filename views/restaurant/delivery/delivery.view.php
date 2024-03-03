<!-- Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-sm-between px-2">
            <h1 class="main-title col-10">Delivery</h1>
            <button class="btn btn-primary font-weight-bold text-gray rounded" data-bs-toggle="modal" data-bs-target="#deliveryModal">
                Add Delivery
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="deliveryModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-4">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <h5 class="modal-title" id="modal-title">Create a new Delivery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </h5>
                    </div>
                    <div class="modal-body">
                        <form action="/restaurant/delivery/check_add_delivery" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="restaurant_name">First_Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control border" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="location">Last_name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control border" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control border" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control border" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="phone">Contact Info</label>
                                    <input type="tel" name="contact_info" id="phone" class="form-control border" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <input type="hidden" name="delivery_id" value="3">
                                <button type="submit" class="btn btn-primary width= 60">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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