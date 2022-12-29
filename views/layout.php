 <!DOCTYPE html>
<html>
<head>
    <title>Mi sitio web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a href="/" class="navbar-brand h1">FW</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
<!--                <li>second</li>
                <li>third</li>-->
            </ul>

        </div>
    </nav>
    
    <div class="container">
        The content of the document......
        <div class="row">
            <?php echo $content; ?>
        </div>
    </div>
</body>

</html> 