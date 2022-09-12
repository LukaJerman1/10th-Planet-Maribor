<?php
require "fpdf/fpdf.php";

$host = "localhost";
$uporabniskoIme = "root";
$geslo = "";
$imePodatkovneBaze = "nova_baza";

//$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);


$db = new mysqli($host,$uporabniskoIme,$geslo,$imePodatkovneBaze);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

    class myPDF extends FPDF{


        function header(){
            // LOGO
            $this->Image('logo.png', 10, 6);
            // nastavljanje naslova
            $this->SetFont('Arial','B',20);
            // valikost celice in vsebina celica + pozicija
            $this->Cell(276,30,'10TH PLANET JIU JITSU',0,0,'C');
            // nova vrsta
            $this->Ln();
            $this->SetFont('Times','B',12);
            $this->Cell(276,10,'Seznam vseh registriranih uporabnikov', 0,0, 'C');
            $this->Ln(20);
        }

        function footer(){
            // pozicija footera
            $this->SetY(-15);
            // stili footerja
            $this->SetFont('Arial', '',10);
            // to doda stevec strnani na konec
            $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
        }

        function headerTable(){
            // nastavitev headerja tabele
            $this->SetFont('Times', 'B', 12);
            // celice v headerju
            $this->Cell(20,10,'ID',1,0,'C');
            $this->Cell(40,10,'Ime',1,0,'C');
            $this->Cell(40,10,'Priimek',1,0,'C');
            $this->Cell(50,10,'Datum Rojstva',1,0,'C');
            $this->Cell(50,10,'Pas',1,0,'C');
            $this->Cell(00,10,'Email',1,0,'C');
            $this->Ln();

        }

        function prikaziTabelo($db){
            // vsebina tabele
            $this->SetFont('Times','',12);
            // sql zahteva
            $sql = "SELECT id,ime,priimek,datum_rojstva,pas,email FROM uporabnik";
            // query po podatkovni bazi z ukazom
            $stmt = $db->query($sql);
            // pridobivanje acosiativnega polja.
            // polnjenje celic z podatki iz podatkovne baze
            // vglavnem polnjenje tabele
            while($data = $stmt->fetch_assoc()){
                $this->Cell(20,10,$data['id'],1,0,'C');
                $this->Cell(40,10,$data['ime'],1,0,'L');
                $this->Cell(40,10,$data['priimek'],1,0,'L');
                $this->Cell(50,10,$data['datum_rojstva'],1,0,'L');
                $this->Cell(50,10,$data['pas'],1,0,'L');
                $this->Cell(00,10,$data['email'],1,0,'L');
                $this->Ln();

            }
        }
    }

// zograj je samo objekt - torej šablona
// ustvarimo objekt tipa myPDF
$pdf = new myPDF();
$pdf->AliasNbPages();
// nastavimo page na željen format
$pdf->AddPage('L', 'A4', 0);
// uporabimo funkcijo objekta
$pdf->headerTable();
// funkcija za prikaz tabele
$pdf->prikaziTabelo($db);
// izpis PDF
$pdf->Output();


?>