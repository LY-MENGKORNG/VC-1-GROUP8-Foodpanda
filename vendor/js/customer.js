
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
