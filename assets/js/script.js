//login-registration window

const wrapper = document.querySelector('.wrapper')
const loginLink = document.querySelector('.login-link')
const registerLink = document.querySelector('.register-link')

registerLink.addEventListener('click', () => {
  wrapper.classList.add('active');
})

loginLink.addEventListener('click', () => {
  wrapper.classList.remove('active');
})

const menuBtn = document.querySelector('#hamburgerMenu');
const navigation = document.querySelector('.navList')

menuBtn.addEventListener('click', () => {
  navigation.classList.add('sidebar');
  console.log("Button click!")
});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropDownFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-contentA");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

//logout user from logged in page

function logoutUser() {
  window.location.replace("../index.html");
}

// redirect to login page
function loginPage() {
  window.location.replace("../authentication/index.html");
}


// contact Anonymous
var otpVal;
function sendMail() {
  const email = document.querySelector('input[type="email"]');
  const otpbutton = document.querySelector('#otpbtn');
  const verifybutton = document.querySelector('#verifybtn');


  // =====generate OTP=====
  const otpLength = 6;
  const randomNumber = Math.floor(Math.random() * 1000000);
  const randomString = randomNumber.toString();
  const paddedString = randomString.padStart(otpLength, '0');
  otpVal = paddedString.substring(0, otpLength);
  console.log("sendMail(): " + otpVal);

  let emailBody = `
    <h3>Luxurious Creation: Visualise Around Yourself With AR</h3>
    <h5>Make Your Living Comfortable</h5>
    <br>
    <p>Your OTP for email verifiation is: <strong>${otpVal}</strong>.</p>
    <p>Thank You</p>`;

  Email.send({
    SecureToken: "314209bb-7b82-4dd5-919d-7d9286a7d706",
    To: 'xyz@gmail.com',
    From: "luxuriouscreation02@gmail.com",
    Subject: "Email Verification OTP from Luxurious Creation",
    Body: emailBody,
  }).then(
    message => {
      if (message === "OK") {
        document.getElementById('otpdiv').style.display = "block";
        document.getElementById('verifydiv').style.display = "block";
        setTimeout(() => {
          alert("OTP sent to " + email.value)
          otpbutton.innerText = "Resend OTP"
        }, 2000);
      } else {
        alert("Error Occured!")
      }
    }
  );
}

function verifyMail() {
  // let box = document.getElementById('messagebox');
  const otpInp = document.querySelector('[name="otp"]').value;
  console.log("verifyMail():" + otpVal);
  if (otpInp === otpVal) {
    alert("Email Address Verified Successfully.")
    // box.removeAttribute('disabled');
  }

  else {
    alert("Invalid OTP! Try Again");
  }
}