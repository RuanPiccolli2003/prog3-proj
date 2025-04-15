<?php

class Sessao{

    public function __construct(){
        if(!session_id()){
            session_start();
        }
    }

    public function criar(string $chave, mixed $valor){
        $_SESSION[$chave] = $valor;

    }




    public function carregar($chave){
        return $_SESSION[$chave] ?? null;

    }

    public function limpar()
    {

        unset($_SESSION[$chave]);
        return $this;
    }

    public function destruir(): Sessao
    {
        session_destroy();
        return $this;
    }

}




?>