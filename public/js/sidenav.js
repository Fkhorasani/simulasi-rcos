const toggleSideNav = () => {
    const nav = document.getElementById("sideNav");
    const navTitle = document.getElementById("title");
    const navBurger = document.getElementById("burger");
    const content = document.getElementById("content");
    const descnav = document.querySelectorAll("#descnav");

    navBurger.classList.toggle("translate-x-40");

    if (nav.classList.contains("w-16")) {
        nav.classList.remove("w-16");
        nav.classList.add("w-40");
    } else {
        nav.classList.remove("w-40");
        nav.classList.add("w-16");
    }

    if (navTitle.classList.contains("-left-24")) {
        navTitle.classList.remove("-left-24");
        navTitle.classList.add("left-4");
    } else {
        navTitle.classList.remove("left-4");
        navTitle.classList.add("-left-24");
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
        content.classList.add("ml-40");
    } else {
        content.classList.remove("ml-40");
        content.classList.add("ml-16");
    }
};
