# Wordpress Child Theme

## Lästips

* [Wordpress Codex - Child Themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/)
* [Wordpress Codex - Theme Functions](https://developer.wordpress.org/themes/basics/theme-functions/)
* [Smashing Magazine - The Definitive Guide to Wordpress Hooks](https://www.smashingmagazine.com/2011/10/definitive-guide-wordpress-hooks/)


## Instruktioner

1. Gör en ny mapp och döp mappen till vad du vill att ditt tema ska heta. Det spelar ingen roll vad mappen heter bara att den ligger inuti `wp-content/themes`.
2. Skapa två filer i denna mapp: `style.css` samt `functions.php`. Dessa är de enda två filer som behövs för att skapa ett nytt _Child Theme_.
3. Lägg till följande kod i början på `style.css`. Koden berättar för WordPress vilken föräldern till temat är och vilken css som ska användas. Koden måste vara en kommentar som nedan. Det som är viktigt här är att **Template** sätts till samma namn som föräldertemat. Själva temanamnet får du välja själv.
```css
/*
 Theme Name:   Cool Child Theme
 Description:  This is an awesome theme, at least my mom says so.
 Template:     twentyfifteen
 Author:       Marty McFly
*/
```

4. Ställ in barntemat att använda föräldertemats _CSS_ samt med dessa rader som ska ligga inuti barntemats `functions.php`. Ingenting behöver alltså ändras här, det ska bara klistras in:
```php
<?php
/* This is a action hook, it tells wordpress to run the funtion below
 * at a specific time (during `wp_enqueue_scripts`). It adds the necessary 
 * CSS to the '<head>'-tag. Noneed to edit this code */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>
```

5. Alla ändringar till CSSen ska ligga i `style.css` i ditt nyskapade tema och alla funktioner kopplade till ditt tema ska ligga i `functions.php`. All funktioner du skapar i `functions.php` kan användas i resten av dina `php`-filer.
6. Om man vill kan använda temat går du till adminpanelen och sedan: **Apperances**>**Themes** och väljer sedan att aktivera ditt tema. Det kommer inte ha någon bild på sig men du borde kunna se namnet på temat. Om du vill lägga till en bild till temat så lägger du till den bilden som `screenshot.png` i mappen för temat så används den automatiskt.
7. Redigera ditt tema, byt bakgrundfärg, ändra font eller lägg till någon snygg transition. Lek runt lite med vad man kan göra.
