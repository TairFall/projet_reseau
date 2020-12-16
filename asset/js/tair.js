$(document).ready(function() {
  $("#carouselExampleControls").carousel();

  $(".item").click(function(){
    $("#myCarousel").carousel(1);
  });

  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });

  $(".left").click(function(){
    $("#myCarousel").carousel("next");
  });
});

var ctx = document.getElementById('myChart').getContext('2d');
Chart.defaults.global.defaultFontColor = '#ffffff';
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['TCP/IP', 'ICMP'],
    datasets: [{
      label: '',
      data: [16, 19],
      backgroundColor: [
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
      ],
      borderColor: [
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: false,
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});

var ctx = document.getElementById('myChart2').getContext('2d');
Chart.defaults.global.defaultFontColor = '#ffffff';
var myChart2 = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['TTL perdu(s)', 'Requête(s) en échec(s)'],
    datasets: [{
      label: '',
      data: [18, 5],
      backgroundColor: [
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderColor: [
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: false,
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
