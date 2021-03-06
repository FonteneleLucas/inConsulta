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

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <h1 class="page-header">Inicio</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Cadastrar Estabelecimento
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="POST" action="addEstabelecimento.php">
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Descrição:</label>
                                    <input class="form-control" placeholder="Hospital São Lucas" name="descricao">
                                </div>
                                <div class="col-md-4">
                                    <label>CNPJ:</label>
                                    <input class="form-control" placeholder="1000-1" name="cnpj">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 1%;">
                                <div class="col-md-12">
                                    <label>Endereço:</label>
                                    <input class="form-control" placeholder="Rua ABCDE, Parnaguá, Piauí, 120" name="endereco">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 1%;">
                                <div class="col-md-6">
                                    <label>Email:</label>
                                    <input class="form-control" placeholder="hospitalned@sac" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label>Telefone:</label>
                                    <input class="form-control" placeholder="(86) 9 9999-9999" name="telefone">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 1%;">
                                <div class="col-md-12 text-right">
                                    <input type="submit" name="insert" class="btn btn-success" value="Cadastrar"/>
                                    <button type="button" class="btn btn-primary">Limpar</button>
                                    <button type="button" class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                                <a href="estabelecimento.html" class="btn btn-info btn-circle btn-lg"><i class="fa fa-arrow-left"></i></a>
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

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<?php
    include_once('../php/connection.php');
    if(isset($_POST['insert'])){
        $pdoQuery = "INSERT INTO `Estabelecimento`(`id`, `descricao`, `cnpj`, `endereco`, `email`, `telefone`, `ativo`) VALUES (:id, :descricao, :cnpj, :endereco, :email, :telefone, :ativo)";
        $pdoResult = $pdoConnect->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(":id"=>0,":descricao"=> @$_POST['descricao'], ":cnpj"=> @$_POST['cnpj'],":endereco"=>@$_POST['endereco'], ":email"=>@$_POST['email'], ":telefone"=>@$_POST['telefone'], ":ativo"=>1));    
        echo "<script type='text/javascript'>window.location.href = 'estabelecimento.php';</script>";
        exit();
    }

?>

</html>
