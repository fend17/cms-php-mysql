# Instruktioner för installation

* [PHP](#php)
   - [Lätta sättet](#lätta-sättet)
      - [Mac](#mac)
      - [Windows](#windows)
  - [Svåra sättet](#svåra-sättet)
     - [Mac](#mac-1)
      - [Windows](#windows-1)
* [MySQL - kommer snart]()

## `PHP`

### Lätta sättet

Det finns en uppsjö av **All-in-one**-installers som installerar allt nödvändigt som du behöver i denna kurs. Dessa installerare tar bort mycket setup men kan i vissa fall begränsa eller gör det svårare
att senare konfigurera installationen. Vet du om att du är en sådan som vill tweaka allt du installerar och köra via terminalen så är det här inget för dig. Vill du bara ha den snabbaste lösningen som fungerar
så är det här för dig. 

#### Mac

1. Installera [MAMP](https://www.mamp.info/en/)
2. Se till så att du kan starta MAMP och programmet går igång, i högra hörnet på programmet borde `Apache Server` samt `MySQL Server` vara ikryssade.
3. Tryck på **My Website** för att komma till din hemsida (som nu är tom men du borde få upp någonting iaf)

#### Windows

1. Installera [MAMP](https://www.mamp.info/en/) (MAMP finns även till Windows fast det är utvecklat från början till Mac)
2. Se till så att du kan starta MAMP och programmet går igång, i högra hörnet på programmet borde `Apache Server` samt `MySQL Server` vara ikryssade.
3. Tryck på **My Website** för att komma till din hemsida (som nu är tom men du borde få upp någonting iaf)

**Observera att det finns massa andra program som gör samma sak: [XAMPP](https://www.apachefriends.org/index.html), [WAMP](http://www.wampserver.com/en/) och många fler. Sök runt på google så hittar du lite olika, det spelar ingen roll vilken du tar, alla gör samma sak, det är bara användarvänligheten som brukar skilja**

### Svåra sättet

#### Mac

1. Installera [`homebrew`](https://brew.sh/)
2. Installera PHP via Homebrew `brew install php71`
3. Om du har gjort rätt så ska du nu kunna gå till valfri mapp och skriva `php -S localhost:300` för att starta en server i mappen du står i.

**Observera att detta installerar enbart `PHP` och inte `MySQL` som senare behövs i kursen. Om du kör denna väg så måste du även separat installera `MySQL` och ett gränssnitt för `MySQL`. Det går även att köra `MySQL`-databasen via MAMP och sedan köra PHP via terminalen. De går att kombinera**

#### Windows

**Du kan behöva starta om terminalen efter varje steg för att låta terminalen upptäcka ändringarna**

1. Installera [**Chocolatey**](https://chocolatey.org/) via en valfri terminal i Windows. Kör den som upphöjd, **Run as administrator**
2. Om Chocolatey är korrekt installerat så borde du nu kunna installera PHP via det: `choco install php -y`.
3. Om php är korrekt installerat så borde du nu kunna köra igång en lokal server i valfri mapp via terminalen med `php -S localhost:3000`

**Observera att detta installerar enbart `PHP` och inte `MySQL` som senare behövs i kursen. Om du kör denna väg så måste du även separat installera `MySQL` och ett gränssnitt för `MySQL`. Det går även att köra `MySQL`-databasen via MAMP och sedan köra PHP via terminalen. De går att kombinera**
