<head>
    <title>Breeds list</title>
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
            background-image: url("images.jpg");
            background-repeat: no-repeat;
            background-position: right bottom;
            background-size: 25%;
        }
    
    </style>
</head>
<body>
    <div class="container">
    <header>   
        <h2>Breeds list</h2>
    </header>
    



<?php
if(isset($_GET)){     
    
    //Shows breeds list
    $breeds_url="https://dog.ceo/api/breeds/list";
    $breeds_data = file_get_contents($breeds_url);
    $breeds_json = json_decode($breeds_data,TRUE);
    
    echo "<h3>Here is the list of breeds:<h3>"."<br>";
    
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
    </div>
     <footer>Copyright &copy; dog.test</footer>
        
    </body>