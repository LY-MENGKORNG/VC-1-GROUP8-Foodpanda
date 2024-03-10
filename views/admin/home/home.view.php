<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Dashboard</h2>
    <div class="row stat-cards">
      <div class="col-md-6 col-xl-3">
        <article class="stat-cards-item">
          <div class="stat-cards-icon primary">
            <i data-feather="bar-chart-2" aria-hidden="true"></i>
          </div>
          <div class="stat-cards-info">
            <p class="stat-cards-info__num">1478 286</p>
            <p class="stat-cards-info__title">Total visits</p>
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
            <i data-feather="file" aria-hidden="true"></i>
          </div>
          <div class="stat-cards-info">
            <p class="stat-cards-info__num">1478 286</p>
            <p class="stat-cards-info__title">Total visits</p>
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
            <i data-feather="file" aria-hidden="true"></i>
          </div>
          <div class="stat-cards-info">
            <p class="stat-cards-info__num">1478 286</p>
            <p class="stat-cards-info__title">Total visits</p>
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
            <i data-feather="feather" aria-hidden="true"></i>
          </div>
          <div class="stat-cards-info">
            <p class="stat-cards-info__num">1478 286</p>
            <p class="stat-cards-info__title">Total visits</p>
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
      <div class="col-lg-9">
        <div class="chart">
          <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
        </div>
        <div class="users-table table-wrapper">
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
                          <source srcset="../../assets/images/uploads/restaurants/<?= $restaurant["restaurant_img"] ?>" type="image/webp"><img src="../../assets/images/uploads/restaurants/<?= $restaurant["restaurant_img"] ?>" alt="restaurant">
                        </picture>
                      </div>
                    </label>
                  </td>
                  <td><?= $restaurant["restaurant_name"] ?></td>
                  <td>
                    <div class="pages-table-img">
                      <picture>
                        <source srcset="../../assets/images/uploads/owner_profile/<?= isset($restaurant["profile"]) ? $restaurant["profile"] : 'avatar.png' ?>" type="image/webp"><img src="../../assets/images/uploads/owner_profile/<?= isset($restaurant["profile"]) ? $restaurant["profile"] : 'avatar.png' ?>" alt="profile">
                      </picture>
                      <?= $restaurant["first_name"]." ". $restaurant["last_name"] ?>
                    </div>
                  </td>
                  <td>
                    <?php $status = $restaurant["opening_hour"] ? "active" : "pending" ?>
                    <span class="badge-<?= $status ?>"><?= ucfirst($status) ?></span>
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
      <div class="col-lg-3">
        <article class="customers-wrapper">
          <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
                       <!-- <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="assets/images/svg/customers.svg" type="image/webp"><img src="assets/images/svg/customers.svg" alt=""></picture> -->
        </article>
        <article class="white-block">
          <div class="top-cat-title">
            <h3>Top categories</h3>
            <p>28 Categories, 1400 Posts</p>
          </div>
          <ul class="top-cat-list">
            <li>
              <a href="##">
                <div class="top-cat-list__title">
                  Lifestyle <span>8.2k</span>
                </div>
                <div class="top-cat-list__subtitle">
                  Dailiy lifestyle articles <span class="purple">+472</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="top-cat-list__title">
                  Tutorials <span>8.2k</span>
                </div>
                <div class="top-cat-list__subtitle">
                  Coding tutorials <span class="blue">+472</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="top-cat-list__title">
                  Technology <span>8.2k</span>
                </div>
                <div class="top-cat-list__subtitle">
                  Dailiy technology articles <span class="danger">+472</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="top-cat-list__title">
                  UX design <span>8.2k</span>
                </div>
                <div class="top-cat-list__subtitle">
                  UX design tips <span class="success">+472</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="top-cat-list__title">
                  Interaction tips <span>8.2k</span>
                </div>
                <div class="top-cat-list__subtitle">
                  Interaction articles <span class="warning">+472</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="top-cat-list__title">
                  App development <span>8.2k</span>
                </div>
                <div class="top-cat-list__subtitle">
                  Mobile development articles <span class="warning">+472</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="top-cat-list__title">
                  Nature <span>8.2k</span>
                </div>
                <div class="top-cat-list__subtitle">
                  Wildlife animal articles <span class="warning">+472</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="top-cat-list__title">
                  Geography <span>8.2k</span>
                </div>
                <div class="top-cat-list__subtitle">
                  Geography articles <span class="primary">+472</span>
                </div>
              </a>
            </li>
          </ul>
        </article>
      </div>
    </div>
  </div>
</main>