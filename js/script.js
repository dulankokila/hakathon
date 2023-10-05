function signup() {

  var name = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var repassword = document.getElementById("confirmPassword").value;
  var country = document.getElementById("country").value;

  var f = new FormData();
  f.append("name", name);
  f.append("email", email);
  f.append("password", password);
  f.append("repassword", repassword);
  f.append("country", country);



  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;

      if (t == "Sucess") {
        window.location.reload();

        window.location = "signin.php";
      }
      else {
        alert(t);
      }
    }
  }
  r.open("POST", "signupprocess.php", true);
  r.send(f);

}

function signin() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var rem = document.getElementById("check").checked;

  var f = new FormData();
  f.append("email", email);
  f.append("password", password);
  f.append("c", rem);



  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "sucess") {
        alert(t);
          window.location =  "homenew.php";
      }
      else {
        alert(t);
      }


    }
  }
  r.open("POST", "signinprocess.php", true);
  r.send(f);
}
var bm;
function frogotpassword() {
  var email = document.getElementById("email").value;

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "sucess") {
        alert("verification code is send");
        var m = document.getElementById("forgotPasswordModal");
        bm = new bootstrap.Modal(m);
        bm.show();
      } else {
        alert(t);
      }
    }
  }
  r.open("GET", "fogotpasswordprocess.php?e=" + email, true);
  r.send();
}

function resetpw() {
  var password = document.getElementById("npi").value;
  var repassword = document.getElementById("rnp").value;
  var code = document.getElementById("vc").value;
  var email = document.getElementById("email").value

  var f = new FormData();
  f.append("p", password);
  f.append("rp", repassword);
  f.append("c", code);
  f.append("e", email);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Password update Sucessful") {
        alert(t);
        window.location.reload();
      } else {
        alert(t);
      }

    }
  }
  r.open("POST", "newpasswordprocess.php", true);
  r.send(f);
}

// sign-in
// function lsRememberMe() {
//   if (rmCheck.checked && emailInput.value !== "") {
//     localStorage.username = emailInput.value;
//     localStorage.checkbox = rmCheck.value;
//   } else {
//     localStorage.username = "";
//     localStorage.checkbox = "";
//   }
// }
// sign-in

// Create task
// Create task - targets
function addTarget() {
  if (document.querySelector("#newtask input").value.length == 0) {
    alert("Kindly Enter Task Name!!!!");
  } else {
    document.querySelector("#tasks").innerHTML += `
          <div class="task">
              <span id="taskname">
                  ${document.querySelector("#newtask input").value}
              </span>
              <button class="delete">
              <i class="bi bi-x-lg"></i>
              </button>
          </div>
      `;

    var current_tasks = document.querySelectorAll(".delete");
    for (var i = 0; i < current_tasks.length; i++) {
      current_tasks[i].onclick = function () {
        this.parentNode.remove();
      };
    }
  }
}
// Create task - targets

// // Create task - date-chooser
// const startDate = document.getElementById("start-date");
// startDate.value = "2023-10-05";

// const endDate = document.getElementById("end-date");
// endDate.value = "dd-MM-yyyy";
// console.log(dateControl.value); // prints "2017-06-01"
// console.log(dateControl.valueAsNumber); // prints 1496275200000, a JavaScript timestamp (ms)
// // Create task - date-chooser

// Create task - add-members
// document.getElementById("#pushmember").onclick =
function addMembers() {

  var name = document.getElementById("sel").value;

    document.querySelector("#member").innerHTML += `
          <div class="task-member d-flex col-8 justify-content-between">
              <span id="taskname">
                  ${document.querySelector("#addMember select ").value}
              </span>

              <div class="d-flex col-4 justify-content-between m-0">
              <button class="btn btn-success m-0 w-50 m-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="bi bi-plus-lg"></i> Add
              </button>
              <button class="delete btn btn-danger text-white w-50 m-1">
              <i class="bi bi-x-lg"></i>
              </button>
          </div>

          

          <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div>
      `;

    var current_tasks = document.querySelectorAll(".delete");
    for (var i = 0; i < current_tasks.length; i++) {
      current_tasks[i].onclick = function () {
        this.parentNode.remove();
      };
    }
  }


// Create task - add-members
// Create task

function go(){
  
  window.location = "dashboard/createproject.php";
}

function addeprojects() {
  // alert("ok");
  var name = document.getElementById("name").value;
  var des = document.getElementById("dis").value;
  var tech = document.getElementById("tech").value;
  var sdate =  document.getElementById("start-date").value;
  var odate =  document.getElementById("end-date").value;
  // alert(sdate);
  // alert(odate);
  var f = new FormData();
  f.append("name", name);
  f.append("des", des);
  f.append("tech", tech);
  f.append("sdate", sdate);
  f.append("odate", odate);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if(t = "Sucess"){
        window.location.reload();

      }
      else{
        alert(t);
      }
     
    }
  };

  // Move the open and send methods here
  r.open("POST", "../dashboard/addprojectprocess.php", true);
  r.send(f);
}
function changeImage() {
  var view = document.getElementById("viewImg"); //img tag
  var file = document.getElementById("profileimg"); //file chooser

  file.onchange = function () {
    var file1 = this.files[0];
    var url = window.URL.createObjectURL(file1);
    view.src = url;
  };
}
function updateProfile() {
  var name = document.getElementById("name");
  var country = document.getElementById("country");
  var image = document.getElementById("profileimg");

  var f = new FormData();
  f.append("n", name.value);
  f.append("c", country.value);
 
  if (image.files.length == 0) {
    var confirmation = confirm(
      "Are you sure You don't want to update Profile Image?"
    );

    if (confirmation) {
      alert("you have not selected any image.");
    }
  } else {
    f.append("image", image.files[0]);
  }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        window.location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "updateProfileProcess.php", true);
  r.send(f);
}
function addtask(){
  var name = document.getElementById("name").value;
  var des = document.getElementById("dis").value;
  var sdate =  document.getElementById("start-date").value;
  var odate =  document.getElementById("end-date").value;
  var member = document.getElementById("sel").value;

 

  var f = new FormData();
  f.append("name", name);
  f.append("des", des);
  f.append("sdate", sdate);
  f.append("odate", odate);
  f.append("mem", member);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
     
        alert(t);
      
     
    }
  };

  // Move the open and send methods here
  r.open("POST", "../dashboard/createtaskprocess.php", true);
  r.send(f);
}

function gotodeatils(id){
 var id = id;


}

function gosignin(){
  alert("ok");
  window.location = "signin.php";
}