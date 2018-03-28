# Extra - loopövningar

# Busskortet

Du ska köpa ett busskort. Det är ett kort som du laddar med pengar, därefter kan du åka på kortet tills pengarna tagit slut. Du vet att du ska åka för **K** kronor, där **K** är mindre än 10000. Att ladda kortet tar sin tid eftersom du endast kan ladda kortet med 500, 200 eller 100 kr i taget. Du vill utföra så några transaktioner som möjligt, men inte tanka på mer pengar än nödvändigt.

Om du ska åka för 800 kronor ska du alltså först ladda med 500, sen med 200, därefter med 100 kr. Om du däremot ska åka för 850 kronor ska du först ladda med 500 och därefter ladda med 200 två gånger. Visserligen går 50 kronor till spillo, men det är ändå det bästa alternativet.

Skriv en `if/else/else if`-sats som beräknar det minsta antalet transaktioner du behöver göra för att åka buss med de pengar du har, testa och kolla med 4 olika fall så att det blir rätt:

```
Körningsexempel 1:

Åka för? 850 

Antal transaktioner: 3

Körningsexempel 2: 

Åka för? 1800 

Antal transaktioner: 5
```



## Fårepidemi

Det här funkar inte! Även om vi halverar antalet får är
det fortfarande alldeles för många. Implementera följande 
conditions innan vi går mot en epedemi!

1. Om månaden är en multipel av 4, hitta 75% av populationen.
Logga ut antalet i formatet som visas nedanför. Ta sedan bort
detta antal från totala antalet får.

2. Annars, om populationen är över 10000, hitta hälften av populationen.
Logga ut antalet i formatet som visas nedanför. Ta sedan bort 
detta antal från totala antalet får.

Använd följande format för att logga ut information:
Removing `<number>` sheep from the population.

Antalet får ska fortfarande alltid multipliceras med 4,
du behöver alltså inte editera någon redan existerande kod sedan tidigare


KORREKT OUTPUT:

There will be 16 sheep after 1 month(s)!

There will be 64 sheep after 2 month(s)!

There will be 256 sheep after 3 month(s)!

Removing 192 sheep from the population.

There will be 256 sheep after 4 month(s)!

There will be 1024 sheep after 5 month(s)!

There will be 4096 sheep after 6 month(s)!

There will be 16384 sheep after 7 month(s)!

Removing 12288 sheep from the population.

There will be 16384 sheep after 8 month(s)!

Removing 8192 sheep from the population.

There will be 32768 sheep after 9 month(s)!

Removing 16384 sheep from the population.

There will be 65536 sheep after 10 month(s)!

Removing 32768 sheep from the population.

There will be 131072 sheep after 11 month(s)!

Removing 98304 sheep from the population.

There will be 131072 sheep after 12 month(s)!


## FOR FOR - Multiplikation

Använd nested for loops, alltså en `for`-loop i en `for`-loop för att lösa denna uppgift.

Din kod ska skriva ut multiplikationstabellen upp till 10 enligt följande struktur:

```
1 2 3 4 5 6 7 8 9 10
2 4 6 8 10 12 14 16 20
3 6 9 12 15 18 21 24 27 30
```

<summary></summary>

### Lösningsförslag

#### Busskortet

```php
$cash = 0;
$count = 0;
$$diff = 0;
// We need more cash than it costs!
while($cash < $cost){
    /* Get the difference between what you have and the cost */
    $diff = $cost - $cash;
    /* If you have less than 100, you can't but anything */
    if ($diff <= 100 ) {
        /* This means we add to indicate that we have spent the money */
        $cash += 100;
        /* Else, check if the difference is between 100 and <= than 200
         * also check if difference is above 200 and <= 400 for edge
         * cases
         * */
        } else if (($diff > 100 && $diff <= 200) || ($diff > 200 && $diff <= 400)) {
            $cash += 200;
        } else {
            /* If none of the conditions are true, we have more monay 
             * than we can handle, buy the big ticket
             */
            $cash  +=500;
        }
        /* Always increase the counter when done == number of transactions */
        count++;
        }
    };
echo $count;
```


#### Fårepidemi

```php
$numberOfSheep = 4;
$monthNumber = 1;
$monthsToPrint = 12;

for ($monthNumber; $monthNumber <= $monthsToPrint; $monthNumber++){

    /* We need to add some extra if-statements to check what happens every fourth month. We can do this by using modulo. If it returns 0, it's dividable.
    */
    if ($monthNumber % 4 == 0){
        /* Create a temporary variable to store the number of sheeps to remove. 0.75 is a reference to 75% of the amount. */
        $sheepsToRemove = $numberOfSheep * .75;
        //Loggar ut hur många får som ska tas bort
        echo 'Removing ' . $sheepsToRemove . ' sheeps from population';
        //Removing the amount of sheeps that is being removed
        $numberOfSheep = $numberOfSheep - $sheepsToRemove;
    }
    /* We also want to check when the population is above 10000. So we need an else if */
    else if ($numberOfSheep > 10000){
        $sheepsToRemove = $numberOfSheep / 2;
        $numberOfSheep = $numberOfSheep - $sheepsToRemove;
    }
    /*Only after we have done these checks is it ok to actually increase the population, otherwise we will get some bad values */
    $numberOfSheep = $numberOfSheep * 4;
    echo 'There will be ' . $numberOfSheep . ' after ' . $monthNumber . ' month(s)!';
}
```

<summary></summary>

### Multiplikationstabellen

```php
/* Create an outer loop for the first value: 1 - 10 */
for($i = 1; $i <=10; $i++){
    /* Create an inner loop for the second value: 1-10 */
    for($j = 1; $j <= 10; $j++){
        /* First the outer loop will stop at $i == 1, and then it will loop
         * through $j from 1 to 10.
         * We will log: 1*1, 1*2, 1*3, 1*4 etc.
         * And will not exit the inner loop until it is completed 
         */
        echo $i * $j;
    }
    echo "<br />";
    /* When we are done, the outer loop will run again, and we will get $i = 2
     * Then the inner loop will runt 10 times 
     */
}
```
