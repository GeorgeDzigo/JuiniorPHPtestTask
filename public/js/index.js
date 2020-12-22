function show() { 
      var d = document.getElementById("inputGroupSelect01");
      var dis = d.options[d.selectedIndex].text;
      if (dis == "MB") {
            document.getElementById("mb").style.display = "block";
            document.getElementById("cm").style.display = "none";
            document.getElementById("kg").style.display = "none";
      }
      else if (dis == "CM") {
            document.getElementById("mb").style.display = "none";
            document.getElementById("cm").style.display = "block";
            document.getElementById("kg").style.display = "none";
      }
      else if (dis == "KG") {
            document.getElementById("mb").style.display = "none";
            document.getElementById("cm").style.display = "none";
            document.getElementById("kg").style.display = "block";
      }
      else {
            document.getElementById("mb").style.display = "none";
            document.getElementById("cm").style.display = "none";
            document.getElementById("kg").style.display = "none";
      }
}
