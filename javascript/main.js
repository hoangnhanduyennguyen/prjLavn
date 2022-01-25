//********To add appreance effects********/
function scroll(){
  window.sr = ScrollReveal();
  sr.reveal(".navbar", {
    duration: 2000,
    origin: "bottom",
  });
  sr.reveal(".showcase-left", {
    duration: 1500,
    origin: "left",
    distance: "300px",
  });
  sr.reveal(".showcase-right", {
    duration: 1500,
    origin: "right",
    distance: "300px",
  });
  sr.reveal(".showcase-bottom", {
    duration: 2000,
    origin: "botom",
  });
}

scroll();

/*********Sticky navbar***********/
let navbar = $(".navbar");
$(window).scroll(function () {
  // get the complete hight of window
  let oTop = $(".section-1").offset().top - window.innerHeight;
  if ($(window).scrollTop() > oTop) {
    navbar.addClass("sticky");
  } else {
    navbar.removeClass("sticky");
  }
});
/*********End Of Sticky navbar***********/

$("#makeAReserve").on('click', function(){
  window.location.href = "index.php#reservation";
});

$("#reserveLogin").on('click', function(){
  window.location.href = "login.php";
});

$("#reserveNowLogin").on('click', function(){
  const formReserve1 = document.querySelector(".section-4 form");
  formReserve1.onsubmit = (e)=>{
    e.preventDefault();
  }
  window.location.href = "login.php";
});

$("#reserveNow").on('click', function(){
  const formReserve = document.querySelector(".section-4 form");
  
  formReserve.onsubmit = (e)=>{
    e.preventDefault();
  }
  
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/reserve.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        if(data === "Something went wrong while inserting a new reservation!" || data === "Please enter all input fields to reserve!"){
          alert(data);
        }else{
          const obj = JSON.parse(data);
          document.getElementById("custName").innerText =  document.getElementById("nameOfCust").value;;
          document.getElementById("custEmail").innerText = obj.customer_email;
          document.getElementById("custPhone").innerText = document.getElementById("phoneNumber").value;
          document.getElementById("bookID").innerText = obj.booking_id;
          document.getElementById("bookDate").innerText = obj.date;
          document.getElementById("bookTime").innerText = obj.time;
          document.getElementById("bookPpl").innerText = obj.number_of_people + "\n\nYour reservation is confirmed.\nThank you for booking at Lavn!";
          $("#numberPeople").val(0);
          $("#calendar").val('');
          $("#time").val('');
          $("#specialRequest").val('');
        }
      }
    }
  }
  let formData = new FormData(formReserve);
  xhr.send(formData);
});

//********To hide the collapse navbar after a link is clicked********/
$('.navbar-nav>li>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
});


