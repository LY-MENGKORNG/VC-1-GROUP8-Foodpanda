<!-- Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-sm-between px-2">
            <h1 class="main-title col-10">Restaurants</h1>
            <button class="btn btn-primary font-weight-bold text-gray rounded" data-bs-toggle="modal"
                data-bs-target="#reg-modal" style="height: 40px;">
                Add Restaurant
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-4">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <h5 class="modal-title" id="modal-title">Create a new Restaurant</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </h5>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/check_add_restaurant" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="restaurant_name">Restaurant Name</label>
                                    <input type="text" name="restaurant_name" id="restaurant_name"
                                        class="form-control border" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" id="location" class="form-control border"
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
                            <div class="row">
                                <div class="input-group mb-3">
                                    <label class="form-label" for="profile">Choose image</label>
                                    <input type="file" name="restaurant_img" class="form-control border" id="profile"
                                        aria-describedby="inputGroupFileAddon01" required>
                                </div>
                            </div>
                            <label for="floatingTextarea">Descriptions</label>
                            <textarea class="form-control" name="description" placeholder="Description"
                                id="floatingTextarea"></textarea>
                            <div class="row mt-2">
                                <input type="hidden" name="owner_id" value="<?= $admin["user_id"] ?>">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 main-card w-100">
            <?php foreach ($restaurants as $restaurant) { ?>
                <div class="stat-card border overflow-hidden rounded-sm">
                    <div class="d-flex align-items-center justify-content-center overflow-hidden" style="height: 130px;">
                        <img src="../../../assets/images/uploads/restaurants/<?= $restaurant["restaurant_img"] ?>"
                            class="img-fluid" alt="..." style="width: 100%;">
                    </div>
                    <div class="card-body child-card">
                        <h5 class="main-title fs-6 m-0">
                            <?= $restaurant["restaurant_name"] ?>
                        </h5>
                        <p class="card-text main-title" style="font-size: 11px; font-weight: thin;">Location: <span class="text-thin mt-1">
                                <?= $restaurant["location"] ?>
                            </span></p>
                        <form action="/admin/restaurant_detail" method="post">
                            <button type="submit" class="btn btn-primary mt-4" name="restaurant_id"
                                value="<?= $restaurant["restaurant_id"] ?>">See more</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>