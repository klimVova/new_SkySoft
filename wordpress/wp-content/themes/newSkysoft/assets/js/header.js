document.querySelectorAll('.lang__link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();

        if (this.classList.contains('lang__link_activate')) return;

        document.querySelectorAll('.lang__link').forEach(el => {
            el.classList.remove('lang__link_activate');
        })

        this.classList.add('lang__link_activate');
    });
});

const burger = document.querySelector(".header__burger");
const list = document.querySelector(".header__burger-menu");

burger.addEventListener("click", () => {
    burger.classList.toggle("active");
})

burger.addEventListener("click", () => {
    list.classList.toggle("active");
});

document.addEventListener('DOMContentLoaded', function() {
  const burgerNavItem = document.querySelector('.burger-nav__item--has-popover');
  const burgerPopover = document.querySelector('.burger-nav__popover');
  
  if (burgerNavItem && burgerPopover) {
    burgerNavItem.addEventListener('click', function(e) {
      e.preventDefault();
      burgerPopover.classList.toggle('active');
    });
    
    document.addEventListener('click', function(e) {
      if (!burgerNavItem.contains(e.target)) {
        burgerPopover.classList.remove('active');
      }
    });
  }
});