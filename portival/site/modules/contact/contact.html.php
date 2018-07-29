<section class="contact <?= $module->background() ?> ">
<div class="container">
  <div class="row">
    
    <div class="col-lg-12 col-xs-10 d-flex justify-content-center nowrap">
      <div class="col-lg-10 justify-content-between">
  
          <div class="contactbutton" onclick="showContactPanel()">
            <h3><?= $module->formtitle()->html() ?></h3>
            <h4><?= $module->formsubtitle()->html() ?> <i class="fas fa-arrow-right ml-2"></i></h4>
          </div>
        
        <main id="c-panel" class="contactpanel">
            <form method="post">
              <?php if($alert): ?>
              <div class="alert">
                <ul>
                  <?php foreach($alert as $message): ?>
                  <li><?php echo html($message) ?></li>
                  <?php endforeach ?>
                </ul>
              </div>
              <?php endif ?>
            <div class="d-flex flex-row flex-wrap">
              <div class="col-lg-5 col-xs-12 form-group p-0">
                <label for="company">Company <abbr title="required">*</abbr></label>
                <input type="text" class="form-control mb-2" id="company" name="company" placeholder="Your company name here">
                <label for="name">Name <abbr title="required">*</abbr></label>
                <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Your name here">
                <label for="firstname">Firstname <abbr title="required">*</abbr></label>
                <input type="text" class="form-control mb-2" id="firstname" name="firstname" placeholder="Your firstname here">
                <label for="position">Position <abbr title="required">*</abbr></label>
                <input type="text" class="form-control mb-2" id="position" name="position" placeholder="Your position here">
              </div>
        
        
              <div class="col-lg-5 col-xs-12 form-group p-0  ml-sm-3">
                <label for="uid">UID/USt-IdNr./VAT Nr. <abbr title="required">*</abbr></label>
                <input type="text" class="form-control mb-2" id="uid" name="uid" required placeholder="Your UID here">
                <label for="email">Email <abbr title="required">*</abbr></label>
                <input type="email" class="form-control mb-2" id="email" name="email" required placeholder="Your company email here">
                <label for="webshop">Webshop <abbr title="required">*</abbr></label>
                <input type="text" class="form-control" id="webshop" name="webshop" required placeholder="Your webshop here">
                
              </div>
            </div>
            
          <!--  <div class="radio d-flex no-wrap">
                <div class="form-check">
                   <input class="form-check-input" type="radio" id="reseller" name="type" value="reseller" checked >
                   <label class="form-check-label" for="reseller">Reseller <abbr title="required">*</abbr></label>
                 </div>
                 
                 <div class="form-check ml-5">
                   <input class="form-check-input" type="radio" id="customer" name="type" value="customer">
                   <label class="form-check-label" for="exampleradio">Customer <abbr title="required">*</abbr></label>
                 </div>
            </div>-->
           
                <!--
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="examplecheckbox" name="examplecheckbox" value="option1" checked>
                <label class="form-check-label" for="examplecheckbox">Example Checkbox <abbr title="required">*</abbr></label>
              </div>
              
               <div class="form-check">
                <input class="form-check-input" type="checkbox" id="examplecheckbox" name="examplecheckbox" value="option2" checked>
                <label class="form-check-label" for="examplecheckbox">Example Checkbox 2 <abbr title="required">*</abbr></label>
              </div>-->
        
             
              <input type="submit" class="btn btn-primary mt-2" name="submit" value="Request">
           
              
            </form>
            
            </main>
      </div>
    </div>
  </div>
</div>

</section>


<script>
function showContactPanel(){
document.querySelector('#c-panel').classList.toggle('contactpanel');
}
</script>
