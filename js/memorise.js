/** BIBLE SEARCH JSON CODE **/
var bookSel = document.getElementById("book-option");
var chapterSel = document.getElementById("chapter-option");
var verseSel = document.getElementById("verse-option");
var passageStr;

function setDropdownValue() {
  var bookValue = bookSel.value;
  var chapterValue = chapterSel.value;
  var verseValue = verseSel.value;

  if (bookValue && chapterValue && verseValue) {
    passageStr = [bookValue, chapterValue].join(' ');
    passageStr = [passageStr, verseValue].join(':');

    fetchAPIData(passageStr);
  }
}

function fetchJSONData() {
  fetch("../json/bible.json")
      .then((response) => {
          if (!response.ok) {
              throw new Error
                  (`HTTP error! Status: ${response.status}`);
          }
          return response.json();
      })
      .then((data) => {
          for(var book in data) {
            bookSel.options[bookSel.options.length] = new Option(book, book);
          }

          // dynamically change chapter dropdown when book is selected 
          bookSel.onchange = function() {
            chapterSel.length = 1;
            verseSel.length = 1;
            for (var chapter in data[this.value]){
              chapterSel.options[chapterSel.options.length] = new Option(chapter, chapter);
            }
            setDropdownValue();
          }

          // dynamically change verse dropdown when chapter is selected
          chapterSel.onchange = function() {
            verseSel.length = 1;
            var verseNums = data[bookSel.value][this.value];
            for (let i = 1; i <= verseNums; i++) {
              verseSel.options[verseSel.options.length] = new Option(i, i);
            }
            setDropdownValue();
          }

          verseSel.onchange = function() {
            setDropdownValue();
          }
      })  
      .catch((error) =>
          console.error("Unable to fetch data:", error));
}

fetchJSONData();


/** ESV API CODE **/
function fetchAPIData(passage) {
  const API_KEY = 'dbf725a931b6eb4bc5b9d4582e36f5cb78b1c6c7';
  const API_URL = `https://api.esv.org/v3/passage/html/?q=${encodeURIComponent(passage)}`;

  fetch(API_URL, {
    headers: {
      'Authorization': `Token ${API_KEY}`,
    }
  })
  .then(response => {
    if (!response.ok) {
      throw new Error
          (`HTTP error! Status: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    const passageDiv = document.getElementById("cont-three-modal");
    passageDiv.innerHTML = data.passages[0];

    passageDiv.querySelector('.audio').remove();
  })
  .catch(error => console.error('Error:', error));
}

/** MODAL CODE **/
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

