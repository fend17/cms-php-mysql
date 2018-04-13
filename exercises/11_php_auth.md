# PHP Auth

>Observera att det finns inga övningar, enbart exempel på hur du implementerar dessa saker i din inlämningsuppgift.

All data gällande en inloggad användare eller all data som ska lagras i PHP under en längre ti ska sparas i en **session**. En session måste alltid startas för att användas:
```php
session_start();
```

När sessionen är startad kan du lagra information i [`$_SESSION`](http://php.net/manual/en/reserved.variables.session.php). `$_SESSION` är en associative array på samma sätt som `$_POST`/`$_GET`. Du kan lagra vilken information som du vill i `$_SESSION` men det är oftast bra att inte överanvända den och bara det mest nödvändiga.

```php
session_start();
$_SESSION["loggedIn"] = true;
// You can now access the session variabel from any file 
// if the session has been started.
var_dump($_SESSION["loggedIn"]);
```

`session_start()` ska ligga så högt upp i ett dokument som möjligt. För att hämta information från en session måste du alltid starta den, detta gäller för varje fil. Varje ny fil som du ska använda `$_SESSION` i måste starta sessionen. Det kan även vara bra att kolla med en `if`-sats om sessionen redan är startad. Inkludera denna kodsnippet varje gång du ska hålla på med sessioner.

```php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
```

Om du vill ta bort en variabel i sessionen så ska du använda [`unset`](http://php.net/manual/en/function.unset.php):
```php
unset($_SESSION["banan"]);
```

Om du helt vill ta bort sessionen så ska du använda [`session_destroy()`](http://php.net/manual/en/function.session-destroy.php). T.ex. när användaren loggar ut så ska du kalla på `session_destroy` som tar bort hela sessionen, `unset` tar bara bort ett värde i sessionen.
```php
session_destroy();
```

## Redirect

Om du använder enbart PHP och inte sköter utbytet med JavaScript så vill du oftast ha filer som utför en handling och sedan omdirigerar dig till föregående sida eller en ny sida, detta gör du med funktionen [`header()`](http://php.net/manual/en/function.header.php). `header()` sätter alla sorters headers som du skulle vilja sätta. Headers är den metadata om förfrågan som skickas med varje svar och förfrågan. Vill du göra en redirect så ska du använda värdet `'Location'`

```php
header('Location: /');
```

Här säger vi att vi ska sätta vår `Location` till `/` som är detsamma som rootmappen och detta borde omdirigera dig till förstasidan `index.php`. Observera att `header()` borde ligga så långt upp i filen som möjligt, samma som med `session_start()`.

## Register User
```php
$username = $_POST["username"];
// Always hash your password before inserting into database
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);

$statement = $db->prepare(
  'INSERT INTO users (username, password)
  VALUES (:username, :password)'
);
$statement->execute([
  ":username" => $username,
  ":password" => $password
]);
```

## Login user

```php
$username = $_POST["username"];

// Search user by username and fetch one user
$statement = $db->prepare("SELECT * from users WHERE username = :username");
$statement->execute([
  ":username"   => $username
]);
// one user per username === one row === 'fetch' 
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (password_verify($_POST["password"], $user["password"])) {
    // What should happen when user is verified? Store user in session?
    // Redirect to homepage? echo "Login success"? 
    // Return fetched user to frontend?
} else {
    // This will trigger if the password is incorrect.
}

```

## Fetch

Baseras din förfrågan på `fetch` och du måste skicka med Cookies som verifierar att det är rätt person som gör förfrågan så måste du sätta en inställning på förfrågan som säger att du ska skicka med Cookies med `credentials`. Antingen till `same-origin` eller `include`.

```js
fetch('fetch_stuff.php', { credentials: 'include' });
```
