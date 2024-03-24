
// get the category id when we click.
const cates = document.querySelectorAll("#cate");
const btns = document.querySelectorAll("#button");
const inputId = document.getElementById("inputId");
for (let i = 0; i < cates.length; i++) {
    cates[i].onclick = (e) => {
        inputId.name = "cate_id";
        inputId.value = btns[i].value;
        console.log(inputId);
    }
}

// get the food id when we click 
const toRestaurant = document.querySelectorAll("#toRestaurant");
const foods = document.querySelectorAll("#food");
const food_id = document.getElementById("food_id");
for (let i = 0; i < foods.length; i++) {
    foods[i].onclick = (e) => {
        food_id.name = "food_id";
        food_id.value = toRestaurant[i].value;
    }
}
// get the food id when we click 
const toCheckout = document.querySelectorAll("#toCheckout");
const foods2 = document.querySelectorAll("#food2");
const food_id2 = document.getElementById("food_id2");
for (let i = 0; i < foods2.length; i++) {
    foods2[i].onclick = (e) => {
        food_id2.name = "food_id";
        food_id2.value = toCheckout[i].value;
    }
}

// restaurant items
const checkoutContent = document.getElementById("checkoutContent");
const addBtns = document.querySelectorAll("#add");
const foodNames = document.querySelectorAll("#foodName");
const restaurantName = document.querySelectorAll("#restaurantName");
const prices = document.querySelectorAll("#price");
const totalItem = document.getElementById("totalItem");
const pricePay = document.getElementById("pricePay");
const checkoutBtn = document.getElementById("checkout");
const pay = document.getElementById("pay");
const successBtn = document.getElementById("success");

let array = getCheckout();

function saveCheckout(foods) {
    localStorage.setItem('cart', JSON.stringify(foods));
}
function getCheckout() {
    return localStorage.getItem('cart') != undefined ? JSON.parse(localStorage.getItem('cart')) : [];
}
function increaseQty(id) {
    let foods = getCheckout();
    let food = foods.find(food => food.id == id);
    food.quantity += 1;
    saveCheckout(foods);
    displayCheckout()
}
function decreaseQty(id) {
    let foods = getCheckout();
    let food = foods.find(food => food.id == id);
    const index = foods.findIndex(food => food.id == id);
    food.quantity -= 1;
    if (food.quantity == 0) {
        foods.splice(index, 1);
    }
    saveCheckout(foods);
    displayCheckout()
}


function displayCheckout() {
    const foods = getCheckout()
    let price = 0
    if (checkoutContent) {

        checkoutContent.innerHTML = "";
        for (const food of foods) {
            checkoutContent.innerHTML += `
                <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                    <div class="media align-items-center">
                        <div class="mr-2 text-danger">&middot;</div>
                        <div class="media-body">
                            <p class="m-0" id="foodName"> ${food.foodName} </p>
                            <input type="hidden" name="food_name[]" value="${food.foodName}" />
                            <input type="hidden" name="restaurant_name[]" value="${food.restaurantName}" />
                            <input type="hidden" name="price[]" value="${food.price}" />
                            <input type="hidden" name="food_id[]" value="${food.id}" />
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="count-number float-right">
                            <button type="button" id="plus" onclick="decreaseQty(${food.id})" class="btn-sm left dec btn btn-outline-secondary">
                                <i class="feather-minus"></i>
                            </button>
                            <input name="quantity[]" class="count-number-input" type="text" readonly value="${food.quantity}" min="0">
                            <button type="button" id="minus" onclick="increaseQty(${food.id})" class="btn-sm right inc btn btn-outline-secondary">
                                <i class="feather-plus"></i>
                            </button>
                        </span>
                        <p class="text-gray mb-0 float-right ml-2 text-muted small">$${food.price * food.quantity}</p>
                    </div>
                </div>
                `;
            price += food.price * food.quantity;
        }
        if (pricePay) {
            pricePay.textContent = price + " $";
        }
        if (pay) {
            pay.textContent = "PAY $" + price;
        }
        totalItem.textContent = foods.length + " items";
    }
}

for (let i = 0; i < addBtns.length; i++) {
    addBtns[i].onclick = (e) => {
        const foodObject = {
            id: parseInt(e.target.value),
            foodName: foodNames[i].textContent.trim(),
            price: parseInt(prices[i].textContent.trim()),
            quantity: 1,
            restaurantName: restaurantName[i].value.trim()
        }
        let array = getCheckout()
        array.push(foodObject)
        let uniqueArray = [];
        let map = new Map();

        array.forEach(obj => {
            if (!map.has(obj.id)) {
                map.set(obj.id, true);
                uniqueArray.push(obj);
            }
        });

        saveCheckout(uniqueArray);
        displayCheckout()
    }
}
if (checkoutBtn) {
    checkoutBtn.onclick = async (e) => {
        if (getCheckout().length > 0) {
            e.target.href = "/customer/checkout";
        } else {
            window.alert("Please select any orders!");
        }
    }
}
if (successBtn != undefined) {
    successBtn.onclick = (e) => {
        if (getCheckout().length > 0) {
            if (confirm("Are you sure you want to continue this purchase")) {
                successBtn.type = "submit";
            }
        } else {
            window.alert("You did not choose any orders!");
        }
    }
}

displayCheckout();

/* 
    Payment methods 
*/
// card number format
if (document.getElementById('cardNumber')) {
    document.getElementById('cardNumber').addEventListener('input', (e) => {
        var value = e.target.value.replace(/\D/g, '');
        value = value.replace(/(\d{4})(?=\d)/g, '$1 ');
        e.target.value = value.trim();
    });
}

// valid through
if (document.getElementById('validThrough')) {
    document.getElementById('validThrough').addEventListener('input', (e) => {
        const value = e.target.value.replace(/\D/g, ''); // Remove non-digit characters
        const formattedValue = value.replace(/^(\d{2})(\d{2})$/, '$1/$2'); // Format as MM/YY

        if (/^\d{4}$/.test(value)) {
            const month = parseInt(value.substring(0, 2));
            const year = parseInt(value.substring(2, 4));

            const today = new Date();
            const currentYear = today.getFullYear() % 100;
            const currentMonth = today.getMonth() + 1;

            if (year < currentYear || (year === currentYear && month < currentMonth)) {
                e.target.setCustomValidity('Card has expired');
            } else {
                e.target.setCustomValidity('');
            }
        } else {
            e.target.setCustomValidity('Please enter a valid expiration date (MM/YY)');
        }

        e.target.value = formattedValue;
    });
}

// CVV format
if (document.getElementById('cvv')) {
    document.getElementById('cvv').addEventListener('input', (e) => {
        const value = e.target.value.replace(/\D/g, ''); // Remove non-digit characters

        if (/^\d{3,4}$/.test(value)) {
            e.target.setCustomValidity('');
        } else {
            e.target.setCustomValidity('Please enter a valid CVV (3 or 4 digits)');
        }

        e.target.value = value;
    });
}

// promo code 
if (document.getElementById("promoInput")) {
    function checkPromoCode() {
        var promoInput = document.getElementById("promoInput").value.trim();

        // Regular expression to match only alphanumeric characters
        var alphanumericRegex = /^[a-zA-Z0-9]+$/;

        // Check if the promo code matches the pattern
        if (alphanumericRegex.test(promoInput)) {
            // If it's a valid promo code, do something here
            document.getElementById("message").innerHTML = "Promo code accepted!";
        } else {
            // If it's not a valid promo code, show an error message
            document.getElementById("message").innerHTML = "Invalid promo code!";
        }
    }
}

// add new address
if (document.getElementById("addressInput")) {
    document.getElementById("addressInput").oninput = (e) => {
        const locationName = e.target.value.trim();
        const latitude = document.getElementById("latitude");
        const longitude = document.getElementById("longitude");
        const addAdressBtn = document.getElementById("addAddress");
        const errorMessage = document.getElementById("errorMessage");

        getLocationCoordinates(locationName, (error, coordinates) => {
            if (error || locationName.length < 8) {
                errorMessage.textContent = "Location not found!"
                addAdressBtn.type = "button";
            } else {
                errorMessage.textContent = ""
                latitude.value = `${coordinates.lat}`;
                longitude.value = `${coordinates.lng}`;
                addAdressBtn.type = "submit";
            }
        });
    }
}

// edit address
if (document.getElementById("editAddressInput")) {
    const latitude = document.getElementById("edit_latitude");
    const longitude = document.getElementById("edit_longitude");

    function editAddress(e, id) {
        const editAddressBtn = document.getElementById(`editAddressBtn${id}`);
        const EditerrorMessage = document.getElementById(`EditerrorMessage${id}`);
        let locationName = e.target.value;
        
        getLocationCoordinates(locationName, (error, coordinates) => {

            if (error == null && locationName.length > 8) {
                editAddressBtn.type = "submit";
                console.log(editAddressBtn);
                EditerrorMessage.textContent = "";
                latitude.value = `${coordinates.lat}`;
                longitude.value = `${coordinates.lng}`;
            }else {
                EditerrorMessage.textContent = "Location not found!"
                editAddressBtn.type = "button";
                console.log(editAddressBtn);
            }
        });
    }
}

function getLocationCoordinates(locationName, callback) {
    // Construct the API request URL
    const apiUrl = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(locationName)}`;
    let iswork = false;
    // Make a GET request to the API
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                const result = data[0];
                const coordinates = {
                    lat: parseFloat(result.lat),
                    lng: parseFloat(result.lon)
                };
                iswork = true;
                callback(null, coordinates);
            } else {
                callback(new Error('Location not found'));
            }
        })
        .catch(error => {
            if (!iswork) {
                callback(error);
            }
        });
}
