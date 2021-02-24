$(function () {
  $(document).on("click", ".on_click", function () {
    var idx = $(this).data("idx");
    var val = $(this).parents("tr").find("select").val();

    if (val == " ") {
      alert("게시판 아이디를 선택해주세요.");
    } else {
      $.post(
        "/action/menu_chk",
        { menu_idx: idx, board_idx: val },
        function (k) {
          alert("등록이되었습니다.");
          console.log(k);
        }
      );
    }
  });
});
