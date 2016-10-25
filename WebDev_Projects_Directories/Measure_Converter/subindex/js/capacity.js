function convert(meter) {
   var C,K,M,D;
     if (meter == "K") {
         K = document.getElementById("k").value;
         M = K*1000000000;
         C = K*1000000000000;
         D = K*1000000000000000;

         document.getElementById("m").value = Math.round(M);
         document.getElementById("d").value = Math.round(D);
           document.getElementById("c").value = Math.round(C);
       } else if (meter == "M"){

         M = document.getElementById("m").value;
         K = M/1000000000;
         C = K*1000000000000;
         D = K*1000000000000000;

         document.getElementById("k").value = Math.round(K);
         document.getElementById("d").value = Math.round(D);
         document.getElementById("c").value = Math.round(C);
       }
       else if (meter == "C"){

           C = document.getElementById("c").value;
             K = C/1000000000000;
             M = K*1000000000;
             D = K*1000000000000000;
           document.getElementById("k").value = Math.round(K);
           document.getElementById("d").value = Math.round(D);
           document.getElementById("m").value = Math.round(M);
       }
       else if (meter == "D"){

           D = document.getElementById("d").value;
           K = D/1000000000000000;
           C = K*1000000000000;
           M = K*1000000000;

           document.getElementById("k").value = Math.round(K);
           document.getElementById("c").value = Math.round(C);
           document.getElementById("m").value = Math.round(M);
     }
           document.getElementById('bar2').style.width = K/2 + '%';
           document.getElementById('bar1').style.width = K +'%';
   }
  function btntest_onclickback()
  {
     window.location.href = "distance.html";
  }

  function btntest_onclicknext()
  {
     window.location.href = "area.html";
  }
