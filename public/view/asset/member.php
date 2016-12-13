<?php include('../../partials/htmlheader.php') ?>
<body class="member-place">
  <div class="wrap">
  <?php include('../../partials/fixed-nav.php') ?>
  <?php include('../../partials/header.php') ?>

    <article class="content-container">
      <section class="side-nav">
        <div class="side-nav__title">
          회원가입
        </div>
        <ul class="side-nav__menu">
          <li class="side-nav__menu__item"><a href="">로그인</a></li>
          <li class="side-nav__menu__item"><a href="">회원가입</a></li>
        </ul>
      </section>
      <section class="content">
        <h1 class="big-title">회원가입</h1>
        <form>
          <table class="member-table" border="1">
            <tbody>
              <tr>
                <th class="member-table__title">이름</th>
                <td>
                  <input type="text" name="member_name" class="custom-form">
                </td>
              </tr>
              <tr>
                <th class="member-table__title">E-Mail</th>
                <td>
                  <input type="text" name="member_email" class="custom-form">
                </td>
              </tr>
              <tr>
                <th class="member-table__title">비밀번호</th>
                <td>
                  <input type="password" name="member_pass" class="custom-form">
                </td>
              </tr>
              <tr>
                <th class="member-table__title">닉네임</th>
                <td>
                  <input type="text" name="member_nickname" class="custom-form">
                </td>
              </tr>
            </tbody>
          </table>
          <div class="btn-box">
            <a href="" class="custom-btn">등록</a>
            <a href="/" class="custom-btn">취소</a>
          </div>
        </form>
      </section>
    </article>
  <?php include('../../partials/footer.php') ?>
  </div>