-- SELECT customerName as Customer , country as Country
-- FROM customers
-- pasirenkam column eilutes pavadinima, (per kableli galim ne viena stulpeli pasirinkti ir per AS galim savo pavadinima pasirasyti) is From lenteles pavadinimo.
--  jei reikia visos lenteles pasirasom * pvz select *

-- SELECT customerName Customer,city City 
-- FROM customers
--  WHERE country = "USA"; kur atrinkti stringa USA
-- WHERE country <> "USA"; kur nelygu usa
-- WHERE country IN ("USA","FRANCE"); kur atrinkti parasytus skliaustuose IN daugiau parinkti

-- FROM customers WHERE country IN ("USA","FRANCE") 
-- AND creditLimit BETWEEN 0 AND 100000; ir dar isrinkti pagal kredito limita

-- WHERE country IN ("USA","FRANCE") 
-- OR creditLimit BETWEEN 0 AND 100000; salis arba kredito limitas iki 100000

-- WHERE NOT country IN ("USA","FRANCE")  cia kaip neieskoti nurodytu  NOT - nera

-- order by creditLimit, city ASC; rusiuoti ASC didejimo DESC mazejimo tvarka


-- WHERE orderDate BETWEEN '2003-01-01' AND '2003-01-31';

-- WHERE orderDate <'2003-01-01'; maziau 

-- GROUP BY surusiuoja pagal atstovus po viena atstova ( su papildomom funkcijom, pvz sugruopuoti tiekejus)

-- WHERE productVendor LIKE "au%"  iesko su pradzia au
-- WHERE productVendor LIKE "%au%" iesko  viduryje au
-- WHERE productVendor LIKE "%au" pabaiga  au
-- WHERE productVendor LIKE "%on_" bet kas priekyje tada on ir vienas kazkoks simbolis
--  WHERE productVendor LIKE "on" tai butu kaip lygu on

-- WHERE productVendor LIKE "%on_"
-- AND productVendor LIKE "on"

SELECT SUM(quantityInStock)
 FROM products 
 WHERE productLine="Motorcycles"; -kiek modeliuku kuriu kodas motociklai SUM sumuoja

SELECT SUM(quantityInStock) as totalMotorcycles - padarom kad matytus ka skaiciuoji

SELECT productLine, SUM(quantityInStock) as Total
 FROM products
  GROUP BY productLine 
  ORDER BY Total DESC;

SELECT AVG(buyPrice) AS Average FROM products; -paskaiciuoja vidurki

SELECT MAX(MSRP) AS MaxPrice FROM products WHERE productScale LIKE "%12"; -atranda didziausia MSRP is productScale %12
SELECT MIN(MSRP) AS MaxPrice FROM products WHERE productScale LIKE "%12"; -atranda maziausia
min max count su bet kuriais duomenu tipais

SELECT COUNT(buyPrice) AS count FROM products;-suskaiciuoja kiek irasu,su nuliais, suskaiciuoti skaiciu 

SELECT COUNT( DISTINCT productLine) AS count FROM products;  - cia  distinct paskaiciuoja unikalius ir parodo skaiciu.kai reikia tik skaiciaus.

SELECT productName,buyPrice, MSRP, (MSRP-buyPrice) AS Profit FROM products ORDER BY Profit DESC; paskaiciuojam  pelna

SELECT (COUNT(productLine)*AVG(MSRP-buyPrice)) as Profit FROM products WHERE productLine= "Motorcycles"; paskaiciuoja viena motociklo vidutine kaina

SELECT productLine, SUM(quantityInStock) as Total FROM products GROUP BY productLine HAVING SUM(quantityInStock)<50000; - having kaip where  tik atrenka pagal salyga having po grupavimo WHERE pries grupavimus

jungimas INNER JOIN


SELECT customers.customerName, orders.orderNumber, orders.status
FROM orders 
JOIN customers ON customers.customerNumber = orders.customerNumber
ORDER BY orders.status ASC;       - inner join

Parašykite SQL užklausą, kuri pateikia sąrašą su pardavėjo vardu ir pavarde, kliento vardu ir pavarde, ir parduotuvės ID, kuriai priklauso ir pardavėjas, ir klientas (pardavėjas dirba, o klientas ateina išsinuomoti filmo). Naudokite lenteles staff ir customer.

SELECT staff.first_name, staff.last_name, customer.first_name, customer.last_name, staff.store_id 
FROM staff 
INNER JOIN customer ON customer.store_id = staff.store_id;

Parašykite SQL užklausą, sudarančią sąrašą su kliento vardu, kliento pavarde, atliktu mokėjimu ir mokėjimo kodu, tiems mokėjimams, kurių vertė yra tarp 4.99 ir 6.99. Naudokite lenteles customer ir payment.

SELECT c.first_name, c.last_name, p.amount, p.payment_id 
FROM customer AS c 
INNER JOIN payment AS p ON p.customer_id = c.customer_id 
WHERE p.amount BETWEEN 4.99 AND 6.99;

Parašykite SQL užklausą, parodančią, kokie pardavėjai kokius klientus aptarnauja. Naudokite lenteles „customer“ ir „ staff“.

SELECT c.first_name 'Kliento vardas', c.last_name 'Kliento pavardė', s.first_name 'Pardavėjo vardas', s.last_name 'Pardavėjo pavardė'
 FROM customer as c 
 INNER JOIN staff as s ON c.store_id = s.store_id;

===================INSERT====================

 INSERT INTO actor (first_name, last_name)
  VALUES ("PETRAS","PETRAITIS");

==============UPDATE==================
 
UPDATE actor
SET  last_name="ANTANAUSKAS"
WHERE actor_id=203;

==============DELETE===============


DELETE FROM actor 
WHERE actor_id=203;
 