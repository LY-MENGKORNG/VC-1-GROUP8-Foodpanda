<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h3 class="title mb-5">Hi, <?= ($delivery["first_name"]) ?> 👋🏻</h2>
            <div class="row stat-cards d-flex mt-4">
                <div class="col-md-3 col-xl-4">
                    <article class="stat-cards-item rounded-0" style="background: #FBE2DE;">
                        <div class="stat-cards-icon primary">
                            <i data-feather="bar-chart-2" aria-hidden="true"></i>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num text-dark">On going</p>
                            <p class="stat-cards-info__title text-danger fw-bold"><?= count($orders_progress) ?></p>
                            <p class="stat-cards-info__progress text-secondary">
                                <span class="stat-cards-info__profit info">
                                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                                </span> 
                                Last month
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-xl-4">
                    <article class="stat-cards-item rounded-0" style="background: #E5D6EB;">
                        <div class="stat-cards-icon primary">
                            <i data-feather="bar-chart-2" aria-hidden="true"></i>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num text-dark">Shipping</p>
                            <p class="stat-cards-info__title text-danger fw-bold"><?= count($orders_pending) ?></p>
                            <p class="stat-cards-info__progress text-secondary">
                                <span class="stat-cards-info__profit info">
                                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                                </span>
                                Last month
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-xl-4">
                    <article class="stat-cards-item rounded-0" style="background: #C9E9E4;">
                        <div class="stat-cards-icon primary">
                            <i data-feather="bar-chart-2" aria-hidden="true"></i>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num text-dark">Completed</p>
                            <p class="stat-cards-info__title text-danger fw-bold"><?= count($orders_completed) ?></p>
                            <p class="stat-cards-info__progress text-secondary">
                                <span class="stat-cards-info__profit info">
                                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                                </span>
                                Last month
                            </p>
                        </div>
                    </article>
                </div>
            </div>
    </div>
    <div class="container mt-5">
        <h5 class="title mb-4">Timeline <span class="text-info bg-secondary-subtle fw-lighter fs-6 px-1 rounded-lg">Update 5 minutes ago</span></h5>
        <div class="card mb-3 border-0">
            <div class="row g-0 rounded" style="border: 1px solid lightgray;">
                <div class="col-md-6 p-0">
                    <iframe width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Phnom%20Penh%2C%20Cambodia&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="card-body px-0">
                        <div class="row p-3">
                            <div class="col-5 fs-6 d-flex gap-2">
                                <i class="feather-map fw-bold text-info fs-5"></i><span>Now:8:05</span>
                            </div>
                            <div class="col-7">
                                <h5 class="my-1">Being Delivered</h5>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, possimus?
                            </div>
                        </div>
                        <div class="row p-3" style="border-top: 1px solid lightgray;">
                            <div class="col-5 fs-6 d-flex gap-2">
                                <i class="feather-home fw-bold text-info fs-5"></i><span>26 May</span>
                            </div>
                            <div class="col-7">
                                <h5 class="my-1">Waiting</h5>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, dolorum?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container mt-5">
        <h4 class="title">Shipping Report</h4>
        <div class="users-table table-wrapper rounded-lg  mt-3">
            <table class="posts-table table table-striped">
                <thead class="" style="border-bottom: 1px solid gray;">
                    <tr class="">
                        <th>No</th>
                        <th>Recipient</th>
                        <th>Status</th>
                        <th>Fee</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="users-table-info">
                        <td>1</td>
                        <td><?= $delivery["first_name"] ?></td>
                        <td><?= $delivery["last_name"] ?></td>
                        <td><?= $delivery["email"] ?></td>
                        <td><?= $delivery["phone"] ?></td>
                        <td>Action</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->
    </div>
</main>