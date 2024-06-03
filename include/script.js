document.addEventListener("DOMContentLoaded", function () {
  var modal = document.getElementById("modal");
  var openModalBtn = document.getElementById("openModalBtn");
  var closeModalBtn = document.getElementById("closeModalBtn");

  openModalBtn.onclick = function () {
    modal.style.display = "block";
  };

  closeModalBtn.onclick = function () {
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
  fetch("result.php")
    .then((response) => response.text())
    .then((data) => {
      // 検索結果を表示
      document.getElementById("searchResults").innerHTML = data;
    })
    .catch((error) => {
      console.error("Error fetching the content:", error);
    });
}

function selectRow(id) {
  const companyIdInput = document.getElementById("company_id");
  companyIdInput.value = id;
  // ダブルクリックされた行のIDをサブモーダルに渡す
  modalSub.style.display = "block";
}

document.addEventListener("DOMContentLoaded", function () {
  var modalSub = document.getElementById("modalSub");
  var closeModalSubBtn = document.getElementById("closeModalSubBtn");

  closeModalSubBtn.onclick = function () {
    modalSub.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
});

function searchSub() {
  // 検索フォームから名前を取得
  var tel = document.getElementById("tel").value;
  var company_id = document.getElementById("company_id").value;

  fetch("result_sub.php")
    .then((response) => response.text())
    .then((data) => {
      // 検索結果を表示
      document.getElementById("searchSubResults").innerHTML = data;
    })
    .catch((error) => {
      console.error("Error fetching the content:", error);
    });
}

function selectSubRow(id) {
  // ダブルクリックされた行のIDを親画面に表示
  modalSub.style.display = "none";
  modal.style.display = "none";

  document.getElementById("result").innerHTML = id;
}
