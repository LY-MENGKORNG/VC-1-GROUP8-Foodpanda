<main class="main users chart-page" id="skip-target">
<?php if (count($categories) != 0) { ?>
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-sm-between px-2">
            <h1 class="main-title col-9">List Foods</h1>
            <button class="btn btn-outline-primary col-2 font-weight-bold text-gray rounded" data-bs-toggle="modal" data-bs-target="#categoryModal">
                Add Food
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
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
                        <div class="form-group m-auto border border-info rounded-circle d-flex justify-content-center align-items-center" style="width: 100px; height: 100px;">
                            <input type="file" name="image" id="image" style="display: none;" required>
                            <label for="image">
                                <i class="feather-image text-primary" style="font-size: 50px;"></i>
                            </label>
                        </div>
                        <div class="row d-flex gap-3 mt-4">
                            <div class="form-group col-6">
                                <label for="food_name">Food Name:</label>
                                <input type="text" name="food_name" id="food_name" class="form-control border border-info" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="price">Price:</label>
                                <input type="number" name="price" id="price" min="0" class="form-control border border-info" required>
                            </div>
                        </div>
                        <div class="row d-flex gap-3">
                            <div class="form-group col-6">
                                <label for="quantity">Quantity:</label>
                                <input type="number" name="quantity" id="quantity" min="0" class="form-control border border-info" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="rating">Rating:</label>
                                <input type="number" name="rating" id="rating" min="0" max="5" class="form-control border border-info" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cate">Category:</label>
                            <select name="cate_id" id="cate" class="form-control form-select-md border border-info" required>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?= $category["cate_id"] ?>"><?= $category["cate_name"] ?></option>
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

    <div class="users-table table-wrapper mt-4 p-4">
        <table class="posts-table rounded-3">
            <thead>
                <tr class="users-table-info  bg-transparent">
                    <th>
                        <label class="users-table__checkbox ms-20">
                            <input type="checkbox" class="check-all">
                            Image
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
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture class="">
                                        <source srcset="../../assets/images/uploads/restaurants/foods/<?= isset($item["image"]) ? $item["image"] : 'Salad.png' ?>" type="image/webp">
                                        <div class="rounded overflow-hidden" style="width: 60px; height: 40px;">
                                            <img src="../../assets/images/uploads/restaurants/foods/<?= isset($item["image"]) ? $item["image"] : 'Salad.png' ?>" alt="food">
                                        </div>
                                    </picture>
                                </div>
                            </label>
                        </td>
                        <td><?= $item["food_name"] ?></td>
                        <td><?= $item["price"] ?>$</td>
                        <td><?= $item["quantity"] ?></td>
                        <td><?= $item["food_rate"] ?></td>
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
<?php } else { ?>
    <div class="container h-100">
        
    </div>
<?php } ?>

</main>