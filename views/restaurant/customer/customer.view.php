<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h5 class="main-title">Customer Lists</h5>
    <div class="users-table table-wrapper rounded-lg add-border">
      <div class="main-nav-start row p-4 d-flex justify-content-between">
        <div class="col-12 row d-flex justify-content-between">
          <div class="main-nav-start col-9">
            <div class="search-wrapper">
              <i data-feather="search" aria-hidden="true"></i>
              <input type="text" placeholder="Enter keywords ..." required>
            </div>
          </div>
          <div class="btn-group col-2">
            <button type="button" class="btn btn-primary rounded" data-bs-toggle="dropdown" aria-expanded="false">
              <i data-feather="filter" aria-hidden="true"></i>
              Action
            </button>
            <!-- I will do it next -->
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
      <table class="posts-table">
        <thead>
          <tr class="users-table-info">
            <th>
              <label class="users-table__checkbox ms-20">
                <input type="checkbox" class="check-all">Image
              </label>
            </th>
            <th>Food_name</th>
            <th>Customer_name</th>
            <!-- <th>Status</th> -->
            <th>Date</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($customers as $customer) { ?>
            <tr>
              <td>
                <label class="users-table__checkbox">
                  <input type="checkbox" class="check">
                  <div class="categories-table-img">
                    <picture class="">
                      <source srcset="../../assets/images/uploads/customer_profile/<?= isset($customer["profile"]) ? $customer["profile"] : 'avatar.png' ?>" type="image/webp">
                      <div class="rounded-circle overflow-hidden" style="width: 45px; height: 45px;">
                        <img src="../../assets/images/uploads/customer_profile/<?= isset($customer["profile"]) ? $customer["profile"] : 'avatar.png' ?>" alt="customer">
                      </div>
                    </picture>
                  </div>
                </label>
              </td>
              <td>
                Starting your traveling blog with Vasco
              </td>
              <td>
                <div class="pages-table-img">
                  <?= $customer["first_name"]." ". $customer["last_name"] ?>
                </div>
              </td>
              <!-- <td><span class="badge-pending">Pending</span></td> -->
              <td><?= $customer["registration_date"] ?></td>
              <td>
                <span class="p-relative">
                  <button class="dropdown-btn transparent-btn" type="button" title="More info">
                    <div class="sr-only">More info</div>
                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                  </button>
                  <ul class="users-item-dropdown dropdown">
                    <li><a href="##">Edit</a></li>
                    <li><a href="##">Quick edit</a></li>
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
</main>
</div>
</div>