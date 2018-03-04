<?php

if(isset($_GET)){
    
    //Random dog image 
    $image_url ="https://dog.ceo/api/breeds/image/random";
    $image_data = file_get_contents($image_url);
    $image_json = json_decode($image_data, TRUE);
    
    $msg = $image_json['message'];
    }

?>

<head>
<title>Random picture</title>
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
            <h2>Random dog picture</h2>
        </header>
        <div class="pic">
            <img src="<?= $msg ?>">
        </div>
       
    </div>
     <footer>Copyright &copy; dog.test</footer> 
</body>
