# AI Assistants Maker
This repository helps you create AI assistants.

## Features
- Easily engineer AI prompts & assistants.
- Create prompts & assistants that meet your expectations.

## Installation

1. Clone the repository or download it:
    ```shell
    git clone https://github.com/mohammedellihr/ai-assistants-maker
    ```
2. Navigate to the project directory:
    ```shell
    cd ai-assistants-maker
    ```
3. Open your web browser and navigate to:
    ```
    http://localhost/ai-assistants-maker
    ```
4. You will see a list of AI Assistants, and you will have one AI Assistant available:
    ```shell
    - Simple AI Assistant
    ```

## Getting Started

1. Copy and paste the folder `simple-ai-assistant` inside the `assistants` folder.
2. Inside the `assistants` folder, you will now have:
    ```shell
    - simple-ai-assistant
    - simple-ai-assistant2
    ```
3. Navigate to the `simple-ai-assistant2` folder and you will find the following files:
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

    $role = "Brand name generator";
    $input = "brand category or specific industry/market targeting";
    $action = "he want to improve";
    $process = "generation and Provide a list of 10 potential names along with a brief explanation of why each one is suitable for this specific brand";
    ```
## License

This project is licensed under the [MIT License](LICENSE).