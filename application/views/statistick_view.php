<<!--Card-->
  <div class="container mt-5 my-2">
    </!--Card--><h4 class="text-center">Статистика по клубам</h4>
    <div class="text-center my-2">
      <input type="date" name="" value="">с
      <input type="date" name="" value="">по
      <a href="<?= base_url(); ?>Admin_controllers/my_statistick" class="btn btn-primary" name="button">показать статистику</a>
    </div>

              <div class="card">

                <!--Card content-->
                <div class="card-body">

                  <canvas id="myChart"></canvas>

                </div>

              </div>
              <!--/.Card-->
            </div>
            <div class="container">
              <select class="browser-default custom-select">
                    <option selected>Выберите центр</option>
                      <option value="1">Буревестник</option>
                      <option value="2">Восход</option>
                      <option value="3">Галактика</option>
                      <option value="3">Заозёрье</option>
                      <option value="3">Школа автомотоспорта</option>
                    </select>
                    <a href="<?= base_url(); ?>Admin_controllers/my_statistick" class="btn btn-primary" name="button">показать статистику</a>

                    <!--Card content-->
            <div class="card-body">

              <canvas id="lineChart"></canvas>

            </div>

          </div>
          <!--/.Card-->
            </div>
  </div>
