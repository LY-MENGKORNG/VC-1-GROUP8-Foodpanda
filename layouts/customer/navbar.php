
<header class="section-header">
  <section class="header-main shadow-sm bg-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-1">
          <a href="/customer" class="brand-wrap mb-0 d-flex">
            <img alt="logo foodpanda" class="img-fluid" src="../../assets/images/logo/panda-logo.png" />
          </a>
        </div>
        <div class="col-3 d-flex align-items-center m-none">
          <div class="dropdown mr-3">
            <a class="btn-border-1 text-dark dropdown-toggle d-flex align-items-center py-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div>
                <i class="feather-map-pin mr-2 text-white rounded-pill p-2 icofont-size main_bg"></i>
              </div>
              <div>
                <p class="text-dark mb-0 small">Select Location</p>
                  Phnom Penh
              </div>
            </a>
            <div class="dropdown-menu p-0 drop-loc" aria-labelledby="navbarDropdown">
              <div class="osahan-country">
                <div class="search_location main_bg p-3 text-right">
                  <div class="input-group rounded shadow-sm overflow-hidden">
                    <div class="input-group-prepend">
                      <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block">
                        <i class="feather-search"></i>
                      </button>
                    </div>
                    <input type="text" class="shadow-none border-0 form-control" placeholder="Enter Your Location" />
                  </div>
                </div>
                <div class="p-3 border-bottom">
                  <a href="/customer" class="text-decoration-none">
                    <p class="font-weight-bold text-primary m-0">
                      <i class="feather-navigation"></i> New York, USA
                    </p>
                  </a>
                </div>
                <div class="filter">
                  <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom">
                    Choose your country
                  </h6>
                  <div class="custom-control border-bottom px-0 custom-radio">
                    <input type="radio" id="customRadio1" name="location" class="custom-control-input" />
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio1">Afghanistan</label>
                  </div>
                  <div class="custom-control border-bottom px-0 custom-radio">
                    <input type="radio" id="customRadio2" name="location" class="custom-control-input" checked />
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio2">India</label>
                  </div>
                  <div class="custom-control border-bottom px-0 custom-radio">
                    <input type="radio" id="customRadio3" name="location" class="custom-control-input" />
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio3">USA</label>
                  </div>
                  <div class="custom-control border-bottom px-0 custom-radio">
                    <input type="radio" id="customRadio4" name="location" class="custom-control-input" />
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio4">Australia</label>
                  </div>
                  <div class="custom-control border-bottom px-0 custom-radio">
                    <input type="radio" id="customRadio5" name="location" class="custom-control-input" />
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio5">Japan</label>
                  </div>
                  <div class="custom-control px-0 custom-radio">
                    <input type="radio" id="customRadio6" name="location" class="custom-control-input" />
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio6">China</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-8">
          <div class="d-flex align-items-center justify-content-end pr-5">
            <a href="/customer/search" class="widget-header mr-4 text-dark">
              <div class="icon d-flex align-items-center">
                <i class="feather-search h6 mr-2 mb-0"></i>
                <span>Search</span>
              </div>
            </a>

            <a href="/customer/offers" class="btn main_bg widget-header mr-4 text-white m-none">
              <div class="icon d-flex align-items-center">
                <i class="feather-disc h6 mr-2 mb-0"></i>
                <span>Offers</span>
              </div>
            </a>

            <a href="/customer/signin" class="widget-header mr-4 text-dark m-none">
              <div class="icon d-flex align-items-center">
                <i class="feather-user h6 mr-2 mb-0"></i>
                <span>Sign in</span>
              </div>
            </a>

            <div class="dropdown mr-4 m-none">
              <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt="#" src="../../assets/images/uploads/customer_profile/<?= isset($customer) ? $customer["image"] : 'avatar.png' ?>" class="img-fluid rounded-circle header-user mr-2 header-user" style="height: 35px; width: 35px;" />
                <span class="main_color"><?= isset($customer) ? ucfirst($customer['first_name']) : "" ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/customer/profile">My account</a>
                <a class="dropdown-item" href="faq.html">Delivery support</a>
                <a class="dropdown-item" href="contact-us.html">Contant us</a>
                <a class="dropdown-item" href="terms.html">Term of use</a>
                <a class="dropdown-item" href="privacy.html">Privacy policy</a>
                <a class="dropdown-item" href="/customer/signout">Logout</a>
              </div>
            </div>

            <a href="/customer/checkout" class="widget-header mr-4 text-dark">
              <div class="icon d-flex align-items-center">
                <i class="feather-shopping-cart h6 mr-2 mb-0"></i>
                <span>Cart</span>
              </div>
            </a>
            <a class="toggle main_bg rounded p-left-5" href="#" >
              <span class="text-dark"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>