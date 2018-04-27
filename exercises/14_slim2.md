# Slim REST API - `POST`/`DELETE`/`PATCH`
> Grupp/individuell

* [Postman](https://www.getpostman.com/)
* [**Slim Framework**](https://www.slimframework.com/)
* [**Awesome REST API Resources**](https://github.com/marmelab/awesome-rest)

## Installation

* Följ instruktionerna i repot: **[slim-boilerplate-basic]()**
* Installera **[Postman](https://www.getpostman.com/)**
* Se till så att ni skicka data via Postman korrekt formatterat med `x-www-form-urlencoded`:
![Postman Post](https://i.imgur.com/MqNx9kA.png)

## Övningar

>**Koppla upp dig mot databasen `journal` som du har skapat till den individuella uppgiften**. Det går även bra att använda en kopia av denna databas eller skapa en helt ny database, huvudsaken är att du har något innehåll att arbeta med. 

1. Skicka data med Postman
    1. Skicka in ett nytt inlägg i databasen via en `POST`-route. Skicka med inlägget 
    2. Ta bort ett specifik inlägg via en `DELETE`-route. Skicka med ID i URLen eller via `body`.
    3. Uppdatera ett specifik inlägg via en `PATCH`-route. Skicka med ID i URLen och skicka med innehållet som ska uppdateras med `body`.
2. Återskapa samma funktionalitet fast via `fetch`/`XMLHttpRequest`. All data ska uppdateras eller skapas via `fetch`/`XMLHTTPRequest`.