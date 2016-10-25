
function convert(meter) {
    var K,M,H,A;
      if (meter == "K") {
          K = document.getElementById("k").value;
          H = K*3600;
          A = K*60000;
          M = K*1000;

          document.getElementById("m").value = Math.round(M);
          document.getElementById("h").value = Math.round(H);
          document.getElementById("a").value = Math.round(A);
      }
      else if (meter == "M"){
        M = document.getElementById("m").value;
        K = M/1000;
        H = K*3600;
        A = K*60000;

        document.getElementById("k").value = Math.round(K);
        document.getElementById("h").value = Math.round(H);
        document.getElementById("a").value = Math.round(A);
      }

      else if (meter == "H"){
        H = document.getElementById("h").value;

        K = H/3600;
        A = K*60000;
        M = K*1000;

        document.getElementById("k").value = Math.round(K);
        document.getElementById("m").value = Math.round(M);
        document.getElementById("a").value = Math.round(A);

      }
      else if (meter == "A"){
        A = document.getElementById("a").value;

        K = A/60000;
        A= K*60000;
        M = K*1000;

        document.getElementById("k").value = Math.round(K);
        document.getElementById("a").value = Math.round(A);
        document.getElementById("m").value = Math.round(M);
      }
          document.getElementById('bar2').style.width = K + '%';
          document.getElementById('bar1').style.width = 2*K +'%';
    }
  function btntest_onclickback()
  {
    window.location.href = "area.html";
  }

  function btntest_onclicktemp()
  {
    window.location.href = "temperature.html";
  }
