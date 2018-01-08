<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>inConsulta</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom CSS 2-->
    <link href="../dist/css/customStyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../vendor/jquery/jquery.min.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">inConsulta ADMIN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="adminHome.html"><i class="fa fa-dashboard fa-fw"></i>Inicio</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cadastro</h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Adicionar cliente
                            
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="POST" id="formCadastro">
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Nome:</label>
                                    <input name="nome" class="form-control" placeholder="João Neves da Silva Costa" required="true">
                                </div>
                                <div class="col-md-4">
                                    <label>CPF:</label>
                                    <input name="cpf" class="form-control" placeholder="xxx.xxx.xxx-xx / xxxx-x" required="true">
                                </div>
                            </div>
                            <div class="row paddingOneTop">
                                <div class="col-md-12">
                                    <label>Endereço:</label>
                                    <input name="endereco" class="form-control" placeholder="Rua ABCDE, Parnaguá, Piauí, 120" required="true">
                                </div>
                            </div>
                            <div class="row paddingOneTop">
                                <div class="col-md-6">
                                    <label>Email:</label>
                                    <input name="email" class="form-control" placeholder="joaoneves@gmail.com">
                                </div>
                                <div class="col-md-3">
                                    <label>Telefone:</label>
                                    <input name="telefone" class="form-control" placeholder="(99) 9 9999-9999">
                                </div>
                                 <div class="col-md-3">
                                    <label id="idFuncionario">Número SUS:</label>
                                    <input name="sus" class="form-control" placeholder="xxxx-xx" required>
                                </div>
                            </div>
                            
                            <div class="row paddingOneTop">
                                <div class="col-md-12 text-right">
                                    <input type="submit" class="btn btn-success" name="cadastrar" value="Cadastrar">
                                    <button type="button" class="btn btn-primary" name="clear" id="clear">Limpar</button>
                                    <a href="funcionario.php" class="btn btn-danger" >Cancelar</a>
                                </div>
                            </div>
                                <a href="clientes.php" class="btn btn-info btn-circle btn-lg"><i class="fa fa-arrow-left"></i></a>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
            
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="../dist/js/jqueryFile.js" type="text/javascript"></script>
   

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<?php
    include_once('../php/connection.php');

    //INSERT INTO inConsulta.Cliente
// (id, sus, tipo, Pessoa_id, ativo)
// VALUES(0, 0, 0, 0, '');

    if(isset($_POST['cadastrar'])){
        $query = "SELECT * FROM Estabelecimento";
        $data = $pdoConnect->query($query);

        $idEsta;                                    
        foreach ($data as $row) {
            $idEsta = $row['id'];
            
        }
echo("$idEsta");

        $pdoQuery = "INSERT INTO `Pessoa`(`id`, `nome`, `cpf`, `telefone`, `email`, `Estabelecimento_id`, `endereco` , `ativo`) VALUES (:id, :nome, :cpf, :telefone, :email, :Estabelecimento_id, :endereco, :ativo)";
        $pdoResult = $pdoConnect->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(":id"=>0,":nome"=> @$_POST['nome'], ":cpf"=> @$_POST['cpf'],":telefone"=>@$_POST['telefone'], ":email"=>@$_POST['email'], ":Estabelecimento_id"=>$idEsta, ":endereco"=>@$_POST['endereco'], ":ativo"=>1));  

        
            $insertCliente = "INSERT INTO `Cliente`(`id`, `sus`, `Pessoa_id`, `ativo`) VALUES (:id, :sus, :Pessoa_id, :ativo)";
            $resultInsertCliente = $pdoConnect->prepare($insertCliente);
            $executeInsertCliente = $resultInsertCliente->execute(array(":id"=>0,":sus"=> @$_POST['sus'], ":Pessoa_id"=>$pdoConnect->lastInsertId(), ":ativo"=>1));    
            echo'<div class="alert alert-success alert-dismissable messageBox">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Cliente cadastrado com sucesso!
                </div>';
    }
    
   

?>

</html>
