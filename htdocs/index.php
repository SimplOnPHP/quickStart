<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory Index</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        ul {
            list-style-type: none; /* Remove default bullets */
            padding: 0;
        }
        li {
            margin-bottom: 8px;
            padding: 5px;
            border-left: 3px solid #ccc; /* Add a visual cue */
        }
        li:hover {
            background-color: #f0f0f0;
            border-left-color: #3498db;
        }
        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .no-dirs {
            color: #777;
        }
    </style>
</head>
<body>

    <h1>Projects</h1>

    <?php
    // Define the current directory
    $current_dir = '.'; // '.' represents the current directory

    // Get a list of all items in the current directory
    // Use glob() with GLOB_ONLYDIR to get only directories
    $directories = glob($current_dir . '/*', GLOB_ONLYDIR);

    // Check if any directories were found
    if (!empty($directories)) {
        echo '<ul>'; // Start an unordered list

        // Loop through the directories found
        foreach ($directories as $dir) {
            // Get just the directory name (remove the './' if present)
            $dir_name = basename($dir);

            // Output a list item with a link to the directory
            // Use htmlspecialchars to prevent potential XSS issues if directory names contain special characters
            echo '<li><a href="' . htmlspecialchars($dir_name, ENT_QUOTES, 'UTF-8') . '/">'
               . htmlspecialchars($dir_name, ENT_QUOTES, 'UTF-8')
               . '</a></li>';
        }

        echo '</ul>'; // End the unordered list
    } else {
        // Display a message if no subdirectories are found
        echo '<p class="no-dirs">No subdirectories found in this location.</p>';
    }
    ?>

</body>
</html>