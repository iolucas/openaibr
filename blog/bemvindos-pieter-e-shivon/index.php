
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Introducing OpenAI</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index,follow,archive">
    <meta property="og:locale" content="en_us">
    <meta property="og:title" content="Introducing OpenAI">
    <meta property="og:url" content="https://openai.com/blog/introducing-openai/">
    <meta property="og:site_name" content="OpenAI">
    <meta property="og:type" content="website">
    <meta property="og:description" content="OpenAI is a non-profit artificial intelligence research company. Our goal is to advance digital intelligence in the way that is most likely to benefit humanity as a whole, unconstrained by a need to generate financial return.

">    

    
    <meta property="og:image" content="https://openai.com/assets/social-8a6bde705feb6c4073a948e6aa1fd346bb34d02677d4a699c9f173f7060b57b1.jpg">
    
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1400">
    <meta property="og:image:height" content="700">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@openai">
    <meta name="twitter:url" content="https://openai.com/blog/introducing-openai/">
    <meta name="twitter:title" content="Introducing OpenAI">
    <meta name="twitter:description" content="OpenAI is a non-profit artificial intelligence research company. Our goal is to advance digital intelligence in the way that is most likely to benefit humanity as a whole, unconstrained by a need to generate financial return.

">
    
    
    <meta name="twitter:image" content="https://openai.com/assets/social-8a6bde705feb6c4073a948e6aa1fd346bb34d02677d4a699c9f173f7060b57b1.jpg">


    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/1b9ff7da-9bc0-4849-80e5-eeee396a0b17.css"/>
    <link type="text/css" rel="stylesheet" href="/assets/shared-34b0931c40d8e24dc7b7dbe1db15e28061648524c809a05cfa824d983b0e9271.css">
    
    
    <link rel="icon" href="/assets/favicon-81f16c8d5fcc93e1b02354b72b40abb680deb71081fa467625154ccf471883dc.ico">
    <link rel="shortcut icon" href="/assets/favicon-81f16c8d5fcc93e1b02354b72b40abb680deb71081fa467625154ccf471883dc.ico">
    <link rel="apple-touch-icon" href="/assets/favicon-b52807aa8dda8e2badc657cccbdd1d44f388941a3c10522ba682098881d7c4ed.png">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="/feed.xml" />
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/4C09C459-F047-9C47-9475-97B0D0E31A2E/main.js" charset="UTF-8"></script></head>

  <body class=''>

    

    
<div class='Shared-Navigation'>
  <div class='container-fluid'>
    <div class='row'>

      <div class='col-xs-2'>
          <a href="/blog" title="OpenAI" class='Shared-Navigation-logo'>
            <img class="logo" src="/assets/shared/logo-2b9b8ab889a67a6b3abad6dd983774fe96449589f9d8dbffb71875349e038e1e.svg" width="63" height="23" alt="OpenAI" />
          </a>
      </div>
      <div class='col-xs-10'>
        <div class='Shared-Navigation-innerContainer'>
          <ul>
            <li><a class='Shared-Navigation-link' href="/about/" title="About OpenAI">About</a></li>
            <li><a class='Shared-Navigation-link' href="/blog/" title="The Blog">Blog</a></li>
            <li><a class='Shared-Navigation-link' href="/requests-for-research/" title="Requests for Research">Requests for Research</a></li>
          </ul>
         </div>
      </div>
    </div><!-- ./Row -->
  </div>
</div>


<div class='Post'>
<div class="container">
  <div class="row
              center-xs">

  <div class="col-xs-12
              col-sm-11
              col-md-8
              col-lg-8">
      
        <div class="Post-header">
          <h1 class='Post-title'>Introducing OpenAI</h1>
          <div class='Post-meta'>
            <span class="Post-author">Greg Brockman, Ilya Sutskever, and the OpenAI team</span>
            <span class="Post-date">December 11, 2015</span>
          </div>
        </div>
        
        <p class='Post-lead'>OpenAI is a non-profit artificial intelligence research company. Our goal is to advance digital intelligence in the way that is most likely to benefit humanity as a whole, unconstrained by a need to generate financial return.</p>

<p>Since our research is free from financial obligations, we can better focus on a positive human impact. We believe AI should be an extension of individual human wills and, in the spirit of liberty, as broadly and evenly distributed as possible.</p>

<p>The outcome of this venture is uncertain and the work is difficult, but we believe the goal and the structure are right. We hope this is what matters most to the best in the field.</p>

<hr>

<h2>Background</h2>

<p>Artificial intelligence has always been a surprising field. In the early days, people thought that solving certain tasks (such as chess) would lead us to discover human-level intelligence algorithms. However, the solution to each task turned out to be much less general than people were hoping (such as doing a search over a huge number of moves).</p>

<p>The past few years have held another flavor of surprise. An AI technique explored for decades, deep learning, started achieving state-of-the-art results in a wide variety of problem domains. In deep learning, rather than hand-code a new algorithm for each problem, you design architectures that can twist themselves into a wide range of algorithms based on the data you feed them.</p>

<p>This approach has yielded outstanding results on pattern recognition problems, such as recognizing objects in images, machine translation, and speech recognition. But we've also started to see what it might be like for computers to be <a href="http://www.wired.co.uk/news/archive/2015-09/01/art-algorithm-recreates-paintings" title="This algorithm can create an imitation Van Gogh in 60 minutes">creative</a>, to <a href="http://www.theguardian.com/technology/2015/jun/18/google-image-recognition-neural-network-androids-dream-electric-sheep" title="Yes, androids do dream of electric sheep">dream</a>, and to <a href="http://www.bloomberg.com/features/2015-preschool-for-robots/" title="This Preschool is for Robots">experience the world</a>.</p>


<hr>

<h2>Looking forward</h2>

<p>AI systems today have impressive but narrow capabilities. It seems that we'll keep whittling away at their constraints, and in the extreme case they will reach human performance on virtually every intellectual task. It's hard to fathom how much human-level AI could benefit society, and it's equally hard to imagine how much it could damage society if built or used incorrectly.</p>


<hr>

<h2>OpenAI</h2>

<p>Because of AI's surprising history, it's hard to predict when human-level AI might come within reach. When it does, it'll be important to have a leading research institution which can prioritize a good outcome for all over its own self-interest.</p>

<p>We're hoping to grow OpenAI into such an institution. As a non-profit, our aim is to build value for everyone rather than shareholders. Researchers will be strongly encouraged to publish their work, whether as papers, blog posts, or code,  and our patents (if any) will be shared with the world. We'll freely collaborate with others across many institutions and expect to work with companies to research and deploy new technologies.</p>

<p>OpenAI's research director is <a href="http://www.cs.toronto.edu/~ilya/" title="Ilya Sutskever">Ilya Sutskever</a>, one of the world experts in machine learning. Our CTO is <a href="https://twitter.com/gdb" title="Greg Brockman on Twitter">Greg Brockman</a>, formerly the CTO of Stripe. The group's other founding members are world-class research engineers and scientists: <a href="http://www.trevorblackwell.com/#" title="Trevor Blackwell">Trevor Blackwell</a>, <a href="https://vickicheung.com/" title="Vicki Cheung">Vicki Cheung</a>, <a href="http://cs.stanford.edu/people/karpathy/" title="Andrej Karpathy">Andrej Karpathy</a>, <a href="http://dpkingma.com/" title="Durk Kingma">Durk Kingma</a>, <a href="http://www.eecs.berkeley.edu/~joschu/" title="John Schulman">John Schulman</a>, <a href="https://www.linkedin.com/in/pamela-vagata-8396074" title="Pamela Vagata">Pamela Vagata</a>, and <a href="http://cs.nyu.edu/~zaremba/" title="Wojciech Zaremba">Wojciech Zaremba</a>. Pieter Abbeel, Yoshua Bengio, Alan Kay, Sergey Levine, and Vishal Sikka are advisors to the group. OpenAI's co-chairs are Sam Altman and Elon Musk.</p>

<p>Sam, Greg, Elon, Reid Hoffman, Jessica Livingston, Peter Thiel, Amazon Web Services (AWS), Infosys, and <a href="https://ycr.org/" title="YC Research">YC Research</a> are donating to support OpenAI. In total, these funders have committed $1 billion, although we expect to only spend a tiny fraction of this in the next few years.</p>

<p>You can follow us on Twitter at <a href="https://twitter.com/openai" title="Follow OpenAI on Twitter">@openai</a>.</p>

        
      </div>
      
    </div>
  </div>
</div>
</div>

    

    <script src="https://code.jquery.com/jquery-3.0.0.slim.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/modernizr-custom-9284246420bb04fb025de4b571801f20627a4b2d64a5d143c4a34da521521ce3.js"></script>
    <script type="text/javascript" src="/assets/dynamics.min-cc3c8750e369bde68e8eb7d8ebbc02d0aa01bce65b829d1d9b6ee5278bf08307.js"></script>
    <script type="text/javascript" src="/assets/scrollTo-08357a32c68e56243cf6b56c54092a5ffcd90090fea48bb7d0e09980a5cc26f0.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-71156606-1', 'auto');
      ga('send', 'pageview');
    </script>
    
    
    <!-- 1 -->
  </body>
</html>