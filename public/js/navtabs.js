let tabIndex = 1;
showTabs(tabIndex);

// Thumbnail image controls
function currentTab(n) {
    showTabs(tabIndex = n);
}

function showTabs(n) {
    const tabs = document.getElementsByClassName("navshow-pane");

    for (let i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
    }

    tabs[tabIndex - 1].style.display = "block";
}