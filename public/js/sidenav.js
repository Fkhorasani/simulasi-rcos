const toggleSideNav = () => {
    const nav = document.getElementById("sideNav");
    const navTitle = document.getElementById("title");
    const navBurger = document.getElementById("burger");
    const content = document.getElementById("content");
    const descnav = document.querySelectorAll("#descnav");
    const navDropdown = document.getElementById("sideDropdown");

    navBurger.classList.toggle("translate-x-56");

    if (nav.classList.contains("w-16")) {
        nav.classList.remove("w-16");
        nav.classList.add("w-56");
    } else {
        nav.classList.remove("w-56");
        nav.classList.add("w-16");
    }

    if (navTitle.classList.contains("-left-40")) {
        navTitle.classList.remove("-left-40");
        navTitle.classList.add("left-12");
    } else {
        navTitle.classList.remove("left-12");
        navTitle.classList.add("-left-40");
    }

    descnav.forEach((e) => {
        if (e.classList.contains("opacity-0")) {
            e.classList.remove("opacity-0");
            e.classList.add("opacity-100");
        } else {
            e.classList.add("opacity-0");
            e.classList.remove("opacity-100");
        }
    });

    if (content.classList.contains("ml-16")) {
        content.classList.remove("ml-16");
        content.classList.add("md:ml-56");
    } else {
        content.classList.remove("md:ml-56");
        content.classList.add("ml-16");
    }
};

function toggleSideDropdown() {
    const navDropdown = document.getElementById("sideDropdown");
    const arrow = document.getElementById("dropdownArrow");

    if (navDropdown.classList.contains("max-h-96")) {
        navDropdown.classList.remove("max-h-96");
        navDropdown.classList.add("max-h-0");
    } else {
        navDropdown.classList.remove("max-h-0");
        navDropdown.classList.add("max-h-96");
    }

    if (navDropdown.classList.contains("opacity-0")) {
        navDropdown.classList.remove("opacity-0");
        navDropdown.classList.add("opacity-100");
    } else {
        navDropdown.classList.add("opacity-0");
        navDropdown.classList.remove("opacity-100");
    }

    arrow.classList.toggle("rotate-180");
}
