const pwd = document.querySelector(".form .field input[name='password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(pwd.type == "password"){
        pwd.type = "text";
        /* change the eye icon to an eye with a slash*/
        toggleBtn.classList.add("active"); 
    }else{
        pwd.type = "password";
        /* change the eye icon to an eye with a slash*/
        toggleBtn.classList.remove("active");
    }
}

const pwdCF = document.querySelector(".form .field input[name='passwordCF']"),
toggleBtnCF = document.querySelector(".form .field i[name='confirm']");

if (toggleBtnCF != null){
    toggleBtnCF.onclick = ()=>{
        if(pwdCF.type == "password"){
            pwdCF.type = "text";
            /* change the eye icon to an eye with a slash*/
            toggleBtnCF.classList.add("active"); 
        }else{
            pwdCF.type = "password";
            /* change the eye icon to an eye with a slash*/
            toggleBtnCF.classList.remove("active");
        }
    }
}




