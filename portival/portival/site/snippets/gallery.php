<div id="top-list" class="container-fluid">

  <div class="row d-flex justify-content-lg-end justify-content-center p-0 m-0 searchnav">
    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12 col-12 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center justify-content-center">
      <div class="col mb-5">
        <input class="search ml-3 ml-lg-4 quicksearch" type="text" placeholder="Suche" />
        <button class="sort btn-sort mt-3 ml-3 ml-lg-4" data-sort="nummer">Sort by Street</button>
        <button class="sort btn-sort mt-3 ml-3 ml-lg-4" data-sort="strasse">Sort by Number</button>
      </div>
    </div>
  </div>

<div class="row list col-lg-12 d-flex flex-wrap justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-center m-0 p-0">

<!-- Gallery Logik -->
<?php foreach($page->images() as $image): ?>



       <div class="component col-lg-3 col-md-3 col-sm-5 col-12 p-0 reveal">

          <a href="<?php echo $image->url() ?>" data-toggle="lightbox" data-gallery="example-gallery">
           <!-- Thumbnail Ausgabe  -->
          <img class="img" src="<?php echo $image->thumb(array('width' => 240))->url() ?>" alt="" ></a>

<div class="grid">
         <div class="left strasse element-item">
           <h5 class="name"><?= html($image->strasse()) ?></h5>
         </div>
</div>
         <div class="right nummer">
           <h2><?= html($image->nummer()) ?></h2>
         </div>
       </div>


     <?php endforeach ?>
 <!-- End Gallery Logik -->

</div> <!-- END LIST -->
</div> <!-- END CONTAINER -->


 <script>
           var options = {
             valueNames: [ 'strasse', 'nummer' ]
           };

           var hackerList = new List('top-list', options);





          //Isotope


          // quick  regex
          var qsRegex;

          // init Isotope
          var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            filter: function() {
              return qsRegex ? $(this).text().match( qsRegex ) : true;
            }
          });

          // use value of search field to filter
          var $quicksearch = $('.quicksearch').keyup( debounce( function() {
            qsRegex = new RegExp( $quicksearch.val(), 'gi' );
            $grid.isotope();
          }, 200 ) );

          // debounce so filtering doesn't happen every millisecond
          function debounce( fn, threshold ) {
            var timeout;
            return function debounced() {
              if ( timeout ) {
                clearTimeout( timeout );
              }
              function delayed() {
                fn();
                timeout = null;
              }
              timeout = setTimeout( delayed, threshold || 100 );
            }
          }



 </script>
