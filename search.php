<?php
function search($text){
    $db = new PDO("mysql:host=localhost;dbname=animalcaredatabase",'root','');
    $text =htmlspecialchars($text);
    $get_name = $db->prepare("SELECT * FROM posts WHERE animal LIKE concat('%',:animal,'%');");
    $get_name->execute(array(
        'animal'=>$text
    ));
    while($name = $get_name->fetch(PDO::FETCH_ASSOC)){
        echo  "<h1>Animal :
                        ".$name['animal']."
                    </h1>
                    <p class=\"pull-left thumb margin10 img-thumbnail\">Symptoms:
                        
                    </p>
                    <em>Owner name:
                        
                        <span>pet name:
                                    
                                </span> & <span>color :
                                        
                                <span
                    </em>
                    <article>
                        <p>
                            <strong>Description</strong>
                            
                        </p>
                    </article>";

    }
}
search($_GET['usearch']);
?>
