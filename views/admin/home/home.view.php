<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Dashboard</h2>
    <div class="row stat-cards">
      <div class="col-md-6 col-xl-3">
        <article class="stat-cards-item">
          <div class="stat-cards-icon primary">
            <i data-feather="shopping-cart" aria-hidden="true"></i>
          </div>
          <div class="stat-cards-info">
            <p class="stat-cards-info__num">
              <?= count($list_orders) ?>
            </p>
            <p class="stat-cards-info__title">Total Orders</p>
            <p class="stat-cards-info__progress">
              <span class="stat-cards-info__profit success">
                <i data-feather="trending-up" aria-hidden="true"></i>4.07%
              </span>
              Last month
            </p>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-3">
        <article class="stat-cards-item">
          <div class="stat-cards-icon warning">
            <i data-feather="dollar-sign" aria-hidden="true"></i>
          </div>
          <div class="stat-cards-info">
            <p class="stat-cards-info__num">$
              <?= $income ?>
            </p>
            <p class="stat-cards-info__title">Total Income</p>
            <p class="stat-cards-info__progress">
              <span class="stat-cards-info__profit success">
                <i data-feather="trending-up" aria-hidden="true"></i>0.24%
              </span>
              Last month
            </p>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-3">
        <article class="stat-cards-item">
          <div class="stat-cards-icon purple">
            <i data-feather="users" aria-hidden="true"></i>
          </div>
          <div class="stat-cards-info">
            <p class="stat-cards-info__num">
              <?= count($customers) ?>
            </p>
            <p class="stat-cards-info__title">Total Users</p>
            <p class="stat-cards-info__progress">
              <span class="stat-cards-info__profit danger">
                <i data-feather="trending-down" aria-hidden="true"></i>1.64%
              </span>
              Last month
            </p>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-3">
        <article class="stat-cards-item">
          <div class="stat-cards-icon success">
            <i data-feather="truck" aria-hidden="true"></i>
          </div>
          <div class="stat-cards-info">
            <p class="stat-cards-info__num">
              <?= count($drivers) ?>
            </p>
            <p class="stat-cards-info__title">Total Drivers</p>
            <p class="stat-cards-info__progress">
              <span class="stat-cards-info__profit warning">
                <i data-feather="trending-up" aria-hidden="true"></i>0.00%
              </span>
              Last month
            </p>
          </div>
        </article>
      </div>
    </div>
    <div class="row">
      <div class="col-12 row p-0 pl-2">
        <div class="chart col-lg-9">
          <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
        </div>
        <div class="col-lg-3 p-0 pl-2">
        <!-- <article class="customers-wrapper p-2">
          <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
          <p class="customers__title">New Customers <span>+958</span></p>
          <p class="customers__date">28 Daily Avg.</p>
          <picture>
            <source srcset="assets/images/svg/customers.svg" type="image/webp"><img
              src="assets/images/svg/customers.svg" alt="">
          </picture>
        </article> -->
        <article class="white-block">
          <div class="top-cat-title">
            <h3>Top categories</h3>
            <p>
              <?= count($top_category) ?> Categories
            </p>
          </div>
          <ul class="top-cat-list">
            <?php foreach ($top_category as $category) { ?>
              <li>
                <a href="##">
                  <div class="top-cat-list__title">
                    <?= $category["cate_name"] ?> <span>
                      <?= $category["cate_id"] ?>.2k
                    </span>
                  </div>
                  <div class="top-cat-list__subtitle">
                    <?= $category["description"] ?> <span class="purple">+472</span>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
        </article>
      </div>
      </div>
      <div class="users-table table-wrapper shadow-sm">
        <table class="posts-table">
          <thead>
            <tr class="users-table-info">
              <th>
                <label class="users-table__checkbox ms-20">
                  <input type="checkbox" class="check-all">Restaurant
                </label>
              </th>
              <th>Restaurant Name</th>
              <th>Owner</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($restaurant_info as $restaurant) { ?>
              <tr>
                <td>
                  <label class="users-table__checkbox">
                    <input type="checkbox" class="check">
                    <div class="categories-table-img">
                      <picture>
                        <source srcset="../../assets/images/uploads/restaurants/<?= $restaurant["restaurant_img"] ?>"
                          type="image/webp"><img
                          src="../../assets/images/uploads/restaurants/<?= $restaurant["restaurant_img"] ?>"
                          alt="restaurant">
                      </picture>
                    </div>
                  </label>
                </td>
                <td>
                  <?= $restaurant["restaurant_name"] ?>
                </td>
                <td>
                  <div class="pages-table-img">
                    <picture class="d-flex flex-row align-items-end">
                      <source
                        srcset="../../assets/images/uploads/owner_profile/<?= isset ($restaurant["profile"]) ? $restaurant["profile"] : 'avatar.png' ?>"
                        type="image/webp"><img
                        src="../../assets/images/uploads/owner_profile/<?= isset ($restaurant["profile"]) ? $restaurant["profile"] : 'avatar.png' ?>"
                        alt="profile">
                      <?= $restaurant["first_name"] . " " . $restaurant["last_name"] ?>
                    </picture>
                  </div>
                </td>
                <td>
                  <?php $status = $restaurant["opening_hour"] ? "active" : "pending";
                    $status_class = $status == "active" ? "opening" : "closed";
                  ?>
                  <span class="badge-<?= $status ?>">
                    <?= ucfirst($status_class) ?>
                  </span>
                </td>
                <td>
                  <span class="p-relative">
                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                      <div class="sr-only">More info</div>
                      <i data-feather="more-horizontal" aria-hidden="true"></i>
                    </button>
                    <ul class="users-item-dropdown dropdown">
                      <li><a href="##">Edit</a></li>
                      <li><a href="##">Trash</a></li>
                    </ul>
                  </span>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>