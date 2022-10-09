function aktivace(){
    var element = document.getElementById("toggler");
   element.classList.toggle("active");

}
AOS.init({
    easing: 'ease-out-back',
    duration: 1000
});