<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4 wow fadeIn">
<div class="container">
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <ul class="developer">
        <h6 class="mb-1">Разработчики:</h6>
        <li>Суслов И.Ю.</li>
        <li>Бочаров Л.Д.</li>
        <li>Ерасов И.В.</li>
        <li>Варанкин И.Е.</li>
      </ul>
    </li>
  </ul>
</div>
<div class="footer-copyright text-center py-3">2019
  <a href="<?= base_url(); ?>">ProgHub</a>
</div>
</footer>
<!-- Footer -->

</body>

<script src="<?= base_url(); ?>MDB/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>MDB/js/mdb.min.js"></script>
<script src="<?= base_url(); ?>MDB/js/script.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>MDB/js/popper.min.js"></script>


<script>
// Line
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["Буревестник", "Восход", "Галактика", "Заозёрье", "Школа автомотоспорта", "Лахтоспорт"],
datasets: [{
label: 'Центры',
data: [12, 19, 25, 36, 25, 13],
backgroundColor: [
 'rgba(255, 99, 132, 0.2)',
 'rgba(54, 162, 235, 0.2)',
 'rgba(255, 206, 86, 0.2)',
 'rgba(75, 192, 192, 0.2)',
 'rgba(153, 102, 255, 0.2)',
 'rgba(255, 159, 64, 0.2)'
],
borderColor: [
 'rgba(255,99,132,1)',
 'rgba(54, 162, 235, 1)',
 'rgba(255, 206, 86, 1)',
 'rgba(75, 192, 192, 1)',
 'rgba(153, 102, 255, 1)',
 'rgba(255, 159, 64, 1)'
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
 ticks: {
   beginAtZero: true
 }
}]
}
}
});

//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
        label: "Буревестник",
        backgroundColor: [
          'rgba(105, 0, 132, .2)',
        ],
        borderColor: [
          'rgba(200, 99, 132, .7)',
        ],
        borderWidth: 2,
        data: [65, 59, 80, 81, 56, 55, 40]
      }
    ]
  },
  options: {
    responsive: true
  }
});




</script>
