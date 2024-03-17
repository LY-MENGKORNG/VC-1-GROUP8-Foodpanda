<div class="osahan-checkout">
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Checkout</h4>
        </div>
    </div>

    <div class="container position-relative">
        <form action="/customer/success" method="post">
            <div class="py-5 row">
                <div class="col-md-8 mb-3">
                    <div>
                        <div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
                            <div class="osahan-cart-item-profile bg-white p-3">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 font-weight-bold">Delivery Address</h6>
                                    <div class="row">
                                        <?php foreach ($addresses as $address) { 
                                            $address_type = $address["address_type"] ?>
                                            <div class="custom-control col-lg-6 custom-radio mb-3 position-relative border-custom-radio">
                                                <input type="radio" id="address<?= $address["address_id"] ?>" name="address_id"
                                                    class="custom-control-input" required>
                                                <label class="custom-control-label w-100"
                                                    for="address<?= $address["address_id"] ?>">
                                                    <div>
                                                        <div class="p-3 bg-white rounded shadow-sm w-100">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <h6 class="mb-0">
                                                                    <?= $address["address_type"] ?>
                                                                </h6>
                                                                <p class="mb-0 badge badge-secondary ml-auto">
                                                                    <i class="icofont-check-circled"></i>
                                                                    Select
                                                                </p>
                                                            </div>
                                                            <p class="small text-muted m-0"><?= $address["address_name"] ?></p>
                                                        </div>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#editAddress<?= $address["address_id"] ?>"
                                                            class="btn btn-block btn-light border-top">Edit</a>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- edit address -->
                                            <div class="modal fade" id="editAddress<?= $address["address_id"] ?>" tabindex="-1" role="dialog"
                                                aria-labelledby="editAddress<?= $address["address_id"] ?>Label" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <form action="/customer/editAddress" method="post" class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Delivery Address</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-row">
                                                                <div class="col-md-12 form-group">
                                                                    <label class="form-label">Delivery Address</label>
                                                                    <div class="input-group">
                                                                        <select name="delivery_id" class="form-control"
                                                                            id="delivery">
                                                                            <?php foreach ($deliveries as $delivery) { ?>
                                                                                <?php if ($address["delivery_id"] == $delivery["user_id"]) { ?>
                                                                                    <option value="<?= $delivery["user_id"] ?>" selected>
                                                                                        <?= $delivery["first_name"] ?>
                                                                                    </option>
                                                                                <?php } else { ?>
                                                                                    <option value="<?= $delivery["user_id"] ?>">
                                                                                    <?= $delivery["first_name"] ?>
                                                                                </option>
                                                                                <?php }
                                                                             } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <label class="form-label">Complete Address</label>
                                                                    <div class="input-group">
                                                                        <input name="address_name"
                                                                            placeholder="e.g. Khan Sen Sok, Phnom Penh, Cambodia"
                                                                            type="text" class="form-control" id="editAddress"
                                                                            value="<?= $address["address_name"] ?>">
                                                                        <div class="input-group-append"><button type="button"
                                                                                class="btn btn-outline-secondary"><i
                                                                                    class="feather-map-pin"></i></button></div>
                                                                        <p class="text-danger" id="EditerrorMessage"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-0 col-md-12 form-group">
                                                                    <label class="form-label">Nickname</label>
                                                                    <div class="btn-group btn-group-toggle w-100"
                                                                        data-toggle="buttons">
                                                                        <label class="btn btn-outline-secondary <?= $address_type == "Home" ? "active" : "" ?> ">
                                                                            <input type="radio" name="address_type" value="Home"
                                                                                id="option1" <?= $address_type == "Home" ? "checked" : "" ?>> Home
                                                                        </label>
                                                                        <label class="btn btn-outline-secondary <?= $address_type == "Work" ? "active" : "" ?>">
                                                                            <input type="radio" name="address_type" value="Work"
                                                                                id="option2" <?= $address_type == "Work" ? "checked" : "" ?>> Work
                                                                        </label>
                                                                        <label class="btn btn-outline-secondary <?= $address_type == "Other" ? "active" : "" ?>">
                                                                            <input type="radio" name="address_type"
                                                                                value="Other" id="option3" <?= $address_type == "Other" ? "checked" : "" ?>> Other
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer p-0 border-0">
                                                            <div class="col-6 m-0 p-0">
                                                                <button type="button" class="btn border-top btn-lg btn-block"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                            <div class="col-6 m-0 p-0">
                                                                <button type="button" id="editAddress"
                                                                    class="btn btn-primary btn-lg btn-block">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal">
                                        ADD NEW ADDRESS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- add delivery address -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="/customer/address" method="post" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Delivery Address</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="col-md-12 form-group">
                                                <label class="form-label">Delivery Address</label>
                                                <div class="input-group">
                                                    <select name="delivery_id" class="form-control" id="delivery">
                                                        <?php foreach ($deliveries as $delivery) { ?>
                                                            <option value="<?= $delivery["user_id"] ?>">
                                                                <?= $delivery["first_name"] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="form-label">Complete Address</label>
                                                <div class="input-group">
                                                    <input name="address_name"
                                                        placeholder="e.g. Khan Sen Sok, Phnom Penh, Cambodia" type="text"
                                                        class="form-control" id="address">
                                                    <div class="input-group-append"><button type="button"
                                                            class="btn btn-outline-secondary"><i
                                                                class="feather-map-pin"></i></button></div>
                                                    <p class="text-danger" id="errorMessage"></p>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-md-12 form-group">
                                                <label class="form-label">Nickname</label>
                                                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                                    <label class="btn btn-outline-secondary active">
                                                        <input type="radio" name="address_type" value="Home" id="option12"
                                                            checked> Home
                                                    </label>
                                                    <label class="btn btn-outline-secondary">
                                                        <input type="radio" name="address_type" value="Work" id="option22">
                                                        Work
                                                    </label>
                                                    <label class="btn btn-outline-secondary">
                                                        <input type="radio" name="address_type" value="Other" id="option32">
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer p-0 border-0">
                                        <div class="col-6 m-0 p-0">
                                            <button type="button" class="btn border-top btn-lg btn-block"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-6 m-0 p-0">
                                            <button type="button" id="addAddress"
                                                class="btn btn-primary btn-lg btn-block">Save
                                                changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <i class="feather-credit-card mr-3"></i> Credit/Debit Card
                                            <i class="feather-chevron-down ml-auto"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <h6 class="m-0">Add new card</h6>
                                        <p class="small">WE ACCEPT <span class="osahan-card ml-2 font-weight-bold">(
                                                Master Card / Visa Card / Rupay )</span></p>
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group">
                                                    <label class="form-label font-weight-bold small">Card number</label>
                                                    <div class="input-group">
                                                        <input type="text" id="cardNumber" maxlength="19"
                                                            pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}"
                                                            class="form-control"
                                                            placeholder="e.g. 1234 5678 9101 1121">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline-secondary">
                                                                <i class="feather-credit-card"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label class="form-label font-weight-bold small">Valid
                                                        through(MM/YY)</label>
                                                    <input type="text" id="validThrough"
                                                        placeholder="Enter Valid through(MM/YY)" maxlength="5"
                                                        pattern="(0[1-9]|1[0-2])\/\d{2}" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label class="form-label font-weight-bold small">CVV</label>
                                                    <input type="text" placeholder="Enter CVV Number" id="cvv" maxlength="4"
                                                        pattern="\d{3,4}" class="form-control">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label class="form-label font-weight-bold small">Name on card</label>
                                                    <input placeholder="Enter Card name" type="text" class="form-control">
                                                </div>
                                                <div class="col-md-12 form-group mb-0">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="custom-checkbox1"
                                                            class="custom-control-input">
                                                        <label title type="checkbox" for="custom-checkbox1"
                                                            class="custom-control-label small pt-1">
                                                            Securely save this
                                                            card for a faster checkout next time.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="feather-globe mr-3"></i> Net Banking
                                            <i class="feather-chevron-down ml-auto"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <form>
                                            <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary active">
                                                    <input type="radio" name="options" id="option1" checked> HDFC
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option2"> ICICI
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option3"> AXIS
                                                </label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group mb-0">
                                                    <label class="form-label small font-weight-bold">Select
                                                        Bank</label><br>
                                                    <select class="custom-select form-control">
                                                        <option>Bank</option>
                                                        <option>KOTAK</option>
                                                        <option>SBI</option>
                                                        <option>UCO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white overflow-hidden">
                                <div class="osahan-card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <i class="feather-dollar-sign mr-3"></i> Cash on Delivery
                                            <i class="feather-chevron-down ml-auto"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body border-top">
                                        <h6 class="mb-3 mt-0 mb-3 font-weight-bold">Cash</h6>
                                        <p class="m-0">Please keep exact change handy to help us serve you better</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                        <div>
                            <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                                <img alt="osahan"
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
                            <div class="bg-white p-3 py-3 border-bottom clearfix">
                                <div class="input-group-sm mb-2 input-group">
                                    <input placeholder="Enter promo code" type="text" class="form-control">
                                    <div class="input-group-append"><button type="button" class="btn btn-primary"><i
                                                class="feather-percent"></i> APPLY</button></div>
                                </div>
                                <div class="mb-0 input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="feather-message-square"></i></span></div>
                                    <textarea placeholder="Any suggestions? We will pass it on..."
                                        aria-label="With textarea" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="bg-white p-3 clearfix border-bottom">
                                <p class="mb-1">Item Total <span class="float-right text-dark" id="totalItem"> </span></p>
                                <p class="mb-1">Restaurant Charges <span class="float-right text-dark">$0.00</span></p>
                                <p class="mb-1">Delivery Fee<span class="text-info ml-1"><i
                                            class="feather-info"></i></span><span class="float-right text-dark">$0.00</span>
                                </p>
                                <p class="mb-1 text-success">Total Discount<span class="float-right text-success"
                                        id="discount">$0.00</span>
                                </p>
                                <hr>
                                <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right" id="pricePay">$
    
                                    </span></h6>
                            </div>
                            <div class="p-3">
                                <button type="button" id="success" class="btn btn-success btn-block btn-lg">
                                    <span id="pay"></span>
                                    <i class="feather-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>