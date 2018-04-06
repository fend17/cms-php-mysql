# Inheritance / Arv

Arv är det som oftast används i samband med att skriva kod objektorienterat. Vi skapar en **basklass** som ska ha ett standardbeteende och som innehåller logik som vi ska återanvända. När vi sedan vill återanvända denna kod fast _tweaka_ den lite grann så är tanken att vi inte ska skapa en ny klass utan att vi ska skapa en **subklass** av den redan existerande klassen.

```php
class Employee
{
  protected $salary;
  public function __construct($salary)
  {
    $this->salary = $salary;
  }
}

class ITGuy extends Employee
{
  private $admin = true;
}

$new_employee = new Employee(25000);
$new_it_guy = new ITGuy(28000);
```

Vi kan lägga till bara de nya egenskaperna vi behöver utan att behöva repetera massa kod. Detta låter väldigt bra i praktiken och på små exempel, i praktiken leder det dock ofta till att man skapar beroenden och hierarkier som inte alltid är lika enkla. Vi blir tvingade i förväg att exakt bestämma hur vår struktur ska se ut vilket kan vara väldigt svårt. Det kan även senare bli krångligt att redigera en lite del av denna kedja utan att det får påverkan på resten av arvskejdan.

En mekanik som oftast gynnas oss mer är **Interfaces** som låter oss att skapa kontrakt för hur en klass ska agera men inte tvingar en klass att bero på av annan klass. När vi börjar koda med klasser har vi oftast inte så stort behov av att göra några större arvskedjor så övertänk inte dessa mönster och använd för det mesta **Interfaces** eller **Abstrakta klasser** för att styrka koden och  använda gemensam kod för klasser som inte har ett tydligt arv mellan varandra.

```php
interface FlightInterface
{
  public function fly();
}

class Plane implements FlightInterface
{
  public function fly()
  {
    echo "wroom wroom";
  }
}

class Bird implements FlightInterface
{
  public function fly()
  {
    echo "tweet tweet";
  }
}

```

## Övningar

### Arv
1 . Skriv minst 2 klasser som motsvarar olika djur. Alla djur ska ha `Animal` som basklass. Se till att djuren ärver från `Animal`. Vilka egenskaper eller funktioner skulle vi kunna skapa som är gemensamt för VARENDA djur? Finns det några?

2 . Om vi har metoden `matingCall()` på klassen `Animal`, hur skulle vi skriva den implementationen? Vad skulle den funktionen `echo`a ut eller returnera? Var skulle vi annars kunna lägga den?

3 . Eftersom vi aldrig egentligen ska skapa ett objekt av typen `Animal` så kan vi göra om det till en **abstrakt klass**, en klass som aldrig ska skapas, som bara ska ärvas ifrån. Gör klassen `Animal` till abstrakt och gör metoden `matingCall` till abstrakt.

4 . Tänk att vi nu har `Dog` och `Cat` som klasser, nu kommer även en till klass in i bilden `Android`. En android är en robot, men det är inget djur. Dock har även en `Android` ett `matingCall`. Det betyder att den ska ha samma funktion som `Animal` men inte ärva utifrån `Animal`. För detta måste vi ha ett `Interface`. Skapa ett interface `MatingInterface` som gör att båda klasserna kan ha metoden `matingCall`.

5 . Skapa klasserna `Planet`, `Earth` och `Mars`. `Planet` ska ha en metod som heter `visit()` som ska skriva ut
>"Welcome to $this->name! A lap around the sun takes: $this->orbitDays"

Alla planeter ska alltså ha egenskaperna `name` samt `orbitDays`, dessa egenskaper ska själva klassen `Planet` ha. Utifrån `Planet` ska man kunna skapa `Earth` och `Mars` som två nya klasser som ärver från `Planet`. `Earth` och `Mars` ska bara ta in ett argument i konstruktorn: `population`. Men när man skapar ett `Earth`-objekt så måste även `name` och `orbitDays` sättas, detta görs i konstruktorn. Detta betyder att du måste kalla på förälderns konstruktor SAMT den egna konstruktorn. När man kallar på `visit()` på `Earth` så ska den både kalla på `visit()` från basklassen samt kalla på `visit` från den nya subklassen och skriva ut:
>Welcome to $this->name! A lap around the sun takes: $this->orbitDays" and population is : $this->population";

Tips: Använd [Parent](http://php.net/manual/kr/keyword.parent.php)

6 . Implementera `Vehicle`-klassen från tidigare slides och dess subbklasser. Du ska ha klasserna `Vehicle`, `Bicycle`, `Boat`, `Car`, `Motorboat` och `Sail`. `Vehicle` ska ha en metod som heter `goTo`, som tar en parameter. Funktionen ska skriva ut _"Färdas till [parametern]"_ med `echo`. Skapa ett objekt av varje klass och anropa `goTo` med ditt favoritresmål. T.ex. _"Färdas till Borås"_. Du ska alltså bara skapa funktionen `goTo` en gång. Går det att skapa subklasser till `Vehicle`, går det t.ex. att gruppera vissa fordon efter gemensamma egenskaper? Vilka subklasser kan du komma på som man kan skapa?

## Lösningsförslag

1.
```php
class Animal {
  public function sleep()
  {
    echo "zZzZz!";
  }
  public function eat()
  {
    echo "Nom nom!";
  }
}

class Cat extends Animal
{
  public function makeNoise() {
     echo 'meow';
  }
}
  
class Dog extends Animal {
  public function makeNoise() {
     echo 'woffy woffy noisy makey';
  }
}
$a_cat = new Cat();
$a_cat->eat();
$a_cat->makeNoise();

$a_dog = new Dog();
$a_dog->eat();
$a_dog->makeNoise();
```

2.
Det finns inget generellt "mating call", `Animal` finns inte, det finns inget djur som är ett "allmänt" djur, därför kan vi inte skriva någon **implementation** för det. D.v.s. vi kan inte skriva exakt hur metoden skulle fungera. Alternativet är då t.ex. att lägga metoden på varje ny klass vi skapar och definiera implementationen där istället. Se exemplet ovan i övning 1, där skapar jag `makeNoise` på subklasserna och inte på basklassen eftersom jag alltid kommer att echo ut olika saker beroende på djur.

3.
```php
abstract class Animal {
  /**
   * This function/method is also abstract, it doesn't have any
   * implementation and it shouldn't have. no {} because we are not creating
   * it in here, we are creating it in every class that extends this class.
   */
  abstract function matingCall();

  public function sleep()
  {
    echo "zZzZz!";
  }
  public function eat()
  {
    echo "Nom nom!";
  }
}

class Cat extends Animal
{
  /**
   * Every class that extends Animal is forced to implement this method,
   * it doesn't force you to write it in any specific way it just forces
   * you to have it created on the class. it can basically return true;
   * if we just want our code to work
   */
  public function matingCall()
  {
      echo "meowy wowy";
  }
  public function makeNoise() {
     echo 'meow';
  }
}
  
class Dog extends Animal {
  public function matingCall()
  {
    echo "woffy wowy!";
  }
  public function makeNoise() {
     echo 'woffy woffy noisy makey';
  }
}
$a_cat = new Cat();
$a_cat->eat();
$a_cat->matingCall();

$a_dog = new Dog();
$a_dog->eat();
$a_dog->matingCall();

/*
 * This will result in an error, we cannot create an object 
 * from an abstract class
 */
//$amoba = new Animal();
```

4.
```php
interface MatingInterface
{
  public function matingCall();
}

abstract class Animal {
  /**
   * This function/method is also abstract, it doesn't have any
   * implementation and it shouldn't have. no {} because we are not creating
   * it in here, we are creating it in every class that extends this class.
   */
  public function sleep()
  {
    echo "zZzZz!";
  }
  public function eat()
  {
    echo "Nom nom!";
  }
}

class Cat extends Animal implements MatingInterface
{
  /**
   * Every class that extends Animal is forced to implement this method,
   * it doesn't force you to write it in any specific way it just forces
   * you to have it created on the class. it can basically return true;
   * if we just want our code to work
   */
  public function matingCall()
  {
      echo "meowy wowy";
  }
  public function makeNoise() {
     echo 'meow';
  }
}
  
class Android implements MatingInterface
{
  public function matingCall()
  {
    echo "Bleep bloop shawoop!";
  }
}
$a_cat = new Cat();
$a_cat->eat();
$a_cat->matingCall();

$an_android = new Android();
$an_android->matingCall();
```

5.
```php
class Planet {
  /*
   * We let every class that inherits this class to have access
   * to these properties, protected
   */
  protected $name;
  protected $orbitDays;

  public function __construct($name, $orbitDays) {
    $this->name = $name;
    $this->orbitDays = $orbitDays;
  }
  public function visit() {
    echo "Welcome to $this->name! A lap around the sun takes: $this->orbitDays. <br>";
  }
}

class Earth extends Planet {
  protected $population;

  public function __construct($population) {
    parent::__construct('Earth', 365.25);
    $this->population = $population;
  }
  public function visit() {
    parent::visit();
    echo "and population is: $this->population";
  }
}

$mars = new Planet('Mars', 687);
$earth = new Earth(7.5);

$mars->visit();
$earth->visit();
```
