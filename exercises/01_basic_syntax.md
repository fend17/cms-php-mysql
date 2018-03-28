## Skapa `.php`-sidor

## Övningar

Se till först så att du har en `index.php`, du kan använda ovanstående kod. Se till så att även din `index.php` körs via _MAMP_/_WAMP_/_XAMPP_. Du ska kunna besöka din sida via [http://localhost](http://localhost)

Det mesta i vår `index.php` är `html`. Dock varje gång du ska använda `php` så måste du ha en öppningstagg och en sluttagg:
```php
<h1> <!--- this is html country --->
    <?php
        //php gets evaluated here
    ?>
</h1>
```


1. Använd PHP för att skriva ut en paragraf med texten: _"Programming!!!"_
2. Använd PHP för att skriva ut en `<div>` med färgen `ligthcoral` som är `200x200px` stor.
3. Använd PHP för att skriva ut en `<h1>`-tagg med ditt namn. Ditt namn ska vara i en variabel och inte hårdkodat in som exemplet ovan. Tänk på att det är skillnad på `''` och `""`. Med `''` måste du använda `.` för att lägga in en variabel i en sträng.
4. Dela upp ditt namn i två variabler, `$firstName` och `$lastName`. Gör så att hela ditt namn skrivs ut i din `<h1>`-tagg.
5. Du har texten nedan. Med PHP/HTML, gör så att det blir en ny rad efter varje mening. Du får själv dela upp texten som du vill. Det finns flera sätt att göra detta på. 
>"I've seen things you people wouldn't believe. Attack ships on fire off the shoulder of Orion. I watched C-beams glitter in the dark near the Tannhauser gate. All those moments will be lost in time... like tears in rain... Time to die."
6. Du har variabeln `$age = 26`, fast det är din egen ålder. Gör så att din ålder skrivs ut på sidan med php på sidan fast i **hundår**. Du ska inte ändra på variabeln.
7. Sprid dina vingar och utforska vad du får och inte får göra i PHP! Det mesta är hittils som `html`. Men snart kör vi igång med mer avancerade grejer.

## Lösningsförslag

1.
```php
<?php
    echo '<p> Programming!!</p>';
?>
```

2.
```php
//Everything will get interpreted as "normal" html
<?php
echo "<div style='height: 200px; width: 200px; background-color: lightcoral;'></div>";
?>
```

3.
```php
// . for putting variables and strings together
<?php
$name = "Jesper";
echo '<h1> Hello ' . $name . '!</h1>';
?>
```

```php
//If we use "" we can use variables without the dot .
<?php
$name = "Jesper";
echo "<h1> Hello $name!</h1>";
?>
```

```php
//we can also make multiple echos
$name = "Jesper";
echo "<h1> Hello";
echo $name;
echo "!</h1>";
```

4.
```php
<?php
$firstName = "Jesper";
$lastName = "Orb"
echo '<h1> Hello' . $firstName . ' ' . $lastName . '!</h1>';
?>
```

```php
<?php
$firstName = "Jesper";
$lastName = "Orb"
echo "<h1> Hello $firstName $lastName !</h1>" ;
?>
```

5.

```php
//<br /> like in html works!
<?php
echo "I've seen things you people wouldn't believe.<br/>
Attack ships on fire off the shoulder of Orion.<br />
I watched C-beams glitter in the dark near the Tannhauser gate. <br/>
All those moments will be lost in time...<br /> 
like tears in rain...<br />
Time to die.";
?>
```

```php
// \n means newline, will create a linebreak if we use "".
<?php
echo "I've seen things you people wouldn't believe. \n
Attack ships on fire off the shoulder of Orion. \n
I watched C-beams glitter in the dark near the Tannhauser gate.\n
All those moments will be lost in time...\n
like tears in rain...\n
Time to die.";
?>
```

```php
//echo does not create an automatic new line! Still need <br /> or \n 
<?php
echo "I've seen things you people wouldn't believe. <br />";
echo "Attack ships on fire off the shoulder of Orion.<br />";
echo "I watched C-beams glitter in the dark near the Tannhauser gate.<br />";
echo "All those moments will be lost in time...<br />";
echo "like tears in rain...<br />";
echo "Time to die.<br />";
?>
```

6.

```php
<?php
$age = 26;
echo 'I am ' . $age*7 . ' dogyears.';
?>
```
