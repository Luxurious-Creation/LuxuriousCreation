<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Custom stylesheet link -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="stylesheet" href="style.css" />

    <!-- Fontawesom cdn css link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Google font style link -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Alegreya&family=Allura&family=Libre+Baskerville&family=Rokkitt:wght@300;400&family=Taviraj&family=Ysabeau+Infant&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Pacifico&display=swap");
    </style>

    <!-- Bootstrap cdn css link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <title>Contact Us | Luxurious Creation</title>
    <link rel="icon" href="../assets/images/Logo.jpg" />
  </head>

  <body onload="classReuse();changetag()">
    <!-- navigation -->
    <nav id="navFile"></nav>
    <!-- navigation -->

    <!-- Contact-Home -->
    <div class="contact">
      <div class="title">
        <p>Contact Us</p>
      </div>

      <section id="contact">
        <div class="getin">
          <h2>Get in touch</h2>
          <p>Looking for help? Fill the form and start a new adventure.</p>

          <div class="getin-details">
            <h3>Headquaters</h3>
            <div>
              <ion-icon name="home-outline"></ion-icon>
              <p>
                <strong>University of Engineering & Management, jaipur</strong>
                <br />
                Department of Computer Science & Engineering
              </p>
            </div>
          </div>

          <div class="getin-details">
            <h3>Phone</h3>
            <div>
              <ion-icon name="call-outline"></ion-icon>
              <p>
                (+91) 6207212232 <br />
                (+91) 9829466683 <br />
                (+91) 7878042842
              </p>
            </div>
          </div>

          <div class="getin-details">
            <h3>Support</h3>
            <div>
              <ion-icon name="mail-open-outline"></ion-icon>
              <p>
                luxuriousCreation@support.com <br />
                help@creation.com
              </p>
            </div>
          </div>

          <div class="getin-details">
            <h3>Follow Us</h3>
            <div class="pro-links">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-linkedin"></i>
              <i class="fab fa-twitter"></i>
            </div>
          </div>
        </div>

        <div class="form">
          <h4>Let's Connect</h4>
          <p>Lets break the ice and give us opportunity to assist you</p>
          <form action="contact.php" method="post">
            <div class="form-row">
              <input type="text" placeholder="Your Name" name="name" id="" />
              <input type="email" placeholder="Your Email" name="email" id="" />
            </div>

            <div class="form-col">
              <input type="text" name="subject" placeholder="Subject" id="" />
            </div>
            <div class="form-col">
              <textarea
                name="message"
                id=""
                cols="30"
                rows="8"
                placeholder="How can we help?"
              ></textarea>
            </div>
            <div class="form-col">
              <!-- <input type="submit" value="Send Message" /> -->
              <button>Send Message</button>
            </div>
          </form>
        </div>
      </section>

      <section id="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2762.7905862665657!2d75.69836761326215!3d27.212892442616397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396cffc30dacc2db%3A0xb78e5c340c935a95!2sUniversity%20of%20Engineering%20%26%20Management%20(UEM)%2C%20Jaipur!5e1!3m2!1sen!2sin!4v1696071244188!5m2!1sen!2sin"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </section>
    </div>
    <footer>
      <div class="alert alert-danger" role="alert">
        The Website is under development! Stay connected.
      </div>
    </footer>

    <!-- Ionicon js script link -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>

    <!-- Js library script link -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Bootstrap js script link -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <!-- Js library script link -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Custom js script link -->
    <script src="../assets/js/script.js"></script>
    <script>
      $(function () {
        $("#navFile").load("../../includes/navBar/navBarUser.html");
      });

      function classReuse() {
        var contact = document.getElementById("contactpage");
        contact.classList.add("active");
      }

      function changetag() {
        document.getElementById("homepage").innerHTML =
          '<a href="../user.html">Home</a>';
        document.getElementById("categorypage").innerHTML =
          '<a href="../category.html">Category</a>';
        document.getElementById("feedbackpage").innerHTML =
          '<a href="../feedback/index.php">Feedback</a>';
      }
    </script>
  </body>
</html>
