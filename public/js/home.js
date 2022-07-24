let btn = document.querySelector(".load-more");
let showMore = document.querySelector(".row.more");

btn.addEventListener("click", () => {
    if (showMore.style.display === "none") {
        showMore.style.display = "flex";
    } else {
        showMore.style.display = "none";
    }
});

let heart = document.querySelectorAll(".fa-heart");
heart.forEach((e) => {
    e.onclick = function () {
        if (e.classList.contains("favorite")) {
            e.classList.remove('favorite')
        }else{
            e.classList.add('favorite')
        }
    };
});