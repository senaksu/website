 <?php
 
   $email = $_POST['username'];
   $sifre= $_POST['password'];
 
	if ($email=="" or $sifre=="")
	{
		echo "<script>alert(' Lütfen Boş Alanları Doldurun')</script>";	
		header("Refresh: 1;  url=giris.html");
	}
	else
	{
		if ($email=="b211210008@sakarya.edu.tr" && $sifre=="b211210008")
		{
			echo "<script>alert(' Hoşgeldiniz B211210008 ')</script>";	
			header("Refresh: 1;  url=index.html");
			
		}
		else		{ 
			echo "<script>alert(' Kullanıcı adı veya şifre hatalı')</script>";	
			header("Refresh: 1;  url=giris.html");
            
		}
	}
?>
