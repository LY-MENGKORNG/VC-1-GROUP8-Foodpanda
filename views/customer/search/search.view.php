<div class="d-none">
    <div class="bg-primary p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Search</h4>
    </div>
</div>
<div class="osahan-popular">

    <div class="container">
        <div class="search py-5">
            <div class="input-group mb-4">
                <input type="text" class="form-control form-control-lg input_search border-right-0"
                    id="inlineFormInputGroup" placeholder="Search...">
                <div class="input-group-prepend">
                    <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i
                            class="feather-search"></i></div>
                </div>
            </div>

            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active border-0 bg-light text-dark rounded" id="restaurant-tab" data-toggle="tab"
                        href="#restaurant" role="tab" aria-controls="restaurant" aria-selected="true"><i
                            class="feather-home mr-2"></i>Restaurants (
                        <?= count($restaurant_info) ?>)
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border-0 bg-light text-dark rounded ml-3" id="dishes-tab" data-toggle="tab"
                        href="#dishes" role="tab" aria-controls="dishes" aria-selected="false"><i
                            class="feather-disc mr-2"></i>Dishes (
                        <?= count($food_info) ?>)
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="restaurant" role="tabpanel" aria-labelledby="restaurant-tab">

                    <div class="container mt-4 mb-4 p-0">
                        <div class="row" id="restaurantContainer">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade my-4 p-0" id="dishes" role="tabpanel" aria-labelledby="dishes-tab">
                    <div class="row" id="foodContainer">

                    </div>
                </div>
            </div>

        </div>
    </div>

<?php
$js_restaurant_info = json_encode($restaurant_info);
$js_food_info = json_encode($food_info);
?>
<script>
    let restaurantInfo = <?php echo $js_restaurant_info; ?>;
    let foodInfo = <?php echo $js_food_info; ?>;
    const inlineFormInputGroup = document.getElementById("inlineFormInputGroup");
    const restaurantContainer = document.getElementById("restaurantContainer");
    const foodContainer = document.getElementById("foodContainer");
</script>

<!-- // search for restaurant -->
<script>
    function displayListRestaurants(restaurants) {
        restaurantContainer.innerHTML = "";

        restaurants.forEach(restaurant => {
            let stars = ""
            for (let i = 0; i < parseInt(restaurant["11"]); i++) {
                stars += `<i class="feather-star star_active mx-1"></i>`;
            }
            for (let i = 0; i < 5 - parseInt(restaurant["11"]); i++) {
                stars += `<i class="feather-star mx-1"></i>`;
            }
            restaurantContainer.innerHTML += `
        <div class="col-md-3 pb-3">
        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
            <div class="list-card-image">
                <div class="star position-absolute">
                    <span class="badge badge-success">
                        <i class="feather-star"></i>
                        ${restaurant["11"]}.1 (${restaurant["11"]}00+)
                    </span>
                </div>
                <div class="favourite-heart text-danger position-absolute">
                    <a href="#"><i class="feather-heart"></i></a>
                </div>
                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                <a href="/customer/restaurant">
                    <img alt="#" src="../../../assets/images/uploads/restaurants/${restaurant['10']}" class="img-fluid item-img w-100">
                </a>
            </div>
            <div class="p-3 position-relative">
                <div class="list-card-body">
                    <h6 class="mb-1"><a href="/customer/restaurant" class="text-black">${restaurant["4"]}</a>
                    </h6>
                    <p class="text-gray mb-1 small">• Location • ${restaurant["5"]}</p>
                    <p class="text-gray mb-1 rating">
                    <ul class="rating-stars list-unstyled">
                        <li> ${stars} </li>
                    </ul>
                    </p>
                </div>
                <div class="list-card-badge">
                    <span class="badge badge-danger">OFFER</span> <small>65%</small>
                </div>
            </div>
        </div>
    </div>
    `;
        });
    }
</script>
<!-- // search for foods -->
<script>
    function displayListFoods(foods) {
        foodContainer.innerHTML = "";

        foods.forEach(food => {
            let stars = ""
            for (let i = 0; i < parseInt(food["food_rate"]); i++) {
                stars += `<i class="feather-star star_active mx-1"></i>`;
            }
            for (let i = 0; i < 5 - parseInt(food["food_rate"]); i++) {
                stars += `<i class="feather-star mx-1"></i>`;
            }
            foodContainer.innerHTML += `
        <div class="col-md-3 pb-3">
            <div class="list-card bg-white rounded overflow-hidden position-relative shadow-sm" style="height: 270px">
                <div class="list-card-image overflow-hidden" style="height: 50%">
                    <div class="star position-absolute">
                        <span class="badge badge-success">
                            <i class="feather-star"></i>
                            ${food["food_rate"]}.1 (${food["food_rate"]}00+)
                        </span>
                    </div>
                    <div class="favourite-heart text-danger position-absolute">
                        <a href="#"><i class="feather-heart"></i></a>
                    </div>
                    <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                    <a href="/customer/restaurant">
                        <img alt="#" src="../../../assets/images/uploads/restaurants/foods/${food['image']}" class="img-fluid item-img w-100">
                    </a>
                </div>
                <div class="p-3 position-relative" style="style="height: 50%">
                    <div class="list-card-body">
                        <h6 class="mb-1"><a href="/customer/restaurant" class="text-black">${food["restaurant_name"]}</a>
                        </h6>
                        <p class="text-gray mb-1 small">• Category • ${food["cate_name"]} Food</p>
                        <p class="text-gray mb-1 rating">
                        <ul class="rating-stars list-unstyled">
                            <li> ${stars} </li>
                        </ul>
                        </p>
                    </div>
                    <div class="list-card-badge">
                        <span class="badge badge-danger">OFFER</span> <small>65%</small>
                    </div>
                </div>
            </div>
        </div>
    `; 
        });
    }
</script>

<script>
    inlineFormInputGroup.onkeyup = (e) => {
        const restaurants = restaurantInfo.filter(restaurant => restaurant["4"].toLowerCase().includes(e.target.value.toLowerCase()))
        const foods = foodInfo.filter(food => food["5"].toLowerCase().includes(e.target.value.toLowerCase()))
        displayListRestaurants(restaurants);
        displayListFoods(foods);
    }
    displayListRestaurants(restaurantInfo);
    displayListFoods(foodInfo);

</script>