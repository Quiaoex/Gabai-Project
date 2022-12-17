
function log_in_user() {
    var user = document.getElementById('email-input').value
    var pass = document.getElementById('password-input').value
    if (user == "admin@admin.com" && pass == "root") {
      window.open("./User UI/user-homepage.html")
      window.close("Homepage.html")
    }
     if (user=="" && pass == "") {
      alert('Empty Email and Password')
    } else {
      alert('incorrect Email or Password')
    }
  }
