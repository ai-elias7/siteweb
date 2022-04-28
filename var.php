
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
