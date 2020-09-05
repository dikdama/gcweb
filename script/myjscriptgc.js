//JavaScript Document
(function (win, doc) {
    'use strict';
    var $a = document.querySelector('#acc');
    $a.addEventListener('mouseover', function (event) {
        event.preventDefault();
       doc.querySelector("#acc").src = "media assets site/button-criaracc-focus.png";
    }, false);
    $a.addEventListener('mouseout', function (event) {
        event.preventDefault();
       doc.querySelector("#acc").src = "media assets site/button-criaracc.png";
    }, false);
    var $b =  doc.querySelector('#staff');
    $b.addEventListener('mouseover', function (event){
    	 event.preventDefault();
    	 doc.querySelector('#staff').src = "media assets site/button-staff-focus.png"
    },false);
    $b.addEventListener('mouseout', function (event){
    	 event.preventDefault();
    	 doc.querySelector('#staff').src = "media assets site/button-staff.png"
    },false);
    var $c = doc.querySelector('#down');
    $c.addEventListener('mouseover', function (event){
    	 event.preventDefault();
    	 doc.querySelector('#down').src = "media assets site/button-download-focus.png"
    },false);
     $c.addEventListener('mouseout', function (event){
    	 event.preventDefault();
    	 doc.querySelector('#down').src = "media assets site/button-download.png"
    },false);
}(window, document));   

    $('.carousel').carousel({
    interval: 3000
    });


   
    