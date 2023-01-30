var modal = document.getElementById('images');
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(function () {
    $('#mi-slider').catslider();
});