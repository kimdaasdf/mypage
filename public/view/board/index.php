<?php include('../../partials/htmlheader.php') ?>
<body class="board-place">
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
        <table class="free-board">
          <thead>
            <tr class="free-board__title">
              <th>번호</th>
              <th>제목</th>
              <th>글쓴이</th>
              <th>날짜</th>
              <th>조회수</th>
            </tr>
          </thead>
          <tbody>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
            <tr class="free-board__content">
              <td>1</td>
              <td><a href="/view/board/view.php"> 제목 </a></td>
              <td>관리자</td>
              <td>2016-01-01</td>
              <td>1</td>
            </tr>
          </tbody>
        </table>
        <div class="btn-box">
          <a href="/view/board/write.php" class="custom-btn">글 쓰기</a>
        </div>
        <div class="paging">
            <div class="first"><a href=""> << </a></div>
            <div class="previous"><a href=""> < </a></div>
          <ul class="paging-nav">
            <li class="paging-nav__item"><a href="">1</a></li>
            <li class="paging-nav__item"><a href="">2</a></li>
            <li class="paging-nav__item"><a href="">3</a></li>
            <li class="paging-nav__item active"><a href="">4</a></li>
            <li class="paging-nav__item"><a href="">5</a></li>
          </ul>
            <div class="next"><a href=""> > </a></div>
            <div class="last"><a href=""> >> </a></div>
        </div>
      </section>
    </article>
  <?php include('../../partials/footer.php') ?>
  </div>