<div class="py-2 osahan-coming-soon d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="text-center pb-3">
            <h1 class="font-weight-bold"><?= $customer["first_name"] ?>, Your order has been successful</h1>
            <p>Check your order status in <a href="/customer/order"
                    class="font-weight-bold text-decoration-none text-primary">My Orders</a> about next steps
                information.</p>
        </div>

        <div class="bg-white rounded text-center p-4 shadow-sm">
            <h1 class="display-1 mb-4">🎉</h1>
            <h6 class="font-weight-bold mb-2">Preparing your order</h6>
            <p class="small text-muted">Your order will be prepared and will come soon</p>
            <button href="/customer/status_onprocess" class="btn rounded btn-primary btn-lg btn-block">Track My Order</button>
        </div>
    </div>
</div>
<?php if (isset($food_ids)) { ?>
    <script>
        localStorage.removeItem("cart");
        setTimeout(() => {
            window.location.href = "/customer/checkout";
        }, 3000);
    </script>
<?php } ?>