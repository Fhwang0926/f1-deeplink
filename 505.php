<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="resource/index.css">
    <link rel="stylesheet" href="resource/null.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample HTML Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header, nav, main, footer {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ddd;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <a href="index.html">
        <section>
            <h2>index</h2>
        </section>
      </a>
      <section>
        <?php
            phpinfo1();
        ?>
    </section>
</body>
</html>