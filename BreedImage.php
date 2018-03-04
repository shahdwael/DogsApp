<head>
    <title>Specific breed image</title>
    <style>
         div.pic{
            margin-left: 35%;
        }
        div.container {
            width: 100%;
            height: 93%;
            border: 1px solid gray;

        }
        header, footer {
            padding: 1em;
            color: white;
            background-color: black;
            clear: left;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>   
            <h2>Specific breed picture</h2>
        </header>
        <div class="pic">

<?php

if(isset($_GET)){     
    
    //Random breed image
    
    $breedName = $_GET['BreedName'];
    
    
    $img_url="https://dog.ceo/api/breed/".$breedName."/images/random";
    $img_data = file_get_contents($img_url);
    $img_json = json_decode($img_data,TRUE);
    
    $msg = $img_json['message'];
}
    
    ?>

<img src="<?= $msg ?>"> 

               
        </div>
       
    </div>
     <footer>Copyright &copy; dog.test</footer> 
</body>
