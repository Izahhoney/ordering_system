<?php 

session_start();

if (isset($_SESSION['agent_email']) && isset($_SESSION['agent_name'])) {
 ?>


<?php include('header.php'); ?>
<body>
<?php include('navigation.php'); ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | Dashboard </title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>
<body id="page-top">


</nav>





</body>
</html>
<?php 

}else{
     header("Location: index.php");
     exit();
}
 ?>
