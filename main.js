document.getElementById("hamberger").addEventListener('click', function(){
    document.getElementById("hamberger").classList.toggle("active");
},false);

$('#hamberger').on('click',function(){
  $('this').toggleClass('active');
  $('.mobile_menu').toggleClass('active');
});
