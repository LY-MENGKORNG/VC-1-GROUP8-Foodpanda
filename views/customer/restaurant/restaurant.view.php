<div class="d-none">
    <div class="bg-primary p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Customer</h4>
    </div>
</div>
<div class="offer-section py-4">
    <div class="container position-relative">
        <img alt="#" src="../../assets/images/uploads/restaurants/foods/<?= $foods_info["image"] ?>"
            class="restaurant-pic">
        <div class="pt-3 text-white">
            <h2 class="font-weight-bold">
                <?= $foods_info["restaurant_name"] ?>
            </h2>
            <p class="text-white m-0">963 Madyson Drive Suite 679</p>
            <div class="rating-wrap d-flex align-items-center mt-2">
                <ul class="rating-stars list-unstyled">
                    <li>
                        <?php for ($i = 0; $i < intval($foods_info["restaurant_rate"]); $i++) { ?>
                            <i class="feather-star text-warning"></i>
                        <?php }
                        for ($i = 0; $i < 5 - intval($foods_info["restaurant_rate"]); $i++) { ?>
                            <i class="feather-star"></i>
                        <?php } ?>
                    </li>
                </ul>
                <p class="label-rating text-white ml-2 small"> (2 Reviews)</p>
            </div>
        </div>
        <div class="pb-4">
            <div class="row">
                <div class="col-6 col-md-2">
                    <p class="text-white-50 font-weight-bold m-0 small">Delivery</p>
                    <p class="text-white m-0">Free</p>
                </div>
                <div class="col-6 col-md-2">
                    <p class="text-white-50 font-weight-bold m-0 small">Open time</p>
                    <p class="text-white m-0">
                        <?= $foods_info["opening_hour"] ?>.00 AM
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="p-3 bg-primary bg-primary mt-n3 rounded position-relative">
        <div class="d-flex align-items-center">
            <div class="feather_icon">
                <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                        class="p-2 bg-light rounded-circle font-weight-bold  feather-upload"></i></a>
                <a href="#ratings-and-reviews" class="text-decoration-none text-dark mx-2"><i
                        class="p-2 bg-light rounded-circle font-weight-bold  feather-star"></i></a>
                <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                        class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
            </div>
            <a href="contact-us.html" class="btn btn-sm btn-outline-light ml-auto">Contact</a>
        </div>
    </div>
</div>
<div class="container">
    <p class="font-weight-bold pt-4 m-0">FEATURED ITEMS</p>
    <div class="row py-4">
        <?php foreach ($restaurants as $foods) { ?>
            <div class="col-md-3 pb-3" style="cursor: pointer;">
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
                        <img alt="#" src="../../assets/images/uploads/restaurants/foods/<?= $foods["image"] ?>"
                            class="img-fluid" width="100%" />
                    </div>
                    <div class="px-3 py-1 position-relative" style="height: 130px;">
                        <div class="list-card-body">
                            <h6 class="mb-1">
                                <?= $foods["food_name"] ?>
                            </h6>
                            <p class="text-gray mb-3">
                                <?= $foods['cate_name'] ?>
                            </p>
                            <p class="text-gray mb-3 time">
                                <span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                        class="feather-clock"></i> 15-30
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
            </div>
        <?php } ?>
    </div>
</div>

<div class="container position-relative">
    <div class="row">
        <div class="col-md-8 pt-3">
            <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                <div class="d-flex item-aligns-center">
                    <p class="font-weight-bold h6 p-3 border-bottom mb-0 w-100">Menu</p>

                </div>
                <div class="row m-0">
                    <h6 class="p-3 m-0 bg-light w-100">Quick Bites <small class="text-black-50">3 ITEMS</small></h6>
                    <div class="col-md-12 px-0 border-top">
                        <div class>
                            <?php $stars = 0; ?>
                            <?php foreach ($restaurants as $restaurant) { ?>
                                <div class="p-3 border-bottom gold-members">
                                    <span class="float-right">
                                        <button type="submit" id="add" class="btn btn-outline-secondary btn-sm"
                                            name="food_id" value="<?= $restaurant["food_id"] ?>">ADD</button>
                                        <input type="hidden" id="restaurantName"
                                            value="<?= $restaurant["restaurant_name"] ?>">
                                    </span>
                                    <div class="media">
                                        <div class="mr-3 font-weight-bold text-danger non_veg">.</div>
                                        <div class="media-body">
                                            <h6 class="mb-1">
                                                <span id="foodName">
                                                    <?= $restaurant["food_name"] ?>
                                                </span>
                                                <span class="badge badge-danger">BEST SELLER</span>
                                            </h6>
                                            <p class="text-muted mb-0"> $
                                                <span id="price">
                                                    <?= $restaurant["price"] ?>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $stars += intval($restaurant["food_rate"]);
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div id="ratings-and-reviews"
                    class="bg-white shadow-sm d-flex align-items-center rounded p-3 mb-3 clearfix restaurant-detailed-star-rating">
                    <h6 class="mb-0">Rate this Place</h6>
                    <div class="star-rating ml-auto">
                        <b class="text-black ml-2">
                            <?= $stars ?>
                        </b>
                        <div class="d-inline-block h6 m-0">
                            <i class="feather-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded p-3 mb-3 clearfix graph-star-rating rounded shadow-sm">
                    <h6 class="mb-0 mb-1">Ratings and Reviews</h6>
                    <p class="text-muted mb-4 mt-1 small">Rated 3.5 out of 5</p>
                    <div class="graph-star-rating-body">
                        <div class="rating-list">
                            <div class="rating-list-left font-weight-bold small">5 Star</div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div role="progressbar" class="progress-bar bg-info" aria-valuenow="56"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                </div>
                            </div>
                            <div class="rating-list-right font-weight-bold small">56 %</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left font-weight-bold small">4 Star</div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div role="progressbar" class="progress-bar bg-info" aria-valuenow="23"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                            <div class="rating-list-right font-weight-bold small">23 %</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left font-weight-bold small">3 Star</div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div role="progressbar" class="progress-bar bg-info" aria-valuenow="11"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 11%;"></div>
                                </div>
                            </div>
                            <div class="rating-list-right font-weight-bold small">11 %</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left font-weight-bold small">2 Star</div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div role="progressbar" class="progress-bar bg-info" aria-valuenow="6"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 6%;"></div>
                                </div>
                            </div>
                            <div class="rating-list-right font-weight-bold small">6 %</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left font-weight-bold small">1 Star</div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div role="progressbar" class="progress-bar bg-info" aria-valuenow="4"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 4%;"></div>
                                </div>
                            </div>
                            <div class="rating-list-right font-weight-bold small">4 %</div>
                        </div>
                    </div>
                    <div class="graph-star-rating-footer text-center mt-3"><button type="button"
                            class="btn btn-primary btn-block btn-sm">Rate and Review</button></div>
                </div>
                <div class="bg-white p-3 mb-3 restaurant-detailed-ratings-and-reviews shadow-sm rounded">
                    <a class="text-primary float-right" href="#">Top Rated</a>
                    <h6 class="mb-1">All Ratings and Reviews</h6>
                    <div class="reviews-members py-3">
                        <div class="media">
                            <!-- <a href="#"><img alt="#" src="assets/images/reviewer1.png" class="mr-3 rounded-pill"></a> -->
                            <div class="media-body">
                                <div class="reviews-members-header">
                                    <div class="star-rating float-right">
                                        <div class="d-inline-block" style="font-size: 14px;"><i
                                                class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-0"><a class="text-dark" href="#">Trump</a></h6>
                                    <p class="text-muted small">Tue, 20 Mar 2020</p>
                                </div>
                                <div class="reviews-members-body">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                        roots in a piece of classNameical Latin literature from 45 BC, making it
                                        over 2000 years old.</p>
                                </div>
                                <div class="reviews-members-footer"><a class="total-like btn btn-sm btn-outline-primary"
                                        href="#"><i class="feather-thumbs-up"></i> 856M</a> <a
                                        class="total-like btn btn-sm btn-outline-primary" href="#"><i
                                            class="feather-thumbs-down"></i> 158K</a>
                                    <span class="total-like-user-main ml-2" dir="rtl">
                                        <!-- <a href="#" aria-describedby="tooltip-top0"><img alt="#" src="assets/images/reviewer3.png" class="total-like-user rounded-pill"></a>
                                        <a href="#" aria-describedby="tooltip-top1"><img alt="#" src="assets/images/reviewer4.png" class="total-like-user rounded-pill"></a>
                                        <a href="#"><img alt="#" src="assets/images/reviewer5.png" class="total-like-user rounded-pill"></a>
                                        <a href="#" aria-describedby="tooltip-top3"><img alt="#" src="assets/images/reviewer6.png" class="total-like-user rounded-pill"></a> -->
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a class="text-center w-100 d-block mt-3 font-weight-bold" href="#">See All Reviews</a>
                </div>
                <div class="bg-white p-3 rating-review-select-page rounded shadow-sm">
                    <h6 class="mb-3">Leave Comment</h6>
                    <div class="d-flex align-items-center mb-3">
                        <p class="m-0 small">Rate the Place</p>
                        <div class="star-rating ml-auto">
                            <div class="d-inline-block"><i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star"></i>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="form-group"><label class="form-label small">Your Comment</label><textarea
                                class="form-control"></textarea></div>
                        <div class="form-group mb-0"><button type="button" class="btn btn-primary btn-block"> Submit
                                Comment </button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-3">
            <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                    <img alt="<?= $food_info["restaurant_name"] ?>"
                        src="../../../assets/images/uploads/restaurants/<?= $foods_info["restaurant_img"]; ?>"
                        class="mr-3 rounded-circle img-fluid" style="width: 60px; height: 60px;">
                    <div class="d-flex flex-column">
                        <h6 class="mb-1 font-weight-bold">
                            <?= $foods_info["restaurant_name"] ?>
                        </h6>
                        <p class="mb-0 small text-muted"><i class="feather-map-pin"></i>
                            <?= $foods_info["location"] ?>
                        </p>
                    </div>
                </div>
                <div class="bg-white border-bottom py-2" id="checkoutContent">
                </div>
                <div class="bg-white p-3 clearfix border-bottom">
                    <p class="mb-1">Item Total <span class="float-right text-dark" id="totalItem"> </span></p>
                    <p class="mb-1">Restaurant Charges <span class="float-right text-dark">$0.00</span></p>
                    <p class="mb-1">Delivery Fee<span class="text-info ml-1"><i class="feather-info"></i></span><span
                            class="float-right text-dark">$0.00</span></p>
                    <p class="mb-1 text-success">Total Discount<span class="float-right text-success"
                            id="discount">$0.00</span>
                    </p>
                    <hr>
                    <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right" id="pricePay">$

                        </span></h6>
                </div>
                <div class="p-3">
                    <a id="checkout" class="btn btn-success btn-block btn-lg text-white">
                        CHECK OUT
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>