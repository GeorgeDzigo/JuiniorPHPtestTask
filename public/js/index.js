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

var errors = [];

let btn = document.getElementById("btn"); 
btn.type = "button";
function inputChecker() {
      let el = document.querySelectorAll("#inputEmail3");
      let er = document.getElementById("errors");
      let val = [];
      

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
                  if (v.name == arr[i]) {
                        if (v.value == "") {
                              errors.push(v.placeholder);
                              btn.type = "button";
                              er.innerHTML += "<li style='color:red;'>Please, Provide " + v.placeholder + " </li>";
                        }
                        //  Check if values have right answer type
                        else if (v.value != "") {
                               if (v.name == "price") {
                                    btn.type = "button";
                                    let a = /[a-z]/g.test(v.value.toString());
                                    if (a) er.innerHTML += "<li style='color:red;'>Please, Enter Valid: " + v.placeholder + " </li>";
                              }
                              else if (v.name == "mb") {
                                    btn.type = "button";
                                    let a = /[a-z]/g.test(v.value.toString());
                                    if (a) er.innerHTML += "<li style='color:red;'>Please, Enter Valid: " + v.placeholder + " </li>";
                                    else btn.type = "submit"
                              } 
                               else if (v.name == "hcm") {
                                    btn.type = "button";
                                    let a = /[a-z]/g.test(v.value.toString());
                                     if (a) {
                                          er.innerHTML += "<li style='color:red;'>Please, Enter Valid: " + v.placeholder + " </li>";
                                          errors.push(v.name);
                                    }
                                    else if(errors.length == 0 ) btn.type = "submit";
                               }
                               else if (v.name == "wcm") {
                                    btn.type = "button";
                                    let a = /[a-z]/g.test(v.value.toString());
                                     if (a) {
                                          er.innerHTML += "<li style='color:red;'>Please, Enter Valid: " + v.placeholder + " </li>";
                                          errors.push(v.name);
                                    }
                                    else if(errors.length == 0 ) btn.type = "submit";
                               }
                               else if (v.name == "lcm") {
                                    btn.type = "button";
                                    let a = /[a-z]/g.test(v.value.toString());
                                     if (a) {
                                          er.innerHTML += "<li style='color:red;'>Please, Enter Valid: " + v.placeholder + " </li>";
                                          errors.push(v.name);
                                    }
                                    else if(errors.length == 0 ) btn.type = "submit";
                               }
                        } 
                       
                        
                              
                  }
            }   
      });

      
      
}
