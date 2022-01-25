/*********Sign up & Login form************/
//Sign Up
const formSignUp = document.getElementById("signup"),
continueBtnSignUp = formSignUp.querySelector(".button input"),
errorTextSignUp = formSignUp.querySelector(".error-text");

formSignUp.onsubmit = (e)=>{
  e.preventDefault();
}

continueBtnSignUp.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href="index.php#reservation";
              }else{
                errorTextSignUp.style.display = "block";
                errorTextSignUp.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(formSignUp);
    xhr.send(formData);
}