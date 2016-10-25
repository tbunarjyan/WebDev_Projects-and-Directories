var nsize=0;
function checker() {
    var n=document.getElementById("numberplate");
    var a=document.getElementById("valid");
    var b=n.value;

    if (nsize==0){
        var matrix= [
        [1, "images/utap.png"],
        [2, "images/master.png"],
        [34,"images/amex.png"],
        [38,"images/dclub.png"],
        [4, "images/visa.jpg"],
        [50,"images/maestro.png"],
        [62,"images/unionpay.png"]
        ];
        var i;
        for (i=0;i<matrix.length;i++)
            if (b==matrix[i][0])
                {
                    document.getElementById("images/logo").setAttribute("src", matrix[i][1]);
                    break;
                }
    }
    nsize++;
    if(validcard(b.replace(/\s/g,''))&& b.replace(/\s/g,'').length>=12 && validcard(b.replace(/\s/g,''))&& b.replace(/\s/g,'').length<20){

        a.innerHTML="valid card";
        a.style.color="white";
        n.style.border="none";

    } else {
       a.innerHTML="invalid card";
       a.style.color="red";
    }
    b = b + " ";
    if (nsize%4==0)
       n.value = b;
}
function validcard(value) {
    if (/[^0-9-\s]+/.test(value)) return false;
    var nCheck = 0, nDigit = 0, bEven = false;
    value = value.replace(/\D/g, "");
    for (var n = value.length - 1; n >= 0; n--) {
        var cDigit = value.charAt(n),
            nDigit = parseInt(cDigit, 10);
        if (bEven) {
            if ((nDigit *= 2) > 9) nDigit -= 9;
        }
        nCheck += nDigit;
        bEven = !bEven;
    }
    return (nCheck % 10) == 0;
}
