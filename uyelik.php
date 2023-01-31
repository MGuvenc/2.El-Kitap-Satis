
!doctype html>

<html lang="TR">

<head>

    <title>Üyelik</title>

    <meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/uyelik.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

  <div class="giris">

    <div class="form">

      <form class="kayit" action method="POST">

        <input type="text" id="isim" name="isim" placeholder="Adınız" required/>

        <input type="email" id="mail" name="mail" placeholder="Mail Adresiniz" required/>

        <input type="password" id="sifre" name="sifre" placeholder="Şifreniz" required/>

        <input type="tel" id="telefon" name="telefon" placeholder="5456263199" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required/>

        <input type="text" id="adres" name="adres" placeholder="Adresiniz" required/>

        <input type="date" id="dogum_tarihi" name="dogum_tarihi" value="2022-01-01" min="1950-01-01" max="2004-12-31" required/>

        <button name="btn" id="btn">Oluştur</button>

        <p class="mesaj">Zaten Üye Misin ? <a href="#">Giriş Yap</a></p>

      </form>

 



      <form class="giris-from" action method="POST">

        <input type="text" name="mail" placeholder="Mail Adresiniz" required/>

        <input type="password" name="sifre" placeholder="Şifreniz" required/>

        <button name="btn2" id="btn2">Giriş Yap</button>

        <p class="mesaj">Üye Değil Misin? <a href="#">Hesap Oluştur</a></p>

      </form>

 

    </div>

</div>

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

<script src="js/uyelik.js"></script>

<html>
