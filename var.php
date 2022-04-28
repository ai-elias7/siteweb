
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
    $_session["categories"] = array(
            "tops" => array(
                "T01" => array(
                    "idi"=>0,
                    "img"=>"top1",
                    "txt"=>"Body noir en jersey à col asymétrique",
                    "prix"=>"19,99",
                    "stock"=>"10"
                ),
                "T02" => array(
                    "idi"=>1,
                    "img"=>"top2",
                    "txt"=>"Body effet lin blanc à détail drapé",
                    "prix"=>"19,99",
                    "stock"=>"10"
                ),
                "T03" => array(
                    "idi"=>2,
                    "img"=>"top3",
                    "txt"=>"Body noir en jersey à col asymétrique",
                    "prix"=>"19,99",
                    "stock"=>"10"
                ),
                "T04" => array(
                    "idi"=>3,
                    "img"=>"top4",
                    "txt"=>"Body moulant imprimé rose à bretelles asymétriques",
                    "prix"=>"19,99",
                    "stock"=>"10"
                ),
                "T05" => array(
                    "idi"=>4,
                    "img"=>"top5",
                    "txt"=>"Body moulant imprimé rose à bretelles asymétriques",
                    "prix"=>"24,99",
                    "stock"=>"10"
                ),
            ),
            "denim" => array(
                "D01" => array(
                    "idi"=>0,
                    "img"=>"jean1",
                    "txt"=>"Jean large gris pierre délavé à détail coutures",
                    "prix"=>"42,99",
                    "stock"=>"10"
                ),
                "D02" => array(
                    "idi"=>1,
                    "img"=>"jean2",
                    "txt"=>"Jean long coupe droite délavage bleu clair",
                    "prix"=>"39,99",
                    "stock"=>"10"
                ),
                "D03" => array(
                    "idi"=>2,
                    "img"=>"jean3",
                     "txt"=>"Jean droit déchiré très délavé coupe longue",
                    "prix"=>"35,99",
                    "stock"=>"10"
                ),
                "D04" => array(
                    "idi"=>3,
                    "img"=>"jean4",
                    "txt"=>"Jean disco noir enduit",
                    "prix"=>"29,99",
                    "stock"=>"10"
                ),
                "D05" => array(
                    "idi"=>4,
                    "img"=>"jean5",
                    "txt"=>"Jean large gris pierre délavé à détail coutures",
                    "prix"=>"42,99",
                    "stock"=>"10"
                ),
            ),
            "sacs" => array(
                "D01" => array(
                    "idi"=>0,
                    "img"=>"sac1",
                    "txt"=>"Sac pochette à rabat vert en similicuir",
                    "prix"=>"29,99",
                    "stock"=>"10"
                ),
                "D02" => array(
                    "idi"=>1,
                    "img"=>"sac2",
                    "txt"=>"Sac à bandoulière carré orange à partie matelassée",
                    "prix"=>"23,99",
                    "stock"=>"10"
                ),
                "D03" => array(
                    "idi"=>2,
                    "img"=>"sac3",
                    "txt"=>"Mini sac en similicuir bleu à détail poche",
                    "prix"=>"25,99",
                    "stock"=>"10"
                ),
                "D04" => array(
                    "idi"=>3,
                    "img"=>"sac4",
                    "txt"=>"Sac effet croco nude à bandoulière",
                    "prix"=>"42,99",
                    "stock"=>"10"
                ),
                "D05" => array(
                    "idi"=>4,
                    "img"=>"sac5",
                    "txt"=>"Sac pochette à rabat vert en similicuir",
                    "prix"=>"29,99",
                    "stock"=>"10"
                ),

            )
    );
?>





<?php
 session_start();
    $_SESSION["categories"] = array(

        "Télévision" => array(

                "Te0" => array(
                    "id"=>0,
                    "img"=>"../img/samsung.png",
                    "name"=>"Samsung Smart TV2020 ",
                    "price"=>"1349,00€",
                    "stock"=>"5"
                ),

                "Te1" => array(
                    "id"=>1,
                    "img"=>"../img/sony.png",
                    "name"=>"TV LED Sony Bravia",
                    "price"=>"300,00€",
                    "stock"=>"5"
                ),
                "Te2" => array(
                    "id"=>2,
                    "img"=>"../img/TCL.png",
                    "name"=>"TCL 43 EP 644",
                    "price"=>"400,00€",
                    "stock"=>"5"
                ),
                "Te3" => array(
                    "id"=>3,
                    "img"=>"../img/phillips.png",
                    "name"=>"Philips LED Smart TV",
                    "price"=>"500,00€",
                    "stock"=>"5"
                ),
                "Te4" => array(
                    "id"=>4,
                    "img"=>"../img/hyundai.png",
                    "name"=>"Hyundai Smart TV LED 24",
                    "price"=>"700,00€",
                    "stock"=>"5"
                ),
            ),

        "Ordinateur" => array(

            "Or0" => array(
                    "id"=>0,
                    "img"=>"../img/mcbookpro.png",
                    "name"=>"MacBookPro",
                    "price"=>"1349,00€",
                    "stock"=>"5"
            ),

            "Or1" => array(
                "id"=>1,
                "img"=>"../img/dell.png",
                "name"=>"Dell XPS 13",
                "price"=>"300,00€",
                "stock"=>"5"
            ),

            "Or2" => array(
                "id"=>2,
                "img"=>"../img/hp.png",
                "name"=>"Hp X360",
                "price"=>"400,00€",
                "stock"=>"5"
            ),

            "Or3" => array(
                "id"=>3,
                "img"=>"../img/acer.png",
                "name"=>"Acer Aspire 5",
                "price"=>"500,00€",
                "stock"=>"5"
            ),

            "Or4" => array(
                "id"=>4,
                "img"=>"../img/asus.png",
                "name"=>"Asus vivobook",
                "price"=>"700,00€",
                "stock"=>"5"
            ),
        ),

        "Smartphone" => array(
            "Sm0" => array(
                "id"=>0,
                "img"=>"../img/iphone13.png",
                "name"=>"Iphone 13",
                "price"=>"909,00€",
                "stock"=>"5"
            ),
            "Sm1" => array(
                "id"=>1,
                "img"=>"../img/samsungS21.png",
                "name"=>"Samsung galaxy S21 5G",
                "price"=>"649,00€",
                "stock"=>"5"
            ),
            "Sm2" => array(
                "id"=>2,
                "img"=>"../img/huaweiP30.png",
                "name"=>"HuaweiP30.png",
                "price"=>"500,00€",
                "stock"=>"5"
            ),
            "Sm3" => array(
                "id"=>3,
                "img"=>"../img/xiaomi.png",
                "name"=>"Xiaomi 11",
                "price"=>"569,00€",
                "stock"=>"5"
            ),
            "Sm4" => array(
                "id"=>4,
                "img"=>"../img/iphone13max.png",
                "name"=>"Iphone 13 Pro Max",
                "price"=>"1259,00€",
                "stock"=>"5"
            ),
            

        ),    
    );
;

foreach( $_SESSION["categories"]["Ordinateur"] as $products ){
    echo $products["name"];
}

    

?>
