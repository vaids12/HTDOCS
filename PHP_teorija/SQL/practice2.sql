1.  Parašykite SQL užklausą, kuri ištraukia filmo pavadinimą, nuomos kainą, (pavėluoto) grąžinimo kainą,
o bendra nuomos kaina ir (pavėluoto) grąžinimo kaina pateikiama naujame stulpelyje “total”.
Naudokite lentelę „film“. 

SELECT title, rental_rate, replacement_cost, (rental_rate+replacement_cost) AS total FROM film;

2. Parašykite SQL užklausą, kuri pateiktų filmų sąrašą ir paskaičiuotų, kiek vieno filmo nuoma kainuoja
per dieną. Rezultatą pateikite naujame stulpelyje „cost per day“. Naudokite lentelę „film“. 

SELECT title, (rental_rate/ rental_duration) AS cost_per_day FROM film;


3. Parašykite SQL užklausą, kuri paskaičiuoja bendrą visų mokėjimų sumą. Rezultatą pateikite
stulpelyje „Iš viso“. Naudokite lentelę „payment“. 

SELECT SUM(amount) AS Is_viso FROM payment;


4. Parašykite SQL užklausą, kuri paskaičiuoja vidutinę visų mokėjimų sumą. Rezultatą pateikite
stulpelyje „Vidutinė suma“. Naudokite lentelę „payment“. 

SELECT AVG(amount) AS Vidutine_suma FROM payment;


5. Parašykite SQL užklausą, kuri paskaičiuotų, kiek yra darbuotojų. Rezultatą pateikite stulpelyje
“Darbuotojų skaičius”. Naudokite lentelę „payment“. 

SELECT COUNT(DISTINCT staff_id) AS darbuotoju_skaicius FROM payment;


6. Parašykite SQL užklausą, kuri paskaičiuoja, kiek yra atlikta mokėjimų. Rezultatą pateikite stulpelyje
„Iš viso mokėjmų“. Paskaičiuoti galima keliais būdais. Naudokite lentelę „payment“. 

SELECT COUNT(payment_id) AS is_viso_mokejimu FROM payment;


7. Parašykite SQL užklausą, kuri ištraukia didžiausią atliktą įmoką. Rezultatą pateikite stulpelyje
„Didžiausias mokėjimas”. Naudokite lentelę „payment“. 

SELECT MAX(amount) AS Didziausias_mokejimas FROM payment;


8. Parašykite SQL užklausą, kuri ištraukia mažiausią atliktą įmoką. Rezultatą pateikite stulpelyje
„Mažiausias mokėjimas”. Naudokite lentelę „payment“. 

SELECT MIN(amount) AS Maziausias_mokejimas FROM payment;

9. Parašykite SQL užklausą, kuri pateikia kiekvieno kliento didžiausią mokėjimą mažėjimo tvarka.
Naudokite lentelę „payment“.

SELECT customer_id, max(amount) FROM payment GROUP BY customer_id ORDER BY MAX(amount) DESC;

10. Parašykite SQL užklausą, kuri pateikia kiekvieno kliento didžiausią per dieną atliktą mokėjimą.
Naudokite lentelę „payment“. 

SELECT customer_id, MAX(amount), payment_date FROM payment GROUP BY payment_date , customer_id;

11. Parašykite SQL užklausą, kuri pateikia mažiausią kiekvieno kliento mokėjimą, atliktą 2005-07-08.
Naudokite lentelę „payment“. 

SELECT customer_id, MIN(amount), payment_date FROM payment WHERE payment_date LIKE '2005-07-08%' GROUP by customer_id;

12. Parašykite SQL užklausą, kuri pateiktų visus klientus, atlikusius mokėjimą 2005-07-08. Naudokite
lentelę „payment“. 

SELECT customer_id, payment_date FROM payment WHERE payment_date LIKE '2005-07-08%' GROUP BY customer_id,DATE(payment_date);

13. Parašykite SQL užklausą, pateikiančią klientų sąrašą ir didžiausią kiekvieno kliento mokėjimą, bet tik
tų klientų, kurių didžiausias atliktas mokėjimas didesnis negu 6.99, rušiuojant pagal didžiausią
mokėjimą didėjimo tvarka. Naudokite lentelę „payment“. 

SELECT customer_id, MAX(amount) FROM payment GROUP BY customer_id HAVING MAX(amount)>6.99 ORDER BY MAX(amount) ASC;


14. Parašykite SQL užklausą, pateikiančią klientų sąrašą su mokėjimo data ir didžiausiu kiekvieno
kliento mokėjimu per dieną, bet tik tų klientų, kurių atliktas didžiausias mokėjimas per dieną yra
tarp 3.99 ir 4.99. Naudokite lentelę „payment“. 

SELECT customer_id,payment_date, MAX(amount) FROM payment GROUP BY customer_id, payment_date HAVING MAX(amount) BETWEEN 3.99 and 4.99;