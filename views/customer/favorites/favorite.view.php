<div class="osahan-favorites">
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Favorites</h4>
        </div>
    </div>

    <div class="container most_popular py-4">
        <h3 class="title mb-3">Favorites</h3>
        <div class="row">
            <?php if (count($favorites) == 0) { ?>
                <div class="col-12 row d-flex align-items-center justify-content-center py-2">
                    <div class="col-md-4 py-5">
                        <div class="text-center py-5">
                            <p class="font-weight-bold text-dark h5">Nothing found</p>
                            <p>we could not find anything with this favorite!</p>
                            <a href="/customer" class="btn btn-primary col-3">
                                <i class="feather-chevrons-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
            <!-- <div class="col-md-4 mb-3  ">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                            </div>
                            <a href="/restaurant">
                                <img alt="#" src="assets/images/trending1.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="/restaurant" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                <p class="text-gray mb-3 time"><span
                                        class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                            class="feather-clock"></i> 15–25 min</span> <span
                                        class="float-right text-black-50"> $500 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>   -->
            <?php } ?>
        </div>
    </div>