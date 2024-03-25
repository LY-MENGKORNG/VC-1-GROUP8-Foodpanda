<aside id="sidebar" class="sticky_sidebar top-0" style="height: 100vh;">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <img src="../../assets/images/logo/delivery-bike.png" alt="" width="30px">
        </button>
        <div class="sidebar-logo mt-3">
            <a href="/delivery">
                <h5 class="m-0 p-0">Foodpanda</h5>
            </a>
            <span class="text-white fw-lighter">Delivery</span>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="/delivery/shipping" class="sidebar-link <?= getActivePage('/delivery/shipping') ?>">
                <i class="lni lni-delivery"></i>
                <span class="fw-lighter">Shipping</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/delivery/order" class="sidebar-link <?= getActivePage('/delivery/order') ?>">
                <i class="feather-shopping-cart"></i>
                <span class="fw-lighter">Orders</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/delivery/tracking" class="sidebar-link <?= getActivePage('/delivery/tracking') ?>">
                <i class="lni lni-map-marker"></i>
                <span class="fw-lighter">Tracking</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/delivery/notification" class="sidebar-link <?= getActivePage('/delivery/notification') ?>">
                <i class="lni lni-alarm"></i>
                <span class="fw-lighter">Notification</span>
            </a>
        </li>
    </ul>

    <ul class="sidebar-item">
        <a href="#" class="sidebar-link <?= getActivePage('/delivery/setting') ?> collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#authentiction" aria-expanded="false" aria-controls="authentiction">
            <i class="lni lni-protection"></i>
            <span class="fw-lighter">Authentication</span>
        </a>
        <ul id="setting" class="sidebar-dropdown bg-secondary list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="/delivery/signin" class="sidebar-link <?= getActivePage('/delivery/signin') ?>">
                    <i class="feather-log-in"></i>Sign In
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/delivery/signout" class="sidebar-link <?= getActivePage('/delivery/signout') ?>">
                    <i class="feather-log-out"></i>Sign Out
                </a>
            </li>
        </ul>
    </ul>

    <div class="sidebar-footer">
        <li class="sidebar-item">
            <a href="/delivery/profile" class="sidebar-link <?= getActivePage('/delivery/profile') ?>">
                <i class="lni lni-user"></i>
                <span class="fw-lighter">Profile</span>
            </a>
        </li>
    </div>
</aside>