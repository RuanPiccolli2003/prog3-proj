<?php



class Autenticacao extends Usuario{



    public function __construct($nome, $senha, $email){
        parent::__construct($nome, $senha, $email);
       $this->nome = $nome;
       $this->senha = $senha;
       $this->email = $email;
    }



    public function validar_campos_cadastro(){



     if(empty($_POST['nome']) || empty($_POST['senha']) || empty($_POST['email'])){
            echo "<script>alert('preencha todos os campos')</script>";
            echo "<script>location.href='../cadastro/cadastro.php'</script>";


        }
    }

    public function validar_credencias_login(){



        if($email_log != $_POST['email_log'] || $senha_log != $_POST['senha_log']){
               echo "<script>alert('credenciais_invalidas')</script>";
               echo "<script>location.href='../login/login.php'</script>";


           }
       }


    public function validar_login(){



        if(empty($_POST['senha_log']) || empty($_POST['email_log'])){
               echo "<script>alert('preencha todos os campos')</script>";
               echo "<script>location.href='../login/login.php'</script>";


           }

       }

    public function validar_email(){


        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('email invalido')</script>";
            echo "<script>location.href='../cadastro/cadastro.php'</script>";
     }

    }




    public function validar_email_login(){


        if(!filter_var($_POST['email_log'], FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('email invalido')</script>";
            echo "<script>location.href='../login/login.php'</script>";
     }

    }




    public function cadastrar(){

    echo "<script>alert('usuario cadastrado')</script>";
    echo "<script>location.href='../login/login.php'</script>";




    }







}



?>