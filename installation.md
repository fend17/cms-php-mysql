# Instruktioner för installation

* [PHP](#php)
   - [Lätta sättet](#lätta-sättet)
      - [Mac](#mac)
      - [Windows](#windows)
  - [Svåra sättet](#svåra-sättet)
     - [Mac](#mac-1)
      - [Windows](#windows-1)
* [MySQL - kommer snart]()
* [Xdebug](#xdebug)

## `PHP`

### Lätta sättet

Det finns en uppsjö av **All-in-one**-installers som installerar allt nödvändigt som du behöver i denna kurs. Dessa installerare tar bort mycket setup men kan i vissa fall begränsa eller gör det svårare
att senare konfigurera installationen. Vet du om att du är en sådan som vill tweaka allt du installerar och köra via terminalen så är det här inget för dig. Vill du bara ha den snabbaste lösningen som fungerar
så är det här för dig. 

#### Mac

1. Installera [MAMP](https://www.mamp.info/en/)
2. Se till så att du kan starta MAMP och programmet går igång, i högra hörnet på programmet borde `Apache Server` samt `MySQL Server` vara ikryssade.
3. Tryck på **My Website** för att komma till din hemsida (som nu är tom men du borde få upp någonting iaf)
4. MAMP serverar de filer som ligger i en specifik mapp. På Mac är denna mapp: `/Applications/MAMP/htdocs`. Om du lägger in en `index.html` eller någon av din tidigare kod i denna mapp så kan du kolla så att det fungerar. Allting som ligger i den mappen går att komma åt via `localhost`. Du kan ändra om du vill att denna mapp ska ligga på något annat ställe genom att gå till **Preferences>Web Server** och sen ändra den mapp som står där.

#### Windows

1. Installera [MAMP](https://www.mamp.info/en/) (MAMP finns även till Windows fast det är utvecklat från början till Mac)
2. Se till så att du kan starta MAMP och programmet går igång, i högra hörnet på programmet borde `Apache Server` samt `MySQL Server` vara ikryssade.
3. Tryck på **My Website** för att komma till din hemsida (som nu är tom men du borde få upp någonting iaf)
4. MAMP serverar de filer som ligger i en specifik mapp. På Mac är denna mapp: `C:\MAMP\htdocs`. Om du lägger in en `index.html` eller någon av din tidigare kod i denna mapp så kan du kolla så att det fungerar. Allting som ligger i den mappen går att komma åt via `localhost`. Du kan ändra om du vill att denna mapp ska ligga på något annat ställe genom att gå till **Preferences>Web Server** och sen ändra den mapp som står där.

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


## XDEBUG

För att lättare debugga PHP så finns det ett tillägg som heter `Xdebug` som gör att man kan debugga PHP via sin editor. Man måste dock installera det själv och det är seg process ibland.

1. Ta reda på vad du har för `phpinfo` och kopiera den informationen. Med MAMP kan du gå till tabben `phpinfo` och kopiera hela sidan, markera hela sidan och kopiera. I terminalen kan du köra `php -i` och kopiera den output som genereras.
2. Gå till [https://xdebug.org/wizard.php](https://xdebug.org/wizard.php) och följ instruktionerna nogrannt.
3. Om du har gjort klart alla steg kan du dubbelkolla att det fungerade genom att klistra in din nya `phpinfo` i denna wizard igen, om det står `Xdebug: Yes` längst upp så är det installerat. **Observera att det kan vara problem på mac med att kopiera Xdebug till den mappen den ska ligga i. Du kan lägga `xdebug.so` i en annan mapp och länka till den mappen. Läs detta svar och testa den lösningen: https://stackoverflow.com/a/46623845/5836872**

### XDebug + VSCode

1. För att använda XDebug med Visual Studio Code så kan du följa instruktionerna i tillägget: [PHP Debug adapter](https://github.com/felixfbecker/vscode-php-debug)
