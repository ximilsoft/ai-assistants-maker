<?php

$files = [
    "prompt/start.txt",
    "prompt/user_Interaction.txt",
    "prompt/instructions.txt",
    "prompt/rules.txt",
    "prompt/examples.txt",
    "prompt/expectation.txt"
];

function getFilenameFromPath($path) {
  	// Use basename to get the filename without directory
  	$filename = basename($path);
	
  	// Split filename and return first part
  	$filename = explode(".", $filename)[0];
	
	$filename = str_replace("_"," ",$filename);
	
	$filename = ucwords($filename);
	return $filename;
}


// Initialize an empty array to store content wrapped in <pre> tags
$contentPre = [];

// Read each file and wrap its content in <pre> tags
foreach ($files as $file) {

    $contentPre[] = '
    <div class="col-lg-8 mx-auto">
        <div class="card shadow border">
            <div class="card-header">' . getFilenameFromPath($file) . '</div>
            <div class="card-body d-flex flex-column align-items-center">
                <pre id="codeBlock">' . file_get_contents($file) . '</pre>
            </div>
        </div>
    </div><br />';
}

// Concatenate contents with two line breaks in between
$content = implode("\n\n", $contentPre);

// Replace placeholders with actual values
$content = str_replace(
    ["role_name", "input_name", "action_name", "process_name"],
    [$role, $input, $action, $process],
    $content
);

// Echo the modified content inside the textarea
echo $content;
