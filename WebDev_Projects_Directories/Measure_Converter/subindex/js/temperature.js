
function convert(degree) {
var C,F,K;
  if (degree == "C") {
      C = document.getElementById("c").value;
      F = C * 9 / 5 + 32;
      K = ((F-32) * 5 / 9)+ 273;
      document.getElementById("f").value = Math.round(F);
      document.getElementById("k").value = Math.round(K);
  } else if (degree == "F"){
      F = document.getElementById("f").value;
      C = (F-32) * 5 / 9;
      K = ((F-32) * 5 / 9)+ 273;
      document.getElementById("c").value = Math.round(C);
      document.getElementById("k").value = Math.round(K);
  }
  else if (degree == "K") {
    K = document.getElementById("k").value;
    C = K - 273;
    F = ((K-273) * 9 / 5)+ 32;
    document.getElementById("c").value = Math.round(C);
    document.getElementById("f").value = Math.round(F);
  }

      document.getElementById('bar2').style.width = C + '%';
      document.getElementById('bar1').style.width = F/3 +'%';
      document.getElementById('bar3').style.width = 2*F/3 +'%';
}

function btntest_onclick()
{
     window.location.href = "../index.html";
}

function btntest_backonclickspeed()
{
     window.location.href = "speed.html";
}
