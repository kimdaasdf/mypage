  $.ajax({
    type: 'GET',
    url: '/data-model/freeboard.php',
    data: 'boards',
    dataType: 'json',
    success: function (boards) {
      $.each(boards, function(key, value) {
        console.log(key, value);
        $('#board_content').append('<tr class="free-board__content"> <td>'+ value['board_id'] +'</td> <td><a href="/view/board/view.php">' + value['content_title'] + '</a></td> <td>관리자</td> <td>' + value['create_at'] + '</td> <td>' + value['bcount'] + '</td> </tr>');
      })
    }
  });