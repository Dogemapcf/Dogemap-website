function dl(){
    if(document.getElementById("dmlm").innerText == "Moon Mode"){
        //light mode btn change
        document.getElementById("dmlm").innerHTML = `Doge Mode`;
        document.getElementById("dm").href = "/assets/css/bs-d.css";
        setCookie("burntbiscuit", "D",420);
    }else if(document.getElementById("dmlm").innerText == "Doge Mode"){
        document.getElementById("dm").href = "/assets/css/bs-l.css";
        //dark mode btn change
        document.getElementById("dmlm").innerHTML = `Moon Mode`;
        setCookie("burntbiscuit", "L", 690);
    }else{
        document.getElementById("dm").href = "/assets/css/bs-l.css";
        //dark mode btn change
        document.getElementById("dmlm").innerHTML = `Moon Mode`;
        setCookie("burntbiscuit", "L", 690);
    }
}
$(window).on('load',function() {
    //DOGE DOGE DOGE REEEEEEE.
if(getCookie("burntbiscuit") == "D"){
    document.getElementById("dmlm").innerHTML = `Doge Mode`;
document.getElementById("dm").href = "/assets/css/bs-d.css";
}else if(getCookie("burntbiscuit") == "L"){
    document.getElementById("dmlm").innerHTML = `Moon Mode`;
    document.getElementById("dm").href = "/assets/css/bs-l.css";
}

$( "#dmlm" ).mouseup(() => {
    dl();
});
$( "#dm" ).on('load', function() {
        //DOGE DOGE DOGE REEEEEEE.
if(document.getElementById("dmlm").innerHTML == `Moon Mode`){
    document.getElementById("dmlm").innerHTML = `Moon Mode`;
document.getElementById("dm").href = "/assets/css/bs-d.css";
}else if(document.getElementById("dmlm").innerHTML == `Doge Mode`){
    document.getElementById("dmlm").innerHTML = `Doge Mode`;
    document.getElementById("dm").href = "/assets/css/bs-l.css";
}else{
    document.getElementById("dmlm").innerHTML = `Doge Mode`;
    setCookie("burntbiscuit", "L", 666);
    document.getElementById("dm").href = "/assets/css/bs-l.css";
}
});
});