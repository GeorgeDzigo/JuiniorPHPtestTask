const errorDisplay = document.getElementById("errors");
const sizeTypeErrors = document.getElementById("size-type-errors");

function show() {
      var d = document.querySelector(".sizes-option");
      var dis = d.options[d.selectedIndex].value;
      let el = document.querySelectorAll(".size-type");
      
      // Reset all inputs
      el.forEach(v => {
            if(v.id != dis) v.querySelectorAll("#int").forEach(x => x.value = "");
      });
    
      // Changing all of them their display to none
      document.getElementById("size").style.display = "none";
      document.getElementById("dimensions").style.display = "none";
      document.getElementById("weight").style.display = "none";
      
      // Change display to block to selected size type
      document.getElementById(dis).style.display = "block";
      return dis;
}

//This function validates stable inputs (SKU, NAME, PRICE)
function stableInputsValidation() {
      // This inputs: SKU, Name, Price
      let inputs = document.querySelectorAll(".stable-inputs");
      let errors = [];

      inputs.forEach(parent => {
            let childInput = parent.querySelector(".form-control");
            if (childInput.value == "") {
                  errors.push(childInput.name);
                  errorDisplay.innerHTML += `<h4>Please, provide the data for ${childInput.placeholder}</h4>`;
            }
            else if (childInput.name == "price") {
                
                  if (parseFloat(childInput.value) != childInput.value) {
                        errors.push(childInput.name);
                        errorDisplay.innerHTML += `<h4>Please, provide the valid ${childInput.placeholder}</h4>`
                  }
            }
      });
      return errors;
}

//This function validates size type inputs 
function sizeTypeInputsValidation() {
      let inputs = document.getElementById(show()).querySelectorAll(".form-control");
      let errors = [];
      if (show() == "Type_Switcher") {
            errors.push(show());
      }
      inputs.forEach(v => {
            if (v.value == "") {
                  errors.push(v.name);
                  sizeTypeErrors.innerHTML = `<h4>Please, provide ${show()}</h4>`
            }
            else {
                  if (parseInt(v.value) != v.value) {
                        errors.push(v.name);
                        errorDisplay.innerHTML += `<h4>Please, provide valid ${v.placeholder}</h4>`
                  }
            }
      });
      return errors;
}

// This function will submit data if there are no errors
function submitData() {
      errorDisplay.innerHTML = "";
      sizeTypeErrors.innerHTMl = "";
      let stableInputs = stableInputsValidation();
      let unstableInputs = sizeTypeInputsValidation();

      if (stableInputs.length == 0 && unstableInputs.length == 0) document.getElementById("datatosubmit").submit();
}