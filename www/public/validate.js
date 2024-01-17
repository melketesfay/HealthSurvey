let radios = document.querySelectorAll("input[type='radio']");

let checkboxes = document.querySelectorAll("input[type='checkbox']");

let inputNumbers = document.querySelectorAll("input[type='number']");

console.log(inputNumbers, "hallo");

function checkAtleastOneSelected(tobeChecked) {
  let test = tobeChecked.every((e) => e.checked == false);
  if (test && tobeChecked.length > 0) {
    alert("stop");

    return false;
  }
}

// toggle yes no buttons
let ja = document.getElementById("ja");
let nein = document.getElementById("nein");
let yesNo = [ja, nein];

if (yesNo[0] == null) {
  console.log("yesNo not defined yet");
} else {
  yesNo.forEach((e) => e.addEventListener("click", toggle));
}

function toggle() {
  console.log("clicked");

  if (this == ja) {
    nein.checked = false;
  } else if (this == nein) {
    ja.checked = false;
  }
}

// end toggle yes no buttons

//disable selecting other activities after user selects no activity

let noActivity = checkboxes[0];

console.log(noActivity);

if (noActivity == null || noActivity == undefined) {
  console.log("not defined yet");
} else {
  noActivity.addEventListener("click", disableAll);
}

function disableAll() {
  console.log("clicked no");
  let checkbuttons = Array.from(checkboxes);
  let rest = checkbuttons.slice(1);
  if (this.checked) {
    rest.forEach((e) => e.setAttribute("disabled", ""));
    rest.forEach((e) => (e.checked = false));
    console.log(rest);
  } else {
    rest.forEach((e) => e.removeAttribute("disabled"));
  }
}

//function run after submit button is pressed
function checkInput() {
  // checkAtleastOneSelected(radios);
  // checkAtleastOneSelected(checkboxes);
  let radioBtn = Array.from(radios);
  let checkBtn = Array.from(checkboxes);
  let inputNums = Array.from(inputNumbers);

  let testRadioBtn = radioBtn.every((e) => e.checked == false);
  let testCheckBtn = checkBtn.every((e) => e.checked == false);

  //make sure at least one checkbox is selected

  if (testCheckBtn && checkBtn.length > 0) {
    alert("checkboxes not selected");

    return false;

    //make sure at least one radiobutton is selected
  } else if (testRadioBtn && radioBtn.length > 0) {
    alert("radios not selected");

    return false;
  }

  //   else if (inputNumbers[0] != null && inputNumbers[0].value == "") {
  //     alert("insert number");
  //     return false;
  //   }

  for (let index = 0; index < inputNumbers.length; index++) {
    if (inputNumbers[index] != null && inputNumbers[index].value == "") {
      alert("insert number");
      return false;
    }
  }

  document.getElementById("myForm").submit();
}
