document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("deux").addEventListener("mouseover", () => {
        document.getElementById("deux").style.width = '100vw';
        document.getElementById("deux").style.height = '80vh';
        document.getElementById("deux").style.transition = '1s';
        document.body.style.backgroundColor = 'rgba(0, 0, 0, 0.79)';
    });

    document.getElementById("deux").addEventListener("mouseleave", () => {
        document.getElementById("deux").style.transition = '1s';
        document.getElementById("deux").style.width = '100vw';
        document.getElementById("deux").style.height = '10vh';
        document.body.style.backgroundColor = 'gray';
        document.getElementById("deux").scrollTo(0, 0);
        document.getElementById("change").style.display = 'none';
    });
    document.getElementById("nocturne2").addEventListener("mouseover", () => {
        document.getElementById("nocturne2").style.boxShadow = '0px 0px 10px 2px  white';
    });
    document.getElementById("nocturne2").addEventListener("mouseleave", () => {
        document.getElementById("nocturne2").style.boxShadow = '0 0 0 0 transparent';
    });
    document.getElementById("nocturne1").addEventListener("mouseover", () => {
        document.getElementById("nocturne1").style.boxShadow = '0px 0px 10px 2px  white';
    });
    document.getElementById("nocturne1").addEventListener("mouseleave", () => {
        document.getElementById("nocturne1").style.boxShadow = '0 0 0 0 transparent';
    });
    document.getElementById("nocturne3").addEventListener("mouseover", () => {
        document.getElementById("nocturne3").style.boxShadow = '0px 0px 10px 2px  white';
    });
    document.getElementById("nocturne3").addEventListener("mouseleave", () => {
        document.getElementById("nocturne3").style.boxShadow = '0 0 0 0 transparent';
    });
});