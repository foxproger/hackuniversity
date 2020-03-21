<section class="rating container mb-5">
  <h3 class="text-center pb-2">Подростково - молодёжные центры</h3>
  <div class="search">
  		<input type="text" class="search-input" placeholder="Введите текст...">
  	</div>
  <?php foreach ($club as $key): ?>
    <a href="<?= base_url(); ?>Admin_controllers/getcentername/<?= $key->id; ?>">
      <div class="card wow fadeInUp">
        <div class="card-body pb-0 my_-_mb25">
          <div class="container list-group-flush">
            <div class="list-group-item">
              <p class="mb-0"><img src="http://www.remontbp.com/wp-content/uploads/2016/02/family-house_111215_01.jpg" class="mr-3 img_bulding_rating"><div class="searchable position_dead"><?= $key->name; ?></div></p>
              <p class="img_text_rating searchable">адрес : <?= $key->address; ?></p>
              <div class="rating_star" id='rateyo-readonly-widg<?= $key->id; ?>'></div>
              <p class="rating_star_int"><?= $key->rating; ?></p>
            </div>
          </div>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</section>

<script>
  <?php foreach ($club as $key): ?>
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
  top:-80px;
  right: -115px;
}




</style>
