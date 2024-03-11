<div class="osahan-home-page">
    <div class="container">
        <div class="pt-4 pb-2 title d-flex align-items-center">
            <h3 class="m-0 text-dark"><?= count($foods) > 0 ? "Trending this week" : "No Trending for this week" ?></h3>
            <?php if (isset($cate_id)) { ?>
                <form action="/customer/trending" class=" ml-auto" method="post">
                    <label for="allTrending" class="font-weight-bold" href="/customer/trending">View all <i class="feather-chevrons-right"></i></label>
                    <button type="submit" id="allTrending" style="display: none;"></button>
                </form>
            <?php } ?>
        </div>

        <div class="row">
            <?php foreach ($foods as $food) { ?>
                <div class="col-md-3 py-3">
                    <div class="list-card bg-white rounded overflow-hidden position-relative shadow-sm" style="height: 300px;">
                        <div class="list-card-image overflow-hidden" style="height: 55%;">
                            <div class="star position-absolute">
                                <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                            </div>
                            <div class="favourite-heart text-danger position-absolute">
                                <a href="#"><i class="feather-heart"></i></a>
                            </div>
                            <div class="member-plan position-absolute">
                                <span class="badge badge-dark">Promoted</span>
                            </div>
                            <a href="/customer/restaurant">
                                <img alt="#" src="../../assets/images/uploads/restaurants/foods/<?= $food["image"] ?>" class="img-fluid" width="100%"/>
                            </a>
                        </div>
                        <div class="px-3 py-1 position-relative" style="height: 45%;">
                            <div class="list-card-body">
                                <h6 class="mb-1">
                                    <a href="/customer/restaurant" class="text-black"><?= $food["food_name"] ?>
                                    </a>
                                </h6>
                                <p class="text-gray mb-3"><?= $food['cate_name'] ?></p>
                                <p class="text-gray mb-3 time">
                                    <span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–30
                                        min</span>
                                    <span class="float-right text-black-50"> $350 FOR TWO</span>
                                </p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span>
                                <small> Use Coupon OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>