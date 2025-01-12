<?php
include 'db.php';

function generateRandomSpecies() {
    // Sample data for demonstration
    $species = [
        'name' => 'Zylox',
        'type' => 'Reptilian',
        'ethics_morals' => 'Collectivism',
        'policy' => 'Expansionist',
        'colonized_planets' => '3',
        'civilization_age' => 5000,
        'traits' => 'Intelligent, Agile',
        'leader' => 'General Xylo',
        'government' => 'Theocratic',
        'homeworld' => 'Zylox Prime',
        'origin' => 'Unknown',
        'civics' => 'Militaristic',
        'edicts' => 'Mandatory Service',
        'ideals' => 'Unity',
        'army' => 'Elite Warriors',
        'image_url' => 'path/to/image.jpg'
    ];
    
    return $species;
}

$species = generateRandomSpecies();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generated Species</title>
</head>
<body>
    <h1><?php echo $species['name']; ?></h1>
    <img src="<?php echo $species['image_url']; ?>" alt="<?php echo $species['name']; ?>">
    <p>Type: <?php echo $species['type']; ?></p>
    <p>Ethics/Morals: <?php echo $species['ethics_morals']; ?></p>
    <p>Policy: <?php echo $species['policy']; ?></p>
    <p>Colonized Planets: <?php echo $species['colonized_planets']; ?></p>
    <p>Age of Civilization: <?php echo $species['civilization_age']; ?> years</p>
    <p>Traits: <?php echo $species['traits']; ?></p>
    <p>Leader: <?php echo $species['leader']; ?></p>
    <p>Government: <?php echo $species['government']; ?></p>
    <p>Homeworld: <?php echo $species['homeworld']; ?></p>
    <p>Origin: <?php echo $species['origin']; ?></p>
    <p>Civics: <?php echo $species['civics']; ?></p>
    <p>Edicts: <?php echo $species['edicts']; ?></p>
    <p>Ideals: <?php echo $species['ideals']; ?></p>
    <p>Army: <?php echo $species['army']; ?></p>
    <a href="index.php">Back</a>
</body>
</html>
