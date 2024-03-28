<main class="main users chart-page" id="skip-target">
    <div class="container-fluid">
        <div class="d-flex justify-content-between px-2">
            <h1 class="main-title">List Foods</h1>
            <button class="btn btn-primary btn-sm font-weight-bold text-gray rounded" data-bs-toggle="modal"
                data-bs-target="#createFood" style="width: 130px; height: 40px;">
                Add Food
            </button>
        </div>
        <!-- Modal --> 
        <div class="modal fade" id="createFood" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-3">
                    <div class="modal-header"> 
                        <h5 class="modal-title">
                            <h5 class="modal-title" id="modal-title">Create new Food</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </h5>
                    </div>
                    <div class="modal-body">
                        <form action="/restaurant/add_food" method="post" enctype="multipart/form-data">
                            <div class="form-group m-auto overflow-hidden rounded-circle d-flex justify-content-center align-items-center" >
                                <input type="file" name="image" id="image" style="display: none;" required>
                                <label for="image" class="stat-cards-icon purple fs-1 rounded-circle" style="width: 100px; height: 100px;">
                                    <i data-feather="upload" aria-hidden="true"></i>
                                </label>
                            </div>
                            <div class="row d-flex mt-4">
                                <div class="form-group col-6">
                                    <label for="food_name">Food Name:</label>
                                    <input type="text" name="food_name" id="food_name"
                                        class="form-control border border-info" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="price">Price:</label>
                                    <input type="number" name="price" id="price" min="0"
                                        class="form-control border border-info" required>
                                </div>
                            </div>
                            <div class="row d-flex">
                                <div class="form-group col-6">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" name="quantity" id="quantity" min="0"
                                        class="form-control border border-info" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="rating">Rating:</label>
                                    <input type="number" name="rating" id="rating" min="0" max="5"
                                        class="form-control border border-info" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cate">Category:</label>
                                <select name="cate_id" id="cate" class="form-control form-select-md border border-info"
                                    required>
                                    <?php foreach ($categories as $category) { ?>
                                        <option value="<?= $category["cate_id"] ?>">
                                            <?= $category["cate_name"] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn btn-primary col-2 mt-3">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="users-table table-wrapper mt-4 shadow-sm">
        <table class="posts-table rounded-3">
            <thead>
                <tr>
                    <th class="py-3">
                        <label class="users-table__checkbox ms-20">
                            <input type="checkbox" class="check-all">Image
                        </label>
                    </th>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Rating</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($foods as $item) { ?>
                    <tr class="users-table-info  bg-transparent">
                        <td>
                        <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                      <div class="categories-table-img">
                        <picture>
                          <source srcset="../../assets/images/uploads/restaurants/foods/<?= $item["image"] ?>" type="image/webp"><img src="../../assets/images/uploads/restaurants/foods/<?= $item["image"] ?>" alt="<?= $item["food_name"] ?>">
                        </picture>
                      </div>
                        </label>
                        </td>
                        <td> <?= $item["food_name"] ?> </td>
                        <td> <?= $item["price"] ?>$ </td>
                        <td>
                            <?= $item["quantity"] ?>
                        </td>
                        <td>
                            <?= $item["food_rate"] ?>
                        </td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><a class="btn btn-tranparent" data-bs-toggle="modal"
                                            data-bs-target="#editfood<?= $item['food_id'] ?>">Edit</a></li>
                                    <li><a class="btn btn-tranparent" data-bs-toggle="modal"
                                            data-bs-target="#deletefood<?= $item['food_id'] ?>">Trash</a></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                    <!-- edit food -->
                    <div class="modal fade text-dark" id="editfood<?= $item["food_id"] ?>" tabindex="-1"
                        aria-labelledby="modal-title" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content p-3">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        <h5 class="modal-title" id="modal-title">Edit Food</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <form action="/restaurant/edit_food" method="post" enctype="multipart/form-data">
                                        <div class="form-group m-auto border border-info rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 100px; height: 100px;">
                                            <input type="hidden" name="current_image" value="<?= $item["image"] ?>">
                                            <input type="hidden" name="food_id" value="<?= $item["food_id"] ?>">
                                            <input type="file" name="food_img" id="food_img" style="display: none;">
                                            <label for="food_img">
                                                <i class="feather-image text-primary" style="font-size: 50px;"></i>
                                            </label>
                                        </div>
                                        <div class="row d-flex gap-3 mt-4">
                                            <div class="form-group col-6">
                                                <label for="food_name">Food Name:</label>
                                                <input type="text" name="food_name" id="food_name"
                                                    class="form-control border border-info"
                                                    value="<?= $item["food_name"] ?>" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="price">Price:</label>
                                                <input type="number" name="price" id="price" min="0" class="form-control border border-info" value="<?= $item["price"] ?>" required>
                                            </div>
                                        </div>
                                        <div class="row d-flex gap-3">
                                            <div class="form-group col-6">
                                                <label for="quantity">Quantity:</label>
                                                <input type="number" name="quantity" id="quantity" min="0"
                                                    class="form-control border border-info" value="<?= $item["quantity"] ?>"
                                                    required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="rating">Rating:</label>
                                                <input type="number" name="rating" id="rating" min="0" max="5"
                                                    class="form-control border border-info" value="<?= $item["food_rate"] ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cate">Category:</label>
                                            <select name="cate_id" id="cate"
                                                class="form-control form-select-md border border-info" required>
                                                <?php foreach ($categories as $category) { ?>
                                                    <option value="<?= $category["cate_id"] ?>">
                                                        <?= $category["cate_name"] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-end ">
                                            <button type="submit" class="btn btn-primary col-2 mt-3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- delete category -->
                        <div class="modal fade" id="deletefood<?= $item["food_id"] ?>" tabindex="-1"
                            aria-labelledby="modal-title" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header row p-2 m-0">
                                        <div class="alert alert-danger col-12 rounded-0" role="alert">
                                            Are you sure you want to delete this food?
                                        </div>
                                    </div>
                                    <div class="modal-body p-2 m-2 d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary mx-2"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="/restaurant/delete_food" method="post">
                                            <button type="submit" name="food_id" value="<?= $item["food_id"] ?>"
                                                class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
    </div>

</main>