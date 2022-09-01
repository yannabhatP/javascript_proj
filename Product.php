<!DOCTYPE html>
<html>
<head>
    <title>Keychron</title>
   
</head>
<body>
    <h1>KeyChron TimStore</h1>
    <?php
        $jsonobj1 = '[{
            "id":"kck1",
            "name":"Keychron K1",
            "price": 4390,
            "image" :"image/Keychron K1.jpg"
        },
        {
            "id":"kck2",
            "name":"Keychron K2",
            "price" : 3890,
            "image" :"image/Keychron K2.jpg"
        },
        {
            "id":"kck3",
            "name":"Keychron K3",
            "price" : 3890,
            "image" :"image/Keychron K3.jpg"
        },
        {
            "id":"kck4",
            "name":"Keychron K4",
            "price" : 4390,
            "image" :"image/Keychron K4.jpg"
        },
        {
            "id":"kck5",
            "name":"Keychron K5",
            "price" : 4390,
            "image" :"image/Keychron K5.jpg"
        },
        {
            "id":"kck6",
            "name":"Keychron K6",
            "price" : 3890,
            "image" :"image/Keychron K6.jpg"
        },
        {
            "id":"kck7",
            "name":"Keychron K7",
            "price" : 3890,
            "image" :"image/Keychron K7.jpg"
        },
        {
            "id":"kck8",
            "name":"Keychron K8",
            "price" : 4090,
            "image" :"image/Keychron K8.jpg"
        },
        {
            "id":"kck10",
            "name":"Keychron K10",
            "price" : 4390,
            "image" :"image/Keychron K10.jpg"
        },
        {
            "id":"kck12",
            "name":"Keychron K12",
            "price" : 3890,
            "image" :"image/Keychron K12.jpg"
        }]';
    
        function createTable($obj)
        {
            $keychron = json_decode($obj,true);
            $table = "<table style='padding'>
                            <tr >
                                <th style='border: 1px solid black '>id</th>
                                <th style='border: 1px solid black '>name</th>
                                <th style='border: 1px solid black '>price(Baht)</th>
                                <th style='border: 1px solid black '>iamge</th>
                            </tr>";
            for ($i=0; $i < 10 ; $i++) { 
                foreach ($keychron[$i] as $key => $value ) {
                    $r=rand(0,256);
                    $g=rand(0,256);
                    $b=rand(0,256);
                                     
                    if($r != 255 && $g != 255 && $b != 255){
                        if($key == 'id'){
                            $table .="<tr style='border: 1px solid rgb($r,$g,$b);color:rgb($r,$g,$b)'><th style='border: 1px solid rgb($r,$g,$b);color:rgb($r,$g,$b)'>$value</th>";
                        }
                        else if($key == 'name'){
                            $table .="<th style='border: 1px solid rgb($r,$g,$b);color:rgb($r,$g,$b)'>$value</th>";
                        }
                        else if($key == 'price'){
                            $table .="<th style='border: 1px solid rgb($r,$g,$b);'color:rgb($r,$g,$b)'>$value</th>";
                        }else{
                            $table .="<th style='border: 1px solid rgb($r,$g,$b);color:rgb($r,$g,$b)'><img width='400' src='$value'></th></tr>";
                        }
                    }
                }
            }
            $table .= "</table>";
            return $table;
        }
        echo createTable($jsonobj1);
    ?>

</body>
</html>