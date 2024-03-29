    <section class="content">
      <div class="image-place">
        <img src="http://placehold.it/994x200">
      </div>
      <div class="board-place">
        <script>
            $.getScript('js/board-import.js', function (parsing) {
                $board_type = 'mainfreeboard';
            });
        </script>
        <div class="board-place__half">
            <table class="board-place__half__table">
                <thead class="board-place__half__table__title">
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>날짜</th>
                    </tr>
                </thead>
                <tbody id="board_free_content" class="board-place__half__table__content">
                </tbody>
            </table>
        </div>
        <script>
          $.ajax({
            type: 'GET',
            url: '/data-model/mainadminboard.php',
            data: 'boards',
            dataType: 'json',
            success: function (boards) {
              $.each(boards, function(key, value) {
                $date = value['create_at'];
                $dateformat = $date.slice(0, -8);

                $('#board_admin_content').append('<tr class="free-board__content"> <td>'+ value['board_id'] +'</td> <td><a href="/view/board/view.php">' + value['content_title'] + '</a></td> <td id="date_picker">' + $dateformat + '</td> </tr>');

              })
            }
          });
        </script>
        <div class="board-place__half">
            <table class="board-place__half__table">
                <thead class="board-place__half__table__title">
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>날짜</th>
                    </tr>
                </thead>
                <tbody id="board_admin_content" class="board-place__half__table__content">
                </tbody>
            </table>
        </div>
      </div>
      <div class="art-place">
        <img src="http://placehold.it/994x100">
      </div>
    </section>