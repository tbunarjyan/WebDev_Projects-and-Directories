function convert(meter) {
    var  K,M,H,A;

      if (meter == "K") {
          K = document.getElementById("k").value;
          H = K*100;
          A= K*10000;
          M = K*1000000;

          document.getElementById("m").value = Math.round(M);
          document.getElementById("h").value = Math.round(H);
          document.getElementById("a").value = Math.round(A);

      } else if (meter == "M"){
        M = document.getElementById("m").value;
        K = M/1000000;
        H = K*100;
        A= K*10000;


        document.getElementById("k").value = Math.round(K);
        document.getElementById("h").value = Math.round(H);
        document.getElementById("a").value = Math.round(A);
      }
      else if (meter == "H"){

        H = document.getElementById("h").value;
        K = H/100;
        A= K*10000;
        M = K*1000000;

        document.getElementById("k").value = Math.round(K);
        document.getElementById("h").value = Math.round(H);
        document.getElementById("a").value = Math.round(A);
      }
      else if (meter == "A"){
        A = document.getElementById("a").value;
        K = A/10000;
        M = K*1000000;
        H = K*100;

        document.getElementById("k").value = Math.round(K);
        document.getElementById("h").value = Math.round(H);
        document.getElementById("m").value = Math.round(A);
      }
        document.getElementById('bar2').style.width = K + '%';
        document.getElementById('bar1').style.width = 2*K +'%';

  }
  function btntest_onclickback()
  {
      window.location.href = "capacity.html";
  }

  function btntest_onclicknext()
  {
      window.location.href = "speed.html";
  }
