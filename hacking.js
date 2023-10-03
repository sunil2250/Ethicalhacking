let WL = document.getElementById("whiteL");
let BL = document.getElementById("blackL");
let GL = document.getElementById("greyL");
let WR = document.getElementById("whiteR");
let BR = document.getElementById("blackR");
let GR = document.getElementById("greyR");
let IMAGE = document.getElementById("Image");

function Whoverh() {
    WR.style.display = "block";
    BR.style.display = "none";
    GR.style.display = "none";
    WL.style.backgroundColor = "white";
    WL.style.color = "black";
    BL.style.backgroundColor = "red";
    BL.style.color = "white";
    GL.style.backgroundColor = "red";
    GL.style.color = "white";
    IMAGE.style.display = "none";
    
}

// function Whoverl(){
    //     WR.style.display = "none";
    //     WR.style.display = "block";
    // }
    function Bhoverh() {
        BR.style.display = "block";
        WR.style.display = "none";
        GR.style.display = "none";
        BL.style.backgroundColor = "white";
        BL.style.color = "black";
        WL.style.backgroundColor = "red";
        WL.style.color = "white";
        GL.style.backgroundColor = "red";
        GL.style.color = "white";
        IMAGE.style.display = "none";
    }
    // function Bhoverl(){
        //     BR.style.display = "none";
        //     WR.style.display = "block";
        // }
        function Ghoverh() {
            GR.style.display = "block";
            WR.style.display = "none";
            BR.style.display = "none";
            GL.style.backgroundColor = "white";
            GL.style.color = "black";
            WL.style.backgroundColor = "red";
            WL.style.color = "white";
            BL.style.backgroundColor = "red";
            BL.style.color = "white";
            IMAGE.style.display = "none";
            
        }
function blockleave() {
    GR.style.display = "none";
    WR.style.display = "none";
    BR.style.display = "none";
    GL.style.backgroundColor = "red";
    GL.style.color = "white";
    WL.style.backgroundColor = "red";
    WL.style.color = "white";
    BL.style.backgroundColor = "red";
    BL.style.color = "white";
    
    IMAGE.style.display = "block";
}
// function Ghoverl(){
    //     GR.style.display = "none";
    //     WR.style.display = "block";
    // }