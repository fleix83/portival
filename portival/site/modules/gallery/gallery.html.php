
<section class="gallery">

<?php snippet('gallery') ?>

</section>


<!-- Lightbox Script -->
<script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
          });
</script>

<!-- Die beiden Lightbox Ressourcen (css und js) müssen im Header geladen sein (http://ashleydw.github.io/lightbox/)

 <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
-->
