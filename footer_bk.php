<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h1>contact info</h1>
                <address>
                    <p>Address: Jalan Masjid, Wonosari, Gunungkidul</p>
                    <p>Daerah Istimewa Yogyakarta 55851</p>
                    <p>Telp. 085-602-082-990</p>
                    <p>Email : <a href="javascript:;">ronnypermadi1@gmail.com</a></p>
                </address>
            </div>
            <div class="col-lg-5 col-sm-5">
                <h1>latest tweet</h1>
                <div class="tweet-box">
                    <i class="icon-twitter"></i>
                    <em>Please follow <a href="javascript:;">@ronny_3g</a> for all future updates of us! <a href="javascript:;">twitter.com/ronny_3g</a></em><br/>
                    <i class="icon-twitter"></i>
                    <em>Please follow <a href="javascript:;">@nettus</a> for all future updates of us! <a href="javascript:;">twitter.com/vectorlab</a></em>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                <h1>stay connected</h1>
                <ul class="social-link-footer list-unstyled">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-skype"></i></a></li>
                    <li><a href="#"><i class="icon-github"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/hover-dropdown.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<!-- date-picker -->
    <script src="assets/datepicker/bootstrap-datepicker.js"></script>

<script src="js/jquery.easing.min.js"></script>
<script src="js/link-hover.js"></script>

<script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>

<script type="text/javascript" src="assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<script src="js/revulation-slide.js"></script>
<script type="text/javascript">
            $(document).ready(function () {
                $('#datepicker').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
                $(".select2").select2();
            });
        </script>
<!--<script>
  $(function () {
      //Date range picker
    $('#datepicker').datepicker();


     //Initialize Select2 Elements
    $(".select2").select2();

  });
</script>-->
<script type="text/javascript">

    function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
    };

</script>

</body>
</html>
