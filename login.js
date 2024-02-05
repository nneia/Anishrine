var log_user = document.getElementById("loguser");
var log_password = document.getElementById("logpassword");


 document.getElementById('log_btn').onclick= login;


 function login (event) {
 	var login_data = {
 		user: log_user.value, 
 		password: log_password.value

 	}
 	axios.post('../loguser.php', login_data)
        .then((response) => {
            if (response.data.status == "success") {
              document.location.href = "http://www.anishrine/profile/profile-page.php?id=" + response.data.id;
            }else {
              document.querySelector('.login-error').innerText="Incorrect username or password";
            }
        })
        .catch((error) => {
          console.log(error);
        });
 }
// Incorrect username or password