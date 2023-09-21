<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 7</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				SELAMAT DATANG DI PROFIL SAYA !!
			</h3><img alt="Pratinjau Gambar Bootstrap" src="img/bg.jpg" /> 
			<button type="button" class="btn btn-success" onclick="goTo('profil.php')">
                Profil
            </button> 
            <button type="button" class="btn btn-success" onclick="goTo('porto.php')">
                Portofolio
            </button> 
            <button type="button" class="btn btn-success" onclick="goTo('kontak.php')">
                Kontak
            </button>
            
            <script>
            function goTo(url) {
                window.location.href = url;
            }

            
            </script>
            
            
		</div>
	</div>
    
</body>
</html>