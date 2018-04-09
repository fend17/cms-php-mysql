**Innan du frågar, har du sett över följande:**
- [ ] Kollat igenom att du har alla **semikolon** på plats
- [ ] Kollat ingenom så att du har stängt alla brackets: `(), [], {}`
- [ ] Använt `echo` eller `var_dump()` för att vissa upp resultatet (inte bara `return`erna till DOMen)
- [ ] Sparat samtliga filer i din editor och länkat in alla filer via rätt sökväg via `include/require`
- [ ] Har `log_errors` på antingen i `php.ini` eller i dina `.php`-filer ([SO: Display Errors](https://stackoverflow.com/a/21429652/5836872))
- [ ] Gjort en [**"Hard Refresh"**](https://superuser.com/a/512833/719063) på sidan för att dumpa eventuellt cachat innehåll (gäller oftast CSS)


### Förväntat beteende
>Här beskriver du förväntar dig att det ska hända.

### Faktiskt beteende
>Här beskriver du vad som faktiskt hände.

### Errormeddelande / exempelkod

_Exempelerror_
```
Notice: Array to string conversion in /Applications/MAMP/htdocs/index.php on line 6
```

_Exempelkod_
```php
// Illegal to echo a whole array, loop and echo instead
$array = ["Hello", "Error"];
echo $array;
```

### Övrig information

* __Operativsystem:__ _macOS Sierra 10.12.6 / Windows 10 / Ubuntu 16.04_
* __Browser:__ _Chrome 60 / Firefox 54 / Safari 10.1.12_
* __PHP Version:__ _7.1.15_/_7.1.1_
