<?php
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if (isset($_POST['signup'])) {
    if (isset($_SESSION['ERROSREGISTRAR'])) unset($_SESSION['ERROSREGISTRAR']);
    $name = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['senha1']);
    $cpassword = mysqli_real_escape_string($con, $_POST['senha2']);
    if ($password !== $cpassword) {
        $errors['password'] = "Senhas não correspondem!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "O email informado já existe!";
    }
    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $insert_data = "INSERT INTO usertable (name, email, password)
                        values('$name', '$email', '$encpass')";
        $data_check = mysqli_query($con, $insert_data);
        if (!($data_check)) {
            $errors['db-error'] = "Ocorreu um erro ao cadastrar o usuário!";
            $_SESSION['ERROSREGISTRAR'] = $errors;
            header('location: ../pagelogin\registrar.php');
        } else {
            $_SESSION['REGISTROSUCESSO'] = "Registrado com sucesso!";
            header('location: ../pagelogin\login.php');
        }
    } else {
        $_SESSION['ERROSREGISTRAR'] = $errors;
        header('location: ../pagelogin\registrar.php');
    }
}


if (isset($_POST['editar'])) {
    if (isset($_SESSION['ERROSREGISTRAR'])) unset($_SESSION['ERROSREGISTRAR']);
    $name = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $id = $_SESSION['id'];
    $check_email = "SELECT * FROM usertable WHERE id = $id";
    $res = mysqli_query($con, $check_email);
    $fetch = mysqli_fetch_assoc($res);
    $update_email = "UPDATE usertable SET name = '$name', email = '$email' WHERE id = $id";
    $data_check = mysqli_query($con, $update_email);
    if (!($data_check)) {
        $errors['db-error'] = "Ocorreu um erro ao editar o usuário!";
        $_SESSION['ERROEDITAR'] = $errors;
        header('location: ../pagelogado\perfil.php');
    } else {
        $_SESSION['SUCESSOEDITAR'] = "Informações alteradas com sucesso!";
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $name;
        header('location: ../pagelogado\perfil.php');
    }
}


//if user click login button
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['senha1']);
    $check_email = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if (password_verify($password, $fetch_pass)) {
            $status = $fetch['status'];
            $_SESSION['nome'] = $fetch['name'];
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $fetch['id'];
            $id = $fetch['id'];
            $selecionarev = "SELECT * FROM revendedores WHERE fk_user_id = $id";
            $resrev = mysqli_query($con, $selecionarev);
            $fetchrev = mysqli_fetch_assoc($resrev);
            $_SESSION['rev_id'] = $fetchrev['rev_id'];
            $_SESSION['password'] = $password;
            header('location: ../inicio.php');
        } else {
            $errors['email'] = "Email ou senha incorretos!";
            $_SESSION['ERROLOGIN'] = $errors;
            header('location: ../pagelogin/login.php');
        }
    } else {
        $errors['email'] = "Este e-mail não está cadastrado!";
        $_SESSION['ERROLOGIN'] = $errors;
        header('location: ../pagelogin/login.php');
    }
}


if (isset($_POST['aplicar'])) {
    $nascimento = mysqli_real_escape_string($con, $_POST['rev_nascimento']);
    $cidade = mysqli_real_escape_string($con, $_POST['rev_cidade']);
    $id = $_SESSION['id'];
    $insert_data = "INSERT INTO revendedores (rev_nascimento, rev_cidade, fk_user_id)
                                values('$nascimento', '$cidade', '$id')";
    $data_check = mysqli_query($con, $insert_data);
    if (!($data_check)) {
        $_SESSION['REVAPLICAERRO'] = "Ocorreu um erro ao efetuar a aplicação!";
        header('location: ../abas\revendedores.php');
    } else {
        $_SESSION['REVAPLICA'] = "Sua aplicação para revendedor foi um sucesso!";
        $selecionarev = "SELECT * FROM revendedores WHERE fk_user_id = $id";
        $res = mysqli_query($con, $selecionarev);
        $fetch = mysqli_fetch_assoc($res);
        $_SESSION['rev_id'] = $fetch['rev_id'];
        header('location: ../abas\revendedores.php');
    }
}

if (isset($_POST['contato'])) {
    $nome = mysqli_real_escape_string($con, $_POST['cont_nome']);
    $email = mysqli_real_escape_string($con, $_POST['cont_email']);
    $assunto = mysqli_real_escape_string($con, $_POST['cont_assunto']);
    $mensagem = mysqli_real_escape_string($con, $_POST['cont_mensagem']);
    $insert_data = "INSERT INTO contato (cont_nome, cont_email, cont_assunto, cont_mensagem)
                                values('$nome', '$email', '$assunto', '$mensagem')";
    $data_check = mysqli_query($con, $insert_data);
    if (!($data_check)) {
        $_SESSION['CONTATOERRO'] = "Ocorreu um erro ao efetuar o contato!";
        header('location: ../abas\contato.php');
    } else {
        $_SESSION['CONTATOENVIADO'] = "Seu contato foi enviado! Confira o email para mais informações.";
        header('location: ../abas\contato.php');
    }
}

if (isset($_GET['excluir'])) {
    if (isset($_SESSION['ERRODELETAR'])) unset($_SESSION['ERRODELETAR']);
    $id = $_SESSION['id'];
    if (isset($_SESSION['rev_id'])) {
        $deleteuserrev = "DELETE FROM revendedores WHERE fk_user_id = $id";
        $data_check_rev = mysqli_query($con, $deleteuserrev);
        if (!($data_check_rev)) {
            $errors['db-errorrev'] = "Ocorreu um erro ao excluir o revendedor do usuário!";
            $_SESSION['ERRODELETAR'] = $errors;
            header('location: ../pagelogado\perfil.php');
        }
    }
    $deleteuser = "DELETE FROM usertable WHERE id = $id";
    $data_check = mysqli_query($con, $deleteuser);
    if($data_check==true){
        var_dump($data_check);
        echo 'funcionou';
        $_SESSION['SUCESSODELETAR'] = "Conta deletada com sucesso!";
        header('location: ../pagelogado/logout.php?deletar=true');
    }
    else{
        var_dump($data_check);
        $errors['db-error'] = "Ocorreu um erro ao excluir o usuário!";
        $_SESSION['ERRODELETAR'] = $errors;
        //header('location: ../pagelogado\perfil.php');

    }
}
