function predict(event) {
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
      const { nationality, place, action } = resp.data;
      const result_url = `result.html?nationality=${nationality}&place=${place}&action=${action}`;
      window.location = result_url;
    }
  }
}