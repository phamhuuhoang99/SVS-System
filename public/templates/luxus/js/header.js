function currentTab(n) {
    showTabs(n);
}

function showTabs(index) {
    const navItems = document.getElementsByClassName("nav-item");

    for (let i = 0; i < navItems.length; i++) {
        navItems[i].className = navItems[i].className.replace(" active", "");
    }

    navItems[index - 1].className += " active";
}
