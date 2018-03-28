# Mer `if` övningar

Om du vill att något INTE ska vara sant så kan du använda **NOT** `!`:
```php
$name = "Jesper"
$fed17 = false;

if($name != "Jesper"){
    echo "Du är inte Jesper, välkommen till 'Inga Jesper'-klubben";
}

//Opposite of false
if(!$fed17){
    echo "Hey reverse girl!";
}
```

## Birthday boy

Du kör för snabbt och en polis stoppar dig. Skriv kod som beräknar följande:

* Om du kör under eller lika med 110 så får du ingen böter
* Om du kör mellan 110 och 120 så får du en lite böter
* Om du kör över 120 så får du en skitstor böter
* Om det dock är din födelsedag så höjs alla fartgränser så du får i alla lägen köra 5km/h fortare. Så gränserna för stor och liten böter ska höjas baserat på t.ex. variabeln `$is_birthday = true;`


## Ain't no party like my nannas tea party

Dags för kalas. Men är det ett bra kalas? Det baseras på om vi har tillräckligt med kaffe och finska pinnar.

* Om liter kaffe är minst `5` (liter) och mängden finska pinnar är minst `5` (kg :open_mouth:) så är det ett `echo "Bra kalas";`
* Om antingen kaffet är dubbelt så stor mängd som finska pinnar eller om finska pinnar är dubbelt så stor mängd som kaffet är det ett `echo "Nannas super party";`
* Om någon av mängderna dock är under `5` så blir det automatiskt ett `echo "Dåligt kalas";`
* Om det är någon som otroligt nog har bjudit in en clown så måste alla mängder dubblas för att det ska bli ett bra kalas.

## Black Jack

Om du har två värden som är större än 0. Skriv ut det värde som är **närmast 21** utan att gå över 21. Skriv ut `"Nu blev du tjock"` om båda värdena är över 21.

## Unlucky Sum

Om vi har 3 värden, returnera deras summa. Men om ett av värdena är **13** så räknas inte det värdet och alla värden som kommer efter det.
_exempel_
```
(1, 2, 3)    → 6
(1, 2, 13)   → 3
(1, 13, 3)   → 1
```

<summary></summary>

## Jämn fördelning

Om du har 3 värden, ett av dem är litet, ett är medium och ett är stort (t.ex. 1, 6, 12). `echoa` ut om värdena är jämnt fördelade. Alltså om det är lika långt mellan t.ex. 1 och 6 som det är mellan 6 och 12.
_exempel_
```
(2, 4, 6) → jämnt
(4, 6, 2) → jämnt
(4, 6, 3) → ojämnt
```


## Vad blir det för middag?

Ibland kan det vara fördelaktigt att använda sig av `switch`-satser istället för `if`-satser om vi har mycket som ska kolla. I denna uppgift skall ni använda er av `switch`. Läs mer här längre ner på denna sida: [**Forks**](https://daylerees.com/php-pandas-forks/) eller här [**w3schools.com - Switch**](https://www.w3schools.com/PhP/php_switch.asp)

Ditt program ska skriva ut vilket rätt som ska tillagas beroende på vilken dag som skickas in till switchen.

1. Läs in dag ifrån variabel
2. Om dagen är…
    * måndag skriv ut: Kyckling
    * tisdag skriv ut: Pannkaka
    * onsdag skriv ut: Ärtsoppa
    * torsdag skriv ut: Gryta
    * fredag skriv ut: Kalv
    * lördag skriv ut: Vegetariskt
    * söndag skriv ut: Kålsoppa, varför kålsoppa?


## Vad blir det för middag 2

Ta din kod som du gjorde från förra uppgiften. Nu ska du dock med hjälp av en __fall-through__ göra så att programmet skriver ut "Kålsoppa" för fredag, lördag och söndag. Du ska alltså skriva "Kålsoppa" endast en gång men den switchen ska gälla för flera dagar.

<summary></summary>

# Lösningsförslag

### Birthday boy
```php
$speed = 80;
$is_birthday = true;
$birthdayBonus = 0;

//Add the bonus only if it birthday is true, else it will be zero
if($is_birthday){
    $birthdayBonus = 5;
}

//Subtract the bonus from the speed, then compare
if(($speed - $birthdayBonus) <= 110){
    echo "Relax you are doing fine";
} else if (($speed - $birthdayBonus) > 110 && ($speed - $birthdayBonus) <= 120){
    echo "You get the small ticket";
} else{
    echo "You are breaking the law and your mothers heart! This ticket is huge!";
}
```


### Nannas tea party
```php
$kaffe = 10;
$finska_pinnar = 5;
$clown = true;

//Divide all values if the clown is present
if($clown){
    $kaffe = $kaffe/2;
    $finska_pinnar = $finska_pinnar/2;
}

//If any of the values is bad, we know the party is bad at the start
if( $kaffe < 5 || $finska_pinnar < 5 ){
    echo "Dåligt kalas!";
//else we continue with our checks
} else if( ($kaffe/$finska_pinnar) >= 2 || ($kaffe/$finska_pinnar) >= 2){
    echo "Nannas super party!";
} else{
    echo "Bra kalas!";
}   
```

### Black Jack

```php
$card_1 = 19;
$card_2 = 21;

if($card_1 > 21 && $card_2 > 21){
    echo "Nu blev du tjock";
} else{
    //We know we need to check against 21, so check the difference against 21
    //the value that is the smallest wins!
    $diff_card_1 = 21 - $card_1;
    $diff_card_2 = 21 - $card_2;
    if($diff_card_1 < $diff_card_2 && $card_1 < 22){
        echo $card_1;
    } else if($card_2 < 22){
        echo $card_2;
    } else{
      echo $card_1;
    }
}
```

<summary></summary>

### Unlucky sum

```php
$a = 1;
$b = 13;
$c = 5;
$sum = 0; //store the sum

if($a != 13){
  //Take the previous value of $sum and add the new value
  $sum = $sum + $a;
  if($b != 13){
    $sum = $sum + $b;
    if($c != 13){
        $sum = $sum + $c;
    }
  }
}

//Either way, we want to show the sum.
echo $sum;

```

### Jämn fördelning

```php
$a = 2;
$b = 4;
$c = 6;

//It would also be a good idea to check if any of the values is negative and
//run multiple checks here, but i think you get the gist of it :)
if(($b - $a) == ($c  - $b)){
    echo "Jämnt fördelat!";
} else{
    echo "Ojämnt fördelat!";
}
```

### Vad blir det för middag 1

```php
$day = "måndag";

switch($day){
    case "måndag":
        echo 'Kyckling';
        break;
    case "tisdag":
        echo 'Pannkaka';
        break;
    case "onsdag":
        echo 'Ärtsoppa';
        break;
    case "torsdag":
        echo 'Gryta';
        break;
    case "fredag":
        echo 'Kalv';
        break;
    case "lördag":
        echo 'Vegetariskt';
        break;
    case "söndag":
        echo 'Kålsoppa';
        break;
}
```

<summary></summary>

### Vad blir det för middag 2


```php
switch($day){
    case "måndag":
        echo 'Kyckling';
        break;
    case "tisdag":
        echo 'Pannkaka';
        break;
    case "onsdag":
        echo 'Ärtsoppa';
        break;
    case "torsdag":
        echo 'Gryta';
        break;
    //Just remove the echos and breaks, it will go through and print kålsoppa
    //for every case here
    case "fredag":
    case "lördag":
    case "söndag":
        echo 'Kålsoppa';
        break;
}
```
