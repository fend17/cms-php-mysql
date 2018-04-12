-- Räkna alla böcker som varje författare har
SELECT COUNT(title) as numberOfBooks, authors.authorName FROM books
JOIN authors
ON authors.id = books.authorID
GROUP BY authors.authorName

-- Hämta alla böckers titel, författare och när de är födda
SELECT books.title, authors.authorName AS Author, authors.born  FROM books
JOIN authors
ON authors.id = books.authorID


-- Hämta alla böcker oavsett om de har en författare eller inte
SELECT books.title, authors.authorName AS Author, authors.born  FROM books
LEFT JOIN authors
ON authors.id = books.authorID

-- Hämta alla författare oavsett om de har böcker eller inte
SELECT books.title, authors.authorName AS Author, authors.born  FROM books
RIGHT JOIN authors
ON authors.id = books.authorID