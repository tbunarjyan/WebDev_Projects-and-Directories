function compare() {
  var A,B,C,D;
  A = document.getElementById("a").value;
  B = document.getElementById("b").value;
  C = document.getElementById("c").value;
  D = document.getElementById("d").value;

  document.getElementById('bar1').style.width = A + '%';
  document.getElementById('bar2').style.width = B + '%';
  document.getElementById('bar3').style.width = C + '%';
  document.getElementById('bar4').style.width = D + '%';
}
