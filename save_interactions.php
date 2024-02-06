<?php
// Get the interaction count from the request
$interactionCount = $_POST['interactionCount'];

// Save the count to a file on the server (you may need to adjust the path)
$file = fopen("interactions.txt", "w");
fwrite($file, "Login button clicked " . $interactionCount . " times.");
fclose($file);

// Respond to the client
echo "Interaction count saved successfully!";
?>
