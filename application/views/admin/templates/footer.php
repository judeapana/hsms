
<footer class="footer text-center">
    All Rights Reserved by Gen Tech. Designed and Developed by <a href="https://tymanytech.com">Genius Technologies</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo site_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo site_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo site_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo site_url(); ?>assets/libs/datatable/js/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
    $("#setting").DataTable();


</script>
<!--Wave Effects -->
<script src="<?php echo site_url(); ?>assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo site_url(); ?>assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo site_url(); ?>assets/dist/js/custom.min.js"></script>


<script src="<?php echo site_url(); ?>assets/dist/js/jquery-ui.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->


<!-- this page js -->
<script src="<?php echo site_url(); ?>assets/libs/toastr/build/toastr.min.js"></script>
    <script>
        <?php

if ($this->session->flashdata("success")) {
	echo " toastr.success('" . $this->session->userdata("success") . "', 'Info' , {timeOut: 9000})";
}
if ($this->session->flashdata("added")) {
	echo " toastr.info('" . $this->session->flashdata("added") . "', 'Alert ' , {timeOut: 9000})";
}

if ($this->session->flashdata("update")) {
	echo " toastr.info('" . $this->session->flashdata("update") . "', 'Alert ' , {timeOut: 9000})";
}

if ($this->session->flashdata("delete")) {
	echo " toastr.warning('" . $this->session->flashdata("delete") . "', 'Alert ' , {timeOut: 9000})";
}

if ($this->session->flashdata("error")) {
	echo " toastr.warning('" . $this->session->flashdata("error") . "', 'Alert ' , {timeOut: 9000})";
}

?>
   </script>

   <script src="<?php echo base_url(); ?>assets/libs/fakeloader/fakeLoader.min.js"></script>

<script>
    $("#fakeLoader").fakeLoader(
        {
          timeToHide:100, //Time in milliseconds for fakeLoader disappear
          zIndex:999, // Default zIndex
          spinner:"spinner7",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
          bgColor:"#5b7691", //Hex, RGB or RGBA colors
      //    imagePath:"<?php echo base_url(); ?>assets/libs/fakeloader/preloader1.gif" //If you want can you insert your custom image
        }
    );
</script>



<style type="text/css">
/*// Small devices (landscape phones, 576px and up)*/
    @media (max-width: 1060px) {
        .btn1 {
            display: block;
            width: 100%;
        }
    }

</style>


</body>

</html>