# Instruktioner för installation

* [PHP](#php)
   - [Lätta sättet](#lätta-sättet)
      - [Mac](#mac)
      - [Windows](#windows)
  - [Svåra sättet](#svåra-sättet)
     - [Mac](#mac-1)
      - [Windows](#windows-1)
* [Composer](#composer)
* [PHP-cs-fixer](#php-cs-fixer) (Autoformattera PHP-kod)
* [Xdebug](#xdebug) (Debugga via editorn)
* [MySQL](#mysql) 
    - [Installation via terminal](#installation-via-terminal)
        - [Mac](#mac-2)
        - [Windows](#windows-2) 

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

## Composer

Besök länken och följ instruktionerna under **Getting Started**. I instruktionerna står det att du ska lägga till `composer` i `PATH`, om du inte vet hur du lägger till något i `PATH` så finns en guide **[HÄR](https://gist.github.com/jesperorb/836cb398e4bb8dc149902d68d3711295)**

* [Composer](https://getcomposer.org/)

## PHP-cs-fixer

**PHP-cs-fixer** är ett verktyg som autoformattera PHP-kod enligt rådande PSR-standarder. Det är ett verktyg som måste installeras på datorn, installationen är dock rätt smärtfri. Vidare finns det verktyg till samtliga editors som kan använda sig utav detta verktyg. Så det kan både användas från terminalen samt köras via editor. I länken nedan finns installionsinstruktioner för detta verktyg. Den sista länken är en lista på verktyg till olika editorer som implementerar detta verktyg:

* [PHP-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
* [Helpers for editors](https://github.com/FriendsOfPHP/PHP-CS-Fixer#helpers)


## XDEBUG

För att lättare debugga PHP så finns det ett tillägg som heter `Xdebug` som gör att man kan debugga PHP via sin editor. Man måste dock installera det själv och det är seg process ibland. Det går att debugga i vilken editor du än använder men alla kräver XDebug.

1. Ta reda på vad du har för `phpinfo` och kopiera den informationen. Med MAMP kan du gå till tabben `phpinfo` och kopiera hela sidan, markera hela sidan och kopiera. I terminalen kan du köra `php -i` och kopiera den output som genereras.
2. Gå till [https://xdebug.org/wizard.php](https://xdebug.org/wizard.php) och följ instruktionerna nogrannt.
3. Om du har gjort klart alla steg kan du dubbelkolla att det fungerade genom att klistra in din nya `phpinfo` i denna wizard igen, om det står `Xdebug: Yes` längst upp så är det installerat. **Observera att det kan vara problem på mac med att kopiera Xdebug till den mappen den ska ligga i. Du kan lägga `xdebug.so` i en annan mapp och länka till den mappen. Läs detta svar och testa den lösningen:** https://stackoverflow.com/a/46623845/5836872

### XDebug + VSCode

* [PHP Debug adapter](https://github.com/felixfbecker/vscode-php-debug)

### Xdebug + Atom

* https://atom.io/packages/php-debug

### XDebug + Sublime

* https://github.com/martomo/SublimeTextXdebug

### XDebug + Brackets

* https://github.com/spocke/php-debugger

## MySQL

**TL;DR: Använd MAMP eftersom databasen då är förkonfigurerad och gränssnittet `phpMyAdmin` följer med så du kan enkelt interagera med databasen.**

Lättast är att använda [MAMP](https://www.mamp.info/en/) oavsett om du har kör PHP via terminalen eller via MAMP. Så det kommer gå att skapa en uppkoppling mellan databas och PHP oavsett om du kör PHP via terminalen eller via MAMP. Detta är främst p.g.a. att MAMP kommer med ett inbyggt gränssnitt för att hantera databasen: **phpMyAdmin**. Om du installerar `MySQL` via terminalen så måste du fortfarande installera ett gränssnitt för att enkelt interagera med själva databasen. **phpMyAdmin** följer alltså **inte** med vid installation av `MySQL` utan det är bara ett extern verktyg för att hantera databasen som följer med vid installation av MAMP.

### Installation via terminal 

#### MacOS

Om du väljer att installera `MySQL` utan MAMP så kan du enbart interagera med databasen genom terminalen. Jag brukar förespråka att använda terminalen i stor utsträckning **men** jag använder alltid ett separat gränssnitt för att hantera databaser eftersom det underlättar enormt. Databashanteringen är meckigt och det är bättre om man är ny att använda ett gränssnitt. Bästa gränssnittet för att hantera databaser för Mac är **[Sequel Pro](https://www.sequelpro.com/)** eller **[DataGrip](https://www.jetbrains.com/datagrip/)** (gratis för studenter). Observera att det finns massor med olika gränssnitt som kan koppla upp sig till en databas, det brukar vara användarvänligheten som skiljer. Du kan även använda dessa verktyg för att interagera med databasen som är installerad av MAMP. Du kan även ha MySQL installerad både via MAMP och via homebrew samtidigt, det kan dock bli problem om du ställer in att båda databaserna ska använda samma port.

* [GIST: Install MySQL on Sierra using Homebrew](https://gist.github.com/nrollr/3f57fc15ded7dddddcc4e82fe137b58e)
* [GIST: Install MySQL on High Sierra using Homebrew](https://gist.github.com/spencercharest/fc1748808af1a7aa157e0eebb64926f6)
* [GIST: Install MySQL on El Capitan](https://gist.github.com/nrollr/a8d156206fa1e53c6cd6)
* Installera **[Sequel Pro](https://www.sequelpro.com/)** eller **[DataGrip](https://www.jetbrains.com/datagrip/)** eller liknande verktyg.

#### Windows

Om du väljer att installera `MySQL` utan MAMP så kan du enbart interagera med databasen genom terminalen. Jag brukar förespråka att använda terminalen i stor utsträckning **men** jag använder alltid ett separat gränssnitt för att hantera databaser eftersom det underlättar enormt. Databashanteringen är meckigt och det är bättre om man är ny att använda ett gränssnitt. Bästa gränssnittet för Windows är **[DataGrip](https://www.jetbrains.com/datagrip/)** (gratis för studenter). Observera att det finns massor med olika gränssnitt som kan koppla upp sig till en databas, det brukar vara användarvänligheten som skiljer. Du kan även använda dessa verktyg för att interagera med databasen som är installerad av MAMP. Du kan även ha MySQL installerad både via MAMP och via chocolatey samtidigt, det kan dock bli problem om du ställer in att båda databaserna ska använda samma port.

* Installera [`Chocolatey`](https://chocolatey.org/install)
* Installera [`MySQL`](https://chocolatey.org/packages/mysql) via `Chocolatey`
* Installera [DataGrip](https://www.jetbrains.com/datagrip/) eller liknande verktyg för att interagera med databasen.

