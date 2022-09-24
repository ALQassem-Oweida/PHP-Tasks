
//****************************************************************************************************************************************************************************************** */
//******************************************************************************  Sign Up Page script ************************************************************************************* */

function validation() {




    var name = document.getElementById("Fname").value;
    var name2 = document.getElementById("Lname").value;
    var name3 = document.getElementById("Mname").value;
    var name4 = document.getElementById("FAMname").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;
    var passc = document.getElementById("passwordc").value;
    var Regexname = /^[A-Za-z]/;
    var Regexemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var Regexpass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/;
    var errorNum = 0;
  
    if (Regexemail.test(email)) {
      document.getElementById("email_err").innerHTML = "";
    } else {
      document.getElementById("email_err").innerHTML =
        "Please Enter a valid email";
        errorNum++;
    }


    if (Regexname.test(name)) {
      document.getElementById("name_err").innerHTML = "";
    } else {
      document.getElementById("name_err").innerHTML =
        "Please Enter a valid  name";
      errorNum++;
    }    
    
    if (Regexname.test(name2)) {
      document.getElementById("name_err").innerHTML = "";
    } else {
      document.getElementById("name_err").innerHTML =
        "Please Enter a valid  name";
      errorNum++;
    }  
  
    if (Regexname.test(name3)) {
      document.getElementById("name_err").innerHTML = "";
    } else {
      document.getElementById("name_err").innerHTML =
        "Please Enter a valid  name";
      errorNum++;
    }  

    if (Regexname.test(name4)) {
      document.getElementById("name_err").innerHTML = "";
    } else {
      document.getElementById("name_err").innerHTML =
        "Please Enter a valid  name";
      errorNum++;
    }  

    if (Regexpass.test(pass)) {
      document.getElementById("pass_err").innerHTML = "";
    } else {
      document.getElementById("pass_err").innerHTML =
        "Please Enter a valid password";
        errorNum++;
    }
    if (passc==pass) {
      document.getElementById("pass_err").innerHTML = "";
    } else {
      document.getElementById("pass_err").innerHTML =
        "Passwords dosent match";
        errorNum++;
    }
  
    if (errorNum > 0 ) {
        return false;
    }

    // if ( Regexname.test(name)&&Regexemail.test(email)&&Regexpass.test(pass)){
    //   let formData = JSON.parse(localStorage.getItem('formData')) || [];
    //   formData.push({mail: email,pass: pass,name:name});
    //   localStorage.setItem('formData', JSON.stringify(formData));
    //   alert("Your account has been created");
    // }
  
  }
