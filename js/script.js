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
            name.innerHTML = "";
            email.innerHTML = "";
         }
         else{
            alert(t);
         }
        }
    }
    r.open("POST","signupprocess.php",true);
    r.send(f);
    
}
