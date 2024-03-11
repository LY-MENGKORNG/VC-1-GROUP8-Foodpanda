
// get the category id when we click.
const cates = document.querySelectorAll("#cate");
const btns = document.querySelectorAll("#button");
const inputId = document.getElementById("inputId");
for (let i = 0; i < cates.length; i++) {
    cates[i].onclick = (e) => {
        inputId.name = "item_id";
        inputId.value = btns[i].value;
        console.log(inputId);
    }
}

// get the food id when we click 
const toRestaurant = document.querySelectorAll("#toRestaurant");
const foods =document.querySelectorAll("#food");
const food_id = document.getElementById("food_id");
for (let i = 0; i < foods.length; i++) {
    foods[i].onclick = (e) => {
        food_id.name = "food_id";
        food_id.value = toRestaurant[i].value;
    }
}
