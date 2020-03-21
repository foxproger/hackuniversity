<div class="container" style="margin-top:70px;">
  <div class="row">
    <div class="col">
      <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev"></a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next"></a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    </div>
    <div class="col">
      <h4>Информация о преподавателе:</h4>
      <h5><?php echo $trainers[0]->name, " ", $trainers[0]->sername, " ", $trainers[0]->otch ?></h5>
      <br>
      <h6><?php echo "Преподает в секции <b>",$trainers[0]->section_name, " </b>клуба <b>",$trainers[0]->club_name, "</b>, который находится по адресу: <b>",$trainers[0]->address,"</b>"  ;?></h6>
      <h6><?php echo "Оценка учениками данного преподавателя: <b>",$trainers[0]->rating,"</b>" ;?></h6>
          </div>
  </div>
  <div class="row">
    <div class="col">
      <h4><?php echo $trainers[0]->name, " ", $trainers[0]->otch, " "?>имеет следующие заслуги:</h4>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Мастер спорта по стрельбе</li>
        <li class="list-group-item">Мастер спорта по легкой атлетике</li>
        <li class="list-group-item">Заслуженный тренер России</li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h4><?php echo $trainers[0]->name, " ", $trainers[0]->otch, " "?>воспитал учеников, которые:</h4>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Варанкин Иван - КМС по легкой атлетике</li>
        <li class="list-group-item">Ерасов Иван - МС по стрельбе</li>
      </ul>
    </div>
  </div>
</div>
