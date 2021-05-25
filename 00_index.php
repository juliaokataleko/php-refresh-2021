<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Full Course</title>
    <style>

        * {
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .header {
            line-height: 3em;
            background-color: #ddd;
            font-size: 30px;
            font-weight: 900;
            margin-bottom: 1em;
        }

        .container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            padding: 0 14px;
        }

        a {
            color: #0066cc;
            text-decoration: none;
            font-size: 22px;
            display: block;
            margin-bottom: 5px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: 0.4s;
        }

        a:hover {
            background-color: #ddd;
        }

    </style>
</head>
<body>

    <div class="header">
        <div class="container">PHP Full Course</div> 
    </div>

    <div class="container">
        <?php

            // List all course files
            if ($handle = opendir('.')) {

                while (false !== ($entry = readdir($handle))) {

                    if ($entry != "." && $entry != "..") {
                        if($entry != ".git")
                            echo "<a href='$entry'>$entry</a><br>";
                    }

                }

                closedir($handle);
            }
        ?>
    </div>
    
</body>
</html>

