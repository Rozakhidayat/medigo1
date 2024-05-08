<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <style>
          .nav-item.active h1 {
              color: white;
              text-align: center;
    }

    </style>

    <script type="text/javascript">
   
    function displayTime(){
      var clientTime=new Date();
      var time=new Date(clientTime.getTime());
      var sh=time.getHours().toString();
      var sm=time.getMinutes().toString();
      var ss=time.getSeconds().toString();
    document.getElementById("jam").innerHTML=(sh.length==1?"0"+sh:sh)+":"+(sm.length==1?"0"+sm:sm)+":"+(ss.length==1?"0"+ss:ss);
    document.getElementById("jaminput").value = (sh.length==1?"0"+sh:sh)+":"+(sm.length==1?"0"+sm:sm)+":"+(ss.length==1?"0"+ss:ss);
}
  </script> 


    
  

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/template/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/./css/style.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</head>