<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>モーダルウィンドウの例</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <body>
    <button id="openModalBtn">モーダルを開く1</button>
    <p>選択結果：<span id="result"></span></p>

    <?php include ("fetch_content.php"); ?>
    <?php include ("fetch_content_sub.php"); ?>

    <script>
      $(document).ready(function () {
        var $modal = $("#modal");
        var $modalSub = $("#modalSub");

        $("#openModalBtn").on("click", function () {
          $modal.show();
        });

        $("#closeModalBtn").on("click", function () {
          $modal.hide();
        });

        $("#closeModalSubBtn").on("click", function () {
          $modalSub.hide();
        });

        $(window).on("click", function (event) {
          if ($(event.target).is($modal)) {
            $modal.hide();
          }
          if ($(event.target).is($modalSub)) {
            $modalSub.hide();
          }
        });
      });

      function search() {
        var name = $("#name").val();
        $.ajax({
          url: "result.php",
          method: "GET",
          success: function (data) {
            $("#searchResults").html(data);
          },
          error: function (error) {
            console.error("Error fetching the content:", error);
          },
        });
      }

      function selectRow(id) {
        $("#company_id").val(id);
        $("#modalSub").show();
      }

      function searchSub() {
        var tel = $("#tel").val();
        var company_id = $("#company_id").val();
        $.ajax({
          url: "result_sub.php",
          method: "GET",
          success: function (data) {
            $("#searchSubResults").html(data);
          },
          error: function (error) {
            console.error("Error fetching the content:", error);
          },
        });
      }

      function selectSubRow(id) {
        $("#modalSub").hide();
        $("#modal").hide();
        $("#result").text(id);
      }
    </script>
  </body>
</html>
