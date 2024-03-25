<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h5 class="main-title">Order Lists</h5>
    <div class="users-table table-wrapper rounded-lg overflow-hidden shadow-lg">
      <table class="">
        <thead class="">
          <tr class="users-table-info ">
            <th class="py-3">
              <label class="users-table__checkbox ms-20">
                <input type="checkbox" class="check-all">Customer
              </label>
            </th>
            <th>Purchase Date</th>
            <th>Status</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($orders_list as $order) { ?>
            <tr style="background: white;">
              <td>
                <label class="users-table__checkbox">
                  <input type="checkbox" class="check">
                  <div class="categories-table-img">
                    <picture class="d-flex align-items-center">
                      <source
                        srcset="../../assets/images/uploads/customer_profile/<?= isset ($order["profile"]) ? $order["profile"] : 'avatar.png' ?>"
                        type="image/webp">
                      <img
                        src="../../assets/images/uploads/customer_profile/<?= isset ($order["profile"]) ? $order["profile"] : 'avatar.png' ?>"
                        alt="customer" class="rounded-circle border border-gray" style="width: 40px; height: 40px;">
                      <div class="d-flex flex-column">
                        <span class="main_title">
                          <?= $order["first_name"] . " " . $order["last_name"] ?>
                        </span>
                        <span class="text-gray" style="font-size: 12px;">
                          <?= $order["email"] ?>
                        </span>
                      </div>
                    </picture>
                  </div>
                </label>
              </td>
              <td>
                <?= $order["order_date"] ?>
              </td>
              <td class="text-warning">
                <i class="feather-circle bg-warning rounded-circle"></i>
                <?= $order["order_status"] ?>
              </td>
              <td> $
                <?= $order["payment_amount"] ?>.00
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