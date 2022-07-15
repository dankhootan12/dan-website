const params = new URLSearchParams();

function submitContactUs() {
    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let age = document.getElementById('age');
    let telno = document.getElementById('telno');
    let feedback = document.getElementById('feedback');

    params.set("name", name.value);
    params.set("email", email.value);
    params.set("age", age.value);
    params.set("telno", telno.value);
    params.set("feedback", feedback.value);

    fetch("feedback.php?" + params.toString())
    .then(response => response.text())
    .then(response => {
        alert(response);
    })
    .catch(error => console.log(error));
}

function submitSignup() {
    let fname = document.getElementById('fname');
    let Dob = document.getElementById('Dob');
    let phoneNumber = document.getElementById('phoneNumber');
    let email2 = document.getElementById('email2');
    let username = document.getElementById('username');
    let password = document.getElementById('password');
    
    params.set("fname", fname.value);
    params.set("email", email2.value);
    params.set("Dob", Dob.value);
    params.set("phoneNumber", phoneNumber.value);
    params.set("username", username.value);
    params.set("password", password.value);

    fetch("signup.php?" + params.toString())
    .then(response => response.text())
    .then(response => {
        alert(response);
    })
    .catch(error => console.log(error));
}

function submitLogin() {
    let username = document.getElementById('login-username');
    let password = document.getElementById('login-password');
    
    
    params.set("username", username.value);
    params.set("password", password.value);

    fetch("login.php?" + params.toString())
    .then(response => response.text())
    .then(response => {
        alert(response);
    })
    .catch(error => console.log(error));
}

function loginPopup() {
    document.getElementById('id01').style.display='block';
}

function logout() {
    fetch("logout.php")
    .then(response => response.text())
    .then(response => {
        alert(response);
        location.href = "index.php";
    })
    .catch(error => console.log(error));
}

function toggleLoginSignup() {
    document.getElementById('loginForm').classList.toggle('hide');
    document.getElementById('signupForm').classList.toggle('hide');
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

