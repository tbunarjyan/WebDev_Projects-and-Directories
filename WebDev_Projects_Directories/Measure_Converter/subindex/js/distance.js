
function convert(meter) {
  var C,K,M,D,R;
    if (meter == "K") {
        K = document.getElementById("k").value;
        M = K*1000;
        C = M*100;
        D = C/10;
        R = D*100;

        document.getElementById("m").value = Math.round(M);
        document.getElementById("r").value = Math.round(R);
        document.getElementById("d").value = Math.round(D);
        document.getElementById("c").value = Math.round(C);

    } else if (meter == "M"){
      M = document.getElementById("m").value;
      K = M/1000;
      C = M*100;
      D = C/10;
      R = D*100;

      document.getElementById("k").value = Math.round(K);
      document.getElementById("r").value = Math.round(R);
      document.getElementById("d").value = Math.round(D);
      document.getElementById("c").value = Math.round(C);
    }
    else if (meter == "C"){
        C = document.getElementById("c").value;
        M = C/100;
        K = M/1000;
        D = C/10;
        R = D*100;

        document.getElementById("k").value = Math.round(K);
        document.getElementById("r").value = Math.round(R);
        document.getElementById("d").value = Math.round(D);
        document.getElementById("m").value = Math.round(M);

    }
    else if (meter == "R"){

        R = document.getElementById("r").value;
        C = R/10;
        M = C/100;
        K = M/1000;
        D = C/10;
        document.getElementById("k").value = Math.round(K);
        document.getElementById("c").value = Math.round(C);
        document.getElementById("d").value = Math.round(D);
        document.getElementById("m").value = Math.round(M);
   }
  else if (meter == "D"){

      D = document.getElementById("d").value;

      C = D*10;
      R = C*10;
      M = C/100;
      K = M/1000;

      document.getElementById("k").value = Math.round(K);
      document.getElementById("c").value = Math.round(C);
      document.getElementById("r").value = Math.round(R);
      document.getElementById("m").value = Math.round(M);
  }
      document.getElementById('bar2').style.width = K/2 + '%';
      document.getElementById('bar1').style.width = K +'%';

    }
    function btntest_onclickback()
    {
      window.location.href = "mass.html";
    }

    function btntest_onclicknext()
    {
      window.location.href = "capacity.html";
    }
