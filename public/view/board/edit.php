<?php include('../../partials/htmlheader.php') ?>
<body class="board-write-place">
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
        <div class="write-box">
          <input type="text" name="board_title" class="custom-form">
          <textarea rows="10" name="board_content" id="board_content"></textarea>
            <script type="text/javascript">
              CKEDITOR.replace('board_content', {
                height: 350
              });
            </script>
        </div>
        <div class="btn-box">
          <a href="" class="custom-btn">등록</a>
          <a href="/view/board/index.php" class="custom-btn">목록</a>
        </div>
      </section>
    </article>
  <?php include('../../partials/footer.php') ?>
  </div>