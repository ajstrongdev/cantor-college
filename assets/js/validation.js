// Validation code was helped by: https://www.w3schools.com/js/tryit.asp?filename=tryjs_validation_js
// !email.includes was utilised as a JavaScript feature that I found on Mozilla: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/includes
function validateForm() {
    let name = document.forms["contactForm"]["Name"].value;
    let email = document.forms["contactForm"]["Email"].value;
    if (name == "") {
      alert("Name must be filled out.");
      return false;
    }
    if (email = "" || !email.includes('@')) {
        alert("Please enter a valid email address");
        return false;
    }
  }
