

<section class="rating container mb-5 ">
  <h3 class="text-center pb-2">Секции</h3>
  <div class="search">
  		<input type="text" class="search-input" placeholder="Введите текст...">
  	</div>
  <?php foreach ($section as $section_key): ?>
    <a href="<?= base_url();?>Personal_controllers/getstudent/<?= $section_key->id; ?>">

      <div class="card wow fadeInUp">
        <div class="card-body pb-0 my_-_mb25">
          <div class="container list-group-flush">
            <div class="list-group-item">
              <p class="chool searchable">Центр : <?= $section_key->club_name; ?></p>
              <p class="mb-0 "><img src="https://avatars.mds.yandex.net/get-pdb/916253/4bb994cd-e211-46f1-8860-d66098d0aadc/s1200?webp=false" class="mr-3 img_bulding_rating "><div class="searchable position_dead">Секция : <?= $section_key->section_name; ?></div><br></p>
              <p class="img_text_rating searchable">адрес : <?= $section_key->address; ?></p>
              <div class="rating_star" id='rateyo-readonly-widg<?= $section_key->id; ?>'></div>
              <p class="rating_star_int"><?= $section_key->rating; ?></p>
            </div>
          </div>
        </div>
      </div>

    </a>
  <?php endforeach; ?>
</section>

<script>
  <?php foreach ($section as $key): ?>
    $("#rateyo-readonly-widg<?php echo $key->id; ?>").rateYo({
      rating: <?php echo $key->rating; ?>,
      numStars: 5,
      precision: 2,
      minValue: 1,
      maxValue: 5,
      readOnly: true
    });
  <?php endforeach; ?>
</script>


<script src="<?= base_url()?>/MDB/js/jcfilter.js"></script>
<script>
$(document).ready(function() {
	$('.search-input').jcOnPageFilter({
    parentLookupClass:'list-group-item',
		childBlockClass:'searchable',
	});
});
</script>

<style>
.position_dead{
  position : relative;
  top:-65px;
  right: -115px;
}




</style>
