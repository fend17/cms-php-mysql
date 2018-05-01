<p align="center"><img src="http://i.imgur.com/eXuVuPO.png" alt="CMS, PHP & MySQL" width="auto" height="300"></p>

## Examination :memo:

Kursen examineras i __2__ individuella mindre uppgifter samt __1__ större gruppuppgift.

* __Gruppuppgift__: Skapa ett ReST API med PHP och MySQL.
* __Individuell examination__: Skapa en WordPress-sida med ett eget Child Theme med egna templates. 
* __Individuell examination__: Mindre applikation med inloggning/användarautentisering och koppling till MySQL-databas.

## Kurslitteratur/Länkar :books:

#### PHP

Se upp med PHP, många av resurserna på nätet är utdaterade och många exempel på nätet använder utdaterade kodexempel.

* [__PHP Pandas__](https://daylerees.com/php-pandas/)  
    - Går igenom grunderna i PHP
* [__PHP Best Practices__](https://phpbestpractices.org/)
    - Lösningar på många vanligt förekommande PHP-problem
* [__PHP: The Right Way__](http://www.phptherightway.com/)
    - Samling av ALLT som har med PHP att göra, väldigt djupgående med mycket information men inte så nybörjarvänlig. Är dock en bra utgångspunkt för fördjupning.
    - Kolla in rubriken [Resources](http://www.phptherightway.com/#resources) för att få tips på andra resurser och sidor att använda.
* [__PHP.NET Official Documentation__](http://php.net/)
    - Officiella dokumentationen för _PHP_. Ungefär som MDN.

#### MySQL

* [__W3Schools.com | SQL Tutorial__](https://www.w3schools.com/sql/)
    - Genomgång av de vanligaste kommandona i MySQL
* [__MySQL Documentation__](https://dev.mysql.com/doc/refman/5.7/en/)
    - Dokumentationen för MySQL
* [__The only proper PDO Tutorial__ @ PHPDelusions](https://phpdelusions.net/pdo)
    - PDO or [`die()`](http://php.net/manual/en/function.die.php)

#### CMS

* [__Wordpress.org__](https://wordpress.org/)
    - [__Wordpress Codex__](https://codex.wordpress.org/)    

#### YouTube

[_CodeCourse_: __PHP Basics Playlist__](https://www.youtube.com/playlist?list=PLfdtiltiRHWHjTPiFDRdTOPtSyYfz3iLW)

---

## Schema :calendar:

> Länkar kommer att fyllas på med fler länkar till varje moment

| Pass  | Vecka     | Datum   | Innehåll                                                | Länkar                                                | Övningar | Slides |
|-------|-------    |---------|---------------------------------------------------------|-------------------------------------------------------|---|---|
| 1     | **13**    | 28/3    | Introduktion, Sätta upp webserver, Grundläggande PHP    |[MAMP](https://www.mamp.info/en/), [PHP Installation](http://www.phptherightway.com/#use_the_current_stable_version)| [01](https://github.com/fend17/cms-php-mysql/blob/master/exercises/01_basic_syntax.md), [02](https://github.com/fend17/cms-php-mysql/blob/master/exercises/02_variables_if_else.md), [03](https://github.com/fend17/cms-php-mysql/blob/master/exercises/03_loops.md), [04](https://github.com/fend17/cms-php-mysql/blob/master/exercises/04_functions.md) | [01](https://fend17.github.io/slides/php/01_intro.html) |
| 2     | 13        | 29/3    | Funktioner, scope, `include`/`require`, filstruktur     |[PHP Pandas](http://daylerees.com/php-pandas/)        | [05](https://github.com/fend17/cms-php-mysql/blob/master/exercises/05_scope_and_includes.md) | [02](https://fend17.github.io/slides/php/02_php_basics.html) |
| 3     | **14**    | 4/4     | Formulär, Separation of Concerns                        |[GIST: Form Handling](https://gist.github.com/jesperorb/a6c12f7d4418a167ea4b3454d4f8fb61) [FORM Handling @ W3S](https://www.w3schools.com/php/php_forms.asp) [`FormData` @ MDN](https://developer.mozilla.org/en-US/docs/Web/API/FormData/Using_FormData_Objects) | [06](https://github.com/fend17/cms-php-mysql/blob/master/exercises/06_forms.md) | [03](https://fend17.github.io/slides/php/03_forms.html#/) |
| 4     | 14        | 5/4     | Objektorienterad PHP                                    |[Classes @ Pandas](https://daylerees.com/php-pandas-classes/) [Statics @ Pandas](https://daylerees.com/php-pandas-statics/) | [07](exercises/07_oop.md) | [04](https://fend17.github.io/slides/php/04_oop.html) |
| 5     | 14        | 6/4     | Objektorienterad PHP                                    |[Arv @ Pandas](https://daylerees.com/php-pandas-inheritance/) [Interfaces @ Pandas](https://daylerees.com/php-pandas-interfaces/) | [08](exercises/08_inheritance.md) | [05](https://fend17.github.io/slides/php/05_inheritance.html) |
| 6     | **15**    | 11/4    | Grundläggande SQL                                       |[SQL @ w3schools](https://www.w3schools.com/sql/) [PDO](https://phpdelusions.net/pdo)[SQL @ CodeAcademy](https://www.codecademy.com/learn/learn-sql) | [09](exercises/09_sql.md) | [06](https://fend17.github.io/slides/php/06_sql.html)  | 
| 7     | 15        | 12/4    | SQL & Joins                                             |[PDO](https://phpdelusions.net/pdo) [Joins](https://blog.codinghorror.com/a-visual-explanation-of-sql-joins/) | [10](exercises/10_sql2.md) | [07](https://fend17.github.io/slides/php/07_sql2.html) |
| 8     | 15        | 13/4    | Fördjupning i SQL / PDO / Auth                          |[SQL @ w3schools](https://www.w3schools.com/sql/), [PHP Security](https://www.owasp.org/index.php/PHP_Security_Cheat_Sheet) | [11](exercises/11_php_auth.md) | [08](https://fend17.github.io/slides/php/08_auth_session.html) |
| 9     | **16**    | 18/4    | WordPress & CMS                                         |[Wordpress Codex](https://codex.wordpress.org/), [Templates](https://codex.wordpress.org/Templates), [The Loop](https://codex.wordpress.org/The_Loop)     | [12](exercises/12_wordpress.md) | [09](https://fend17.github.io/slides/php/09_wordpress.html) |
| 10    | 16        | 19/4    | WordPress & CMS / Child Themes                          |[Wordpress Codex](https://codex.wordpress.org/), [Hooks](https://www.smashingmagazine.com/2011/10/definitive-guide-wordpress-hooks/), [WP_Query](https://codex.wordpress.org/Class_Reference/WP_Query) | | [10](https://fend17.github.io/slides/php/10_wordpress2.html) |
| 11    | 16        | 20/4    | Eget arbete med Inlämningsuppgifter                     | | | |
| 12    | **17**    | 25/4    | Inställd lektion / Sjuk                                 | | | |         
| 13    | 17        | 26/4    | Wordpress                                               | [Wordpress Codex](https://codex.wordpress.org/), [Hooks](https://www.smashingmagazine.com/2011/10/definitive-guide-wordpress-hooks/), [WP_Query](https://codex.wordpress.org/Class_Reference/WP_Query) | | |
| 14    | 17        | 27/4    | Composer / Ramverket `Slim`                             | [Composer](https://getcomposer.org/), [Slim](https://www.slimframework.com/), [RESTAPITUTORIAL](http://www.restapitutorial.com/)   | [13](exercises/13_slim.md) [14](exercises/14_slim2.md) | [11](https://fend17.github.io/slides/php/11_api.html) |
| 15    | **18**    | 2/5     | REST API Design                                         | [Slim](https://www.slimframework.com/), [RESTAPITUTORIAL](http://www.restapitutorial.com/)        |
| 16    | 18        | 3/5     | Interaktion med JavaScript & `fetch`                    |     |
| 17    | 18        | 4/5     | Eget arbete med grupprojekt                             |     |
| 18    | **19**    | 9/5     | Att tänka på / Gotchas / Fördjupning                    |     |
| 19    | **20**    | 16/5    | Eget arbete med grupprojekt                             |     |
| 20    | 20        | 17/5    | Eget arbete med grupprojekt                             |     |
| 21    | 20        | 18/5    | Eget arbete med grupprojekt                             |     |
| 22    | **21**    | 22/5    | Eget arbete med grupprojekt                             |     |
| 23    | 21        | 22/5    | Eget arbete med grupprojekt                             |     |
| 24    | 21        | 24/5    | **Presentation av grupprojekt i tvärgrupper**           |     |


## Naming Conventions

Det är rekommenderat att följa **[PHP-FIG PHP Stardard Recommendations](https://www.php-fig.org/psr/)** när du skriver PHP.
Värt att observera dock är att PSR inte ger några direktiv gällande globala funktion och variabelnamn samt att olika PHP-ramverk
använder sig utav olika naming conventions. Listan nedan visar hur varje enskilt ramverk skriver sin kod.


|      PHP Project      |   Classes   |  Methods   |  Properties  | Functions  | Variables  |
|---|------|---|---|---|---|
| **Akelos** Framework      | PascalCase  | camelCase  | camelCase    | lower_case | lower_case |
| **CakePHP** Framework     | PascalCase  | camelCase  | camelCase    | camelCase  | camelCase  |
| **CodeIgniter** Framework | Proper_Case | lower_case | lower_case   | lower_case | lower_case |
| **Concrete5** CMS         | PascalCase  | camelCase  | camelCase    | lower_case | lower_case |
| **Doctrine** ORM          | PascalCase  | camelCase  | camelCase    | camelCase  | camelCase  |
| **Drupal** CMS            | PascalCase  | camelCase  | camelCase    | lower_case | lower_case |
| **Joomla** CMS            | PascalCase  | camelCase  | camelCase    | camelCase  | camelCase  |
| **modx** CMS              | PascalCase  | camelCase  | camelCase    | camelCase  | lower_case |
| **Pear** Framework        | PascalCase  | camelCase  | camelCase    |            |            |
| **Prado** Framework       | PascalCase  | camelCase  | Pascal/camel |            | lower_case |
| **SimplePie** RSS         | PascalCase  | lower_case | lower_case   | lower_case | lower_case |
| **Symfony** Framework     | PascalCase  | camelCase  | camelCase    | camelCase  | camelCase  |
| **WordPress** CMS         |             |            |              | lower_case | lower_case |
| **Zend** Framework        | PascalCase  | camelCase  | camelCase    | camelCase  | camelCase  |

**Source: [https://stackoverflow.com/a/44042572/5836872](https://stackoverflow.com/a/44042572/5836872)**