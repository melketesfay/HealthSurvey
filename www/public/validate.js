let radios = document.querySelectorAll("input[type='radio']");

let radioArr = Array.from(radios);
// let test = radios.some((e) => e.checked == true);

console.log(typeof radioArr);

function checkInput() {
  let test = radioArr.every((e) => e.checked == false);
  if (test) {
    alert("stop");

    return false;
  }

  document.getElementById("myForm").submit();
}
