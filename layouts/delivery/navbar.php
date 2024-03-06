<aside id="sidebar" style="min-height: 100vh;">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <img src="../../assets/images/logo/delivery-bike.png" alt="" width="30px">
        </button>
        <div class="sidebar-logo mt-3">
            <a href="/delivery">
                <h5 class="m-0 p-0">Foodpanda</h5>
            </a>
            <span class="text-white">Delivery</span>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="/delivery/profile" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-agenda"></i>
                <span>Task</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-protection"></i>
                <span>Auth</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/delivery/signin" class="sidebar-link">Login</a>
                </li>
                <li class="sidebar-item">
                    <a href="/delivery/signout" class="sidebar-link">Log out</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                <i class="lni lni-layout"></i>
                <span>Multi Level</span>
            </a>
            <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                        Two Links
                    </a>
                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Link 1</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Link 2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="/delivery/notification" class="sidebar-link">
                <i class="lni lni-popup"></i>
                <span>Notification</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>Setting</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>