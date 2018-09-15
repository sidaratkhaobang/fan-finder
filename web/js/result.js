const url_string = window.location.href;
const url = new URL(url_string);
const nationality = url.searchParams.get("nationality");
const place = url.searchParams.get("place");
const action = url.searchParams.get("action");

document.getElementById("nationality").innerHTML = nationality;
document.getElementById("place").innerHTML = place;
document.getElementById("action").innerHTML = action;
document.getElementById("share-button").addEventListener('click', function() {
  FB.ui({
    method: 'share',
    href: window.location.href,
    quote: `สวรรค์มีตา !!! เนื้อคู่ของคุณจะเป็นคน "${nationality}" พบกันที่ "${place}" ในขณะที่คุณกำลัง "${action}"`,
  }, function (response) { });
});

function playAgain() {
  const url_string = window.location.href;
  const url = new URL(url_string);
  const port = url.searchParams.get("port");
  const redirect_url = `http://${url.hostname}:${port}`;
  window.location = redirect_url;
}