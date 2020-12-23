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


function inputChecker() { 
      let el = document.querySelectorAll("#inputEmail3");
      let er = document.getElementById("errors");

      let se = document.getElementById("inputGroupSelect01");
      let s = se.options[se.selectedIndex].text;

      let arr = []      
      el.forEach(v => arr.push(v.name));
      
      let c = arr.slice(3).filter(x => x.toUpperCase() == s);

      if (s == "Type Switcher") arr = [];
      else if (c.length == 0) arr = arr.slice(0, 3).concat(arr.slice(4, 7));
      else arr = arr.slice(0, 3).concat(c);
      


      er.innerHTML = '';

}

