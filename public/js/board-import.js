$(function() {
  $.ajax({
    type: 'GET',
    url: '/data-model/' + $board_type + '.php',
    data: 'boards',
    dataType: 'json',
    success: function (boards) {
      $.each(boards, function(key, value) {
        $date = value['create_at'];
        $dateformat = $date.slice(0, -8);

        $('#board_free_content').append('<tr class="free-board__content"> <td>'+ value['board_id'] +'</td> <td><a href="/view/board/view.php">' + value['content_title'] + '</a></td> <td>' + $dateformat + '</td> </tr>');
      })
    }
  });
})
