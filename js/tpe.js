document.getElementById("deux").addEventListener("mouseover", () =>{
    document.getElementById("deux").style.width='100vw';
    document.getElementById("deux").style.height='80vh';
    document.getElementById("deux").style.transition='1s';
    document.body.style.backgroundColor='rgba(0, 0, 0, 0.79)';
    // document.getElementById("deux").style.position='absolute';
});

document.getElementById("deux").addEventListener("mouseleave", ()=>{
    document.getElementById("deux").style.transition='1s';
    document.getElementById("deux").style.width='100vw';
    document.getElementById("deux").style.height='10vh';
    document.body.style.backgroundColor='gray';
});