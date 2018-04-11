# Individuell - Personlig Journal
> Skapa en personlig journal med PHP & MySQL
> 
> **Individuell**
> 
> Betyg: **IG/G**

## Uppgift

Du ska skapa en personlig journal (tänk dagbok) där du kan spara olika inlägg. Alla inlägg ska lagras i en MySQL-databas och alla inlägg ska vara kopplade till en användare. Journalen ska vara en enklare sida i PHP som har ett inloggningsformulär för att verifiera vem användaren är. När man har loggat in ska man sedan kunna se sina tidigare gjorda inlägg samt kunna lägga till ett nytt inlägg i journalen. Du får själv välja om du ska sköta detta helt i PHP eller om du ska använda dig utav JavaScript + AJAX.

## Databasstruktur

Det schema där dina tabeller ska ligga i ska heta: `journal`. Om du inte har döpt schemat till just detta kommer du få komplettering.

Vidare ska dina tabeller ha följande struktur och namn, om dina tabeller inte följer denna struktur får du komplettering oavsett om din kod fungerar eller inte:

**`entries`**

| entryID      | title        | content       | createdAt |  userID       |
| -------------| -------------| --------------| ----------|---------------|
| INT (AI)(PK) | VARCHAR(100) | VARCHAR(1000) | DATETIME  | INT           |

**`users`**

| userID       | username     | password     |
| -------------| -------------| -------------|
| INT (AI)(PK) | VARCHAR(50)  | VARCHAR(200) |

## Struktur av mappar och filer

Era filer och era mappar **måste** heta enligt detta mönster vid inlämning annars får du automatiskt en försenad inlämning och du får lämna in en komplettering som kommer bli rättad vid ett senare tillfälle. Du kan ha fler filer och döpa själva filerna inuti `partials` annorlunda men `README.md`, `index.php` och mapparna `css`/`scss` och `partials` får inte döpas om. Vidare måste själva mappen som dessa filer ligger i också heta enligt mönstret nedan.

* 📁 `förnamn_efternamn_journal`
    * 📁 `classes`
        * `Entry.php` (enbart exempel på klass) 
    * 📁 `partials`
        * 📄 `post_entry.php` 
        * 📄 `get_all_entries.php` 
        * 📄 `login.php`
    * 📁 `css`
    * (📁`scss`) (om `scss` används)
    * 📄 `README.md`
    * 📄 `index.php`

* Er kod ska finnas på __GitHub__ och ha en `README` med följande information:
    - titel på projektet 
    - ditt namn
    - länk till själva repositoriet

## Krav

* I inloggat läge ska man kunna se alla sina tidigare inlägg och det ska finnas ett formulär där man kan skapa ett nytt inlägg med en titel och ett innehåll. När man lägger till det nya inlägget via formuläret så laddas sidan (eller läggs till med JavaScript) om och i listan av inlägg finns det nya inlägget.
* I inloggat läge ska man även kunna ta bort ett tidigare inlägg.
* I inloggat läge ska man kunna redigera ett tillagt inlägg.
* I utloggat läge sidan ha ett inloggningsformulär där användaren kollas mot databasen om användaren finns eller inte. Om användaren existerar i databasen så ska man komma till det inloggade läget som beskrevs tidigare.
* Om man stänger ner sidan och öppnar den igen så ska man fortsätta vara inloggad och inte behöva logga in igen. Det ska även finnas en utloggningsknapp så man kan manuellt logga ut. Man ska dock inte kunna vara inloggad för evigt utan man ska bli automatiskt utloggad efter en viss tid.
* Lösenordet för användaren får inte lagras i klartext utan måste hashas innan det läggs in i databasen, lösenordet måste senare verifieras mot denna hash, detta görs med PHPs inbyggda funktioner för detta: använd `PASSWORD_BCRYPT` när du hashar dina lösenord.
* Sidan ska vara responsiv, tydligt semantisk strukturerad och användarvänlig.
* Koden ska vara korrekt indenterad, väl namngiven och kommenterad vid behov.

## Inlämning

* Lämnas in senast: **26/5 23.59**
* Lämnas in via **Studentportalen** under **Individuell 1 - Journal**
* Lämnas in som:
```
förnamn_efternamn_journal.zip
```

**Du ska zippa HELA mappen och inte gå in i mappen och zippa ihop filerna som ligger i mappen. Utan högerklicka på själva mappen och välj "Komprimera" eller liknande alternativ**