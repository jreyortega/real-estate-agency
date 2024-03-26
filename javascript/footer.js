function toggleList(element) {
    var ul = element.nextElementSibling;
    ul.classList.toggle("show");

    var plusIcon = element.querySelector(".fa-plus");
    var minusIcon = element.querySelector(".fa-minus");

    if (ul.classList.contains("show")) {
        ul.style.maxHeight = ul.scrollHeight + "px";
        plusIcon.style.display = "none";
        minusIcon.style.display = "inline-block";
    } else {
        ul.style.maxHeight = "0";
        plusIcon.style.display = "inline-block";
        minusIcon.style.display = "none";
    }
}

