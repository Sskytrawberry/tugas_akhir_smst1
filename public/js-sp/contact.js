function collectData() {
    var pin = prompt("Masukkan Pin Log In Anda: ", "Masukkan Pin Anda");
    var email = prompt("Masukkan Email Anda: ", "email@example.com");
  
    // Validasi apakah pin hanya terdiri dari angka
    var pinIsValid = /^\d+$/.test(pin);
  
    if (pinIsValid && pin !== null && pin !== "" && email !== null && email !== "") {
      var dataDisplay = document.getElementById("dataDisplay");
      if (dataDisplay) {
        dataDisplay.innerHTML = "<p>Pin Anda: " + pin + "</p>" +
                                "<p>Email Anda: " + email + "</p>";
      }
      window.location.href = "index.html";
    } else {
      alert("Data tidak lengkap atau pin tidak valid. Harap masukkan pin yang terdiri dari angka dan email yang valid.");
    }
  }
  
  
  function validasi()
  {
  
  // FULL NAME
  var cek = document.getElementById("name").value;
  var ekspresi=/([A-Za-z])/;
  if(cek=="" || ekspresi.test(cek)==false)
  {
      alert("Harap Masukkan Nama yang Valid");
      document.getElementById("name").focus();
      return false
  }
  
  var email = document.getElementById("email").value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (email === "" || !emailRegex.test(email)){
    alert("Harap Masukkan Email yang Valid");
    document.getElementById("email").focus();
    return false;
  }
  
  var phone = document.getElementById("telephone").value;
  if (phone === "" || phone.length <= 9 || !/^\d+$/.test(phone)) {
    alert("Harap Masukkan Nomor Telepon yang Valid (lebih dari 9 digit).");
    document.getElementById("telephone").focus();
    return false;
  }

  alert("Formulir berhasil dikirim!")
  
    }