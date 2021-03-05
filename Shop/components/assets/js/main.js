const elements = ["errorFirst",
                   "firstname",
                   "lastname",
                   "username",
                   "contactinfo",
                   "inputEmailAddress",
                   "url",
                   "inputPassword",
                   "inputConfirmPassword",
                   "submit",
                ]

  elements.forEach(elements =>{
   window[elements] = document.getElementById(elements);

  })   

$(document).ready(function(){
   var dat = "control=Sign";
   $.ajax({
      type:"POST",
      url:"components/auth/index.php",
      cache:false,
      data:dat,
      success:function(response) {
        // var res = JSON.parse(response);
          console.log(response);
      }
     })
})
 
  
  submit.addEventListener("click",()=>{
      if(firstname.value !==""){
         if(lastname.value !==""){
            if(username.value !==""){
               if(contactinfo.value !==""){
                  if(inputEmailAddress.value !==""){
                     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(inputEmailAddress.value)){

                        if(url.value !==""){
                           if(inputPassword.value !==""){
                              if(inputConfirmPassword.value === inputPassword.value){

                   var data = "control=ApiRegistration"+"&lastname="+lastname.value+"&username="+username.value+"&firstname="+firstname.value+"&contactInfo="+contactinfo.value+"&email="+inputEmailAddress.value+"&password="+inputPassword.value+"&url="+url.value;
                             $.ajax({
                                  type:"POST",
                                  url:"components/auth/index.php",
                                  cache:false,
                                  data:data,
                                  success:function(response) {
                                    // var res = JSON.parse(response);
                                      console.log(response);
                                  }
                             })


                              }else{
                              document.getElementById("errorCpass").style.color="red";
                              document.getElementById("errorCpass").append("* password dintmuch");
                              clearError("errorCpass");
                              }

                           }else{
                              document.getElementById("errorPass").style.color="red";
                              document.getElementById("errorPass").append("* please provide your password");
                              clearError("errorPass");
                           }

                        }else{
                           document.getElementById("errorUrl").style.color="red";
                        document.getElementById("errorUrl").append("* please provide your url");
                        clearError("errorUrl");
                        }

                     }else{
                        document.getElementById("errorEmail").style.color="red";
                        document.getElementById("errorEmail").append("* Wrong email format");
                        clearError("errorContact");
                     }

                  }else{
                     document.getElementById("errorEmail").style.color="red";
                     document.getElementById("errorEmail").append("* provide your email");
                     clearError("errorEmail");
                  }

               }else{
                  document.getElementById("errorContact").style.color="red";
                  document.getElementById("errorContact").append("* provide your contact");
                  clearError("errorContact");
               }
               
            }else{
               document.getElementById("errorUName").style.color="red";
               document.getElementById("errorUName").append("* username required");
               clearError("errorUName");
            }

         }else{
         document.getElementById("errorLastName").style.color="red";
         document.getElementById("errorLastName").append("* Lastname required");
         clearError("errorLastName");
         }
      }else{
        
         document.getElementById("errorFirst").style.color="red";
         document.getElementById("errorFirst").append("*firstname required");
         clearError("errorFirst");
      
      }
  })

  function clearError(area){
    setTimeout(() => {
       document.getElementById(area).innerHTML="";
    }, 2000);
  }