(function (){
    "use strict";

/*
 * Header
 */
    document.addEventListener("DOMContentLoaded", function(){
        // Open 3rd level dropdown on click
        if ( document.querySelectorAll('.header-menu .menu-item__toggle').length>0 ){
            [].forEach.call(document.querySelectorAll('.header-menu .menu-item__toggle'), function(item){
                item.addEventListener('click', function(event){
                    const activeItemToggle = document.querySelector('.menu-item__toggle--active');
                    const activeItemSubmenu = document.querySelector('.sub-menu--active');

                    if ( activeItemToggle!==null && activeItemSubmenu!==null ){
                        activeItemToggle.classList.remove('menu-item__toggle--active');
                        activeItemSubmenu.classList.remove('sub-menu--active');

                        if ( activeItemToggle.parentNode!==item.parentNode ){
                            item.classList.toggle('menu-item__toggle--active');
                            item.nextElementSibling.classList.toggle('sub-menu--active');
                        }
                    } else {
                        item.classList.toggle('menu-item__toggle--active');
                        item.nextElementSibling.classList.toggle('sub-menu--active');
                    }
                });
            });
        }

        // Mobile menu
        document.getElementById('toggle').addEventListener('click', function(){
            document.body.classList.toggle('menu-active');
        });
        
        if ( document.querySelectorAll('.header-menu .menu-item.menu-item-has-children').length>0 ){
            [].forEach.call(document.querySelectorAll('.header-menu .menu-item.menu-item-has-children'), function(item){
                item.addEventListener('click', function(event){
                    if (event.target === item){
                        item.classList.toggle('menu-item--active');
                    }
                });
            });
        }

        // Search form
        document.getElementById('search-trigger').addEventListener('click', function(event){
            event.preventDefault();

            document.body.classList.toggle('search-active');
            if ( document.body.classList.contains('search-active') ){
                document.querySelector('.header__search').style.maxHeight = document.querySelector('.header__search').scrollHeight + 'px';
                document.querySelector('.search-form__input').focus();
            } else {
                document.querySelector('.header__search').style.maxHeight = null;
            }
        });
    });
    
    // Fix iOS bottom nav bar overlap
    const headerMenu = document.querySelector('.header__menu');
    const updateViewportElements = () => {
        const menuHeight = window.innerHeight - document.querySelector('.header').offsetHeight;
        
        headerMenu.style.height = `${menuHeight}px`;
    };
    window.addEventListener('resize', updateViewportElements);
    updateViewportElements();


/**
 *  Slide to section on anchor
 */
    document.addEventListener("DOMContentLoaded", function(){
        if ( document.querySelectorAll('a[href^="#slide-"]').length>0 ){
            [].forEach.call(document.querySelectorAll('a[href^="#slide-"]'), function(item){
                item.addEventListener('click', function(){
                    event.preventDefault();

                    if ( document.getElementById( item.getAttribute('href').replace('#', '') ) ){
                        let targetId = item.getAttribute('href').replace('#', '');
                        let targetOffsetTop = document.getElementById(targetId).getBoundingClientRect().top - document.getElementById('header').offsetHeight;

                        if ( document.querySelectorAll('#wpadminbar').length>0 ){
                            targetOffsetTop -= document.getElementById('wpadminbar').offsetHeight;
                        }

                        window.scroll({
                            top: targetOffsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }
    });

    
/**
 *  Splide slider
 */
    document.addEventListener("DOMContentLoaded", function(e) {
        if ( document.getElementsByClassName('splide').length>0 ){
            [].forEach.call(document.querySelectorAll('.splide'), function(item) {
                if (item.querySelectorAll('.splide__slide').length>1){
                    let args = {
                        // autoHeight: true,
                        easing: 'ease-in-out',
                        interval: 5000,
                        rewind: true,
                        rewindSpeed: 300,
                        speed: 300
                    };
                    if ( item.getAttribute('data-splide-autoplay') ){
                        args.autoplay = item.getAttribute('data-splide-autoplay');
                    }
                    if ( item.getAttribute('data-splide-arrows') ){
                        args.arrows = item.getAttribute('data-splide-arrows');
                    }
                    if ( item.getAttribute('data-splide-pagination') ){
                        args.pagination = item.getAttribute('data-splide-pagination');
                    }
                    if ( item.getAttribute('data-splide-perPage') ){
                        args.perPage = item.getAttribute('data-splide-perPage');
                    }
                    if ( item.getAttribute('data-splide-perMove') ){
                        args.perMove = item.getAttribute('data-splide-perMove');
                    }
                    args.breakpoints = {
                        '1024': {
                            arrows: false,
                            perMove: 1,
                            perPage: 1,
                            pagination: true,
                        },
                    };

                    new Splide(item, args).mount();
                } else {
                    item.classList.add("not-active");
                }
            });
        }
    });

})();