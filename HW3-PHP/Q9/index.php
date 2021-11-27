<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-color: skyblue;
        }
        p{
            font-size: 70px;
            font-style: italic;
        }
        img{
            border-radius: 8px;
            width: 550px;
            height: 450px;
        }
        h3{
            position:absolute;
            bottom: 0;
            right: 10px;
        }
    </style>
</head>
<body>
    <h1>Be Inspiried</h1>;
    <?php
        $imgArr = array("image0.jpeg", "image1.jpeg", "image2.jpeg","image3.jpeg" );
        $quoteArr = array("The bad news is time flies. The good news is you’re the pilot.",
                        "You are never too old to set another goal or to dream a new dream.",
                        "You define your own life. Don’t let other people write your script.",
                        "If you don’t like the road you’re walking, start paving another one!");
        $img = $imgArr[rand(0, 3)];
        $quote = $quoteArr[rand(0, 3)];
        $format = rand(1, 2);

        if($format == 1){
            print"<img src='images/$img'>";
        }

        if($format == 2){
            print"<p>''$quote''</p>";
        }

        $date = date("Y/m/d l h:ia");
        print"<h3>$date</h3>";   
    ?>
</body>
</html>