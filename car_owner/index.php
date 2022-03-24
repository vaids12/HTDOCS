<?php

include 'layout/header.php';

header("Location: views/login.php");

?>


<?php include'layout/footer.php' ?>

<!-- 1. Sukurti dviejų lentelių duomenų baze. Pirmoje lentelėje turim savininkus(id, vardas, pavardė, el.paštas, teisių išdavimo data), kitoje 
automobilius(id, numeris, markė, modelis, spalva, savininko_id).
2. Sukurti aplikaciją, kuri atvaizduotų automobilių savininkus. Turi būti galimybė pridėti naują savininką, redaguoti esamą, trinti savininką.
3. Paspaudus ant savininko turi perkelti į kitą puslapį ir jame atvaizduoti visus jo turimus automobilius.
4. Automobilių puslapyje turi būti galimybė pridėti naują automobilį ir jis automatiškai turi būti priskiriamas tam savininkui. 
Taip pat turi būti galimybė redaguoti ir ištrinti automobilius.
5. Front-end pagal nuožiūrą. -->