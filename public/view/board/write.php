<?php include('../../partials/htmlheader.php') ?>

<body class="board-write-place">
  <div class="wrap">
  <?php include('../../partials/fixed-nav.php') ?>
  <?php include('../../partials/header.php') ?>

    <article class="content-container">
      <section class="side-nav">
        <?php include('board-side-nav.php') ?>
      </section>
      <section class="content">
        <h1 class="big-title">자유 게시판</h1>
        <form action="store.php">
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
            <button type="submit" class="custom-btn">등록</button>
            <a href="/view/board/index.php" class="custom-btn">목록</a>
          </div>
        </form>
      </section>
    </article>
  <?php include('../../partials/footer.php') ?>
  </div>