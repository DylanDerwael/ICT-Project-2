<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titel ?></title>
    <link type="text/css" media="screen" rel="stylesheet" href="/deOpvoedingswinkel/css/src/layout.css"/> 
    <script type="text/javascript" src="/deOpvoedingswinkel/javascript/toggle.js"></script>
    <script type="text/javascript" src="/deOpvoedingswinkel/javascript/jquery.js"></script>
</head>

<body>  
            <header>
                <?php echo $header;?>
            </header>
        
            <div class="content">
                <?php print_r ($html);?>
            </div>
        
            <footer>
                <?php echo $footer;?>
            </footer>
</body>
</html>
 
