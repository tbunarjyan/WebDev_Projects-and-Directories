function compare() {
  var A,B;
  A = document.getElementById("a").value;
  B = document.getElementById("b").value;
  var sum= parseInt(A)+parseInt(B);

 if(document.getElementById('Dropdown').options[document.getElementById('Dropdown').selectedIndex].value == "sum")
                document.getElementById("c").value=parseInt(sum);
    else if(document.getElementById('Dropdown').options[document.getElementById('Dropdown').selectedIndex].value == "sub")
               document.getElementById("c").value=A-B;
    else if(document.getElementById('Dropdown').options[document.getElementById('Dropdown').selectedIndex].value == "div")
                document.getElementById("c").value=A/B;
    else if(document.getElementById('Dropdown').options[document.getElementById('Dropdown').selectedIndex].value == "prod")
               document.getElementById("c").value=A*B;
}
