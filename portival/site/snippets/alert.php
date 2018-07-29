

<?php if (!$site->alert()->empty()): ?>
<div class="container-fluid alert">
	<div class="row d-flex no-wrap justify-content-start">
			<div class="col-lg-4">
                <h2><?= $site->alert()->kirbytext() ?></h2>
			</div>
			<div class="col-lg-4">
                
                <form class="form-group d-flex no-wrap" action="https://t872361a3.emailsys1a.net/147/1461/a685399547/subscribe/form.html" method="post">
                   <!-- <input type="text" class="hidden" name="f_koi_soueUfQggTx2BwG" value="" tabindex="-1" />
                    <input type="email" class="form-control m-0 mb-2" name="email" id="email" value="" />
                    <button type="submit" class="btn btn-primary newsletter ml-2" value="Subscribe" >Subscribe</button>-->
					
					<div class="input-group mb-3">
						<input type="text" class="hidden" name="f_koi_soueUfQggTx2BwG" value="" tabindex="-1" />
						<input type="email" class="form-control" name="email" id="email" value="" placeholder="Your email here" aria-label="Email" aria-describedby="basic-addon2">
						<div class="input-group-append">
						<button class="btn btn-primary" type="submit">Subscribe</button>
						</div>
					</div>
					
                </form>
            </div>
	</div>
	<a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>
</div>
<?php endif ?>


  
  
<script>
	$(document).ready(function() {
    $('.alert').hide().delay(750).slideDown(400);
    $('.close_btn').click(function() {
    $('.close_btn').fadeOut(200);
    $('.alert').slideUp(400);
  });

});
    
</script>