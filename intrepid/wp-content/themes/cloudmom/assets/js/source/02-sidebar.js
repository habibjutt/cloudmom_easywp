(function (){
    "use strict";

/*
 * Sidebar. Sticky
 */
    function makeSidebarSticky(){
        let sidebarTopSpacing = document.querySelector('.header').offsetHeight;

        if ( document.querySelectorAll('#wpadminbar').length>0 ){
            sidebarTopSpacing += document.getElementById('wpadminbar').offsetHeight;
        }
        if ( document.querySelectorAll('.articles-navigation--header').length>0 ){
            sidebarTopSpacing += document.querySelector('.articles-navigation--header').offsetHeight;
        }

        const stickySidebar = new StickySidebar('#sidebar', {
            bottomSpacing: 20,
            containerSelector: '#sidebar-container',
            innerWrapperSelector: '.sidebar',
            minWidth: 1200,
            topSpacing: sidebarTopSpacing + 50,
        });
    }
    document.addEventListener("DOMContentLoaded", makeSidebarSticky);

/*
 * Sidebar. Accordion
 */
    // Open item sublist
    function sidebarOpenSublist(currentItem, currentItemSublist, currentLevel=1){
        currentItem.classList.add('sidebar__item--active');
        currentItemSublist.classList.add('sidebar__sublist--active');
        currentItemSublist.style.maxHeight = currentItemSublist.scrollHeight + 'px';

        if ( currentLevel>1 ){
            const parentItem = currentItem.parentElement.parentElement;

            if ( parentItem.classList.contains('sidebar__item--parent') ){
                const parentItemSublist = parentItem.querySelector('[data-list="'+ currentLevel +'"]');
                const parentHeight = currentItemSublist.scrollHeight + parentItemSublist.scrollHeight;

                parentItemSublist.style.maxHeight = parentHeight +'px';
            }
        }
    }
    
    // Close item sublist
    function sidebarCloseSublist(currentItem, currentItemSublist){
        currentItem.classList.remove('sidebar__item--active');
        currentItemSublist.classList.remove('sidebar__sublist--active');
        currentItemSublist.style.maxHeight = null;
    }

    // Close active item
    function sidebarCloseActiveItem(currentLevel=1){
        const activeItem = document.querySelector('.sidebar__item--active[data-item="'+ currentLevel +'"]');

        if ( activeItem ){
            const activeItemSublist = activeItem.querySelector('.sidebar__sublist--active');

            if ( activeItem!==null && activeItemSublist!==null ){
                sidebarCloseSublist(activeItem, activeItemSublist);
            }
        }
    }

    document.addEventListener("DOMContentLoaded", function(){
        if ( document.getElementsByClassName('sidebar').length>0 ){
            [].forEach.call(document.querySelectorAll('.sidebar__item--parent > .sidebar__parent'), function(item){
                item.addEventListener('click', function(event){
                    if ( event.target.classList.contains('sidebar__parent') ){
                        const currentLevel = event.target.dataset.parent;
                        const currentItem = event.target.closest('.sidebar__item');
                        const currentItemSublist = event.target.nextElementSibling;
                        
                        if ( currentItem.classList.contains('sidebar__item--active') ){
                            sidebarCloseSublist(currentItem, currentItemSublist);
                        } else {
                            sidebarCloseActiveItem(currentLevel);
                            sidebarOpenSublist(currentItem, currentItemSublist, currentLevel);
                        }
                    }
                });
            });

            [].forEach.call(document.querySelectorAll('.sidebar__select'), function(item){
                item.addEventListener('click', function(event){
                    const currentItem = event.target;
                    const currentItemSublist = currentItem.nextElementSibling;

                    currentItemSublist.classList.toggle('sidebar__list--active');
                });
            });
        }
    });

})();