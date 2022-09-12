<?php

/*
    <select type="text" id="pas_update" name="pas_update">
            <option value="beli">Beli</option>
            <option value="moder">Moder</option>
            <option value="vijolcen">Vijolčen</option>
            <option value="rjavi">Rjav</option>
            <option value="crni">Črn</option>
    </select>*/

    $options =[
        "beli" => "Beli",
        "moder" => "Moder",
        "vijolcen" => "Vijolcen",
        "rjavi" => "Rjavi",
        "crni" => "Crni"

    ];

    $pas = $_SESSION['pas'];

    echo'<select type="text" id="pas_update" name="pas_update" style="margin-bottom:10px;">';
        foreach($options as $key => $value){
            echo'<option value ="'.$key.'"';
            if ($key == $pas){
                echo'selected';
            }
            echo '>' . $value . '</option>';
        }
    echo'</selected>';

?>