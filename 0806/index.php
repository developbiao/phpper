<?php
require('rb.php');
R::setup('mysql:host=localhost;dbname=demo', 'root', '123456');
/*
$book = R::dispense('book');
$book->title = 'Learn to Program';
$book->rating = 10;
//you can also use array notation if you like:
$book['price'] = 77.77;

//and store then bean in he database:
$id = R::store($book);
*/


//delete your post ,pass it to the trach method
/*
$book = R::load('book', 1);
echo $book;

R::trash($book);
*/

/*
$book = R::dispense('book');
$book->title = 'Learn Redbean PHP Frame';
$book->rating = 7;
$book->price = 17.5;

echo $id = R::store($book);
*/

//Finding stuff
/*
$book = R::find('book', 'title LIKE ?', ['Learn']);

echo '<pre>';
print_r($book);
echo '</pre>';

*/

// get items  获取元素

/*
$books = R::getAll('SELECT * FROM book WHERE price < ?', [50]);

foreach($books as $book){
	echo $book['title'], '<br />';

}
*/


//Minute 5:Relations
//RedeanPHP also makes it easy to manage relations. For instance, 
//if we like to add some photos to our holiday post we do this:
$book = R::dispense('post');

$photo1 = 'aaa.jpg';
$photo2 = 'bbb.png';
$post->ownPhotoList[] = $photo1;
$post->ownPhotoList[] = $photo2;

R::store($post);






echo '<h3>Runing ok!</h3>';
?>