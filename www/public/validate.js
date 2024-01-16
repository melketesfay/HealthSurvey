let radios = document.querySelectorAll("input[type='radio']");

function checkInput() {
  if (radios[0].checked == false) {
    alert("stop");

    return false;
  }

  document.getElementById("myForm").submit();
}
