<!-- Main -->
<main class="main users chart-page" id="skip-target">
    <div class="d-flex justify-content-between px-4">
        <h3 class="main-title">Restaurant Owner</h3>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#reg-modal" style="padding: 5px 25px; height: 40px;">
            Add Owner
        </button>
    </div>

    <!-- modal -->
    <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <h5 class="modal-title" id="modal-title">Create new Owner to manage your Restaurant</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>
                </div>
                <div class="modal-body">
                    <form action="/admin/check_add_restaurant_owner" method="post">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control border" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="last_name">Last Name</label>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="users-table table-wrapper shadow-sm rounded orverflow-hidden mt-4 p-4">
        <table class="posts-table">
            <thead>
                <tr class="users-table-info">
                    <th>
                        <label class="users-table__checkbox ms-20">
                            <input type="checkbox" class="check-all">Image
                        </label>
                    </th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Register date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($restaurant_owner as $item) { ?>
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture>
                                        <source srcset="<?= $target_dir_file ?><?= $item["profile"] != null ? $item["profile"] : 'avatar.png' ?>" type="image/webp">
                                        <img src="<?= $target_dir_file ?><?= $item["profile"] != null ? $item["profile"] : 'avatar.png' ?>" class="rounded-circle border" alt="<?= $item["first_name"] ?>" style="width: 40px; height: 40px;">
                                    </picture>
                                </div>
                                <?= $item["first_name"] ?>
                            </label>
                        </td>
                        <td><?= $item["phone"] ?></td>
                        <td><?= $item["email"] ?></td>
                        <td><?= $item["registration_date"] ?></td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><a href="##">Edit</a></li>
                                    <li><a href="##">Quick edit</a></li>
                                    <li><a href="##">Trash</a></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>