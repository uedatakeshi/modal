document.addEventListener("DOMContentLoaded", function () {
  var modal = document.getElementById("modal");
  var openModalBtn = document.getElementById("openModalBtn");
  var closeModalSpan = document.getElementsByClassName("close")[0];
  var modalBody = document.getElementById("modal-body");

  openModalBtn.onclick = function () {
    fetch("fetch_content.php")
      .then((response) => response.text())
      .then((data) => {
        modalBody.innerHTML = data;
        modal.style.display = "block";
      })
      .catch((error) => {
        console.error("Error fetching the content:", error);
      });
  };

  closeModalSpan.onclick = function () {
    modal.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
});

function search() {
  // 検索フォームから名前を取得
  var name = document.getElementById("name").value;

  // ここでサーバーに名前を送信して検索結果を取得する処理を行います
  // 以下はダミーの検索結果を表示するコードです
  var searchResults = [
    { id: 1, name: "山田太郎", date: "2024-05-30" },
    { id: 2, name: "田中花子", date: "2024-05-31" },
  ];

  // 検索結果を表示する
  displayResults(searchResults);
}

function displayResults(results) {
  var table = "<table><tr><th>ID</th><th>名前</th><th>日付</th></tr>";

  // 検索結果をテーブル形式に整形
  for (var i = 0; i < results.length; i++) {
    table +=
      "<tr onclick='selectRow(" +
      results[i].id +
      ")'><td>" +
      results[i].id +
      "</td><td>" +
      results[i].name +
      "</td><td>" +
      results[i].date +
      "</td></tr>";
  }

  table += "</table>";

  // 検索結果を表示
  document.getElementById("searchResults").innerHTML = table;
}

function selectRow(id) {
  // ダブルクリックされた行のIDを親画面に表示
  modal.style.display = "none";
  document.getElementById("result").innerHTML = id;
}
