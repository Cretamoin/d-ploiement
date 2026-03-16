document.getElementById("opening").addEventListener("click", () =>{
    document.getElementById("change").style.opacity='1';
    document.getElementById("change").style.transition='0.4'
});
document.addEventListener("click", e =>{
    if(!document.getElementById("endcenter").contains(e.target)){
        document.getElementById("change").style.opacity='0';
    }
});