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
            // Handle parent category toggles
            [].forEach.call(document.querySelectorAll('.sidebar__item--parent > .sidebar__parent'), function(item){
                item.addEventListener('click', function(event){
                    // Prevent default link behavior for parent links when clicking toggle area
                    if ( event.target.classList.contains('sidebar__toggle') || 
                         event.target.classList.contains('sidebar__parent') ) {
                        
                        // Allow link clicks to navigate
                        if ( event.target.classList.contains('sidebar__parent-link') || 
                             event.target.tagName === 'A' ) {
                            return; // Let the link work normally
                        }
                        
                        event.preventDefault();
                        event.stopPropagation();
                        
                        const currentLevel = this.dataset.parent;
                        const currentItem = this.closest('.sidebar__item');
                        const currentItemSublist = this.nextElementSibling;
                        
                        if ( currentItem.classList.contains('sidebar__item--active') ){
                            sidebarCloseSublist(currentItem, currentItemSublist);
                            this.setAttribute('aria-expanded', 'false');
                        } else {
                            sidebarCloseActiveItem(currentLevel);
                            sidebarOpenSublist(currentItem, currentItemSublist, currentLevel);
                            this.setAttribute('aria-expanded', 'true');
                        }
                    }
                });

                // Handle keyboard accessibility
                item.addEventListener('keydown', function(event){
                    if ( event.key === 'Enter' || event.key === ' ' ) {
                        event.preventDefault();
                        this.click();
                    }
                });
            });

            // Handle mobile select toggle
            [].forEach.call(document.querySelectorAll('.sidebar__select'), function(item){
                item.addEventListener('click', function(event){
                    const currentItem = event.target;
                    const currentItemSublist = currentItem.nextElementSibling;
                    const isExpanded = currentItemSublist.classList.contains('sidebar__list--active');

                    currentItemSublist.classList.toggle('sidebar__list--active');
                    currentItem.setAttribute('aria-expanded', !isExpanded);
                });
            });

            // Auto-expand sublists that are marked as open on page load
            [].forEach.call(document.querySelectorAll('.sidebar__sublist--open'), function(sublist){
                const parentItem = sublist.closest('.sidebar__item');
                if ( parentItem ){
                    parentItem.classList.add('sidebar__item--active');
                    sublist.classList.add('sidebar__sublist--active');
                    sublist.style.maxHeight = sublist.scrollHeight + 'px';
                    
                    const parentToggle = parentItem.querySelector('.sidebar__parent');
                    if ( parentToggle ){
                        parentToggle.setAttribute('aria-expanded', 'true');
                    }
                }
            });
        }
    });

})();