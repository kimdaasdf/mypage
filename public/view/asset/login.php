<?php include('../../partials/htmlheader.php') ?>
<body class="login-place">
  <div class="wrap">
    <?php include('../../partials/fixed-nav.php') ?>
    <article class="content-container">
      <section class="login-content">
        <div class="login-box">
          <div class="user-box">
            <label class="id-label">
              <p class="id-label__title">E-Mail :</p>
              <input type="text" name="user_id" class="custom-form">
            </label>
            <label class="pass-label">
              <p class="pass-label__title">Password :</p>
              <input type="password" name="user_pass" class="custom-form">
            </label>
            <div class="btn-box">
              <a href="" class="custom-btn">로그인</a>
            </div>
          </div>
          <div class="blank-home">
            <a href="/">
              <img src="http://placehold.it/500x300">
            </a>
          </div>
        </div>
      </section>
    </article>
  <?php include('../../partials/footer.php') ?>
  </div>