function signup(){

    var name = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("confirmPassword").value;
    var country= document.getElementById("country").value;

    var f = new FormData();
    f.append("name",name);
    f.append("email",email);
    f.append("password",password);
    f.append("repassword", repassword);
    f.append("country", country);
    
    

    var r  = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4){
            var t   = r.responseText;
        
         if(t == "Sucess"){
            window.location.reload();
          
            window.location = "signin.php";
         }
         else{
            alert(t);
         }
        }
    }
    r.open("POST","signupprocess.php",true);
    r.send(f);
    
}

function signin(){
    var email  = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var rem = document.getElementById("check").checked;

    var f = new FormData();
    f.append("email",email);
    f.append("password",password);
    f.append("c",rem);
    
    

    var r  = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4){
            var t   = r.responseText;
            if(t == "sucess"){
                alert(t);
        //   window.location =  "#";
            }
            else{
                alert(t);
            }
      
       
        }
    }
    r.open("POST","signinprocess.php",true);
    r.send(f);
}
var bm;
 function frogotpassword(){
 var email =     document.getElementById("email").value;

 var r =new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState ==4){
            var t = r.responseText;
          if(t == "sucess"){
            alert("verification code is send");
         var m =    document.getElementById("forgotPasswordModal");
         bm = new bootstrap.Modal(m);
                bm.show();
          }else{
            alert(t);
          }
        }
    }
    r.open("GET","fogotpasswordprocess.php?e=" +email,true);
    r.send();
 }

 function resetpw(){
    var password = document.getElementById("npi").value;
  var repassword = document.getElementById("rnp").value;
  var code = document.getElementById("vc").value;
  var email = document.getElementById("email").value

  var f = new FormData();
  f.append("p",password);  
  f.append("rp",repassword); 
  f.append("c",code); 
  f.append("e",email);

    var r =new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState ==4){
            var t = r.responseText;
            if(t == "Password update Sucessful"){
              alert(t);
              window.location.reload();
            }else{
              alert(t);
            }
           
        }
      }
    r.open("POST","newpasswordprocess.php",true);
    r.send(f);
 }
