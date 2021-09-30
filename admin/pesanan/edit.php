<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand">Admin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="../index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>


        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="../dosen/index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Order</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Page Title</h1>
                </div>
            </div>
            <?php
include '../database.php';
$order = new Orderan();
foreach ($jenis->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $tanggal_order = $data['tanggal_order'];
    $nama_costumer = $data['nama_costumer'];
    $alamat = $data['alamat'];
    $nomor_telepon = $data['nomoor_telepon'];
    $jenis_layanan = $data['jenis_layanan'];
    $berat = $data['berat'];
}
?>
    <fieldset>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Order</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_order" class="form-control">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="inputPassword">Nama Costumer</label>
                    <select name="id_costumer" class="form-control">
                    <?php
                        include '../database.php';
                        $dosen =  new Dosen();
                        $no = 1;

                        foreach ($dosen->index() as $data){
                    ?>
                        <option value="<?php echo $data['id'] ?>"><?php echo $data['nama_costumer, alamat, nomor_telepon'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="inputPassword">Nomor telepon</label>
                    <select name="id_costumer" class="form-control">
                    <?php
                        include '../database.php';
                        $dosen =  new Dosen();
                        $no = 1;

                        foreach ($dosen->index() as $data){
                    ?>
                        <option value="<?php echo $data['id'] ?>"><?php echo $data['nomor_telepon'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="inputPassword">Jenis Layanan</label>
                    <select name="id_jenis" class="form-control">
                    <?php
                        include '../database.php';
                        $jenis =  new Jenis();
                        $no = 1;

                        foreach ($jenis->index() as $data){
                    ?>
                        <option value="<?php echo $data['id'] ?>"><?php echo $data['jenis_layanan'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-9">
                        <input type="number" name="berat" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label >KG</label>
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-5 col-form-label"></label>
                    <div class="col-sm-4">
                        <input type="submit" name="save" value="ORDER" class="form-control">
                    </div>
                </div>
        </form>
    </fieldset>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>

</body>
</html>
