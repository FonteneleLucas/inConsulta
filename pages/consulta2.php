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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.html">inConsulta Funcionário</a>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Médicos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Médicos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form method="POST">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Matricula / CRM:</th>
                                            <th>Nome:</th>
                                            <th>Tipo/Especialidade:</th>
                                            <th>Antend-Diário:</th>
                                            <th>Fone:</th>
                                            <th>Email:</th>
                                            <th colspan="0"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                            include_once('../php/connection.php');
                                            $idFunc = @$_GET['idFunc'];
                                            $idClient = @$_GET['idClient'];

                                            $stmt2 = "SELECT p.*, f.* FROM Pessoa AS p, Medico AS f, 
                                                     Medico AS m WHERE f.Pessoa_id=p.id";
                                            //$stmt2->fetchAll(PDO::FETCH_ASSOC);

                                            $data2 = $pdoConnect->query($stmt2);
                                            
                                            foreach ($data2 as $row2) {
                                                echo '<tr class="odd gradeX">
                                                    <td>' . $row2["crm"] . '</td>
                                                    <td>' . $row2["nome"] . '</td>
                                                    <td>' . $row2["especialidade"]. '</td>
                                                    <td>' . $row2["limite"] .'
                                                    <td>' . $row2["telefone"] .'
                                                    <td>' . $row2['email'] . '</td>
                                                    <td class="text-right" colspan="1">
                                                        <!--<a href="viewFuncionario.php" class="btn btn-success">Visualizar</a>-->
                                                        <a href="consulta3.php?idFunc=' . $idFunc . '&idClient='. $idClient .'&idMedico=' . $row2['id'].'" class="btn btn-success">Selecionar</a>
                                                       
                                                    </td>
                                                </tr>';
                                            }
                                            
                                        ?>

                                    
                                   
                                </tbody>
                            </table>

                            
                            <?php 
                                            include_once('../php/connection.php');
                                            $query = "SELECT * FROM Estabelecimento";
                                            $data = $pdoConnect->query($query);
                                            
                                            foreach ($data as $row) {
                                                echo ' <a href="addFuncionario.php?id='. $row['id'] .'" class="btn btn-info btn-circle btn-lg"><i class="fa fa-plus"></i></a>';
                                            }
                                        ?>
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
