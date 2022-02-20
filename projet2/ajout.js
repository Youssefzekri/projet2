function verif(){
    let id=document.getElementById("id").value;
    let nom=document.getElementById("nom").value;
    var ok=true;
    if ((id.length!=6)||(id.subStr(0,2)!='00')){
        alert("id invalide!")
        ok=false;

    }
    if ((nom.length>=50)||(nom.lastIndexOf(' ')==-1)){
        alert("nom invalide!")
        ok=false;
    }
    let dc=document.getElementById("dc").value;
    alert(parseFloat(dc))
    if((parseFloat(dc)<0)||(parseFloat(dc)>20)){
        alert("dc doit etre un nombre reel")
        ok=false;

    }
    let ds=document.getElementById("ds").value;
    if((parseFloat(ds)<0)||(parseFloat(ds)>20)){
        alert("ds doit etre un nombre reel")
        ok=false;

    }

    if (ok==false){
        event.preventDefault()
    }

}
