function navToggle(){
    const toggle = document.getElementById('toggle');
    const navbar = document.getElementById('navbar');
    const header = document.getElementById('header');
    // const header = document.getElementById('header');
    
    toggle.classList.toggle('active');
    navbar.classList.toggle('active');
    header.classList.toggle('active');
}


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

