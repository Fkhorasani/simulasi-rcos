function toggleProfileDropdown() {
    const dropdown = document.getElementById("profileDropdown");
    if (dropdown.classList.contains("-right-64")) {
        dropdown.classList.remove("-right-64");
        dropdown.classList.add("right-0");
    } else {
        dropdown.classList.remove("right-0");
        dropdown.classList.add("-right-64");
    }
}
