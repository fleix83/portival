<?php snippet('header') ?>


<section class="contact <?= $page->background() ?> ">
<div class="container">
  <div class="row">
    
    <div class="col-lg-12 d-flex justify-content-center nowrap">
      <div class="col-lg-8">
  
          
            <h3><?= $page->formtitle()->html() ?></h3>
            <h4><?= $page->formsubtitel()->html() ?></h4>
            <br>
            <a href="<?= url('swisstogo') ?>">Back</a>
       
      
      </div>
    </div>
  </div>
</div>

</section>


<script>

function resize(){
  var heights = window.innerHeight;
  document.querySelector("section").style.height = heights + "px";
  }
</script>


<?php snippet('footer') ?>



