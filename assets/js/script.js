/* --------------------- toggle icon navbar  menu responsivo------------------------ */
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar'); 

menuIcon.onclick = () => {
    menuIcon.classList.toggle('fa-xmark');
    navbar.classList.toggle('active');
};

/* --------------- scroll sections ativa o link da seção ------------------------ */
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });

    /* --------------- Stickes navBar --------------------*/
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    /*------------------- remover icone e menu quando clicar no link --------------------*/
    menuIcon.classList.remove('fa-xmark');
    navbar.classList.remove('active');

};

/*------------------- scroll reveal efeito de reload das sections --------------------*/
ScrollReveal({ 
    //reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200
});

ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
ScrollReveal().reveal('.home-img, .tech-container, .projects-box', { origin: 'bottom' });
ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left' });
ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right' });

/*------------------- typed js efeito maquina de escrever --------------------*/
const typed = new Typed('.multiple-text', {
    strings: ['Análista de Sistemas', 'Desenvolvedor Web'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
})


/* ------------------ Função Leia Mais ------------------- */
function leiaMais(){
    var pontos = document.getElementById("pontos")
    var maisTexto = document.getElementById("mais")
    var btnLeiaMais = document.getElementById("btnLeiaMais")

    if(pontos.style.display === "none"){
        pontos.style.display = "inline"
        maisTexto.style.display = "none"
        btnLeiaMais.innerHTML = "Leia mais"
    }else {
        pontos.style.display = "none"
        maisTexto.style.display = "inline"
        btnLeiaMais.innerHTML = "Leia menos"
    }
}