
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
require('flickity');
// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

$('.dropdown-content').hide();

$('.drop-btn').on("click", function(){
  var dropmenu = $(this).parent();
  $(dropmenu).find(".dropdown-content").toggle();
	$(this).toggleClass("open");
});


$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    slideshow: false,
    controlNav: false,
    directionNav: true,
    // controlsContainer: "",               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
    // directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
    customDirectionNav: $(".custom-navigation a")
  });
});