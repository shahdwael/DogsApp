<head>
<title>Specific breed</title>
    <style>
         header, footer {
            padding: 1em;
            color: white;
            background-color: black;
            clear: left;
            text-align: center;
        }
        div.container {
            width: 100%;
            height: 93%;
            border: 1px solid gray; 

        }
        body{
            background-image: url("images (1).jpg");
            background-repeat: no-repeat;
            background-position: right bottom;
            background-size:50%;
        }
    </style>
</head>
<body>
    <div class="container">
    <header>   
        <h2>Choose to show specific Breed picture</h2>
    </header>
        <br>


<?php
if(isset($_GET)){     
    
    //Shows breeds list
    $breeds_url="https://dog.ceo/api/breeds/list";
    $breeds_data = file_get_contents($breeds_url);
    $breeds_json = json_decode($breeds_data,TRUE);
    
    echo "Here is the list of breeds:"."<br>";
    
    for($i=0; $i<80; $i++){
    
        $breeds_name = $breeds_json['message'][$i];
        if($i!=79){
            echo $breeds_name." - ";
        }
        else {
            echo $breeds_name.".";
        }
    }
}
    ?>
<br> <br> <br>
<form action="BreedImage.php" method="get">
    Breed name: <input type=text name="BreedName">
    <input type=submit value="Show">
</form>
        
    </div>
    <footer>Copyright &copy; dog.test</footer>
    <body>