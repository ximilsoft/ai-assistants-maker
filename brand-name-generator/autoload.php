<?php

$contents = [
    file_get_contents("prompt/start.txt"),
	file_get_contents("prompt/user_Interaction.txt"),
    file_get_contents("prompt/instructions.txt"),
    file_get_contents("prompt/rules.txt"),
    file_get_contents("prompt/examples.txt"),
    file_get_contents("prompt/expectation.txt")
];

// Concatenate contents with two line breaks in between
$content = implode("\n\n", $contents);

// Remplace
$content = str_replace(
    ["role_name", "input_name", "action_name", "process_name"],
    [$role, $input, $action, $process],
    $content
);

// Echo the modified content inside the textarea
echo $content;