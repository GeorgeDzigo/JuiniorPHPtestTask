function show() {
      var d = document.querySelector(".sizes-option");
      var dis = d.options[d.selectedIndex].text;
      let el = document.querySelectorAll(".size-type");
      // Reset all inputs 
      el.forEach(v => v.querySelectorAll("#int").forEach(x => x.value = ""));
    
      // Changing all of them their display to none
      document.getElementById("mb").style.display = "none";
      document.getElementById("cm").style.display = "none";
      document.getElementById("kg").style.display = "none";
      
      // Change display to block when dis == to size type
      if (dis == "MB") {
            document.getElementById("mb").style.display = "block";
      }
      else if (dis == "CM") {
            document.getElementById("cm").style.display = "block";
      }
      else {
            document.getElementById("kg").style.display = "block";
      }
}


function inputChecker() {
      let inputs = document.querySelectorAll(".form-control");
      let errors = [];

      inputs.forEach(v => {
            if (v.value == "") {
                  errors.push(v.name)
                  console.log(v.placeholder + " is empty.");
            }
      });
}