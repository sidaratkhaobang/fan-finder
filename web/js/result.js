const url_string = window.location.href;
const url = new URL(url_string);
document.getElementById("nationality").innerHTML = url.searchParams.get("nationality");
document.getElementById("place").innerHTML = url.searchParams.get("place");
document.getElementById("action").innerHTML = url.searchParams.get("action");