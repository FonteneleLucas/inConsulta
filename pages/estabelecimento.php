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
                        <h1 class="page-header">Estabelecimento</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Detalhamento
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form method="POST">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Descrição:</th>
                                            <th>CNPJ:</th>
                                            <th>Endereço:</th>
                                            <th>Fone:</th>
                                            <th>Email:</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include_once('../php/connection.php');
                                            $query = "SELECT * FROM Estabelecimento";
                                            $data = $pdoConnect->query($query);
                                            
                                            foreach ($data as $row) {
                                                // $id = $row["id"];
                                                echo '<tr>
                                                    <td>' . $row["descricao"] . '</td>
                                                    <td>'  . $row["cnpj"] .  '</td>
                                                    <td>'  . $row["endereco"] .  '</td>
                                                    <td>'  . $row["telefone"] .  '</td>
                                                    <td>'  . $row["email"] .  '</td>
                                                    <td class="text-right" colspan="5">
                                                        <a href="editEstabelecimento.php?id='. $row['id'] .'" class="btn btn-primary">Editar</a>
                                                        <button type="submit" class="btn btn-danger" name="'. $row['descricao'] .'"/>Remover</button>
                                                    </td>
                                                </tr>';
                                               
                                            }
                                        ?>
                                        
                                        

                                    </tbody>
                                </table>
                                <a href="addFuncionario.html" title="Adicionar funcionário " class="btn btn-info btn-circle btn-lg disabled"><i class="glyphicon-plus"></i></a>
                            </div>
                            </form>
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

    // if(isset($_POST['remover'])){
    //     // $pdoQuery = "UPDATE `Estabelecimento` SET `ativo`=0 WHERE id=$id";
    //     // $pdoResult = $pdoConnect->prepare($pdoQuery);
    //     // $pdoResult->execute();
    //     // echo "<script type='text/javascript'>window.location.href = 'estabelecimento.php';</script>";
    //     // exit();
    //     echo $current;
    // }

?>

</html>
