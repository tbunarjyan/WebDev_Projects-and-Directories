function convert(degree) {
  var C,K,M,T,G,P;
    if (degree == "K") {
        K = document.getElementById("k").value;
        G = K*1000;
        M = K* 1000000;
        T=K/1000;
        C=K*5000;
        P=(K*22)/10;

        document.getElementById("g").value = Math.round(G);
        document.getElementById("m").value = Math.round(M);
        document.getElementById("t").value = Math.round(T);
        document.getElementById("c").value = Math.round(C);
        document.getElementById("p").value = Math.round(P);

      } else if (degree == "G"){
        G = document.getElementById("g").value;
        K = G/1000;
        M = K* 1000000;
        T=K/1000;
        C=K*5000;
        P=(K*22)/10;
        document.getElementById("k").value = Math.round(K);
        document.getElementById("m").value = Math.round(M);
        document.getElementById("t").value = Math.round(T);
        document.getElementById("c").value = Math.round(C);
        document.getElementById("p").value = Math.round(P);
      }
      else if (degree == "M") {
        M = document.getElementById("m").value;
        G = M/1000;
        K = G/1000;
        T = K/1000;
        C = K*5000;
        P = (K*22)/10;
        document.getElementById("k").value = Math.round(K);
        document.getElementById("g").value = Math.round(G);
        document.getElementById("t").value = Math.round(T);
        document.getElementById("c").value = Math.round(C);
        document.getElementById("p").value = Math.round(P);
      }
      else if (degree == "T") {
        T = document.getElementById("t").value;
        K = T/1000;
        M = K*100000;
        G = M/1000;
        C = K*5000;
        P = (K*22)/10;
        document.getElementById("k").value = Math.round(K);
        document.getElementById("g").value = Math.round(G);
        document.getElementById("m").value = Math.round(M);
        document.getElementById("c").value = Math.round(C);
        document.getElementById("p").value = Math.round(P);
      }
      else if (degree == "P") {
        P = document.getElementById("p").value;
        K=(10*P)/22;
        M = K*100000;
        G = M/1000;
        C = K*5000;
        T = K/1000;
        document.getElementById("k").value = Math.round(K);
        document.getElementById("g").value = Math.round(G);
        document.getElementById("m").value = Math.round(M);
        document.getElementById("c").value = Math.round(C);
        document.getElementById("t").value = Math.round(T);
      }
      else if (degree == "C") {
        C = document.getElementById("c").value;
        K=C/5000;
        M = K*100000;
        G = M/1000;
        T = K/1000;
        P = (K*22)/10;
        document.getElementById("k").value = Math.round(K);
        document.getElementById("g").value = Math.round(G);
        document.getElementById("m").value = Math.round(M);
        document.getElementById("p").value = Math.round(P);
        document.getElementById("t").value = Math.round(T);
      }
          document.getElementById('bar2').style.width = K/2 + '%';
          document.getElementById('bar1').style.width = K +'%';
  }

  function btntest_onclickback()
  {
      window.location.href = "../index.html";
  }

  function btntest_onclicknext()
  {
      window.location.href = "distance.html";
  }
