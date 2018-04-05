# Object Oriented PHP

## Skapa objekt

1 . Skriv en klass med namnet `Book`. Den ska ha två (_publika_) egenskaper: `title` och `author`.

2 . Skapa ett objekt av klassen `Book` och spara det i en variabel med namnet `$first_book`. Sätt värdet på egenskaperna `title` till _"Främlingen"_ och `author` till _"Albert Camus"_. Testa att du har gjort rätt genom att skriva ut värdet på egenskaperna `title` och `author` så här:
```php
echo "Titel: $first_book->title \nFörfattare: $first_book->author";
```

3 . Skapa ett till objekt av klassen `Book` med `title`: _"Harry Potter and the Philosopher's Stone"_ och `author`: _"J K Rowling"_.

4 . Skapa en metod i klassen som ändrar värdet av `title` på boken när man kallar på den. Ändra det senaste objektet så att `title` blir _"Harry Potter and the Order of the Phoenix"_ istället för _"Harry Potter and the Philosopher's Stone"_.

5 . Skapa en metod i `Book` med namnet `printInfo`. Metoden ska inte ta några parametrar. När den anropas ska den skriva ut bokens titel och författaren med `echo`, i princip som koden i övning 2.

6 . Lägg till en konstruktor till klassen `Book`. Konstruktorn ska ta två argument och använda dem för att sätta värdet på egenskaperna `title` och `author`.

7 . Skapa en klass med namnet `Car`. Den ska ha flera egenskaper: `model`, `color` och `price`. Skapa ett objekt av klassen `Car` och ge det lämpliga värden på egenskaperna. Skapa även en konstruktor till klassen `Car` så man direkt kan sätta värdena när man skapar bilen.

8 . Lägg till en metod i `Car` med namnet `printInfo`. Metoden ska inte ha några parametrar. När metoden anropas ska den skriva ut information om `Car`-objektet. Till exempel, om `model="Volvo"`, `color="red"` och `price=25000` så ska funktionen skriva:
```
"Det här är en röd Volvo som kostar 25000 kr".
```

9 . Skapa en metod i `Car` med namnet `halfPrice`. När metoden anropas ska den ändra värdet på egenskapen price till hälften.

10 . Lägg till en egenskap till klassen `Car`, `sellDate`, som motsvarar när bilen såldes. Konstruktorn ska sätta `sellDate` till dagens datum. Exempel: "2017-03-27".
Tips: använd [`PHP.net: Date`](http://php.net/manual/en/function.date.php)

11 . Skriv en klass med namnet `SingleBookLibrary`. Den ska ha egenskaper med namnet `book` och `isBorrowed`. Egenskapen `book` ska vara ett objekt av klassen `Book`. Lägg till en metod med namnet `borrow`, som ändrar värdet på `isBorrowed` till `true`. Metoden ska också skriva ut med echo om det gick att låna, eller om boken redan var utlånad.

## Access modifiers, public/private

1 . Ändra klassen `Book` så att `title` och `author` är `private` i stället för `public`. Försök att skriva ut värdet på title på samma sätt som i uppgift 1.2. Du kommer att få ett felmeddelande. Vad säger meddelandet? Varför får du felet?

2 . Skapa två metoder till klassen `Book` som kan användas för att ändra egenskapen `title`. Den ena metoden ska heta `getTitle` och ska returnera värdet på den privata egenskapen `title`. Den andra metoden ska heta `setTitle(x)` och ska ändra värdet på title till något som man skickar som argument till funktionen.

3 . Skapa `get`- och `set`-metoder till egenskapen `author`.

4 . Gör alla egenskaper för klassen `Car` privata. Behöver du ändra något för att funktionen `printInfo` ska fungera?

5 . Skriv en metod med namnet `changeCar`. Den ska ta tre parametrar: `model`, `color` och `price`. När man anropar den ska den ändra värdet på de privata egenskaperna.

## Statiska egenskaper och metoder

1 . Lägg till en publik statisk variabel i klassen `Car` med namnet `NumberOfCars` som är 0. Varje gång ett `Car` objekt skapas ska `NumberOfCars` räknas upp med 1. Skapa några Car-objekt och kontrollera att variabeln räknas upp korrekt.
[PHP.net: Static Keyword](http://php.net/manual/en/language.oop5.static.php)

## Skapa en Todo-list

Testa att implementera en Todo-list med PHP-classes. Du behöver nog inte använda något arv men måste få två klasser att synka med varandra, liknande `SingleBookLibrary`.

Du behöver alltså skapa minst två klasser `Tasks`/`Todos` och `Task/Todo`. `Tasks` ska hantera de olika `Task` och spara dessa i en array. Men alla `Task` ska vara en instans av klassen `Task`. 

Man tänka sig följande upplägg på `Task`:
```php
class Task
{
    private $title;
    private $createdAt;
    private $complete = false;
}
```

Samt följande upplägg på `Tasks`:

```php
class Tasks
{
    //Array of Task
    private $tasks;
    public function addTask($newTask){

    }
}
```

## Lösningsförslag

### Skapa objekt

1.
```php
class Book {
  public $title;
  public $author;
}
```

2.
```php
<?php

class Book
{
    public $title;
    public $author;
}

$first_book = new Book;
$first_book->title = "Främlingen";
$first_book->author = "Albert Camus";

echo "Titel: $first_book->title \nFörfattare: $first_book->author";
```

3.
```php
<?php

class Book
{
    public $title;
    public $author;
}

$first_book = new Book;
$first_book->title = "Främlingen";
$first_book->author = "Albert Camus";

$second_book = new Book;
$second_book->title = "Harry Potter and the Philosopher's Stone";
$second_book->author = "J.K Rowling";
```

4.
```php
class Book
{
    public $title;
    public $author;
    public function changeTitle($newTitle){
      $this->title = $newTitle;
    }
}

$first_book = new Book;
$first_book->title = "Främlingen";
$first_book->author = "Albert Camus";

$second_book = new Book;
$second_book->title = "Harry Potter and the Philosopher's Stone";
$second_book->author = "J.K Rowling";

$second_book->changeTitle("Harry Potter and the Philosopher's Stone");
```

5.
```php
<?php
class Book {
  public $title;
  public $author;
  
  public function printInfo() {
    echo "Titel: $this->title \nFörfattare: $this->author";
  }
}

$first_book = new Book;
$first_book->title = 'Brott och Straff';
$first_book->author = 'Fjodor Dostojevskij';
$first_book->printInfo();

```

6.
```php
<?php
class Book {
  public $title;
  public $author;

  public function __construct($title, $author) {
    $this->title = $title;
    $this->author = $author;
  }
  public function printInfo() {
    echo "Titel: $this->title \nFörfattare: $this->author";
  }
}

$first_book = new Book('Brott och Straff', 'Fjodor Dostojevskij');
$first_book->printInfo();
```

7.
```php
class Car {
  public $model;
  public $color;
  public $price;

  public function __construct($model, $color, $price) {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
  }
}

$first_car = new Car('Tesla', 'Silver', 1000000);
```

8.
```php
class Car {
  public $model;
  public $color;
  public $price;

  public function __construct($model, $color, $price) {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
  }
  public function printInfo() {
    echo "Det här är en $this->color $this->model "
    . "som kostar $this->price kr.<br>";
  }
}
```

9.
```php
class Car {
  public $model;
  public $color;
  public $price;

  public function __construct($model, $color, $price) {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
    $this->sellDate = "2017-03-27";
    // TODO: använd date(..)
  }
  public function printInfo() {
    echo "Det här är en $this->color $this->model "
    . "som kostar $this->price kr.<br>";
  }
  public function halfPrice() {
    $this->price = $this->price / 2;
  }
  
}

$first_car = new Car('Tesla', 'Silver', 1000000);
$first_car->halfPrice();
$first_car->printInfo();
```

10.
```php
class Car {
  public $model;
  public $color;
  public $price;

  public function __construct($model, $color, $price) {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
    $this->sellDate = date('Format String', time());
  }
  public function printInfo() {
    echo "Det här är en $this->color $this->model "
    . "som kostar $this->price kr.<br>";
  }
  public function halfPrice() {
    $this->price = $this->price / 2;
  }
  
}

$first_car = new Car('Tesla', 'Silver', 1000000);
$first_car->halfPrice();
$first_car->printInfo();
```

11.
```php
class SingleBookLibrary {
  public $book;
  public $isBorrowed;

  public function borrow() {
    if( $this->isBorrowed ) {
      echo "Boken är redan utlånad";
    } else {
      echo "Boken var inte utlånad, det går bra att låna.";
      $this->isBorrowed = true;
    }
  }
}
$library = new SingleBookLibrary();
$library->isBorrrowed = false;
$library->book = new Book('Pesten', 'Albert Camus');
$library->borrow();
```

### Access modifiers

```php
class Book {
  private $title;
  private $author;

  public function __construct($title, $author)
  {
    $this->title = $title;
    $this->author = $author;
  }
  public function printInfo()
  {
    echo "Titel: $this->title \nFörfattare: $this->author";
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setTitle($newTitle)
  {
    $this->title = $newTitle;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setAuthor($newAuthor)
  {
    $this->title = $newAuthor;
  }
}
$first_book = new Book('Främlingen', 'Albert Camus');
$first_book->printInfo();
```

```php
class Car {
  private $model;
  private $color;
  private $price;
  private $sellDate;

  public function __construct($model, $color, $price)
  {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
    $this->sellDate = date('Format String', time());
  }
  public function printInfo()
  {
    echo "Det här är en $this->color $this->model "
    . "som kostar $this->price kr.<br>";
  }
  public function halfPrice()
  {
    $this->price = $this->price / 2;
  }
  public function changeCar($model, $color, $price)
  {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
  } 
}

$first_car = new Car('Tesla', 'Silver', 1000000);
$first_car->printInfo();
$first_car->changeCar('Tesla', 'Green', 80000);
```


### Statiska egenskaper och metoder

```php
class Car {
  private $model;
  private $color;
  private $price;
  private $sellDate;
  public static $numberOfCars;

  public function __construct($model, $color, $price)
  {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
    $this->sellDate = date('Format String', time());
    self::$numberOfCars++;
  }
  public function printInfo()
  {
    echo "Det här är en $this->color $this->model "
    . "som kostar $this->price kr.<br>";
  }
  public function halfPrice()
  {
    $this->price = $this->price / 2;
  }
  public function changeCar($model, $color, $price)
  {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
  } 
}

$car1 = new Car('Tesla', 'Silver', 1000000);
$car1->printInfo();
$car1->changeCar('Tesla', 'Green', 80000);
```
