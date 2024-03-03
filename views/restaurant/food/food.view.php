<main class="main users chart-page" id="skip-target">
    <div class="container">
        <div class="container-fluid d-flex justify-content-between">
            <h2 class="main-title">All Food</h2>
            <div class="d-flex flex-row justify-content-sm-between px-2">
                <button class="btn btn-primary font-weight-bold text-gray rounded" data-bs-toggle="modal" data-bs-target="#deliveryModal">
                    Add Food
                </button>
            </div>
        </div>

        <div class="modal fade" id="deliveryModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-4">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <h5 class="modal-title" id="modal-title">Create a new Food</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </h5>
                    </div>
                    <div class="modal-body">
                        <form action="/restaurant/delivery/check_add_delivery" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="food_name">Food Name</label>
                                    <input type="text" name="food_name" id="food_name" class="form-control border" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control border" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="qty">Quantity</label>
                                    <input type="number" name="quantity" id="qty" class="form-control border" min="0" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="pri">Price</label>
                                    <input type="number" name="price" id="pri" class="form-control border" min="0" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="rating">Rating</label>
                                    <input type="number" name="rating" id="rating" class="form-control border" min="0" max="5" required>
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
        <div class="users-table table-wrapper rounded-lg add-border mt-4">
            <table class="posts-table">
                <thead>
                    <tr class="users-table-info">
                        <th>Food Name</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>price</th>
                        <th>rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($AllFood as $food) { ?>
                        <tr>
                            <td><?= $food['food_name'] ?></td>
                            <td><?= $food['image'] ?></td>
                            <td><?= $food['quantiry'] ?></td>
                            <td><?= $food['price'] ?></td>
                            <td><?= $food['rating'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
</div>
</div>