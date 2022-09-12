<?php

class Sistem{
    public $ime;
    public $pas;
    public $datumSpremembe;
    public $ura;

    function __constructor(array $data){
        $this->ime = $data['ime'];
        $this->pas = $date['pas'];
        $this->datumSpremembe = $data['datumSpremembe'];
        $this->ura = $data['ura'];
    }

    function set_object_vars($object, array $vars){
        $has = get_object_vars($object);
        foreach ($has as $name => $oldValue){
            $object->$name = isset($vars[$name]) ? $vars[$name] : NULL;
        }
    }

}

    if (isset($_POST['update_user'])){

        $imeSession = $_SESSION['ime'];
        $izbranPas = ($_POST['pas_update']) ? $_POST['pas_update'] : null;
        $datumSpremembe = date("Y-m-d"); 
        $ura = date("h:i:sa");
    /*
        echo $imeSession;
        echo $izbranPas;
        echo $datumSpremembe;
    */
        //$sprememba = new Sistem(array('ime' => $imeSession, 'pas' => $izbranPas, 'datumSpremembe' => $datumSpremembe, 'ura' => $ura));
        //$array = array('ime' => $imeSession, 'pas' => $izbranPas, 'datumSpremembe' => $datumSpremembe, 'ura' => $ura);
        
        //set_object_vars($sprememba,$array);

        /*
        $sprememba = array(
            'ime' => $_SESSION['ime'],
            'pas' => $_POST['pas_update'],
            'datumSpremembe' =>  date("Y/m/d"),
            'ura' => date("h:i:sa")
        );*/
        
        $sprememba = array(
            'ime' => $imeSession,
            'pas' => $izbranPas,
            'datumSpremembe' =>  $datumSpremembe,
            'ura' => $ura
        );

        //$obj = json_encode($sprememba);
        //echo $obj;

        $filename = './php/my_json_data.json';




            /*

            fopen = r+ začni brat/pisat dokument na začetku | w+ ustvari nov dokument oz. ce za obstaja zbrise podatke ;
            fclose = zapre dokument ;
            fwrite = piše v odprt dokument ;

            fseek = spreminja pointer:
            || 1# parameter = odprt dokument 
            || 2# parameter = kam želiš pointat 
            || 3# parameter = 'whence' - npr. SEEK_END, da greš na konec

            ftell = vrne trenutno pozicijo pointerja v odprtem dokumentu

            */ 


        // prebere dokument, če obstaja
        $handle = @fopen( $filename, 'r+' ); // @ utiša error-je
        // če dokument ne obstaja, ga ustvari

        if ( $handle === null ){
            $handle = fopen($filename, 'w+');
        };

        if ( $handle ){
        // pregleda do konca dokumenta SEEK_END
            fseek ( $handle, 0, SEEK_END );
        // ali smo na koncu, ali je dokumnent prazen
            if ( ftell($handle) > 0 ){
            // move back a byte
                fseek( $handle, -1, SEEK_END );
            // add the trailing comma
                fwrite( $handle, ',', 1 );
            // add the new json string
                fwrite( $handle, json_encode($sprememba) . ']' );
            }
            else{
            // zapiše prvo spremembo
                fwrite( $handle, json_encode(array($sprememba)) );
            }
            // zakljuci/zapre file
                fclose( $handle );
        };






        /*
        if (file_exists($file_name)) {

            $inp = file_get_contents($file_name);
            $tempArray = json_decode($inp);

                if(empty($tempArray)){
                    file_put_contents($file_name, $obj);
                }else{
                         //Če more združit arraya pol morem uporabit array $sprememba, pa potem json_encode()       
                    array_push($tempArray, $sprememba);
                    $jsonData = json_encode($tempArray);
                    file_put_contents($file_name, $jsonData);
                }
                
        } else { 
            file_put_contents($file_name, $obj);
        }*/
    }


/*
    $params = isset($_POST['pas_update']) ? $_POST['pas_update'] : null;
    echo''.$params.'';

    $object = {
        "PAS: " : $params
    };

    $jsonObject = json_encode($object);
    file_put_contents('./php/my_json_data.json', $jsonObject);
    
*/
?>