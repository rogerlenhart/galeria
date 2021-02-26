<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Atividade 2</title>
</head>
<body>
    <div class="header" id="mainHeader">
        <div class="header-wrapper">
            <a href="index.php" class="logo">
                <i class="fa fa-photo"></i> GALERIA
            </a>
        </div>
    </div>
    <div class='wrapper'>
        <div class='conteudo'>
            <form method="post" action="upload.php" enctype="multipart/form-data">
                <h1>ADICIONAR IMAGEM</h1>
                <hr>
                <input type='file' name='arquivo' id="arquivo" required accept=".png">
                <label for="arquivo" class="custom-upload" id="teste"><i class="fa fa-upload"></i> <span>Selecionar arquivo...</span></label>
                <div class="btn-group">
                    <input type='submit' name='enviar'>
                    <button class="cancel-btn" onclick="location.href='index.php';" name='cancelar'>CANCELAR</button> 
                </div>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST["enviar"])){
            $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);
            if($extensao == "png"){
                move_uploaded_file($_FILES['arquivo']['tmp_name'],"imagens/".uniqid().".".$extensao);
                header("location: index.php");
            }else{
                echo "O arquivo precisa ser PNG.";
            }
        }
        
    ?>
    
    <script src='script.js'></script>
    <script src='upload.js'></script>
</body>
</html>