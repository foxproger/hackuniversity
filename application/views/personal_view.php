<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Личный кабинет</title>
</head>
<body>

  <div class="container center_info" style="margin-top:60px">
    <div class="row">
      <div class="col-sm">
        <h3>Личный Кабинет</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">



        <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"  class="active"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://ros-obrazovanie.ru/netcat_files/Image/futbol_04.jpg"
        alt="First slide" height="400px">
    </div>
    <!--/First slide-->

    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://family.by/uploads/posts/2016-12/1480663377_dnjzbmxp1is.jpg"
        alt="Third slide" height="400px">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->




      </div>
      <div class="col-sm">
        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <ul class="developer">
              <h3 class="mb-1">Ваша информация:</h3>
              <li><b><?php print_r($personal[0]->name);echo " "; print_r($personal[0]->sername); ?></b></li>
              <li><?php print_r($personal[0]->year); echo " года рождения"?></li>
              <li><h4 class="mb-1">Расскажите о себе:</h4></li>
              <textarea id='myTextArea' style="margin-top: 0px;    margin-bottom: 0px;    height: 78px;    border: none;    padding: 10px;    border-radius: 5px;    background-color: #2bbbad!important;    color: #fff;">
                <?php print_r($personal[0]->information); ?></textarea>
              <div id='div'></div>
              <button class='btn btn-primary' id='change_description'>Изменить информацию</button>

            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
      </div>
    </div>
  </div>


  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" id="button_scan" style="    position: absolute;    top: 60px;    right: 5px;">
    Сканировать!
  </button>

  <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"  style="width:400px";>
        <canvas></canvas>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_btn_id">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

<?php foreach ($achiv as $achiv): ?>
    <div class="col-lg-3 col-md-4 col-sm-12">
     <?= $achiv->description; ?>
    </div>
   <?php endforeach; ?>
<h1>Куда записан</h1>

   <?php foreach ($sections as $sections): ?>
       <div class='col-lg-3 col-md-4 col-sm-12 btn ttt' id='<?= $sections->id; ?>' >
        <?= $sections->name; ?> <?= $sections->address; ?>
       </div>
      <?php endforeach; ?>
<div class='rrr'></div>





   <!-- <script type="text/javascript" src="../../MDB/js/jquery.js"></script> -->
<!-- <script type="text/javascript" src="http://localhost/balthack/MDB/js/DecoderWorker.js"></script> -->
   <script type="text/javascript" src="http://localhost/balthack/MDB/js/qrcodelib.js"></script>
   <script type="text/javascript" src="http://localhost/balthack/MDB/js/webcodecamjquery.js"></script>

   <script type="text/javascript">


       var arg = {
           resultFunction: function(result) {

           var a=result.code;
           $.ajax({
             type: "GET",
             url: 'http://localhost/balthack/Personal_controllers/addvisit?id_section='+a+'&id='+<?php echo $_SESSION['id']?>,
             contentType: "application/json",
             success: function(e){
               $('#div').html(e);

         }});
         $("canvas").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery.stop();

         $(".modal").modal("hide");

       }};

       $("#button_scan").click(function(){

           $("canvas").show();
           $("canvas").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery.play();
       });

   </script>



</body>
</html>




  <script  type="text/javascript" charset="UTF-8" >



  $(".ttt").on('click', function(e){
    //alert(a);

    var text2 = $(this).attr('id');
    $.ajax({
      type: "GET",
      url: 'http://localhost/balthack/Personal_controllers/showvisit?info='+text2+'&id='+<?php echo $_SESSION['id']?>,
      contentType: "application/json",
      success: function(e){
        $('.rrr').html(e);

    }

  });


});

$("#change_description").on('click', function(e){
  //alert(a);

  var text2 = $("#myTextArea").val();
  $.ajax({
    type: "GET",
    url: 'http://localhost/balthack/Personal_controllers/updateinfo?info='+text2+'&id='+<?php echo $_SESSION['id']?>,
    contentType: "application/json",
    success: function(e){
      $('#div').html(e);

  }

});

   //  success: location.reload(),
   // dataType: dataType
  });

</script>
