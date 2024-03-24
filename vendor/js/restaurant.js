const delDeliveryBtns = document.querySelectorAll(".delDelivery");

for (const btn of delDeliveryBtns) {
    btn.onclick = (e) => {
        console.log(btn);
    }
}