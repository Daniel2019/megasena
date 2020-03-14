<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Sena</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: linear-gradient(to bottom, #32CD32, #90EE90) no-repeat;
            height: 100vh;
        }
        .titulo h1{
            font-size: 50px;
            display: flex;
            justify-content: space-around;
            color: 	#006400;
        }
        .titulo img{
            width: 50px;
            height: 50px;
            margin-left: 25%;
            margin-top: -85px;
        }
        .sorteio {
            margin: 50px;
            display: flex;
            justify-content: space-around;
        }
        .numero {
            height: 120px;
            width: 120px;
            border: 5px solid black;
            border-radius: 200px;
            background: #F0FFFF;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #006400;
            font-size: 25px;
            font-weight: bold;
        }
        .botton{
            display: flex;
            justify-content: space-around;
            
        }
        .botton button{
            border: 2px solid black;
            margin: 130px;
            padding: 5px;
            border-radius: 5px;
            display: flex;
            font-size: 20px;
            background: #006400;
            color: white;
        }
        .botton:active button{
            transition: scale(.100);
        }
        .botton button{
            transition: 200ms;
        }
    </style>
</head>
<body>
    <?php
        $contador = isset($_GET['temp']) ? $_GET['temp'] : 0;
    ?>
    <div class="wrrapper">
        <div class="titulo">
            <h1>Mega Sena<h1>
            <img src="trevo.png"/>
        </div>
        <div class="sorteio">
            <div class="numero">
                <?php
                    echo $contador == 0 ? "?": rand(0,60);
                ?>
            </diV>
            <div class="numero">
                <?php
                    echo $contador == 0 ? "?": rand(0,60);
                ?>
            </diV>
            <div class="numero">
                <?php
                    echo $contador == 0 ? "?": rand(0,60);
                ?>
            </diV>
            <div class="numero">
                <?php
                    echo $contador == 0 ? "?": rand(0,60);
                ?>
            </diV>
            <div class="numero">
                <?php
                    echo $contador == 0 ? "?": rand(0,60);
                ?>
            </diV>
            <div class="numero">
                <?php
                    echo $contador == 0 ? "?": rand(0,60);
                ?>
            </diV>
        </div>
        <div class="botton">
            <form action="?temp=1" method="post">
                <button>Estou com sorte</button>
            </form>
        </div>
    </div>
    <?php 

    ?>
</body>
</html>
