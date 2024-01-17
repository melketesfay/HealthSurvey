let radios = document.querySelectorAll("input[type='radio']");

let checkboxes = document.querySelectorAll("input[type='checkbox']");



function checkAtleastOneSelected(tobeChecked){
  let test = tobeChecked.every((e) => e.checked == false);
  if (test && tobeChecked.length >0) {
    alert("stop");

    return false;
  }
}





// toggle yes no buttons
let ja = document.getElementById('ja')
let nein = document.getElementById('nein')
let yesNo = [ja,nein];


if (yesNo[0]==null) {
  console.log("yesNo not defined yet")
}else{
  
  yesNo.forEach(e=> e.addEventListener("click", toggle))
}

function toggle(){

  console.log("clicked");
  

  if (this == ja) {
    nein.checked = false;
  }else if(this==nein){
    ja.checked = false;
  }
}

// end toggle yes no buttons







//function run after submit button is pressed
function checkInput() {

// checkAtleastOneSelected(radios);
// checkAtleastOneSelected(checkboxes);
let radioBtn = Array.from(radios);
let checkBtn = Array.from(checkboxes);

  let testRadioBtn = radioBtn.every((e) => e.checked == false);
  let testCheckBtn = checkBtn.every((e) => e.checked == false);
  if (testCheckBtn && checkBtn.length >0) {
    alert("checkboxes not selected");

    return false;
  }else if(testRadioBtn && radioBtn.length >0)

{
  alert("radios not selected");

    return false;
}


  document.getElementById("myForm").submit();
}


