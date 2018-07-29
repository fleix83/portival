
<section class="cta <?= $module->background() ?>">
  <div class="container-fluid">
    <div class="row">
    
    
    
    
      <div class="col-lg-10 d-flex <?= $module->justify() ?> section-image__text">
          <div class="col-lg-6">
            <h2 class="section-image--h2"><?= $module->titel()->html() ?></h2>
            <p class="section-image--p"><?= $module->text()->html() ?></p>
            <button class="btn btn-primary">Buy now</button>
          </div>
      </div>
    
      <div class="d-flex <?= $module->justifyImage() ?> reveal section-image__image">
        <div class="<?= $module->imagesize() ?>">
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
