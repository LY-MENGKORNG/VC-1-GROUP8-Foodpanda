<main class="main users chart-page" id="skip-target">
    <div class="container">
        <div class="food pb-5">
            <h2>All Food</h2>
            <!-- <div class="d-grid d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button">Add Food</button>
            </div> -->
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
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
</main>
</div>
</div>