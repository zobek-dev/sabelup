import Swiper, {Autoplay, Navigation, Pagination} from 'swiper';

window.addEventListener('DOMContentLoaded', ()=>{
    const button = document.querySelector('#primary-menu-toggle');
    const menu = document.querySelector('#primary-menu');
    const subMenuItems = document.querySelectorAll('.menu-item-has-children > a')

    button.addEventListener('click', e => {
        e.preventDefault();
        button.firstElementChild.classList.toggle('hidden');
        button.lastElementChild.classList.toggle('hidden');
        menu.classList.toggle('open'); 
        menu.classList.contains('open') ? button.setAttribute('aria-expanded', true) :  button.setAttribute('aria-expanded', false);     
    });

    subMenuItems.forEach(subMenuItem => {
        subMenuItem.addEventListener('click', e => {
            e.preventDefault();
            subMenuItem.nextElementSibling.classList.toggle('open');
            subMenuItem.lastElementChild.classList.toggle('rotate180');
            subMenuItem.nextElementSibling.classList.contains('open') ? subMenuItem.setAttribute('aria-expanded', true) : setAttribute('aria-expanded', false);
        })
    })

    subMenuItems.forEach(submenuItem => {
        let icon = document.createElement('span');
        icon.innerHTML= `&#8964;`;
        icon.setAttribute('class','icon-caret');
        submenuItem.appendChild(icon);
        submenuItem.setAttribute('aria-expanded', false);
        submenuItem.setAttribute('aria-label', 'abrir submenu');
    })

    if(document.querySelector('.main-slide')){
        console.log('main slider loaded.....')
        let swiper = new Swiper('.main-slide', {
            modules: [Navigation, Pagination, Autoplay], 
            slidesPerView: 1,
            loop:true,
            autoplay: true,
            autoplaySpeed:8000,
            autoHeight: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination:{
                el: '.swiper-pagination'
            }    
        })      
    }

    if(document.querySelector('.reviews-slider')){
        console.log('main reviews loaded....')
        let frontReviews = new Swiper('.reviews-slider', {
            modules: [Pagination, Autoplay],
            autoHeight: true,
            slidesPerView: 1,
            loop: true,
            autoplay:true,
            autoplaySpeed: 8000,
            pagination:{
                el: '#swiper-reviews-pagination'
            }
        });
    }
   
    if(document.querySelector('.swiper-container-slider')){
        console.log('Swiper gallery initialized....')
        let galleryWrapper = new Swiper('.swiper-container-slider', {
            modules: [Pagination, Navigation],
            autoHeight: true,
            slidesPerView: 2,
            loop: true,
            breakpoints:{
                150:{
                    slidesPerView: 1,
                },
                650:{
                    slidesPerView: 2,    
                }
            },
            pagination: {
                el: '.gallery-pagination',
                type: 'bullets'
            },
            navigation: {
                nextEl:'.swiper-button-next', 
                prevEl:'.swiper-button-prev'
            }

        })
    }
    
    if(document.querySelector('.modal-swiper-slider')){
        console.log('Swiper modal gallery initialized....')
        let galleryModal = new Swiper('.modal-swiper-slider', {
            modules: [Pagination, Navigation],
            autoHeight: true,
            slidesPerView: 1,
            spaceBetween: 10,
            loop:true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination:{
                el: '#modal-pagination',
                type: 'fraction'
            },
        })
    }
})



