<!-- Main -->
<form action="/restaurant/delete_delivery" style="display: none;">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</form>
<main class="main users chart-page" id="skip-target">
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-sm-between px-2">
            <h1 class="main-title col-10">Delivery</h1>
            <button class="btn btn-primary btn-sm font-weight-bold text-gray rounded" data-bs-toggle="modal"
                data-bs-target="#deliveryModal"  style="width: 130px; height: 40px;">
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
                        <form action="/restaurant/add_delivery" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="restaurant_name">First_Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control border"
                                        required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="location">Last_name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control border"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control border" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control border"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="phone">Contact Info</label>
                                    <input type="tel" name="contact_info" id="phone" class="form-control border"
                                        required>
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
        <div class="users-table table-wrapper rounded-lg overflow-hidden shadow-lg mt-4">
            <table class="">
                <thead>
                    <tr class="users-table-info">
                        <th class="py-3">
                            <label class="users-table__checkbox ms-20">
                                <input type="checkbox" class="check-all">
                                Delivery
                            </label>
                        </th>
                        <th>Email</th>
                        <th>Contact info</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($delivery as $item) { ?>
                        <tr  style="background: white;">
                            <td>
                                <label class="users-table__checkbox">
                                    <input type="checkbox" class="check">
                                    <div class="categories-table-img">
                                        <picture class="d-flex align-items-center">
                                            <source
                                                srcset="../../assets/images/uploads/delivery_profile/<?= isset ($item["profile"]) ? $item["profile"] : 'avatar.png' ?>"
                                                type="image/webp">
                                            <img src="../../assets/images/uploads/delivery_profile/<?= isset ($item["profile"]) ? $item["profile"] : 'avatar.png' ?>"
                                                alt="customer" class="rounded-circle border border-gray"
                                                style="width: 40px; height: 40px;">
                                            <div class="d-flex flex-column">
                                                <span class="main_title">
                                                    <?= $item["first_name"] . " " . $item["last_name"] ?>
                                                </span>
                                            </div>
                                        </picture>
                                    </div>
                                </label>
                            </td>
                            <td>
                                <?= $item["email"] ?>
                            </td>
                            <td>
                                <?= $item["phone"] ?>
                            </td>
                            <td>
                                <a href="#" class="delDelivery" id="<?= $item["user_id"] ?>">
                                    <i class="feather-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

</main>

</div>
</div>