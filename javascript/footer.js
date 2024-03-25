function toggleList(element) {
    var ul = element.nextElementSibling;
    ul.classList.toggle("show");

    // Toggle "show" class in the parent element
    var parent = element.parentElement;
    parent.classList.toggle("show");

    var plusIcon = element.querySelector(".fa-plus");
    var minusIcon = element.querySelector(".fa-minus");

    if (ul.classList.contains("show")) {
        // Set the max-height of the ul to a large value to allow for transition
        ul.style.maxHeight = ul.scrollHeight + "px";
        plusIcon.style.display = "none";
        minusIcon.style.display = "inline-block";
    } else {
        // Set the max-height of the ul to its scroll height to enable smooth transition
        ul.style.maxHeight = ul.scrollHeight + "px";
        plusIcon.style.display = "inline-block";
        minusIcon.style.display = "none";
        // After a short delay, set the max-height back to 0 for smooth collapse
        setTimeout(function() {
            ul.style.maxHeight = "0";
        }, 50); // Adjust delay as needed
    }
}
