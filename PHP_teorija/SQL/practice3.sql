. Parašykitr SQL užklausą, pateikiančią kliento vardą, kliento pavardę, atliktą mokėjimą, mokėjimo
datą tiems mokėjimams, kurių vertė yra 2.99, 4.99, 6.99. Naudokite lenteles „customer“ ir
„payment“.
=


SELECT c.first_name, c.last_name,p.amount, p.payment_date 
FROM customer as c 
INNER JOIN payment as p ON c.customer_id = p.customer_id
 WHERE p.amount IN (2.99,4.99,6.99);

8. Parašykite SQL užklausą, pateikiančią kliento vardą, kliento pavardę, šalį (district) ir adresą.
Naudokite lenteles „customer“ ir „address“.


SELECT c.first_name, c.last_name, a.district,a.address
 FROM customer AS c
  INNER JOIN address as a ON a.address_id = c.address_id;

9. Parašykite SQL užklausą, pateikiančią mokėjimo ID, mokėjimo datą, mokėjimo sumą, kliento vardą ir
pavardę, pardavėjo vardą ir pavardę. Naudokite lenteles „payment“, „customer“, „staff“


SELECT payment.payment_id, payment.payment_date, payment.amount, customer.first_name, customer.last_name, staff.first_name, staff.last_name
 FROM payment 
 INNER JOIN customer ON payment.customer_id = customer.customer_id;

10. Parašykite SQL užklausą, pateikiančią kiekvieno kliento, išleidusio nuomai iš viso nuo 150 iki 200,
vardą ir pavardę. Taip pat pateikite ir pardavėjo vardą bei pavardę, aptarnavusio šiuos klientus.
Rezultatą surušiuokite pagal iš viso išleistą sumą nuomai didėjimo tvarka. Naudokite lenteles
„payment“, „customer“, „staff“.

SELECT customer.customer_id, customer.first_name, customer.last_name, SUM(payment.amount), staff.first_name, staff.last_name 
FROM payment
 INNER JOIN customer ON customer.customer_id = payment.customer_id 
 INNER JOIN staff ON customer.store_id = staff.store_id
  GROUP BY customer.customer_id
   HAVING SUM(payment.amount) BETWEEN 150 AND 200
    ORDER BY SUM(payment.amount) ASC;


11. Parašykite užklausą, kuri pateikia 2006-02-14 išnuomuotų filmų pavadinimus. Naudokite lenteles
„film“, „inventory“, „rental“.

SELECT Date(r.rental_date), f.title 
FROM rental r 
JOIN inventory i ON i.inventory_id=r.inventory_id 
JOIN film f ON i.film_id=f.film_id
 WHERE DATE(r.rental_date) = '2006-02-14';


12. Parašykite užklausą, kuri paskaičiuoja, kiek klientė BARBARA JONES išleido nuomai per 2005 metus.
Naudokite lenteles „customer“ ir „payments“.

SELECT customer.first_name, customer.last_name, SUM(payment.amount)
FROM customer
 INNER JOIN payment ON customer.customer_id= payment.customer_id
 WHERE customer.first_name ='BARBARA' AND customer.last_name='JONES' AND payment.payment_date LIKE '2005%';


13. Parašykite SQL užklausą, pateikiančią klientų, gyvenančių Californijoje, vardus ir pavardes. Naudokite
lenteles „customer“ ir „address“.

SELECT c.first_name, c.last_name, a.district 
FROM customer c 
JOIN address a ON a.address_id=c.address_id 
WHERE a.district="California";

14. Parašykite užklausą, kuri paskaičiuoja, kiek yra klientų, gyvenančių Kalifornijoje.

SELECT a.district, COUNT(c.customer_id)
 FROM customer c 
 JOIN address a ON c.address_id=a.address_id 
 GROUP BY a.district 
 HAVING a.district="California";