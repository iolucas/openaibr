
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>OpenAI Blog</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index,follow,archive">
    <meta property="og:locale" content="en_us">
    <meta property="og:title" content="OpenAI Blog">
    <meta property="og:url" content="https://openai.com/blog/">
    <meta property="og:site_name" content="OpenAI">
    <meta property="og:type" content="website">
    <meta property="og:description" content="OpenAI is a non-profit artificial intelligence research company.">    

    
    <meta property="og:image" content="https://openai.com/assets/social-8a6bde705feb6c4073a948e6aa1fd346bb34d02677d4a699c9f173f7060b57b1.jpg">
    
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1400">
    <meta property="og:image:height" content="700">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@openai">
    <meta name="twitter:url" content="https://openai.com/blog/">
    <meta name="twitter:title" content="OpenAI Blog">
    <meta name="twitter:description" content="OpenAI is a non-profit artificial intelligence research company.">
    
    
    <meta name="twitter:image" content="https://openai.com/assets/social-8a6bde705feb6c4073a948e6aa1fd346bb34d02677d4a699c9f173f7060b57b1.jpg">


    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/1b9ff7da-9bc0-4849-80e5-eeee396a0b17.css"/>
    <link type="text/css" rel="stylesheet" href="https://openai.com/assets/shared-34b0931c40d8e24dc7b7dbe1db15e28061648524c809a05cfa824d983b0e9271.css">
    
    
    <link rel="icon" href="https://openai.com/assets/favicon-81f16c8d5fcc93e1b02354b72b40abb680deb71081fa467625154ccf471883dc.ico">
    <link rel="shortcut icon" href="https://openai.com/assets/favicon-81f16c8d5fcc93e1b02354b72b40abb680deb71081fa467625154ccf471883dc.ico">
    <link rel="apple-touch-icon" href="https://openai.com/assets/favicon-b52807aa8dda8e2badc657cccbdd1d44f388941a3c10522ba682098881d7c4ed.png">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://openai.com/feed.xml" />
</head>

  <body class=''>

    
    <?php include '../header.html.php'; ?>

    <div class="container Post">
      <div class='row center-xs'>
      <div class="col-xs-12
                  col-sm-11
                  col-md-8
                  col-lg-8">

          <?php 
          
            $posts = array();
                
            //Lets populate $posts array
          
            //Find post dirs
            foreach(scandir('.') as $dir) {
                //Avoid detection of current and previous directories and non directories
                if($dir == '.' || $dir == '..' || !is_dir($dir))
                    continue;
                
                //Scan every dir inside the current post to find meta data
                foreach(scandir($dir) as $post) {
                    if($post != 'meta.txt')
                        continue;
                    
                    //Create post array
                    $postArr = array($dir);
                    
                    //Open metafile
                    $metaFile = fopen($dir . "/meta.txt", "r");
                    //If we can open it
                    if ($metaFile) {
                        //For each line found, append its content to the post array
                        while (($line = fgets($metaFile)) !== false) {
                            array_push($postArr, $line);
                        }

                        //close file when ends dealing with it
                        fclose($metaFile);
                        //Push the post array data to the posts array
                        array_push($posts, $postArr);
                    } else {
                        // error opening the file.
                    } 
                }
            }
          
            //Must sort array to posts order
            function cmp($a, $b) {
                return (int)$b[4] - (int)$a[4];
            }
          
            usort($posts, "cmp");
          
          ?>
          
            <?php foreach($posts as $post): ?>
                <?php if(count($post) == 5): ?>
                    <div class="PostList-entry">
                        <a href="<?php echo $_SERVER['REQUEST_URI'] . $post[0] ?>">
                            <h2><?php echo $post[1] ?></h2>
                            <p><?php echo $post[2] ?></p>
                            <span class="PostList-date"><?php echo $post[3] ?></span>
                        </a>
                    </div>
                    <hr>
                <?php endif; ?>
            <?php endforeach; ?>
          

        
      </div>
    </div>
    </div>


    

    <script src="https://code.jquery.com/jquery-3.0.0.slim.min.js"></script>
    <script type="text/javascript" src="https://openai.com/assets/vendor/modernizr-custom-9284246420bb04fb025de4b571801f20627a4b2d64a5d143c4a34da521521ce3.js"></script>
    <script type="text/javascript" src="https://openai.com/assets/dynamics.min-cc3c8750e369bde68e8eb7d8ebbc02d0aa01bce65b829d1d9b6ee5278bf08307.js"></script>
    <script type="text/javascript" src="https://openai.com/assets/scrollTo-08357a32c68e56243cf6b56c54092a5ffcd90090fea48bb7d0e09980a5cc26f0.js"></script>
<!--
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-71156606-1', 'auto');
      ga('send', 'pageview');
    </script>
-->
    
    
    <!-- 1 -->
  </body>
</html>