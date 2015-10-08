<?php
$nick_name = array(
		'Malcolm', 'Joan', 'Niki', 'Betty', 'Linda', 'Whitney', 'Lily',
		'Fred', 'Gary', 'William', 'Charles', 'Michael', 'Karl', 'Barbara',
		'Elizabeth', 'Helen', 'Katharine', 'Lee', 'Ann', 'Diana', 'Fiona',
		'Bob', 'John', 'Thomas', 'Dean', 'Paul', 'Jack', 'Brooke',
		'Judy', 'Doris', 'Rudy', 'Amanda', 'Shirley', 'Joan', 'Tracy',
		'Kevin', 'Louis', 'John', 'George', 'Henry', 'Benjamin', 'Melody',
		'Helen', 'Debbie', 'Lisa', 'Yvonne', 'Robert', 'Carl', 'Scott',
		'Tom', 'Eddy', 'Kris', 'PeterShelly', 'Mary', 'Dolly', 'NancyJane',
		'Johnson', 'Bruce', 'Robert', 'Peter', 'Bill', 'Joseph', 'John',
		'Shirley', 'Emily', 'Sophia', 'Vivian', 'Lillian', 'Joy', 'Barbara',
		'Burt', 'Charlie', 'Elliot', 'George', 'Johnson', 'Ross', 'Julie',
		'Gloria', 'Carol', 'Richard', 'James', 'Charles', 'Bruce', 'David',
		'Taylor', 'Wendy', 'Grace', 'Vivian', 'Caroline', 'Samantha', 'Nick',
		'Walt', 'John', 'Mark', 'Sam', 'Davis', 'Neil', 'Carl',
		'Lewis', 'Billy', 'Maria', 'Kate', 'Demi', 'Sunny', 'Wendy',
		'Richard', 'Howard', 'Allen', 'Johnny', 'Robert', 'Martin', 'Jeff', 
		'Ava', 'Christina', 'Judy', 'Susan', 'Grace', 'Alice', 'Paul', 'Sam',
		'Francis', 'Lewis', 'Stephen', 'Andy', 'Scott', 'Jimmy', 'Allen',
		'Joyce', 'Sally', 'Margaret', 'Rebecca', 'Teresa', 'Rita', 'Jessica',
		'Albert', 'Anne', 'Kevin', 'Michael', 'Taylor', 'Jackson', 'Jack',
		'Martin', 'Vincent', 'Elizabeth', 'Kelly', 'May', 'Julie', 'Amanda',
		'Victoria', 'Carrie', 'Fern', 'Bunny', 'Estelle', 'Jasmine', 'Emily',
		'Angela', 'Charlotte' ,'Chris', 'Daphne', 'Doris' ,'Elizabeth', 'Fiona'
	);

$index = count($nick_name) - 1;

echo '<br />';

$str_name = $nick_name[rand(0, $index)] .= rand(1, 9999);

echo '<pre>';
var_dump($str_name);
echo '</pre>';


echo "<h3>$str_name</h3>";


?>