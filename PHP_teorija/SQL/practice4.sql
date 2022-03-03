LEFT JOIN

1. Parašykite SQL užklausą, pateikiančią kiekvieno kliento vardą ir pavardę, ką jis išsinuomavo,
išsinuomavimo datą, grąžinimo datą, nuomos mokestį. Rezultatą surušiuokite pagal kliento ID.
Naudokite lenteles „customer“ ir „rental“, „payment“.

SELECT c.first_name, c.last_name, c.customer_id, r.rental_id, r.rental_date, r.return_date, p.amount 
FROM customer AS c 
LEFT JOIN rental as r ON c.customer_id = r.customer_id
 LEFT JOIN payment as p ON r.rental_id = p.rental_id 
 ORDER BY c.customer_id;



2. Parašykite SQL užklausą, pateikiančią, ką klientas, vardu 'BARBARA' ir pavarde 'JONES', išsinuomavo,
išsinuomavimo datą, grąžinimo datą, nuomos mokestį. Rezultatą surūšiuokite pagal invetoriaus ID
didėjimo tvarka. Naudokite lenteles „customer“ ir „rental“, „payment“.

SELECT c.first_name, c.last_name, c.customer_id,r.inventory_id, r.rental_id, r.rental_date, r.return_date, p.amount 
FROM customer AS c 
LEFT JOIN rental as r ON c.customer_id = r.customer_id 
LEFT JOIN payment as p ON r.rental_id = p.rental_id
 WHERE c.first_name= 'BARBARA' AND c.last_name= 'JONES'
  ORDER BY r.inventory_id DESC;




RIGHT JOIN

1.  Parašykite SQL užklausą, kuri pateikia filmų negrąžinusių klientų vardą, pavardę, el.pašto adresą.
Naudokite lenteles „customer“ ir „rental“. Rezultatą surūšiuokite pagal kliento ID didėjimo tvarka.


SELECT c.first_name, c.last_name, c.customer_id, c.email, r.return_date
 FROM customer AS c 
 RIGHT JOIN rental as r ON c.customer_id = r.customer_id
  ORDER BY `c`.`customer_id` DESC;

VISOKIE

1. Pateikite filmus, kurių trukmė neilgesnė negu 90.

SELECT f.title, f.length 
FROM film as f
 WHERE f.length<=90;

2. Pateikite filmų pavadinimus, nuomos kainą, trukmę, kai nuomos kaina yra 3.99 arba trukmė yra 130.

SELECT f.title, f.rental_rate, f.length 
FROM film AS f 
WHERE f.rental_rate=3.99 OR f.length=130;


3. Pateikite visą informaciją apie filmų kategorijas, kurių pavadinimas prasideda bet kuria kita raide
negu tarp A ir E. 

SELECT * 
FROM category 
WHERE  name NOT BETWEEN "A%" AND  "E%";


4. Pateikite visą informaciją apie filmų kategorijas, kurių pavadinimas prasideda raide F, ketvirtoji
raidė yra I, o likusios raidės gali būti bet kokios. 

SELECT * 
FROM category
 WHERE name LIKE "F__i%";


5. Pateikite filmų sąrašą, kurių pavadinimas susideda iš 5 raidžių, o ketvirtoji raidė yra „m“. 

SELECT title 
FROM film 
WHERE title LIKE "___m_";

6. Pateikite filmų sąrašą, kurių pavadinime ketvirtoji raidė yra „m“.

SELECT title 
FROM film
 WHERE title LIKE "___m%";

7. . Pateikite klientų sąrašą su mokėjimo data ir didžiausiu kiekvieno kliento mokėjimu, bet tik tų
klientų, kurių didžiausias mokėjimas per dieną didesnis negu 6.99, rušiuojant pagal didžiausią
mokėjimą mažėjimo tvarka. 

SELECT customer_id,payment_date, MAX(amount)
 FROM payment 
 GROUP BY customer_id,payment_date
  HAVING MAX(amount)>6.99
   ORDER BY `MAX(amount)` DESC;


8. Pateikite klientų sąrašą su mokėjimo data ir didžiausiu kiekvieno kliento mokėjimu, bet tik tų
klientų, kurie turi didžiausią mokėjimą per dieną, lygų 2.99, 3.99 ir 4.99. 

SELECT customer_id,payment_date, MAX(amount) 
FROM payment
 GROUP BY customer_id,payment_date
  HAVING MAX(amount) IN (2.99, 3.99, 4.99);


9. Pateikite klientus, kurie nuomai išleido 200 ir daugiau. Nuomai išleistą sumą pateikite stulpelyje „Iš
viso“. 

SELECT c.customer_id, c.first_name, c.last_name, sum(p.amount) as "Is viso" 
FROM customer AS c 
JOIN payment AS p ON c.customer_id = p.customer_id
 GROUP BY c.customer_id
  HAVING SUM(p.amount) >=200;

10. Paskaičiuokite, kiek nuomai išleido klientas, kurio ID yra 15. Nuomai išleistą sumą pateikite
stulpelyje „Išleido“. 

SELECT c.customer_id, c.first_name, c.last_name, SUM(p.amount) as "isleido" 
FROM customer c 
JOIN payment p ON c.customer_id= p.customer_id
 GROUP BY c.customer_id
  HAVING c.customer_id=15;

11. Jums paskambino klientė Helen Harris ir klausia, ar yra filmų, kurių ji dar negrąžino?
Jeigu taip, kokie tų filmų pavadinimai?

SELECT c.customer_id, c.first_name, c.last_name, r.return_date, f.title
 FROM customer c
  JOIN rental r ON c.customer_id= r.customer_id 
 JOIN inventory ON r.inventory_id= inventory.inventory_id 
 JOIN film f ON f.film_id=inventory.film_id 
 WHERE c.first_name= "Helen" AND c.last_name="Harris" AND r.return_date IS NULL;

12. Kokiuose filmuose vaidino aktorė Uma Wood?

SELECT a.actor_id, a.first_name, a.last_name, f.title 
FROM actor a 
JOIN film_actor fa ON a.actor_id=fa.actor_id 
JOIN film f ON f.film_id= fa.film_id 
WHERE a.first_name="Uma" AND a.last_name="Wood";

13. Kiek klientė Amy Lopez sumokėjo už filmo Rocky War nuomą?

SELECT c.first_name, c.last_name,f.title, p.amount
 FROM customer c
  JOIN payment p ON c.customer_id=p.customer_id 
  JOIN rental r ON r.rental_id=p.rental_id 
  JOIN inventory i ON r.inventory_id= i.inventory_id
   JOIN film f ON i.film_id=f.film_id
    WHERE c.first_name="Amy" AND c.last_name="Lopez" AND f.title="Rocky War";



14. Pateikite Graikijoje gyvenančių klientų vardą, pavardę ir miesto pavadinimą.

SELECT c.first_name, c.last_name,ci.city, co.country 
FROM customer c 
JOIN address a ON c.address_id= a.address_id
 JOIN city ci ON a.city_id= ci.city_id 
 JOIN country co ON ci.country_id= co.country_id
  WHERE co.country= "Greece";


15. Kiek iš viso kiekvienoje šalyje yra išleidžiama filmų nuomai?

SELECT co.country, SUM(p.amount) 'viso sumoketa'
 FROM payment p 
 JOIN customer c ON p.customer_id=c.customer_id 
 JOIN address a ON c.address_id= a.address_id 
 JOIN city ci ON a.city_id= ci.city_id 
 JOIN country co ON ci.country_id= co.country_id 
 GROUP BY co.country;
