function verif(){
    let id=document.getElementById("id").value;
    let nom=document.getElementById("nom").value;
    let dc=document.getElementById("dc").value;
    let ds=document.getElementById("ds").value;

    if ((id.length!=6)||(id.charAt[0]!="0")||(id.charAt[1]!="0")){
        alert("id invalide")
    }
    if((nom.length>50)||(lastIndexOf(" ")==-1)){
        alert("nom invalide")
    }
    if((dc.parseFloat()<0.00)||(dc.parseFloat()>20.00)){
        alert("dc invalide")
    }
    if((ds.parseFloat()<0.00)||(ds.parseFloat()>20.00)){
        alert("ds invalide")
    }
}
function delet(){
    document.getElementById("id").value;
    document.getElementById("nom").value;
    document.getElementById("dc").value;
    document.getElementById("ds").value; 
}
