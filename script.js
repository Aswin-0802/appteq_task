// script.js
function filter() {
    let input = document.getElementById("search").value.toLowerCase();
    let items = document.querySelectorAll(".symbol-item");
    items.forEach(item => {
        let text = item.textContent.toLowerCase();
        item.style.display = text.includes(input) ? "" : "none";
    });
}