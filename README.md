# PHP-ja-dokumentointi

## Harjoitustehtävä
- lisätty SQL-tietokantaan yksi kenttä (puhelinnumero) ja PHP-ohjelmaan tarvittavat muutokset ko. tiedon lisäämiseksi
- estetty tyhjän työntekijän lisäys ja asetettu pakollisten tietojen tarkistus
- korjattu työntekijän haku numerolla, jota ei ole tietokannassa (Undefined offset: 0 in...) niin että siitä annetaan ilmoitus käyttäjälle
- näytetään kaikkien työntekijöiden tiedot JSON-muodossa sivulla tkanta

## Prototyypin dokumentointi
- ohjelman tietosisältö ja käyttötapauksen kuvaus lomakkeella 
- käyttöliittymän esittely, moduulikaavio ja ohjelmakoodin kommentit

## Installation
- create folder with the name "projects" into xampp\htdocs folder
- open xampp-control panel
- start apache and mysql
- open Chrome and go to page http://localhost/phpmyadmin
- create the database called katta
- select the database and open sql-tab
- open the file henkilosto.sql in text editor and copy the text to sql-tab and click Go
- now you can start the program from address http://localhost/projects
