<section class="center_info">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://family.by/uploads/posts/2016-12/1480663377_dnjzbmxp1is.jpg"
                alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://family.by/uploads/posts/2016-12/1480663377_dnjzbmxp1is.jpg"
                alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://family.by/uploads/posts/2016-12/1480663377_dnjzbmxp1is.jpg"
                alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 center_info_div">
          <h4>Информация</h4>
          <?php foreach ($name_sections as $pepolinsection_view_key): ?>
            <p class="text-left mt-3"><?= $pepolinsection_view_key->name; ?></p>
          <?php endforeach; ?>
          <p class="text-left">График работы: ПН-СР-ПТ с 18:00 до 20:00</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <button type="button" class="btn my_btn" data-toggle="modal" data-target="#fluidModalRightSuccessDemo">Рейтинг учеников</button>
      </div>
    </div>
    <div class="row text-center mt-5">
      <div class="col-sm-12">
        <div class="mb-3">
          <h4 class="center_info_div_h4">Ученики данной секции</h4>
        </div>
        <?php foreach ($pepolinsection as $pepolinsection_view_key): ?>
          <a href="<?= base_url(); ?>Personal_controllers/personal/<?php print_r($pepolinsection_view_key->id); ?>" class="center_info_a">
            <ul class="list-group list-group-flush">
              <ul class="list-group">
                <li class="list-group-item">
                  <?php print_r($pepolinsection_view_key->name); ?>
                </li>
              </ul>
            </ul>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Full Height Modal Right Success Demo-->
<div class="modal fade right" id="fluidModalRightSuccessDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Рейтинг учеников</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body p-0">
        <div class="card wow fadeInUp my_card_center_info">
          <div class="card-body pb-0">
            <div class="container list-group-flush">
              <div class="list-group-item my_color_yellow">
                <?php foreach ($pepolinsection as $pepolinsection_key): ?>
                  <div class="" id='rateyo-readonly-widg<?= $pepolinsection_key->id; ?>'></div>
                  <p class="center_info_position_raiteng"><?= $pepolinsection_key->rating; ?></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class=""><?= $pepolinsection_key->sername; ?></p>
                      <p class=""><?= $pepolinsection_key->name; ?></p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mb-0"><img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0"
                    alt="avatar image"></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <?php foreach ($pepolinsection as $key): ?>
          <script>
              $("#rateyo-readonly-widg<?php echo $key->id; ?>").rateYo({
                rating: <?php echo $key->rating; ?>,
                numStars: 5,
                precision: 2,
                minValue: 1,
                maxValue: 5,
                readOnly: true
              });
          </script>
        <?php endforeach; ?>
      </div>

      <div class="modal-footer text-center">
        <a role="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Спасибо</a>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right Success Demo-->
