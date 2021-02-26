<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Atividade 2</title>
</head>
<body>
    <div class="header" id="mainHeader">
        <div class="header-wrapper">
            <a href="#" class="logo">
                <i class="fa fa-photo"></i> GALERIA
            </a>
            <button onclick="location.href='upload.php';">
                <i class="fa fa-plus-circle"></i> NOVO
            </button>
        </div>
    </div>
    <div class='wrapper'>
        <div class='container'>
                <?php
                    if ($dh = opendir("imagens/")){
                        while (($file = readdir($dh)) !== false){
                            if ($file != "." && $file != "..") {
                                $img_path = "imagens/".$file;
                ?>
                            <a class="gallery-img" href="<?php echo $img_path; ?>">
                                <figure>
                                    <img src="<?php echo $img_path?>">
                                    <div class="overlay"><div>
                                </figure>
                            </a>
                            <?php
                            }
                        }
                        closedir($dh);
                    }
                ?>
        </div>   
    </div>
    <script src='script.js'></script>
</body>
</html>