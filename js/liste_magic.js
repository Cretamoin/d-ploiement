document.querySelectorAll("#content > #first > #nocturne1 > ul > li").forEach(li =>{
    document.getElementById("nocturne1").addEventListener("mouseover", ()=>{
        li.style.opacity='1';
        li.style.transition='1s';
        
    });
    document.getElementById("nocturne1").addEventListener("mouseleave", ()=>{
        li.style.opacity='0';
        li.style.transition='1s';
    });
});

document.querySelectorAll("#second > #nocturne2 > ul > li").forEach(clos =>{
    document.getElementById("nocturne2").addEventListener("mouseover", ()=>{
        clos.style.opacity='1';
        clos.style.transition='1s';
        
    });
    document.getElementById("nocturne2").addEventListener("mouseleave", ()=>{
        clos.style.opacity='0';
        clos.style.transition='1s';
    });
});

document.querySelectorAll("#third > #nocturne3 > ul > li").forEach(clos =>{
    document.getElementById("nocturne3").addEventListener("mouseover", ()=>{
        clos.style.opacity='1';
        clos.style.transition='1s';
        
    });
    document.getElementById("nocturne3").addEventListener("mouseleave", ()=>{
        clos.style.opacity='0';
        clos.style.transition='1s';
    });
});