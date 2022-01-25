const formLogin = document.querySelector(".login form"),
continueBtnLogin = formLogin.querySelector(".button input"),
errorText = formLogin.querySelector(".error-text");

formLogin.onsubmit = (e)=>{
  e.preventDefault();
}

continueBtnLogin.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                function toReserve() {
                  location.href = "index.php#reservation";
                }
                setTimeout(toReserve(),900000000);
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(formLogin);
    xhr.send(formData);
}