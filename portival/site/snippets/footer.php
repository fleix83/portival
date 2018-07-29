<footer class="container-fluid footer">
  <div class="row">
    <!-- FOOTER LEFT -->
    <div class="col-lg col-xs footer-wrapper">
      <div class="footer-content-1 footer-border">
        <?= $site->footer_1()->kirbytext() ?>
      </div>
    </div>
     <!-- FOOTER CENTER -->
    <div class="col-lg col-xs footer-wrapper">
      <div class="footer-content-2 footer-border">

                <div class="footer-brand">
                 <!-- <img class="img-brand" src="./content/logo.png" ?> -->
                    <div class="contact-brand">
                      <?= $site->footer_2()->kirbytext() ?>
                    </div>
                </div>



        <!--<?= $site->footer_2()->kirbytext() ?>-->
      </div>
    </div>
     <!-- FOOTER RIGHT -->
    <div class="col-lg col-xs footer-wrapper clearfix">
      <div class="footer-content-3">
        <?= $site->footer_3()->kirbytext() ?>
      </div>
    </div>
  </div>

</footer>


</body>
</html>
