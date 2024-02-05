var inp_user = document.getElementById("username");
var inp_email = document.getElementById("email");
var inp_password = document.getElementById("password");
var inp_repeat = document.getElementById("repeat");
var sign_up_button = document.getElementById("sign-up-btn");
var error_blank = document.getElementById("error-blank");
var error_email = document.getElementById("error-email");
var error_password = document.getElementById("error-password");



var condition2 = false;
var condition4 = false;
var condition5 = false;
var condition6 = false;
var condition7 = false;
var condition8 = false;

function incorrectSymbols (str) {
  console.log(str);
  if (str.search(/\W/)==-1) {
    condition8 = true;
    return true;
  } else {
    condition8 = false;
    return false;
  }
}


inp_user.oninput = (e) =>{
   errors(e.target, "error-blank", "Less than 3 or longer than 15 symbols", 15, 3);
   axios.post('../username-check.php', e.target.value)
        .then((response) => {
            if (response.data == "exists") {
                 condition2 = false
            errorDisplay("error-blank", true, "This user already exists");

            }else {
             condition2 = true
            }
        })
        .catch((error) => {
          console.log(error);
        });
  if (incorrectSymbols(e.target.value) == false) {
    errorDisplay("error-blank", true, "Incorrect symbols");
  }

};
 inp_email.oninput = (e) =>{
   errors(e.target, "error-email", "Longer than 30 symbols", 30);
   if (e.target.value.search(/@/)==-1 && e.target.value != '') 
    {errorDisplay("error-email", true, "Incorrect form")
      condition5 = false;
      }else{
        condition5 = true;
      }
   axios.post('../email-check.php', e.target.value)
        .then((response) => {
            if (response.data == "exists") {
             condition4 = false;
            errorDisplay("error-email", true, "This email already taken");

            }else {
             condition4 = true;
            }
        })
        .catch((error) => {
          console.log(error);
        });
};
 inp_password.oninput = (e) =>{
   password(e.target, "error-password", 8, 30);

};
 inp_repeat.oninput = (e) =>{
  if (inp_password.value!=inp_repeat.value) {
    matchPassword(e.target,true)
    condition7 = false;
  }else {
    matchPassword(e.target, false)
    condition7 = true;
  }
   
};


function errors (inp, error_id, error_text, b, a=0) {
 	var text = inp.value;
  var input = inp;


    var tl = text.length;
    if ((tl<a || tl>b) && tl != 0) {
      errorDisplay(error_id, true, error_text)
      colorChange(false, input)
      return false
    }

    else if (tl == 0) {
      colorChange(true, input, "red")
      errorDisplay(error_id, false)
      return false
    }

    else if (tl>0) {
      errorDisplay(error_id, false)
      
      return true
    }
 	   
 } 

function password (inp, error_id, a, b){
    var text = inp.value;
    var input = inp;

    var tl = text.length;
    if (tl<a && tl!=0) {
      errorDisplay(error_id, true, "Password is too short");
      condition6 = false;
    }else if (tl>b) {
      errorDisplay(error_id, true, "Password is too long");
      condition6 = false;
    }

    else if (tl == 0) {
      colorChange(true, input, "red");
      errorDisplay(error_id, false);
      condition6 = false;
    }

    else if (tl>0) {
      colorChange(false, input);
      errorDisplay(error_id, false);
      condition6 = true;
    }
}
function matchPassword (e, show){
  
  var error_repeat = document.getElementById("error-repeat"); 

  if (show) {
    error_repeat.innerText = "Passwords doesnt match"
    error_repeat.classList.add("error-show")
  }else {
    error_repeat.classList.remove("error-show")
  }

}

function errorDisplay (id, show, error) {
  var error_blank = document.getElementById(id)
  if (show) {
    error_blank.innerText = error
    error_blank.classList.add('error-show')
  }else {
    error_blank.classList.remove('error-show')
  }  
}


function colorChange(show, object, color){
    
    if (show) {
      object.style.boxShadow = '0 1px 3px red';
    }else{
      object.style.boxShadow = "none";
      object.style.boxShadow = "inset 0 1px 3px #ddd";
    }
}


sign_up_button.onclick = sent_data_button;

function Validate () {
  var condition1 = errors(inp_user, "error-blank", "Less than 3 or longer than 15 symbols", 15, 3);
  var condition3 = errors(inp_email, "error-email", "Longer than 30 symbols", 30);

   return condition1 && condition2 && condition3 && condition4 && 
   condition5 && condition6 && condition7 && condition8;
}

function sent_data_button (event) {
  console.log('Validate()', Validate())
 if(Validate()){
  var newUser = {}
  newUser.username = inp_user.value;
  newUser.email = inp_email.value;
  newUser.password = inp_password.value;
  console.log('newUser', newUser)
  axios.post('../saveuser.php', newUser)
        .then((response) => {
            if (response.data == "success") {
              document.location.href = "http://www.anishrine/registration/registration-form-success.php"
            }else {
              
            }
        })
        .catch((error) => {
          console.log(error);
        });

 }else {
   
 }
}

