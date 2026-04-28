const home = document.getElementsByClassName("home");
const about = document.getElementsByClassName("about");
const service = document.getElementsByClassName("service");
const contact = document.getElementsByClassName("contact");
const blog = document.getElementsByClassName("blog");

home[0].addEventListener("click", function () {
    alert("Anda berada di halaman Home");
});

about[0].addEventListener("click", function () {
    alert("Anda berada di halaman About");
});

service[0].addEventListener("click", function () {
    alert("Anda berada di halaman Service");
});

contact[0].addEventListener("click", function () {
    alert("Anda berada di halaman Contact");
});

blog[0].addEventListener("click", function () {
    alert("Anda berada di halaman Blog");
});

const card = document.querySelectorAll(".card");
const hitam = document.getElementById("hitam");
const putih = document.getElementById("putih");
const biru = document.getElementById("biru");
const h1 = document.querySelectorAll("h1");
const p = document.querySelectorAll("p");
const body = document.body;

function ubahtema(mode) {

    if (mode === "dark") {
        body.style.backgroundColor = "black";

        for (let i = 0; i < card.length; i++) {
            card[i].style.backgroundColor = "#1e293b";
            card[i].style.color = "white";
        }
        
        for (let i = 0; i < h1.length; i++) {
            h1[i].style.color = "white";
        }

        for (let i = 0; i < p.length; i++) {
            p[i].style.color = "white";
        }
    } 
    
    else if (mode === "light") {
        body.style.backgroundColor = "white";

        for (let i = 0; i < card.length; i++) {
            card[i].style.backgroundColor = "white";
            card[i].style.color = "black";
        }

        for (let i = 0; i < h1.length; i++) {
            h1[i].style.color = "black";
        }
    } 
    
    else if (mode === "blue") {
        body.style.backgroundColor = "#1e3a8a";

        for (let i = 0; i < card.length; i++) {
            card[i].style.backgroundColor = "#3b82f6";
            card[i].style.color = "white";
        }

        for (let i = 0; i < h1.length; i++) {
            h1[i].style.color = "orange";
        }

        for (let i = 0; i < p.length; i++) {
            p[i].style.color = "white";
        }
    }


    localStorage.setItem("theme", mode);
};

hitam.addEventListener("click", () => ubahtema("dark"));
putih.addEventListener("click", () => ubahtema("light"));
biru.addEventListener("click", () => ubahtema("blue"));

const simpantema = localStorage.getItem("theme");

if (simpantema) {
    ubahtema(simpantema);
};