<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Assistants Maker</title>
    <link rel="icon" type="image/png" href="assets/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow border">
                    <div class="card-header">
                        AI Assistants
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
<?php
								
function get_assistants_name($variable = 'simple-name'){
	return ucwords(str_replace('-', ' ', $variable));
}							
								
								
								
// Define the path to the directory
$dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assistants';

// Get all folders in the directory excluding "assets"
$folders = array_filter(glob($dir . '/*'), 'is_dir');
$filteredFolders = array_filter($folders, function($folder) {
    return basename($folder) !== 'assets';
});

// Iterate through folders and display them
foreach ($filteredFolders as $folder) {
    $folderName = basename($folder);
	$assistants_name = get_assistants_name($folderName);
    echo '<tr>';
    // Use relative path for folder navigation
    echo '<td><a href="assistants'.DIRECTORY_SEPARATOR.htmlspecialchars($folderName) . '/">' . $assistants_name . '</a></td>';
    echo '</tr>';
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
