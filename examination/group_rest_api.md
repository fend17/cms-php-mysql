# Gruppuppgift - API
> Skapa ett API med Slim & PDO
> 
> **Valfria grupper av 3 personer**
> 
> Betyg: **IG/G/VG**


## Uppgift

Ni som grupp ska skapa ett API med hjälp av PHP-ramverket [Slim](https://www.slimframework.com/) och databasen MySQL. Till detta API ska ni bygga ett enklare grafiskt gränssnitt. Detta blir som ert eget CMS.

## Struktur av mappar och filer

* Ert projekt ska ha samma struktur som [slim-boilerplate-extended](https://github.com/fend17/slim-boilerplate-extended). 
* Varje ny `Controller` som du du skapar ska ligga i mappen `src/App/Controllers`. Filen måste ha samma namn som klassen. Varje ny klass ska ha `namespace App\Controllers`.
* Er kod ska finnas på __GitHub__ och ha en `README` med följande information:
    - gruppens namn som ni bestämmer själva
    - gruppens medlemmars namn
    - länk till själva GitHub-repositoriet.

## Struktur av databasen

* `createdBy` ska vara ID på användaren som har skapat inlägget eller kommentaren.
* `entryID` på `comments` ska vara inlägget som kommentaren är kopplad till.

**`entries`**

| entryID      | title        | content       | createdBy  |   createdAt    |
| -------------| -------------| --------------| -----------|----------------|
| INT (AI)(PK) | VARCHAR(100) | VARCHAR(1000) |  INT       |   DATETIME     |

**`users`**

| userID       | username     | password     | createdAt  |
| -------------| -------------| -------------|------------|
| INT (AI)(PK) | VARCHAR(50)  | VARCHAR(200) | DATETIME   |

**`comments`**

| commentID    | entryID  | content      | createdBy      | createdAt  |
| -------------| ---------| -------------| ---------------| ----------|
| INT (AI)(PK) | INT      | VARCHAR(250) | INT            | DATETIME   |

## Krav

* Man ska kunna hämta ut de 20 senaste inläggen via `GET /api/entries`.
* Man ska kunna skapa ett inlägg via `POST /api/entries`.
* Man ska kunna hämta ut ett enskilt specifikt inlägg via `GET /api/entries/{ID}`.
* Man ska kunna ta bort ett enskilt specifikt inlägg via `DELETE /api/entries/{ID}`.
* Man ska kunna uppdatera ett enskilt specifikt inlägg via `PATCH /api/entries/{ID}`.
* Man ska kunna hämta alla inlägg som en användare har skrivit via en endpoint.
* Man ska kunna hämta de 20 senaste kommentarerna via `GET /api/comments`.
* Man ska kunna skapa en kommentar via `POST /api/comments`
* Man ska kunna hämta ut en enskild specifik kommentar via `GET /api/comments/{ID}`
* Man ska kunna ta bort en enskild specifik kommentar via `DELETE /api/comments/{ID}`
* Man ska kunna hämta alla kommentarer kopplat till ett inlägg via en endpoint.
* Man ska kunna hämta alla användare via `GET /api/users`.
* Man ska kunna skapa en användare via `POST /register`.
* Man ska kunna söka efter ett viss inlägg via vad dess titel är.
* På varje endpoint där man kan få flera resurser tillbaka (t.ex. `GET /api/entries`) så ska man kunna ange hur många resurser man ska få tillbaka.
* Det ska finnas ett enklare gränssnitt i HTML,CSS och JavaScript där man kan hantera att alla resurser. Formulär för att lägga till en ny resurs, knappar för att ta bort en viss resurs och formulär för att uppdatera en viss resurs. Detta betyder att man ska kunna manipulera alla resurser som finns i APIet via det grafiska gränssnittet.
* Koden är korrekt indenterad, kommenterad vid behov och väl namngiven.


## Krav för VG

* Koden är välstrukturerad och håller hög nivå både i gränssnittet och i det bakomliggande APIet. Det ska inte ligga kvar något "utvecklingskod" och produkten ska kännas färdig. Minimal upprepning av kod och det är tydligt vad varje del i applikationen gör. Gränssnittet är användarvänligt och lättförstått.
* APIet kan även hantera att man kan gilla ett inlägg.
* Rollbaserad autentisering. Man kan ha två olika roller som en användare: `admin`/`user` och dessa har olika rättigheter. Ni begränsar användaren på något sätt så att denna inte kan t.ex. ta bort vad som helst medan en `admin` kan göra vad som helst med APIt.

## Inlämning

* Lämnas in senast: **24/5 23.59**
* Lämnas in via **Studentportalen**
* Lämnas in som:
```
gruppnamn_api.zip
```

**Ni ska zippa HELA mappen och inte gå in i mappen och zippa ihop filerna som ligger i mappen. Utan högerklicka på själva mappen och välj "Komprimera" eller liknande alternativ**
