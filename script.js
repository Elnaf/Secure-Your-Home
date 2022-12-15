function loadPage(page) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("main-content").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", page, true);
    xhttp.send();
}

function submit_contact_us_form() {
    const form = document.querySelector("form");
    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "/contactus/contactus.php");
    xhr.send(formData);
    xhr.onload = () => {
      if (xhr.status === 200) {
        alert("Message sent successfully");
        form.reset();
        window.location.href = "/";
      } else {
        alert("Something went wrong");
      }
    };
  };
