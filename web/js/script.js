function predict(event) {
  document.getElementById("result").classList.add("hidden");
  const name = document.getElementById('name').value;
  const phone = document.getElementById('phone').value;
  const birthdate = document.getElementById('birthdate').value

  const Http = new XMLHttpRequest();
  const url = `http://localhost:2019/fan/predict?name=${name}&mobileno=${phone}&dob=${birthdate}`;
  Http.open("GET", url, true);
  Http.send();

  Http.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      const resp = JSON.parse(Http.responseText);
      console.log(resp);
      const { nationality, place, action } = resp.data;
      document.getElementById("nationality").innerHTML = nationality;
      document.getElementById("place").innerHTML = place;
      document.getElementById("action").innerHTML = action;
      const result_url = `result.html?nationality=${nationality}&place=${place}&action=${action}`;
      window.location = result_url;
    }
  }
}