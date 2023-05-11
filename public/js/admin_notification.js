
function loadDoc(tableName, elementId) {
    setInterval(function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var element = document.getElementById(elementId);
                if (element) {
                    element.innerHTML = this.responseText;
                    alert('You have new record');
                }
            }
        };
        xhttp.open("GET", "notify.php?table=" + tableName, true);
        xhttp.send();
    }, 1000);
}

loadDoc("match_requests","notify1");
loadDoc("donor","notify");

// function loadDoc(donor) {
//     setInterval(function() {
//         var xhttp = new XMLHttpRequest();
//         xhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 var notifyElement = document.getElementById("notify");
//                 if (notifyElement) {
//                     notifyElement.innerHTML = this.responseText;
//                 }
//             }
//         };
//         xhttp.open("GET", "notify.php?table=" + donor, true);
//         xhttp.send();
//     }, 1000);
// }



function updateNotificationStatus(tableName, elementId) {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
// Update the notification count to 0
document.getElementById(elementId).innerHTML = "0";
}
};
xhttp.open("GET", "update_notification.php?table=" + tableName, true);
xhttp.send();
}