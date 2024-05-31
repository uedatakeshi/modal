document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("modal");
    var openModalBtn = document.getElementById("openModalBtn");
    var closeModalSpan = document.getElementsByClassName("close")[0];
    var modalBody = document.getElementById("modal-body");

    openModalBtn.onclick = function() {
        fetch('fetch_content.php')
            .then(response => response.text())
            .then(data => {
                modalBody.innerHTML = data;
                modal.style.display = "block";
            })
            .catch(error => {
                console.error('Error fetching the content:', error);
            });
    };

    closeModalSpan.onclick = function() {
        modal.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});

