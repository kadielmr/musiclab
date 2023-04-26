// 𝗡𝗮𝘃𝗯𝗮𝗿 𝘀𝗰𝗿𝗼𝗹𝗹
let mainNav = document.querySelector('#MainNav');
let navContainer = document.querySelector('#navContainer');
let pittogramma = document.querySelector('.pittogramma');
let logotipo = document.querySelector('.logotipo');

window.addEventListener('scroll', ()=>{

    if(window.scrollY > 0){
        mainNav.classList.add('navbarCus');
        navContainer.classList.add('navscale');
        pittogramma.classList.remove('d-none');
        logotipo.classList.add('d-none');

    } else{
        mainNav.classList.remove('navbarCus');
        pittogramma.classList.add('d-none');
        logotipo.classList.remove('d-none');
        navContainer.classList.remove('navscale');
    }
});