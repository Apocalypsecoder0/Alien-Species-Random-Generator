<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "alien_species";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate random alien species
function generateRandomSpecies($conn) {
    $sql = "SELECT * FROM species ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Generate and display random species
$randomSpecies = generateRandomSpecies($conn);
if ($randomSpecies) {
    echo "Alien Species: " . $randomSpecies['name'] . "<br>";
    echo "Moral Ethics: " . $randomSpecies['moral_ethics'] . "<br>";
    echo "Policies: " . $randomSpecies['policies'] . "<br>";
    echo "Colonized Planets: " . $randomSpecies['colonized_planets'] . "<br>";
    echo "Age of Civilization: " . $randomSpecies['age_of_civilization'] . " years<br>";
    echo "Traits: " . $randomSpecies['traits'] . "<br>";
    echo "Leaders: " . $randomSpecies['leaders'] . "<br>";
    echo "Government: " . $randomSpecies['government'] . "<br>";
    echo "Homeworld: " . $randomSpecies['homeworld'] . "<br>";
    echo "Origin: " . $randomSpecies['origin'] . "<br>";
    echo "Civics: " . $randomSpecies['civics'] . "<br>";
    echo "Edicts: " . $randomSpecies['edicts'] . "<br>";
    echo "Ideals: " . $randomSpecies['ideals'] . "<br>";
    echo "Armies: " . $randomSpecies['armies'] . "<br>";
} else {
    echo "No species found.";
}

$conn->close();
?>
