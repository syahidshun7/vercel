<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Login Portfolio">
  <title>Login | JV.</title>

  <link rel="stylesheet" href="login.css">
</head>

<body>

  <nav>
    <a class="logo" href="index.html">JV.</a>

    <a class="back-home" href="index.html">
      ← Back to portfolio
    </a>
  </nav>


  <main class="login-container">

    <!-- FORM -->
    <section class="login-section">

      <div class="login-content">

        <p class="eyebrow">WELCOME BACK</p>

        <h1>
          Login to your
          <span>account.</span>
        </h1>

        <p class="description">
          Masuk untuk melanjutkan dan mengakses halaman pribadi kamu.
        </p>


        <form action="proses_login.php" method="POST">

          <div class="form-group">

            <label for="email">
              Email
            </label>

            <input
              type="email"
              id="email"
              name="email"
              placeholder="name@example.com"
              required
            >

          </div>


          <div class="form-group">

            <div class="password-header">

              <label for="password">
                Password
              </label>

              <a href="#">
                Forgot password?
              </a>

            </div>


            <div class="password-input">

              <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
              >

              <button
                type="button"
                class="show-password"
                id="showPassword"
              >
                Show
              </button>

            </div>

          </div>


          <div class="remember">

            <label>

              <input
                type="checkbox"
                name="remember"
              >

              <span>Remember me</span>

            </label>

          </div>


          <button
            type="submit"
            class="login-button"
          >
            Login
            <span>→</span>
          </button>

        </form>


        <div class="divider">

          <span></span>

          <p>OR</p>

          <span></span>

        </div>


        <p class="register-text">

          Don't have an account?

          <a href="register.php">
            Create account
          </a>

        </p>

      </div>

    </section>



    <!-- VISUAL -->
    <section class="login-visual">

      <div class="orbit orbit-one"></div>

      <div class="orbit orbit-two"></div>

      <div class="orb"></div>


      <div class="floating-card">

        <div class="status">

          <span class="status-dot"></span>

          SYSTEM ONLINE

        </div>

        <h3>&lt;welcome /&gt;</h3>

        <p>
          Laravel · Vue · REST API
        </p>

      </div>


      <div class="mini-card">

        <span>01</span>

        <p>
          BUILD.<br>
          CREATE.<br>
          EXPLORE.
        </p>

      </div>

    </section>

  </main>


  <footer>

    © <span id="year"></span>
    JV. · Secure Login

  </footer>


</body>
</html>

<php 