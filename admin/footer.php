<!--<style media="screen">
footer {
  clear: both;
  float: right;
  position: fixed;
  height: 50px;
  bottom: 0;
  width: 100%;
}
</style> -->
<footer class="site-footer">

  <p align="center">2017 &copy; Created By Rony Permadi</p>

</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/suggest.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
    <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>

<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

      <!--script for this page only-->
      <script src="js/editable-table.js"></script>
      <script src="js/editable-table1.js"></script>

      <script type="text/javascript">

          function PreviewImage() {
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

          oFReader.onload = function (oFREvent) {
          document.getElementById("uploadPreview").src = oFREvent.target.result;
          };
          };

      </script>


      <!-- END JAVASCRIPTS -->
      <script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
      </script>
      <script>
          jQuery(document).ready(function() {
              EditableTable1.init();
          });
      </script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>

<script>

//owl carousel

$(document).ready(function() {
    $("#owl-demo").owlCarousel({
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem : true,
  autoPlay:true

    });
});

    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
//custom select box
<script type="text/javascript">
$ (document) .ready(function()  {
$ ("#dbTxt") .focus() ;
}) ;
</script>
<script>
$(function(){
    $('select.styled').customSelect();
});

</script>



</body>
</html>
