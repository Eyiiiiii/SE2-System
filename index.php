<?php 
require_once('./config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Titillium+Web&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/styles/login-styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compautible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | TUPians Print & Meet</title>
  </head>
  <body>
    <header>
      <button class="hs" id="one">Home</button>
    </header>

    <form>
      <span>
        <img src="/images/printnmeet-no-title.png" />
        <h1>Login</h1>
      </span>

      <div class="mb-3">
        <label for="loginUsingEmail" class="form-label">Log in with username</label>
        <div class="input-icon">
        <input type="email" class="form-control" id="loginUsingEmail" aria-describedby="emailHelp" />
        </div>
      </div>

      <div class="mb-3">
        <label for="loginPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="loginPassword" />
      </div>

      <button type="submit" class="btn-login">
        <a href="account.html">Log in</a>
      </button>
    </form>
    <div class="footer">
      <p id="typographic-logo">TUPIANS PRINT & MEET</p>
      <div class="footer-wrapper">
        <hr />
        <div class="container text-center">
          <div class="row">
            <div class="col-6 footer-text">© TUPIANS PRINT & MEET</div>
            <div class="col-6 social-icons">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-youtube"></i>
              <i class="fab fa-instagram"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="src1/index.js"></script>
  </body>
</html>
