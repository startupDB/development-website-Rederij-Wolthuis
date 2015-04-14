//Extra script for Modal window & menu with loccked background to enable a scrolling long modal
// Bert van Houten
//


var $html = $(document.documentElement);
var $modal  = $('.modal-form');
var $modal2 = $('.modal-boeken-overall');
var $modal3 = $('.modal-contact');
var $modal4 = $('.modal-kantoor');
var $menu = $('.nav-menu');

function showModal() {
    $html.css('overflow', 'hidden');
    $html.css('position', 'fixed');
    $html.css('width', '100%');
    $modal.fadeIn(1000).css('overflow', 'auto');
    
}
     function showModal3() {
    $html.css('overflow', 'hidden');
    $html.css('position', 'fixed');
         $html.css('width', '100%');
    $modal3.fadeIn(1000).css('overflow', 'auto');
    
}

   function showModal2() {
    $html.css('overflow', 'hidden');
    $html.css('position', 'fixed');
       $html.css('width', '100%');
    $modal2.fadeIn(1000).css('overflow', 'auto');
    
}


   function showModal4() {
    $html.css('overflow', 'hidden');
    $modal4.fadeIn(1000).css('overflow', 'auto');
    
}

function hideModal() {
    $html.css('overflow', '');
    $html.css('position', '');
    $modal.fadeOut(1000);
    $modal2.fadeOut(1000);
    $modal3.fadeOut(1000);
    $modal4.fadeOut(1000);
}
$('.modal-open-button').on('click', showModal);
$('.hulp-column').on('click', hideModal);
$('.link-clsoe').on('click', hideModal);


$('.modal-open-contact').on('click', showModal3);
$('.button-open-dagtocht').on('click', showModal2);
$('.button-kantoor').on('click', showModal4);


// Toggle lock background html from scrolling

  jQuery.fn.clickToggle = function(a,b) {
  var ab=[b,a];
  function cb(){ ab[this._tog^=1].call(this); }
  return this.on("click", cb);
};
 
    
$('.button-menu').clickToggle(function() {   
        $html.css('overflow', 'hidden');
        $html.css('position','fixed');
        $menu.css('overflow', 'auto');
  
}, function() {
        $html.css('overflow', '');
        $html.css('position', '');
       
});


