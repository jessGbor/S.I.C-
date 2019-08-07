
function likeFunction() {
  document.getElementById("profile1").innerHTML = "liked";
}

function likesFunction() {
  document.getElementById("profile2").innerHTML = "liked";
}
function comment1() {
  document.getElementById("dropdown1").classList.toggle("show");
}

function comment2() {
  document.getElementById("dropdown2").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
