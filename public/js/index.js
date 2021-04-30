const errorDisplay = document.getElementById("errors");
const sizeTypeErrors = document.getElementById("size-type-errors");

function show()
{
      errorDisplay.innerHTML = "";
      var d = document.querySelector(".sizes-option");
      var dis = d.options[d.selectedIndex].value;
      let el = document.querySelectorAll(".size-type");
      
      // Reset all inputs
      el.forEach(v => {
            if(v.id != dis) v.querySelectorAll("#int").forEach(x => x.value = "");
      });
    
      // Changing all of them their display to none
      let size = document.getElementById('size');
      size.style.display = 'none';
      size.classList.remove('selected');

      let dimensions = document.getElementById('dimensions');
      dimensions.style.display = 'none';
      dimensions.classList.remove('selected');

      let weight = document.getElementById('weight')
      weight.style.display = 'none';
      weight.classList.remove('selected');
      
      // Change display to block to selected size type
      document.getElementById(dis).style.display = "block";
      document.getElementById(dis).classList.add("selected");
      return dis;
}

// This function checks blank inputs
function blankInputsCheck()
{
      let errors = [];
      let defaultInputs = document.querySelectorAll("#default-input");
      let selectedTypeInputs = document.querySelector('.selected').querySelectorAll(".form-control");

      let allInputs = Array.from(defaultInputs).concat(Array.from(selectedTypeInputs));
      
      allInputs.forEach(input => {
            if (input.value == "") {
                  errors.push(input.placeholder);
                  errorDisplay.innerHTML += "<li>Please submit " + input.placeholder + "</li>";
            }
      });
      return errors;
}


// This function checks selected type inputs
function selectedTypeInputsCheck()
{
      let selectedTypeInputs = document.querySelector('.selected').querySelectorAll(".form-control");
      let errors = [];
      selectedTypeInputs.forEach(input => {
            if (parseInt(input.value) != input.value) {
                  errors.push(input.placeholder);
                  errorDisplay.innerHTML += "<li>Please provide valid " + input.placeholder + "</li>";
            }
      });
      return errors;
}

function priceInputCheck()
{
      let priceInput = document.querySelector('.price');
      let errors = []

      if (priceInput.value.match(/^\d{0,8}(\.\d{1,2})?$/) == null)
      {
            errorDisplay.innerHTML += "<li>Please Provide valid Price</li>";
            errors.push(priceInput.placeholder);
      }
      return errors;
}

// This function will submit data if there are no errors
function submitData()
{
      errorDisplay.innerHTML = "";
      sizeTypeErrors.innerHTMl = "";
      let blankInputs = blankInputsCheck();
      let priceInput = priceInputCheck();
      let selectedInputs = selectedTypeInputsCheck();

      if (blankInputs.length == 0 && priceInput.length == 0 && selectedInputs.length == 0) document.getElementById("datatosubmit").submit();
}