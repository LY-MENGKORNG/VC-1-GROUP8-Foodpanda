const trackingBtn = document.getElementById("tracking");
const orderTracks = document.querySelectorAll(".order-track");

for (const order of orderTracks) {
    order.onclick = () => {
        trackingBtn.value = order.dataset.index;
        trackingBtn.type = "submit";
        console.log(trackingBtn);
    }
}