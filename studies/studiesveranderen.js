//Theme Name: KASO MORTSEL
//Author: Derboven Maxim
//Author URL: 
//Description: The standard footer for Kaso Mortsel
//Version: 1.0
//Text Domain: kaso-mortsel

function Veerstegraad() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("verander").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "studies/studieseerstegraad.php", true);
  xhttp.send();
}

function Vtweedegraad() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("verander").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "studies/studiestweedegraad.php", true);
  xhttp.send();
}

function Vderdegraad() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("verander").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "studies/studiesderdegraad.php", true);
  xhttp.send();
}
