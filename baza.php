<?php

$baza=mysqli_connect("localhost","root","","web_shop");

// num_rows-koliko je redova u bazi nasao preko queryua
//fetch_all-> vrati mi sve korisnike 
//MYSQLI_ASSOC-> vrati mi kao asocijativni array npr ['email']=>pa podatak iz baze
// prevod linije prebaci mi sve redove iz tabele u assoc array
$rezultat=$baza->query("SELECT*FROM korisnici");
if($rezultat->num_rows >0){
echo "Ukupno smo nasli kornisnika baze" .$rezultat->num_rows;
$korisnici = $rezultat->fetch_all(MYSQLI_ASSOC);
foreach($korisnici as $korisnik)
{
    echo $korisnik['email'];
}
}    

else{
    echo "Nismo nasli nijednog kornisika";
}

?>