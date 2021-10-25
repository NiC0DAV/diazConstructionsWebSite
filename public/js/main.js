function navToggle(){
    const toggle = document.getElementById('toggle');
    const navbar = document.getElementById('navbar');
    const header = document.getElementById('header');
    const bodyOver = document.getElementById('body');
  

    // const header = document.getElementById('header');
    bodyOver.classList.toggle('active');
    toggle.classList.toggle('active');
    navbar.classList.toggle('active');
    header.classList.toggle('active');
}

const charts = document.querySelectorAll(".chart");

charts.forEach(function (chart) {
  var ctx = chart.getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});

$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
  // window.location.reload(true);
});

// $(document).ready(function() {

//     let seconds = 5;
//     let repeat = 0;
//     // let holdOn = 0;
//     $('#checkbox1').prop('checked', true);
//     let countdown = setInterval(function(){
//         seconds--;
//         console.log('Continuo')
//         var x = document.getElementsByTagName('input')[0].id;
//         console.log('El id es:'+x);
//         if(repeat == 0){
//             $('#4').prop('checked', false);
//             $('#5').prop('checked', true);
//             repeat = 1;
//         }else if(repeat == 1){
//             $('#checkbox2').prop('checked', false);
//             $('#checkbox3').prop('checked', true);
//             repeat = 2;
//         }else if(repeat == 2){
//             $('#checkbox3').prop('checked', false);
//             $('#checkbox4').prop('checked', true);
//             repeat = 3;
//         }else if (repeat == 3){
//             $('#checkbox4').prop('checked', false);
//             $('#checkbox5').prop('checked', true);
//             repeat = 4;
//         }else if (repeat == 4){
//              $('#checkbox1').prop('checked', true);
//              repeat = 0;
//          }
//         console.log(repeat); 
//     },7000); 

// });

