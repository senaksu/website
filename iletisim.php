<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="anasayfa.css">
<title>Sena Aksu ~ İletişim Bilgi</title>
<style>
.sidenav {
  height: 100%;
  width: 0; /*Genişliği javascriptle değiştir*/
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden; /*Yatay kaydırmayı devre dışı bırak */
  transition: 0.5s;/* Sidenav'da kaymaya 0,5 saniye geçiş efekti */
  padding-top: 60px; /*İçeriği üstten 60 piksel yerleştirin */
}

.sidenav a {
  font-family: 'Lato', sans-serif;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
/*Menüler üzerine gelince  renklerini değiştirin */

.sidenav a:hover {
  color:rgb(248, 238, 238); 
}
/*Kapat düğmesini konumlandırın ve stillendirin (sağ üst köşe) */

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
/* Yüksekliğin 450 pikselden az olduğu daha küçük ekranlarda, 
sidenav stilini değiştirin 
(daha az dolgu ve daha küçük bir yazı tipi boyutu) */

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.bilgi{
  margin: 20px;
}
</style>
</head>
<body>

<div id="YanMenu" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">

  &times;</a>

  <a href="index.html">Anasayfa</a>
  <a href="hakkimda.html">Hakkımda</a>
  <a href="ilgialanlarim.html">İlgi Alanlarım</a>
  <a href="ozgecmis.html">Özgeçmiş</a>
  <a href="sehrim.html">Şehrim</a>
  <a href="mirasimiz.html">Mirasımız</a>
  <a href="iletisim.html">İletişim</a>
  <a href="giris.html">Giriş</a>

  

</div>


<span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">
&#9776; 
</span>

<!-- javascript ile menuyu açma kapatma -->

<script>
function openNav() {
  document.getElementById("YanMenu").style.width = "250px";
}

function closeNav() {
  document.getElementById("YanMenu").style.width = "0";
}
</script>
<div  class="bilgi" >
<header><h1>Bilgiler</h1></header>
		<section >
			    
				<article>
		            
					<div class="iletisim">
				        
						<table >
						    <tr >
			                    <th>Ad-Soyad</th>
				                <td>:</td>
				                <td> <?php echo" ".$_POST["name"]." "; ?></td>
			                </tr>
                            <tr >
			                    <th>Telefon</th>
				                <td>:</td>
				                <td> <?php echo" ".$_POST["tel"]." "; ?></td>
			                </tr>

							<tr >
			                    <th>E-mail</th>
				                <td>:</td>
				                <td> <?php echo" ".$_POST["eposta"]." "; ?></td>
			                </tr>
                            <tr >
			                    <th>Cinsiyet</th>
				                <td>:</td>
				                <td>  <?php if(isset($_POST["cinsiyet"])) 
								                echo" ".$_POST["cinsiyet"]." ";
																		
								      ?></td>
			                </tr>
                      <tr >
			                    <th>Doğum Tarihi</th>
				                <td>:</td>
				                <td> <?php echo" ".$_POST["dogumtarihigun"]." "; ?> <?php echo" ".$_POST["dogumtarihiay"]." "; ?><?php echo" ".$_POST["dogumtarihiyil"]." "; ?></td>
			                </tr>			
                      <tr >
			                    <th>Şehir</th>
				                <td>:</td>
				                <td> <?php echo" ".$_POST["sehir"]." "; ?> </td>
			                </tr>			
			                <tr >
			                    <th>Mesaj</th>
				                <td>:</td>
				                <td> <?php echo" ".$_POST["message"]." "; ?> </td>
			                </tr>			
	                    </table> 
						
			        </div>
		        </article> 
				
        </section>	
</div>




</body>
</html>
