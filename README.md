# AI Assistants Maker

This repository helps you create AI assistants.

## Features

- Easily engineer AI assistants.
- Create assistants that meet your expectations.

## Installation

1. Clone the repository or download it:

   ```shell
   git clone https://github.com/mohammedellihr/ai-assistants-maker
   ```

2. Navigate to the project directory:

   ```shell
   cd ai-assistants-maker
   ```

3. Navigate to the `assistants` directory:

   ```shell
   cd assistants
   ```

4. Open your web browser and navigate to:
   ```
   http://localhost/ai-assistants-maker
   ```
5. You will see a list of AI Assistants, and you will have one AI Assistant available:
   ```shell
   - Calculator Ai Assistant
   ```

## Getting Started

1. Copy and paste the folder `calculator-ai-assistant` inside the `assistants` folder.
2. Inside the `assistants` folder, you will now have:
   ```shell
   - calculator-ai-assistant
   - calculator-ai-assistant2
   ```
3. Navigate to the `calculator-ai-assistant2` folder and you will find the following files:
   ```shell
   - prompts
     - examples.txt
     - expectation.txt
     - instructions.txt
     - rules.txt
     - start.txt
     - user_Interaction.txt
   - conf.php
   - expand.php
   - index.php
   ```
4. Open `conf.php` and update it with your AI Assistant information:

   ```php
   <?php

    // Role of the AI assistant
    $role = "calculator";

    // User inputs required
    $input = "numbers";

    // The action the AI assistant performs
    $action = "calculate";

    // The process executed by the AI assistant
    $process = "calculating the result";
   ```
5. Navigate to the `prompts` folder and Fill in text files as you need

## License

This project is licensed under the [MIT License](LICENSE).

## Support

If you find this project helpful, show your support by starring the repository.
