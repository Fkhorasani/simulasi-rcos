const loading = document.getElementById("loading");
console.log(loading);

function hideLoading() {
    loading.classList.remove("element-show");
    loading.classList.add("element-hidden");
}

function removeLoading() {
    loading.classList.add("element-none");
}

// if (document.readyState == "complete") {
//     hideElement(loading);
// }

setTimeout(hideLoading, 1000);
setTimeout(removeLoading, 2000);
