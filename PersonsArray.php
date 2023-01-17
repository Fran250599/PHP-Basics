<?php

#import the Person class
require_once("Person.php");

# Create an array of persons
$persons = array();

# Add 5 different persons with every attribute random defined to the array
for ($i = 0; $i < 5; $i++) {
    $person = new Person();
    $person->name = "Person " . $i;
    $person->age = rand(0, 100);

    # Set a random gender between 'Man' and 'Woman'
    $gender = rand(0, 1);
    if ($gender == 0) {
        $person->gender = 'Man';
    } else
        $person->gender = 'Woman';

    array_push($persons, $person);
}

# Print every person in the array
foreach ($persons as $person) {
    echo "Name: ";
    echo $person->name;
    echo "\n";

    echo "Age: ";
    echo $person->age;
    echo "\n";

    echo "Gender: ";
    echo $person->gender;
    echo "\n\n";
}

    echo "\n\nNow, let's verify if a person is a woman and print the name of the person\n\n";



# Verify if a person is a woman and print the name of the person
foreach ($persons as $person) {
    if ($person->gender == 'Woman'){
        echo $person->name;
        echo "\n";
    }
}
?>