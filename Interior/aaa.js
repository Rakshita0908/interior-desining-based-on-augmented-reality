function toggleMenu(){
    const toggleMenu= document.querySelector(".togglemenu");
    const navigation= document.querySelector(".navigation");
    toggleMenu.classList.toggle("active");
    navigation.classList.toggle("active");
}

var swiper = new Swiper(".testimonial-slider", {
    sliderPerview: 1,
    spaceBetween: 10,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false
   },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        800: {
            sliderPerview: 2,
            spaceBetween: 40
        },
        1200: {
            sliderPerview: 3,
            spaceBetween: 50
        }
    }
});