<?php
// instantiate the driver class
$mongo = new MongoClient();
echo "Starting Connection!";

//select a database
$db = $mongo->test;
echo "Test database selected!";

// create a collection

$collection = $db->createCollection('student');
echo "Collection 'student' created";

// insert a document into collection

$document = array(
		"name" => "andi",
		"school" => "Rutgers",
		"gpa" => 3.5
	);


$collection->insert($document);
echo "Document inserted into collection";

// mongodb conn
?> 

