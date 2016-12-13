<?php include('../../partials/htmlheader.php') ?>
<body class="board-view-place">
  <div class="wrap">
  <?php include('../../partials/fixed-nav.php') ?>
  <?php include('../../partials/header.php') ?>

    <article class="content-container">
      <section class="side-nav">
        <div class="side-nav__title">
          게시판
        </div>
        <ul class="side-nav__menu">
          <li class="side-nav__menu__item"><a href="">이거</a></li>
          <li class="side-nav__menu__item"><a href="">옆에</a></li>
          <li class="side-nav__menu__item"><a href="">있는</a></li>
          <li class="side-nav__menu__item"><a href="">메뉴</a></li>
          <li class="side-nav__menu__item"><a href="">이다</a></li>
        </ul>
      </section>
      <section class="content">
        <h1 class="big-title">자유 게시판</h1>
        <h2 class="view-title"> 이선희-인연 </h2>
        <div class="content-text">
          <p>
            취한 듯 만남은 짧았지만 빗장열어 자리했죠 맺지 못한 데도 후회하진 않죠. 영원한건 없으니까. 운명이라고 하죠 거부할 수가 없죠.
            내 생애 이처럼 아름다운 날 또 다시 올 수 있을까요. 고달픈 삶의 길에 당신은 선물인걸. 이 사랑이 녹슬지 않도록 늘 닦아 비출게요.
          </p>
        </div>
        <div class="btn-box">
          <a class="custom-btn" href="/view/board/index.php">목록</a>
          <a class="custom-btn" href="/view/board/edit.php">수정</a>
          <a class="custom-btn" href="">삭제</a>
        </div>
        <div class="quick-page">
          <table class="quick-page__table">
            <tbody>
              <tr class="quick-page__table__next">
                <th class="quick-page__table__next__head">이전글</th>
                <td class="quick-page__table__next__title"><a href="">이선희-인연</a></td>
              </tr>
              <tr class="quick-page__table__previously">
                <th class="quick-page__table__previously__head">다음글</th>
                <td class="quick-page__table__previously__title"><a href="">이선희-인연</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </article>
  <?php include('../../partials/footer.php') ?>
  </div>