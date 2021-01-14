// CAROUSEL ABOUTUS
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

// REQUÊTE AJAX
$.ajax({
  type: 'GET',
  url: 'ajax/ajax-gettrames.php',
  dataType: 'json',
  beforeSend: function() {
    console.log('beforesend');
  },
  success: function(response) {
    var ctx = document.getElementById('myChart').getContext('2d');
    Chart.defaults.global.defaultFontColor = '#000000';
    // FOREACH ICMP/TCIP
    var protocol_name = [];
    response[0].forEach(function(trame){
      protocol_name.push(trame.protocol_name);
    });
  // FOREACH NOMBRE D'ICMP/TCIP
    var nbr = [];
    response[0].forEach(function(trame){
      nbr.push(trame.nbr);
    });

    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: protocol_name,
        datasets: [{
          label: '',
          data: nbr,
          backgroundColor: [
            'rgba(255, 206, 86, 1)',
            'rgba(100, 192, 192, 1)',
            'rgba(150, 54, 148,50)',
            'rgba(255, 99, 71, 1)',
          ],
          borderColor: [
            'rgba(236, 236, 236, 1)',
            'rgba(236, 236, 236, 1)',
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
    Chart.defaults.global.defaultFontColor = '#000000';
    var ttl = [];

    // FOREACH NOMBRE DE TTL
    response[1].forEach(function(trame){
      ttl.push(trame.ttl);
    });

    // FOREACH NOMBRE DE REQUETES MANQUANT DE TTL
    var nbr = [];
    response[1].forEach(function(trame){
      nbr.push(trame.nbr);
    });

    // FOREACH NOMBRE TOTAL TTL MANQUANT
    var total = 0;
    response[2].forEach(function(trame){
      var totaux = 128 - parseInt(trame.ttl);
      total += totaux;
    })

    var status = response[3];
    // console.log(total);
    // console.log(status);
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Nombre de requêtes manquants de TTL','Nombre total de TTL perdus','Nombre de requêtes en échecs'],
        datasets: [{
          label: '',
          data: [nbr,total,status],
          backgroundColor: [
            'rgba(0, 230, 64, 1)',
            'rgba(31, 58, 147, 1)',
            'rgba(219, 10, 91, 1)',
          ],
          borderColor: [
            'rgba(236, 236, 236, 1)',
            'rgba(236, 236, 236, 1)'
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
    console.log(response)
  }
});
