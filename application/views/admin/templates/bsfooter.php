    <script src="<?php echo base_url(); ?>assets/bs-gen/js/jquery.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/libs/fakeloader/fakeLoader.min.js"></script>
<script>
    
    $("#fakeLoader").fakeLoader(
        {
          timeToHide:90, //Time in milliseconds for fakeLoader disappear
          zIndex:999, // Default zIndex
          spinner:"spinner6",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7' 
          bgColor:"#5b7691", //Hex, RGB or RGBA colors
      //    imagePath:"<?php echo base_url(); ?>assets/libs/fakeloader/preloader1.gif" //If you want can you insert your custom image    
        }
    );
    
    
    $("#fakeLoader-student").fakeLoader(
        {
          timeToHide:90, //Time in milliseconds for fakeLoader disappear
          zIndex:999, // Default zIndex
          spinner:"spinner3",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7' 
          bgColor:"#5b7691", //Hex, RGB or RGBA colors
      //    imagePath:"<?php echo base_url(); ?>assets/libs/fakeloader/preloader1.gif" //If you want can you insert your custom image    
        }
    );
</script>

    <script src="<?php echo base_url(); ?>assets/bs-gen/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/libs/toastr/build/toastr.min.js"></script>
 <script src="<?php echo site_url(); ?>assets/libs/datatable/js/datatables.min.js"></script>

    <script> 
        <?php  
        if($this->session->flashdata("success")){
            echo " toastr.success('".$this->session->flashdata("success")."', 'Notification' , {timeOut: 5000})";
        }else{
            if($this->session->flashdata("error")){
            echo " toastr.error('".$this->session->flashdata("error")."', 'Notification' ,{timeOut: 5000})";
        }
        }
            ?>
                
                
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable({
        "lengthMenu":[[-1,5,50,100,150,200,300],["All",5,50,100,150,200,300]]
    });


</script>
<!--fakeloader-->


</body>

</html>
