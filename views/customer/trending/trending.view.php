<div class="osahan-home-page">
    <div class="container">
        <?php if (count($foods) > 0) { ?>
            <div class="pt-4 pb-2 title d-flex align-items-center">
                <h3 class="m-0 text-dark">Trending this week</h3>
                <?php if (isset($cate_id)) { ?>
                    <form action="/customer/trending" class=" ml-auto" method="post">
                        <label for="allTrending" class="font-weight-bold" href="/customer/trending">View all
                            <i class="feather-chevrons-right"></i></label>
                        <button type="submit" id="allTrending" style="display: none;"></button>
                    </form>
                <?php } ?>
            </div>

            <div class="row py-4">
                <?php foreach ($foods as $food) { ?>
                    <form action="/customer/restaurant" method="post" class="col-md-3 pb-3">
                        <label for="toRestaurant" id="food" ​​​​​ style="cursor: pointer;">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm"
                                style="height: 250px;">
                                <div class="list-card-image overflow-hidden" style="height: 130px;">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div>
                                    <img alt="#" src="../../assets/images/uploads/restaurants/foods/<?= $food["image"] ?>"
                                        class="img-fluid" width="100%" />
                                </div>
                                <div class="px-3 py-1 position-relative" style="height: 130px;">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><?= $food["food_name"] ?></h6>
                                        <p class="text-gray mb-3">
                                            <?= $food['cate_name'] ?>
                                        </p>
                                        <p class="text-gray mb-3 time">
                                            <span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                                    class="feather-clock"></i> 15–30
                                                min</span>
                                            <span class="float-right text-black-50"> $350 FOR TWO</span>
                                        </p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-danger">OFFER</span>
                                        <small>45%</small>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input type="hidden" name="" id="food_id">
                        <button id="toRestaurant" type="submit" value="<?= $food["food_id"] ?>" style="display: none;"></button>
                    </form>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="row d-flex align-items-center justify-content-center py-5">
                <div class="col-md-4 py-5">
                    <div class="text-center py-5">
                        <p class="font-weight-bold text-dark h5">Nothing found</p>
                        <p>we could not find anything with this category!</p>
                        <a href="/customer" class="btn btn-primary col-3">
                            <i class="feather-chevrons-left"></i> Back
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>