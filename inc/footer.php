
    <!-- Footer -->
<!-- permet de faire un "clear" entre footer et indexxxx -->
    <div class="pt-3 pb-3"></div>
    <footer>
    <div class="container-fluid pt-2 pb-2" id="containerfooter">
    <!-- section contact -->
      <div class="d-flex justify-content-around mt-5 mb-5 ml-4 mr-4" id="enfantliens">
        <a class="" href="nouscontacter.php">Nous contacter</a>
        <a class="" href="faq.php">F.A.Q</a>
        <a class="" href="mentionlegale.php">Mentions légales</a>
      </div>

      <!-- section reseau sociaux -->
      <div class="mt-5 mb-5"></div>

      <div class="d-flex justify-content-around w-75 ml-auto mr-auto mt-5 mb-5" id="social-icons">
          <a href="#" class="facebook"></a>
          <a href="#" class="twitter"></a>
          <a href="#" class="snapchat"></a>
          <a href="#" class="instagram"></a>
      </div>

      <div class="mt-5 mb-5"></div>
      <!-- section copyright -->
      <div class="container-fluid d-flex justify-content-center  mt-5 mb-5" id="copyright">
          <img src="asset/img/logo.png" id="imgfooter" class="img-fluid" alt="logo">
          <p class="text-dark text-center align-self-center">VIP Network est édité par VIP Network Team. Copyright &copy VIP Network Team 2020-2021. Tous droits réservés </p>
          <img src="asset/img/logo.png" id="imgfooter"
      </div>
    </div>

  </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- <script src="template/vendor/jquery/jquery.min.js"></script> -->
<script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Chart.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script src="asset/js/basile.js" type="text/javascript"></script>
<script src="asset/js/benjamin.js" type="text/javascript"></script>
<script src="asset/js/enzo.js" type="text/javascript"></script>
<script src="asset/js/tair.js" type="text/javascript"></script>
<script src="asset/js/main.js" type="text/javascript"></script>

<script>
  var chartColors = {
  red: 'rgb(255, 99, 132)',
  orange: 'rgb(255, 159, 64)',
  yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: 'rgb(54, 162, 235)',
  purple: 'rgb(153, 102, 255)',
  grey: 'rgb(231,233,237)'
  };

  var randomScalingFactor = function() {
  return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
  }
  var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  var config = {
  type: 'line',
  data: {
  labels: ["January", "February", "March", "April", "May", "June", "July"],
  datasets: [{
    label: "My First dataset",
    backgroundColor: chartColors.red,
    borderColor: chartColors.red,
    data: [
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor()
    ],
    fill: false,
  }, {
    label: "My Second dataset",
    fill: false,
    backgroundColor: chartColors.blue,
    borderColor: chartColors.blue,
    data: [
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor(),
      randomScalingFactor()
    ],
  }]
  },
  options: {
  responsive: true,
  title: {
    display: true,
    text: 'Chart.js Line Chart'
  },
  tooltips: {
    mode: 'label',
  },
  hover: {
    mode: 'nearest',
    intersect: true
  },
  scales: {
    xAxes: [{
      display: true,
      scaleLabel: {
        display: true,
        labelString: 'Month'
      }
    }],
    yAxes: [{
      display: true,
      scaleLabel: {
        display: true,
        labelString: 'Value'
      }
    }]
  }
  }
  };
  var ctx = document.getElementById("lineex").getContext("2d");
  window.myLine = new Chart(ctx, config);

	</script>
</body>
</html>
