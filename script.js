function validateRegister() {
  //initialise all required values from form
  let name1 = document.forms["frmRegister"]["firstname"].value;
  let name2 = document.forms["frmRegister"]["lastname"].value;
  let password = document.forms["frmRegister"]["password"].value;
  let email = document.forms["frmRegister"]["email"].value;


  //validation for ensure only letters are inputted
  let regex0 = /^[a-z,.''-]{2,}$/;
  // validation to make sure a password is secure
  let regex1 = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+={}[\]:;'"<>?,./])[A-Za-z\d!@#$%^&*()_\-+={}[\]:;'"<>?,./]{8,}$/;
  // validation for email
  let regex2 = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,5}\.[a-zA-Z]{2,3}$/;

  // validates forename
  if (name1 == "") {
    alert("Please enter your Forename.");
    return false;
  } else {
      if (!regex0.test(name1)) {
        alert("You have entered invalid characters, please check your 'First Name' contains: \n - Only letters (a-z & A-Z)\n - Atleast 2 chracters");
        return false;
    }
  }
  // validates surname
  if (name2 == "") {
    alert("Please enter your last name.");
    return false;
  } else {
      if (!regex0.test(name2)) {
        alert("You have entered invalid characters, please make sure your 'Last Name' contains: \n - Only letters (a-z & A-Z)\n - Atleast 2 chracters");
        return false;
      }
    }
    // validates password
    if (password == "") {
      alert("Please enter your Password.");
      return false;
    } else {
        if (!regex1.test(password)) {
          alert("You have entered invalid characters, please make sure your password has atleast:\n- 1 Capital letter (A-Z)\n- 1 Special character (@%£&!)\n- 1 Number (0-9)\n - 8 characters minimum");
          return false;
        }
      }
    // validates email
    if (email == "") {
      alert("Please enter your email.");
      return false;
    } else {
        if (!regex2.test(email)) {
          alert("You have entered invalid characters, please enter a valid email.");
          return false;
        }
      }

}

function validateLogin() {
  //initialise all required values from form
  let password = document.forms["login"]["password"].value;
  let email = document.forms["login"]["email"].value;

  // validation to make sure a password is secure
  let regex1 = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+={}[\]:;'"<>?,./])[A-Za-z\d!@#$%^&*()_\-+={}[\]:;'"<>?,./]{8,}$/;
  // validation for email
  let regex2 = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{3,5}$/;

    // validates email
    if (email == "") {
      alert("Please enter your email.");
      return false;
    } else {
        if (!regex2.test(email)) {
          alert("You have entered invalid characters, please enter a valid email.");
          return false;
        }
      }
  // validates password
  if (password == "") {
    alert("Please enter your Password.");
    return false;
  } else {
      if (!regex1.test(password)) {
        alert("You have entered invalid characters, please make sure your password has atleast:\n- 1 Capital letter (A-Z)\n- 1 Special character (@%£&!)\n- 1 Number (0-9)\n - 8 characters minimum");
        return false;
      }
    }

}