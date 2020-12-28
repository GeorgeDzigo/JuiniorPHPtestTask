function show() { 
      var d = document.getElementById("inputGroupSelect01");
      var dis = d.options[d.selectedIndex].text;
      let el = document.querySelectorAll("#inputEmail3");
      if (dis == "MB") {
            el.forEach(v => { if(v.name == "mb" || v.name == "hcm" || v.name == "wcm" || v.name == "lcm" || v.name == "kg") v.value = ""});
            document.getElementById("mb").style.display = "block";
            document.getElementById("cm").style.display = "none";
            document.getElementById("kg").style.display = "none";
      }
      else if (dis == "CM") {
            el.forEach(v => { if(v.name == "mb" || v.name == "hcm" || v.name == "wcm" || v.name == "lcm" || v.name == "kg") v.value = ""});
            document.getElementById("mb").style.display = "none";
            document.getElementById("cm").style.display = "block";
            document.getElementById("kg").style.display = "none";
      }
      else if (dis == "KG") {
            el.forEach(v => { if(v.name == "mb" || v.name == "hcm" || v.name == "wcm" || v.name == "lcm" || v.name == "kg") v.value = ""});
            document.getElementById("mb").style.display = "none";
            document.getElementById("cm").style.display = "none";
            document.getElementById("kg").style.display = "block";
      }
      else {
            el.forEach(v => { if(v.name == "mb" || v.name == "hcm" || v.name == "wcm" || v.name == "lcm" || v.name == "kg") v.value = ""});
            document.getElementById("mb").style.display = "none";
            document.getElementById("cm").style.display = "none";
            document.getElementById("kg").style.display = "none";
      }
}

var errors = [];

let btn = document.getElementById("btn"); 
btn.type = "button";
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
      errors = [];


      //  Check if values are empty
      el.forEach(v => {
            for (let i = 0; i < arr.length; i++) {
                  if (v.name == arr[i] && v.value == "") {
                        errors.push(v.placeholder);
                        btn.type = "button";
                        er.innerHTML += "<li style='color:red;'>Please, Provide " + v.placeholder + " </li>";
                  }
            }      
      });
      // Check If values are correct
      if(errors.length == 0) {
            arr = arr.slice(2);
            el.forEach(v => {
                  for (let i = 0; i < arr.length; i++) {
                        if(v.name == arr[i]){
                        if (v.name == "price") {
                              btn.type = "button";
                              let ar = v.value.toString().split("");
                              ar[ar.indexOf(".")] = 0;
                              for (i = 0; i < ar.length; i++) {
                                    if (parseInt(ar[i]) != ar[i]) {
                                          btn.type = "button";
                                          console.log(ar[i]);
                                          errors.push(v.name);
                                          er.innerHTML += "<li style='color:red;'>Please, Enter Valid: " + v.placeholder + " </li>";
                                          break;
                                    }
                              }
                        }
                        else {
                              btn.type = "button";
                              let a = /[a-z]/g.test(v.value.toString());
                              if (a) {
                                    er.innerHTML += "<li style='color:red;'>Please, Enter Valid: " + v.placeholder + " </li>";
                                    errors.push(v.name);
                              }
                              else if (errors.length == 0) btn.type = "submit";
                        }
                        }
                  }
            });
      }
}