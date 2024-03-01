<!-- Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-sm-between px-2">
            <h1 class="main-title col-10">Restaurants</h1>
            <a href="/admin/add_restaurant">
                <button class="btn btn-primary font-weight-bold text-gray rounded">
                    Add Restaurant
                </button>
            </a>
        </div>

        <div class="container-fluid mt-3 main-card">
            <?php foreach ($restaurants as $restaurant) { ?>
                <div class="card shadow overflow-hidden">
                    <div class="d-flex align-items-center justify-content-center overflow-hidden" style="height: 130px;">
                        <img src="../../../assets/images/uploads/restaurants/<?= $restaurant["restaurant_img"] ?>" class="img-fluid" alt="..." style="width: 100%;">
                    </div>
                    <div class="card-body child-card">
                        <h5 class="card-title"><?= $restaurant["restaurant_name"] ?></h5>
                        <p class="card-text text-bolder">Location: <span class="text-thin"><?= $restaurant["location"] ?></span></p>
                        <form action="/admin/restaurant_detail" method="post">
                            <button type="submit" class="btn btn-primary mt-4" name="restaurant_id" value="<?= $restaurant["restaurant_id"]?>">See more</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>