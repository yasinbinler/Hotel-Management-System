<!doctype html>
<html lang="tr">
<head>
    <?php $this->load->view("includes/head"); ?>
    <?php $this->load->view("room_extra_services/add/page_style"); ?> 
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <?php $this->load->view("includes/header"); ?>
    <!-- Left side column. contains the logo and sidebar -->

    <?php $this->load->view("includes/left_side_bar"); ?>


    <div class="content-wrapper">
        <?php $this->load->view("room_extra_services/add/breadcrumb"); ?>
        <!-- Content Wrapper. Contains page content -->
        <?php $this->load->view("room_extra_services/add/main_content"); ?>
    <!-- /.content-wrapper -->
    </div>

    <?php $this->load->view("includes/right_side_bar"); ?>

</div>

<?php $this->load->view("includes/footer"); ?>
<?php $this->load->view("room_extra_services/add/page_script"); ?>

</body>
</html>