<?
$tabela = "dbo.users"; 
$campo1 = "user"; 
$campo2 = "email"; 


$instrucaoSQL = “SELECT $campo1, $campo2 FROM $tabela”;



/* js script
  var $usuario = document.querySelector('#user');
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
?>