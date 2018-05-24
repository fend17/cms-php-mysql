# Presentation

**Dela med er av projektets GitHub till resten av gruppen innan ni börjar**

Presentationen av inlämningsuppgiften kommer att vara i mindre tvärgrupper på **5st**. Det betyder att *1* person från varje grupp kommer att sätta sig i en ny diskussionsgrupp och presentera projektet. Ni behöver inte presentera allting på detaljnivå utan ni ska välja ut några delar/lösningar som ni är nöjda med och några delar som ni skulle behöva arbeta mer med. Ni kan senare efter presenterandet av projektet gå in på mer detaljer om det är nödvändigt. 

När projektet är presenterat får resterande i diskussionsgruppen ge feedback till den som har presenterat gällande både kodstruktur och upplägget av gränssnittet. Ni ska i diskussionsgruppen tillsammans komma fram till minst **3 styrkor** och **3 förbättringsområden** med varje projekt som har presenterats. Dessa 6 punkter (styrkor/förbättringsområden) ska *skrivas ned* och lämnas in till läraren (via Slack) samt delas med hela diskussionsgruppen. 

Det är upp till er som grupp sedan att välja om det är något av de förbättringsområden som togs upp som ni vill åtgärda innan den slutgiltiga inlämningen eller om ni tycker att arbetet är färdigt att lämnas in. Så ni behöver inte agera på/åtgärda det som tar upp under presentationen men det vore vist att göra det om det behövs.

## Punkter

Punkter för diskussion, ni behöver inte ta upp alla dessa punkter utan det är som en hjälp på traven för att kunna diskutera kod.

* Hur pass tydligt är gränssnittet att använda? Om vissa delar uppleves som svåranvända, vad är det som gör dessa svåranvända?
* Vilka resurser (`entries`, `comments`, `users`) går att hantera via gränssnittet och hur är dessa kopplade till APIet (endpoints)? Finns alla endpoints representerade i det grafiska gränssnittet och behöver alla endpoints vara kopplade till det grafiska gränssnittet?
* Har gruppens endpoints tydlig namngivning och använder sig gruppen av REST Best Practice. D.v.s. används `GET` enbart för att hämta från APIet och använda de andra metoderna (t.ex. `POST`) när data ska manipuleras i APIet? Hur skulle dessa endpoints kunna skrivas annorlunda? Finns det några problem med hur gruppens endpoints är skrivna?
* Sköts allting ifrån `index.php` eller finns det flera undersidor? Vad finns det för fördelar och nackdelar med att ha undersidor kontra att arbeta med enbart `index.php`?
* Har koden en tydlig struktur (främst `Controllers` samt `src/public/index.php` för alla endpoints)? Har gruppen en tydlig namngivning av variabler, funktioner, metoder och klasser? Är det vissa stora block med kod som skulle kunna delas upp i mindre funktioner? Är det lätt att följa koden när man läser den? Om inte, vad är det som gör att den blir svårläst?
* Hur pass DRY är koden? Finns det mycket repeterad kod och hur skulle denna repetering av kod kunna minskas? Eller behövs denna repetering?
* Hur pass konsekvent är koden? Skrivs koden likadant i hela applikationen eller finns det områden i koden där kodstrukturen varierar stort. T.ex. kan en sådan sak vara att koden byter mellan `""` och `''` utan någon förklaring.

## Grupper

| Grupp | Gruppmedlemmar |
| ---|---|
| 1 | Cecilia, Maia, Andreas, Alexander HT, Ikram |
| 2 | Isabelle, Leo, Joel, Josefine, Amir     |
| 3 | Pernilla, Beratcan, Lars, Stefan, Alexander AP |
| 4 | Victoria, Stefan, Paulo, Jonas, Rojin |
| 5 | Tommy, Henrik, Angel, Mattias, Ahmet |
| 6 | Ellinor, Elvis, Rooheed, Marcus, Brandon |

## Inlämning

* När ni är klara så lämnar ni in de (minst) 6 punkter ni har tagit fram till både läraren och resten av gruppen.
* När ni har lämnat in så är ni klara för dagen. Om det är något kritiskt som måste åtgärdas i projektet så har ni resten av dagen att åtgärda detta.
* Lämna in projektet på Studentportalen när ni är klara. Som `.zip`-fil och rätt namngivet.
