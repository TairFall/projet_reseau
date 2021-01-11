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

  // PUSH DES DONNEES DANS LE PREMIER GRAPHIQUE
  success: function(response) {
    var ctx = document.getElementById('myChart').getContext('2d');
    Chart.defaults.global.defaultFontColor = '#ffffff';
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
    // console.log(response)

    // PUSH DES DONNEES DANS LE DEUXIEME GRAPHIQUE

    var ctx = document.getElementById('myChart2').getContext('2d');
    Chart.defaults.global.defaultFontColor = '#ffffff';
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
      total += parseInt(trame.ttl);
    })

    var status = response[3];
    // console.log(total);
    // console.log(status);
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Nombre de requêtes aux ttl manquant(s)','Nombre total de ttl perdus','Nombre de requêtes en échecs'],
        datasets: [{
          label: '',
          data: [nbr,total,status],
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
    // console.log(response)
  }
})
