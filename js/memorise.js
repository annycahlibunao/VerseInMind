var addVerseModal = document.getElementById("add-verse-modal");
var addVerseBtn = document.getElementById("add-verse-btn");
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
addVerseBtn.onclick = function() {
  addVerseModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  addVerseModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == addVerseModal) {
    addVerseModal.style.display = "none";
  }
}