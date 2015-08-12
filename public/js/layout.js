$(document).ready(function () {
    
    $("#img").click(function (e) {
        e.preventDefault();
      $('.editImg').bPopup({
          follow: [true, true], //x, y
          position: [450, 300] //x, y
      });      
    });
 });