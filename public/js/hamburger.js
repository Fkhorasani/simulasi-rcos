const hamburg = document.getElementById("hamburger");
function hasClass(element, className) {
    return (" " + element.className + " ").indexOf(" " + className + " ") > -1;
}
function Cekoverflow() {
    const body = document.body;
    if (hasClass(body, "overflow-y-hidden")) {
        body.classList.remove("overflow-y-hidden");
        body.classList.add("overflow-y-auto");
    } else {
        body.classList.add("overflow-y-hidden");
        body.classList.remove("overflow-y-auto");
    }
    console.log("tes");
}
