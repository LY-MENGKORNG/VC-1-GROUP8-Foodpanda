<div class="d-none">
    <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">My Order</h4>
    </div>
</div>
<section class="py-4 osahan-main-body">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <ul class="nav nav-tabsa custom-tabsa border-0 flex-column bg-white rounded overflow-hidden shadow-sm p-2 c-t-order"
                    id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link border-0 text-dark py-3 active" id="progress-tab" data-toggle="tab" href="#progress"
                            role="tab" aria-controls="progress" aria-selected="true">
                            <i class="feather-clock mr-2 text-warning mb-0"></i> On Progress</a>
                    </li>
                    <li class="nav-item border-top" role="presentation">
                        <a class="nav-link border-0 text-dark py-3" id="completed-tab" data-toggle="tab"
                            href="#completed" role="tab" aria-controls="completed" aria-selected="false">
                            <i class="feather-check mr-2 text-success mb-0"></i> Completed</a>
                    </li>
                    <li class="nav-item border-top" role="presentation">
                        <a class="nav-link border-0 text-dark py-3" id="canceled-tab" data-toggle="tab" href="#canceled"
                            role="tab" aria-controls="canceled" aria-selected="false">
                            <i class="feather-x-circle mr-2 text-danger mb-0"></i> Canceled</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content col-md-9" id="myTabContent">
                <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                    <div class="order-body">
                        <?php foreach ($orders_completed as $order) { ?>
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="../../assets/images/popular5.png" style="width: 100%;"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div class="">
                                            <p class="mb-0 font-weight-bold"><a href="/customer/restaurant"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a class="btn btn-outline-warning btn-sm"
                                                    href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                            <p class="small font-weight-bold text-center"><i class="feather-clock"></i>
                                                06/04/2020</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="small">
                                            <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                            <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                        </div>
                                        <div class="text-muted m-0 ml-auto mr-3 small">Total Payment<br>
                                            <span class="text-dark font-weight-bold">$12.74</span>
                                        </div>
                                        <div class="text-right">
                                            <a href="/customer/checkout" class="btn btn-primary px-3">Reorder</a>
                                            <a href="/customer/contact" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="progress" role="tabpanel" aria-labelledby="progress-tab">
                    <div class="order-body">
                        <?php foreach ($orders_progress as $order) { ?>
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3">
                                        <div class="text-muted mr-3">
                                            <img alt="#"
                                                src="../../assets/images/uploads/restaurants/<?= $order["restaurant_img"] ?>"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div>
                                            <p class="mb-0 font-weight-bold"><a href="/customer/restaurant"
                                                    class="text-dark">
                                                    <?= $order["restaurant_name"] ?>
                                                </a></p>
                                            <p class="mb-0">PROMO CODE |</p>
                                            <p></p>
                                            <p class="mb-0 small"><a class="btn btn-outline-success btn-sm"
                                                    href="/customer/status_onprocess">View Details</a></p>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="bg-warning text-white py-1 px-2 rounded small mb-1">On Process</p>
                                            <p class="small font-weight-bold text-center">
                                                <i class="feather-clock"></i>
                                                <?= $order["order_date"] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="small">

                                            <?php
                                            $total_payment = 0;
                                            foreach ($products as $product) {
                                                if ($order["order_date"] == $product["checkout_date"]) {
                                                    $total_payment += intval($product["price_amount"]);
                                                    ?>
                                                    <p class="text- font-weight-bold mb-0">
                                                        <?= $product["food_name"] . " x " . $product["quantity"] ?>
                                                    </p>
                                                <?php }
                                            } ?>
                                        </div>
                                        <div class="text-muted m-0 ml-auto mr-3 small">Total Payment<br>
                                            <span class="text-dark font-weight-bold">$
                                                <?= $total_payment ?>
                                            </span>
                                        </div>
                                        <div class="text-right">
                                            <a href="status_onprocess.html" class="btn btn-primary px-3">Track</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">
                    <div class="order-body">
                        <?php foreach ($orders_cancel as $order) { ?>
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="assets/images/popular6.png"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div>
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a href="status_canceled.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="bg-danger text-white py-1 px-2 rounded small mb-1">Payment failed
                                            </p>
                                            <p class="small font-weight-bold text-center"><i class="feather-clock"></i>
                                                06/04/2020</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="small">
                                            <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                            <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                        </div>
                                        <div class="text-muted m-0 ml-auto mr-3 small">Total Payment<br>
                                            <span class="text-dark font-weight-bold">$12.74</span>
                                        </div>
                                        <div class="text-right">
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>