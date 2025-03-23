<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/fontawesome.min.css ">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>HearME</title>
</head>
<body>
    <header>
        <h1>LOGO</h1>
        <nav>
            <ul id="nav">
                <li><a href="about.html">About us </a></li>
                <li><a href="involve.html">Get Involved</a></li>
                <li><a href="support.html">Help & Support</a></li>
            </ul>
        </nav>
        <a href="#" id="ham">&#9776</a>
        <a href="#" id="cancel">&#10006</a>
    </header>
</body>
</html>


<?php
if(isset($_POST["submit"])){

        $q1 = $_POST["q1"];
        $q2 = $_POST["q2"];
        $q3 = $_POST["q3"];
        $q4 = $_POST["q4"];
        $q5 = $_POST["q5"];
        $q6 = $_POST["q6"];
        $q7 = $_POST["q7"];
        $q8 = $_POST["q8"];
        $q9 = $_POST["q9"];
        $q10 = $_POST["q10"];
    
        $score = array($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);
        $sum = 0;
        foreach ($score as $value) {
            $sum += $value;
        }
        // echo $sum; 
    
        if ($sum <= 10) {
            echo "<h1 id='result-header'>You're doing okay, but always remember to check in with yourself.</h1>";
        }else if($sum > 10 && $sum <= 20) {
            echo "<h1 id='result-header'>Mild signs of anxiety or stress detected. Practice self-care and talk to someone if you feel overwhelmed.</h1>";
        }else if($sum > 20 && $sum <= 30) {
            echo "<h1 id='result-header'>You might be experiencing depression or anxiety. It's okay to seek help or talk to a trusted person.</h1>";
        }else{  
            echo "<h1 id='result-header'>High signs of mental health challenges detected. Please consider reaching out for professional help. You are not alone.</h1>";
        }
        echo "<br>";
        echo '<a href=test.html id="previous">Go Back</a>';
    }
?>

<style>
    #result-header{
        font-family: 'Noto Serif', Georgia, "Times New Roman", serif;
        font-size: 40px;
        margin-top: 20px;
        letter-spacing: 2px;
        font-weight: 500;
    }
    #previous{
        margin: 30px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #fff;
        font-size: 15px;
        text-decoration: none;
        padding: 12px 35px;
        border-radius: 5px;
        background:#1fb4bb;
        cursor: pointer;
        letter-spacing: 2px;
        border: none;
        outline: none;
    }
    #previous:hover{
        opacity: 0.9;
    }
</style>

