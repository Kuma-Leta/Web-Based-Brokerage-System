   // Function to set a cookie with the active tab value
   function setTabCookie(tabId) {
    document.cookie = "activeTab=" + tabId + "; path=/";
}

// Function to get the active tab from the cookie
function getActiveTabFromCookie() {
    var name = "activeTab=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');
    for (var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i];
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) == 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return "";
}

// Function to activate the correct tab based on the cookie value
function activateTabFromCookie() {
    var activeTab = getActiveTabFromCookie();
    if (activeTab !== "") {
        $('a[href="' + activeTab + '"]').tab('show');
    }
}

// Event listener to save the active tab when a new tab is shown
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    var target = $(e.target).attr("href"); // activated tab
    setTabCookie(target);
});

// Activate the correct tab on page load
$(document).ready(function () {
    activateTabFromCookie();
});