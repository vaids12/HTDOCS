1. Parašykite SQL užklausą, kuri ištrauktų visus stulpelius iš lentelės „actor“

SELECT * FROM actor;

2. Parašykite SQL užklausą, kuri ištrauktų visus stulpelius iš lentelės „actor“ , surušiuotus pagal stulpelį „first_name“.

SELECT * FROM actor ORDER by first_name;


3. Parašykite SQL užklausą, kuri ištrauktų visus stulpelius iš lentelės „actor“ , surušiuotus pagal stulpelį „first_name“ mažėjimo tvarka.

SELECT * FROM actor ORDER by first_name DESC;

4. Parašykite užklausą, kuri ištrauktų stulpelį „first_name“ iš lentelės „actor“ .

SELECT first_name FROM actor;

5. Parašykite užklausą, kuri ištrauktų stulpelus „first_name“, „last_name“ iš lentelės „actor“ .

SELECT first_name, last_name FROM actor;

6. Parašykite užklausą, kuri ištrauktų stulpelus „first_name“, „last_name“ iš lentelės „actor“ surušiuotus pagal „last_name“ didėjimo tvarka.

SELECT first_name, last_name FROM actor ORDER BY last_name ASC;

7. Parašykite užklausą, kuri ištrauktų stulpelus „first_name“, „last_name“ iš lentelės „actor“ surušiuotus pagal „last_name“ mažėjimo tvarka.

SELECT first_name, last_name FROM actor ORDER BY last_name DESC;

8. Parašykite užklausą, kuri ištrauktų stulpelus „first_name“, „last_name“ iš lentelės „actor“ sugrupuotus pagal stulpelį „first_name“ ir surušiuotus pagal „first_name“ mažėjimo tvarka.

SELECT first_name, last_name FROM actor GROUP BY first_name ORDER BY last_name DESC;

9. Parašykite SQL užklausą, kuri ištrauktų visus stulpelius iš lentelės „actor“ , kur stulpelio „first_name“ reikšmė yra Nick.

SELECT * FROM actor WHERE first_name="Nick";

10. Parašykite SQL užklausą, kuri ištrauktų visas skirtingas stulpelio „first_name“ reikšmes iš lentelės „actor“.

SELECT DISTINCT first_name FROM actor;

11. Parašykite SQL užklausą, kuri rezultate stulpelius atvaizduotų tokia tvarka kaip pateikta žemiau. Naudokite lentelę “actor”.

SELECT last_update, last_name, first_name FROM `actor`;


12. Parašykite SQL užklausą, kuri pateiktų visą informaciją apie filmus, kurių nuomos trukmė yra 6. Naudokite lentelę „film“.

SELECT * FROM film WHERE rental_duration=6;

13. Parašykite SQL užklausą, kuri pateiktų filmo pavadinimą, aprašymą, išleidimo metus, reitingą, kai reitingas yra PG. Naudokite lentelę „film“.

SELECT title, description,release_year, rating FROM film WHERE rating="PG";

14. Parašykite SQL užklausą, kuri pateiktų filmo pavadinimą, nuomos kainą ir filmo trukmę, pagal filmo trukmę nuo trumpiausio iki ilgiausio. Naudokite lentelę „film“.

SELECT title, rental_rate,length FROM film ORDER BY length ASC;

15. Parašykite SQL užklausą, kuri ištrauktų filmo pavadinimą, nuomos trukmę, nuomos kainą, kai nuomos kaina yra 4.99 arba mažiau, o nuomos trukmė 5 ir 6. Naudokite lentelę „film“.

SELECT title, rental_duration, rental_rate FROM film WHERE rental_rate <= 4.99 AND rental_duration IN ('5' , '6');

16. Parašykite SQL užklausą, kuri ištraukia filmo pavadinimą, filmo trukmę, nuomos kainą, žanro tipą, išskyrus tuos filmus, kur žanras nėra “Trailers”, pirmiausiai surušiuojant nuo trumpiausių iki ilgiausiai trunkančių filmų, o paskui pagal nuomos kainą. Naudokite lentelę „film“..

SELECT title, length, rental_rate, special_features FROM film WHERE NOT special_features LIKE "%Trailers%" ORDER BY length ASC, rental_rate;
arba
SELECT title, length, rental_rate, special_features FROM film WHERE  special_features <> "Trailers" ORDER BY length ASC, rental_rate;

1. Parašykite SQL užklausą, kuri ištrauktų visus filmus, kurių žanro aprašyme nėra žodžio “Trailers”.
Naudokite lentelę „film“. 

SELECT * FROM film WHERE NOT special_features LIKE "%Trailers%";

2. Parašykite SQL užklausą, kuri ištrauktų visus filmus, kurių žanro aprašymas prasideda žodžiu
“Trailers”. Naudokite lentelę „film“. 

SELECT * FROM film WHERE special_features LIKE "Trailers%";

3. Parašykite užklausą, kuri ištraukia visus filmų pavadinimus, kurie prasideda raide „z“. Naudokite
lentelę „film“. 

SELECT title FROM film WHERE title LIKE "z%";

4. Parašykite užklausą, kuri ištraukia visus filmų pavadinimus, kurių antroji raidė yra “w”. Naudokite
lentelę „film“

SELECT title FROM film WHERE title LIKE "_w%";

5. Parašykite SQL užklausą, kuri ištraukia visus filmų pavadinimus, kurių antroji raidė yra “w”, o
ketvirtoji raidė yra “e”. Naudokite lentelę „film“. 

SELECT title FROM film WHERE title LIKE "_w_e%";


6. Parašykite SQL užklausą, kuri stulpelius title, description pervadina į stulpelius ‘filmo pavadinimas’,
‘aprašymas’ atitinkamai. ”. Naudokite lentelę „film“. 


SELECT title as Filmo_pavadinimas, description as aprasymas FROM film;


7. Parašykite SQL užklausą, kuri ištraukia filmo pavadinimą, aprašymą, trukmę, kai trukmė yra tarp 46
ir 50, pradedant nuo trumpiausių. ”. Naudokite lentelę „film“. 

SELECT title, description, length FROM film WHERE length BETWEEN 46 AND 50 ORDER BY length;

8. Parašykite SQL užklausą, kuri ištrauktų filmų pavadinimus, nuomos kainą, trukmę, kai nuomos kaina
yra 2.99 arba trukmė yra 130. Naudokite lentelę „film“

SELECT title, rental_rate, length FROM film WHERE rental_rate=2.99 OR length=130;

9. Parašykite SQL užklausą, kuri ištraukia filmų pavadinimus, trukmę, nuomos kainą, kai trukmė yra 48
arba nuomos kaina nedidesnė negu 2.99. Naudokite lentelę „film“. 

SELECT title, length, rental_rate FROM film WHERE length=48 OR rental_rate<=2.99;

10. Parašykite užklausą, pateikiančią visus klientus, kurie dar negrąžino išsinuomotų filmų. Naudokite
lentelę “rental”. 


SELECT customer_id FROM rental WHERE return_date IS NULL;

11. Parašykite SQL užklausą, pateikiančią visus klientus, kurie grąžino išsinuomotus filmus. Naudokite
lentelę “rental”. 

SELECT customer_id FROM rental WHERE NOT return_date IS  NULL;

12. Parašykite SQL užklausą, kuri pateikia visą informaciją apie miestus, išskyrus miestus Adana, Abu
Dhabi ir Aden. Naudokite lentelę “city”.

SELECT city FROM city WHERE NOT city IN ("Adana","Abu Dhabi", "Aden");

13. Parašykite SQL užklausą, kuri pateikia visą informaciją apie nuomą tarp išnuomavimo laikotarpių
'2005-05-24 22:54:33' ir '2005-05-24 23:05:21'. Naudokite lentelę “rental”. 

SELECT * FROM rental WHERE rental_date BETWEEN '2005-05-24 22:54:33' AND '2005-05-24 23:05:21';

