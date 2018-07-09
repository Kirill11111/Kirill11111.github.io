
$(document).ready(function () {
  $('.menu-toggle').click(function () {
    $('nav').toggleClass('active');
  })
})



$(window).on('scroll', function () {
  if($(window).scrollTop()){
    $('header').addClass('black');
  }
  else {
    $('header').removeClass('black');
  }
})


jQuery(document).ready(function(){
  jQuery('a.scrollTo').click(function () {
    elementClick = jQuery(this).attr('href')
    destination = jQuery(elementClick).offset().top;
    jQuery('html:not(:animated),body:not(:animated)').animate({scrollTop: destination}, 1100);
    return false;
  });
});


$('.userInput').focus(function () {
  $(this).parent().addClass('focus');
}).blur(function () {
  if($(this).val()===''){
    $(this).parent().removeClass('focus');
  }
})


var modal = document.getElementById('simpleModal');
var modalBtn = document.querySelectorAll('container1');
var closeBtn = document.getElementsByClassName('closeBtn')[0];
window.addEventListener('click', clickOutside);
function closeModal() {
  modal.style.display = 'none';
}
function clickOutside(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}


function openModal1() {
  modal.style.display = 'block';
  showPannel1();
  closeBtn.addEventListener('click', closeModal);

}
function openModal2() {
  modal.style.display = 'block';
  showPannel2();
  closeBtn.addEventListener('click', closeModal);
}

function openModal3() {
  modal.style.display = 'block';
  showPannel3();
  closeBtn.addEventListener('click', closeModal);
}

function openModal4() {
  modal.style.display = 'block';
  showPannel4();
  closeBtn.addEventListener('click', closeModal);
}







var tabButtons1 = document.querySelector('#but1');
var tabButtons2 = document.querySelector('#but2');
var tabButtons3 = document.querySelector('#but3');
var tabButtons4 = document.querySelector('#but4');
var tabPanels1 = document.querySelector('#tabPanel1');
var tabPanels2 = document.querySelector('#tabPanel2');
var tabPanels3 = document.querySelector('#tabPanel3');
var tabPanels4 = document.querySelector('#tabPanel4');
function showPannel1() {
  return    tabPanels2.style.display='none',
     tabPanels3.style.display='none',
     tabPanels4.style.display='none',
     tabPanels1.style.display='block';
}
function showPannel2() {
    return  tabPanels2.style.display='block',
     tabPanels3.style.display='none',
     tabPanels4.style.display='none',
     tabPanels1.style.display='none';
}
function showPannel3() {
     return  tabPanels2.style.display='none',
     tabPanels3.style.display='block',
     tabPanels4.style.display='none',
     tabPanels1.style.display='none';
}
function showPannel4() {
  return   tabPanels2.style.display='none',
     tabPanels3.style.display='none',
     tabPanels4.style.display='block',
     tabPanels1.style.display='none';
}
