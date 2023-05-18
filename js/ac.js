let T = document.getElementById('temp');
let H = document.getElementById('hum');
let D = document.getElementById('tod');
let W = document.getElementById('w');
let state = document.getElementById('state');
const toggleit = document.querySelector("btn-check");


function getnum() {
  var d = parseInt(D.value.split(":")[0])
  if ((T.value > 78) && (8 < d < 17)) {
    console.log('AC is ON');
    document.getElementById('state').value = 'Air conditioning is ON';
    toggleit.classList.toggle("green");
  }
  else if ((H.value > 85) && (T.value > 78) && (8 < d < 17)) {
    console.log('AC is ON');
    document.getElementById('state').value = 'Air conditioning is ON';
    toggleit.classList.toggle("green");
  }
  else if ((W.value == 'Saturday' || W.value == 'Sunday') && (H.value > 85) && (T.value > 78)) {
    console.log('AC is ON');
    document.getElementById('state').value = 'Air conditioning is ON';
    toggleit.classList.toggle("green");
  }
  else if ((W.value == 'Saturday' || W.value == 'Sunday') && (H.value > 85)) {
    console.log('AC is ON');
    document.getElementById('state').value = 'Air conditioning is ON';
    toggleit.classList.toggle("green");
  }
  else {
    console.log('AC cannot be switched on');
    document.getElementById('state').value = 'Air conditioning is OFF';
    toggleit.classList.toggle("red");
  }
}



