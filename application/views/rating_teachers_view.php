<section class="rating container mb-5 ">
  <h3 class="text-center pb-2">Преподаватели (тренера)</h3>
  <div class="search">
  		<input type="text" class="search-input" placeholder="Введите текст...">
  	</div>
  <?php foreach ($trainers as $ticher): ?>
    <a href="<?= base_url();?>Personal_controllers/teacher/<?= $ticher->id; ?>">
      <div class="card wow fadeInUp">
        <div class="card-body pb-0 my_-_mb25">
          <div class="container list-group-flush">
            <div class="list-group-item">
              <p class="chool searchable"> <?= $ticher->sername.' '.$ticher->name.' '.$ticher->otch; ?></p>
              <p class="mb-0"><img src="https://cdnmyslo.ru/NewsImage/59/c8/59c8cf6e-d4ae-41cc-a0a0-da92b6905878_1.jpg" class="rounded-circle z-depth-0 mr-3 img_bulding_rating"
            alt="avatar image"><div class="searchable position_dead">Центр : <?= $ticher->club_name; ?></div><br></p>
              <p class="section_rating searchable">Секция: <?= $ticher->section_name; ?></p>
              <p class="img_text_rating searchable">адрес : <?= $ticher->address; ?></p>
              <div class="rating_star" id='rateyo-readonly-widg<?= $ticher->id; ?>'></div>
              <p class="rating_star_int"><?= $ticher->rating; ?></p>
            </div>
          </div>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</section>

<script>
  <?php foreach ($trainers as $key): ?>
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
