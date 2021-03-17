<?php
session_start();
require 'conexao.php';
	$inuser= $_POST["user"];
    $insenha= $_POST["senha"];
    $insexo= $_POST["sexo"];
    $inaceito= $_POST["aceito"];
    $flaguser=false;
    $flagsenha=false;
    $flagaceito=false;
    $text="";
    //check user
    $checkuser = "SELECT Login FROM users WHERE Login = '$inuser'";
    $resultuser = odbc_exec($connection,$checkuser);
    $rowuser= odbc_fetch_row($resultuser);
    if(!$inuser=="" and !strlen($inuser)<2 and !strpbrk($inuser,'[]')){
        if($rowuser){
            $text.="Usuário ja existe, ";
            $flaguser=false;
        }
        else{
            $insertuser = $inuser;
            $flaguser=true;
        }
    }
    else{
        $text.="Usuario Inválido, ";
        $flaguser=false;
    }
    //check senha
    if(!$insenha=="" and !strlen($insenha)<7 and strpbrk($insenha,'!@#$%¨&*()')){
        $insertsenha = md5($insenha);
        $flagsenha=true;
    }
    else{
        $flagsenha=false;
        $text.="Senha Inválida, ";
    }
    //check genero
    if($insexo=="Masculino"){
        $insertsexo=0;
    }
    else{
        $insertsexo=1;
    }
    //check aceito
    if(!$inaceito==0){
        $flagaceito=true;
    }
    else{
        $flagaceito=false;
    	$text.="Não aceitou os Termos. ";
    }
    //ready
    if($flaguser==true and $flagsenha==true and $flagaceito==true){
		$insertdado = "INSERT INTO users (Login,passwd,sex) VALUES ('$insertuser','$insertsenha','$insertsexo')";
    	$resultuser = odbc_exec($connection,$insertdado);
    	$_SESSION['msg'] = "<div class='alert alert-success' id='alerts'>Eba!Conta Criada!</div>";
    	header("Location: ../pages/account.php");
    }
    else{
    	$_SESSION['msg'] ="<div class='alert alert-danger' id='alerts'>".$text." Ops! Sua conta não pôde ser criada.</div>";
    	header("Location: ../pages/account.php");
   }
?>