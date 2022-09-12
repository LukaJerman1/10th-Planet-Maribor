<?php
/*
echo "<ul>";
        $links = array("index.php", "news.php", "contact.php" ,"about.php", "prijava.php", "registracija.php");
        foreach ($links as $link) {
            $active = "";
            if (!empty($_GET['p']) && $link == $_GET['p']){
                $active = 'class="active"';
            }
            echo "<li><a href="./?p=$link" $active>$link</a></li>";
        }
        echo "</ul>";

*/

/*
echo'
<ul>
<li ><a class ="{{Request::is('index.php')?'selected':''}}" href="{{url('index.php')}}">Home</a></li>
<li ><a class ="{{Request::is('news.php')?'selected':''}}" href="{{url('news.php')}}">News</a></li>
</ul>'*/
/*
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
*/

//$activePage = basename($_SERVER['PHP_SELF'], ".php");
/*

echo'
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="news.php">News</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="about.php">About</a></li>
<li><a href="prijava.php">Prijava</a></li>
<li><a href="registracija.php">Registracija</a></li>

</ul>

'
*/

$pages = array(
    array("file" => "index.php", "naziv" => "Home"),
    array("file" => "news.php", "naziv" => "Info"),

    array("file" => "prijava.php", "naziv" => "Prijava"),
    array("file" => "registracija.php", "naziv" => "Registracija")
);      

$logged_in_pages = array(
    array("file" => "index.php", "naziv" => "Home"),
    array("file" => "news.php", "naziv" => "Info"),
    
    array("file" => "profil.php", "naziv" => "Profil"),
    array("file" => "pregledUporabnikov.php", "naziv" => "Pregled Uporabnikov")
);




echo"<ul>";

    if(isset($_SESSION['email'])){

        foreach($logged_in_pages as $logged_page){
            echo'<li><a href="'.$logged_page["file"].'"';
            if(basename($_SERVER['PHP_SELF']) == $logged_page["file"]) echo 'class="selected"';                                                                   
            echo'>'.$logged_page["naziv"].'</a></li>';
        }
       
    }else{

        foreach($pages as $page){
            echo'<li><a href="'.$page["file"].'"';
            if(basename($_SERVER['PHP_SELF']) == $page["file"]) echo 'class="selected"';                                                                   
            echo'>'.$page["naziv"].'</a></li>';
        }
    }

echo "</ul>";





?>



<?php
/*
$current = array("index.php", "news.php", "contact.php" ,"about.php", "prijava.php", "registracija.php");

foreach( $current as $k => $v){
    $active = $_GET['page'] == $k
            ? ' class="selected"'
            : '';
    echo '<li><a href="/'.$k.'"'.$active.'>'.$v.'</a></li>';
}


*/
?>