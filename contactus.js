const submitform = () => {
  const form = document.querySelector("form");
  const formData = new FormData(form);
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "contactus.php");
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
