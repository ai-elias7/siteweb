
<?php
 session_start();
    $_SESSION["categories"] = array(

                "T01" => array(
                    "id"=>0,
                    "img"=>"../img/phillips.png",
                    "name"=>"Body noir en jersey à col asymétrique",
                    "price"=>"19,99",
                    "stock"=>"10"
                ),

                "T02" => array(
                    "id"=>0,
                    "img"=>"../img/phillips.png",
                    "name"=>"Body noir en jersey à col asymétrique",
                    "price"=>"19,99",
                    "stock"=>"10"
                ),
                "T03" => array(
                    "id"=>0,
                    "img"=>"../img/phillips.png",
                    "name"=>"Body noir en jersey à col asymétrique",
                    "price"=>"19,99",
                    "stock"=>"10"
                ),
    );
;

foreach( $_SESSION["categories"] as $products ){
    echo $products["name"];
}

    

?>

































<?php
 session_start();
    $_SESSION["categories"] = array(

                "T01" => array(
                    "id"=>0,
                    "img"=>"../img/phillips.png",
                    "name"=>"Body noir en jersey à col asymétrique",
                    "price"=>"19,99",
                    "stock"=>"10"
                ),

                "T02" => array(
                    "id"=>0,
                    "img"=>"../img/phillips.png",
                    "name"=>"Body noir en jersey à col asymétrique",
                    "price"=>"19,99",
                    "stock"=>"10"
                ),
                "T03" => array(
                    "id"=>0,
                    "img"=>"../img/phillips.png",
                    "name"=>"Body noir en jersey à col asymétrique",
                    "price"=>"19,99",
                    "stock"=>"10"
                ),
    );
;

foreach( $_SESSION["categories"] as $products ){
    echo $products["name"];
}

    

?>
