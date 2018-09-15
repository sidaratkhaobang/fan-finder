const url_string = window.location.href;
const url = new URL(url_string);
document.getElementById("nationality").innerHTML = url.searchParams.get("nationality");
document.getElementById("place").innerHTML = url.searchParams.get("place");
document.getElementById("action").innerHTML = url.searchParams.get("action");
document.getElementById("share-button").addEventListener('click', function() {
  FB.ui({
    method: 'share',
    href: window.location.href,
    quote: `สวรรค์มีตา !!! เนื้อคู่ของคุณจะเป็นคน "${nationality}" พบกันที่ "${place}" ในขณะที่คุณกำลัง "${action}"`,
  }, function (response) { });
});