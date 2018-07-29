
<section class="hero">
  <div class="container-fluid">
    <div class="row">
      <div class="d-flex <?= $module->toggleleftright() ?> flex-end flex-wrap reveal section-image__image">
        <div class="<?= $module->imagesize() ?> col-sm-12 col-md-12 col-xs-12 ">
          <figure>
            <?php
            // images() is custom field
            $image = $module->image();
            // always check if the image exists!
            if($image): ?>
            <img src="<?= $image->url() ?>" class="img-fluid" alt="">
            <?php endif ?>
          </figure>
        </div>
          <div class="col-lg-6 d-flex flex-wrap col-md-12 col-sm-12 col-xs-12  <?= $module->alignvertical() ?> ">
            <div class="col-lg-12">
              <h2 class="section-image--h2"><?= $module->titel()->html() ?></h2>
              <p class="section-image--p"><?= $module->text()->html() ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- END CONTAINER -->
</section>


<script>


function resize()
           {
               var heights = window.innerHeight;
               document.querySelector("section").style.height = heights + "px";
           }
</script>
