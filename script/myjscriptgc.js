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


   /*  var $usuario = document.querySelector('#user');
    var availableuser = false
    var $nome = document.querySelector('#nome');
    var $email = document.querySelector('#email');
    var check ="";
    var availableemail = false 
    var $senha = document.querySelector('#senha');
    var $acordo = document.querySelector('#aceito');
    var $botao = document.querySelector('#criar');

    $botao.addEventListener('click', function (event){
    if(document.querySelector('#user').value=="" || document.querySelector('#user').value.lenght<6 || availableuser==false){
            check += "Usuário inválido ou já existente no banco de dados\n";
    }
    if(document.querySelector('#nome').value=="" || document.querySelector('#nome').value.lenght<5){
            check += "Nome inválido\n";
    }
    if(document.querySelector('#email').value=="" || document.querySelector('#email').notcontains(@ or .com) {
            check += "Email inválida\n";
    }
    if(document.querySelector('#senha').value=="" || document.querySelector('#senha').value.lenght<8){
            check += "Senha inválida";
    }
    if(check!=""){
    alert(check);
    }
    check=""
    else {
    alert("Conta criada!");
    }
    },false);
    
     */
    