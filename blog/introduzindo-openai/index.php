<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Introdução ao OpenAI</title>

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
    <link type="text/css" rel="stylesheet" href="https://openai.com/assets/shared-34b0931c40d8e24dc7b7dbe1db15e28061648524c809a05cfa824d983b0e9271.css">
    
    
    <link rel="icon" href="https://openai.com/assets/favicon-81f16c8d5fcc93e1b02354b72b40abb680deb71081fa467625154ccf471883dc.ico">
    <link rel="shortcut icon" href="https://openai.com/assets/favicon-81f16c8d5fcc93e1b02354b72b40abb680deb71081fa467625154ccf471883dc.ico">
    <link rel="apple-touch-icon" href="https://openai.com/assets/favicon-b52807aa8dda8e2badc657cccbdd1d44f388941a3c10522ba682098881d7c4ed.png">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://openai.com/feed.xml" />
</head>

  <body class=''>

    

    
<?php include '../../header.html.php'; ?>

<div class='Post'>
<div class="container">
  <div class="row
              center-xs">

  <div class="col-xs-12
              col-sm-11
              col-md-8
              col-lg-8">
      
        <div class="Post-header">
          <h1 class='Post-title'>Introdução ao OpenAI</h1>
          <div class='Post-meta'>
            <span class="Post-author">Greg Brockman, Ilya Sutskever, e a equipe OpenAI</span>
            <span class="Post-date">11 DE DEZEMBRO DE 2015</span>
          </div>
        </div>
      
        <p class='Post-lead'>OpenAI é uma organização de pesquisa de inteligência artificial sem fins lucrativos. Nossa meta é avançar a inteligência digital de forma a beneficiar a humanidade como um todo, sem restrições de gerar retorno financeiro.</p>      

      <p>Como nossa pesquisa é livre de obrigações financeiras, nós podemos focar melhor em um impacto humano positivo. Nós acreditamos que a IA deva ser uma extenção dos desejos humanos individuais e, no espírito da liberdade, distribuída o mais ampla e uniformemente possível.</p>
      
      <p>O resultado deste empreendimento é incerto e o trabalho é difícil, mas acreditamos que o objetivo e a estrutura estão certos. Esperamos que isto seja o que mais importa na área.</p>

<hr>

<h2>Background</h2>
      
      <p>A inteligência artificial sempre foi um campo surpreendente. Nos início, as pessoas pensavam que resolver certas tarefas (como o xadrez) nos levaria a descobrir algoritmos de inteligência de nível humano. No entanto, a solução para cada tarefa acabou por ser muito menos geral do que as pessoas estavam esperando (como fazer uma pesquisa sobre um grande número de movimentos).</p>
      
      <p>Os últimos anos têm mantido outro sabor de surpresa. Uma técnica de AI explorada por décadas, deep learning, começou a alcançar resultados de última geração em uma ampla variedade de tipos de problemas. No deep learning, ao invés de codificar um novo algoritmo para cada problema, você projeta arquiteturas que podem se converter em uma ampla gama de algoritmos com base nos dados que você fornecer.</p>




<p>Esta abordagem resultou em excelentes resultados com problemas de reconhecimento de padrões, como o reconhecimento de objetos em imagens, tradução automática e reconhecimento de fala. Mas também começamos a ver como poderia ser para computadores serem <a href="http://www.wired.co.uk/news/archive/2015-09/01/art-algorithm-recreates-paintings" title="This algorithm can create an imitation Van Gogh in 60 minutes">criativos</a>, <a href="http://www.theguardian.com/technology/2015/jun/18/google-image-recognition-neural-network-androids-dream-electric-sheep" title="Yes, androids do dream of electric sheep">sonhar</a>, e <a href="http://www.bloomberg.com/features/2015-preschool-for-robots/" title="This Preschool is for Robots">experimentar o mundo</a>.</p>


<hr>

<h2>Futuro</h2>

<p>Os sistemas de IA hoje têm capacidades impressionantes, mas limitadas. Ao que parece que vamos continuar evoluindo mesmo dentro desses limites, e no caso extremo, eles alcançarão o desempenho humano em praticamente todas as tarefas intelectuais. É difícil imaginar o quanto a IA a nível humano pode beneficiar a sociedade, e é igualmente difícil imaginar o quanto isso poderia prejudicar a sociedade se construída ou usada incorretamente.</p>      
    


<hr>

<h2>OpenAI</h2>
      
<p>Devido à surpreendente história da IA, é difícil prever quando a IA ao nível humano poderá estar ao alcance. Quando isso acontecer, será importante ter uma instituição de pesquisa condutora que possa priorizar um bom resultado acima do seu próprio interesse.</p>
      
<p>Nós esperamos desenvolver a OpenAI para ser tal instituição. Como uma organização sem fins lucrativos, nosso objetivo é construir valor para todos ao invés de acionistas. Os pesquisadores serão fortemente encorajados a publicar seu trabalho, seja como artigos, posts ou código, e nossas patentes (se houver) serão compartilhadas com o mundo. Colaboraremos livremente com outras pessoas em muitas instituições e esperamos trabalhar com empresas para pesquisar e implantar novas tecnologias.</p>


      
      
<p>O diretor de pesquisa da OpenAI é <a href="http://www.cs.toronto.edu/~ilya/" title="Ilya Sutskever">Ilya Sutskever</a>, um dos especialistas mundiais em machine learning. Nosso CTO é <a href="https://twitter.com/gdb" title="Greg Brockman on Twitter">Greg Brockman</a>, anteriormente o CTO da Stripe. Os outros membros fundadores do grupo são engenheiros de pesquisa de classe mundial e cientistas: <a href="http://www.trevorblackwell.com/#" title="Trevor Blackwell">Trevor Blackwell</a>, <a href="https://vickicheung.com/" title="Vicki Cheung">Vicki Cheung</a>, <a href="http://cs.stanford.edu/people/karpathy/" title="Andrej Karpathy">Andrej Karpathy</a>, <a href="http://dpkingma.com/" title="Durk Kingma">Durk Kingma</a>, <a href="http://www.eecs.berkeley.edu/~joschu/" title="John Schulman">John Schulman</a>, <a href="https://www.linkedin.com/in/pamela-vagata-8396074" title="Pamela Vagata">Pamela Vagata</a>, e <a href="http://cs.nyu.edu/~zaremba/" title="Wojciech Zaremba">Wojciech Zaremba</a>. Pieter Abbeel, Yoshua Bengio, Alan Kay, Sergey Levine, e Vishal Sikka são conselheiros do grupo. Os co-presidentes da OpenAI são Sam Altman and Elon Musk.</p>      
      
<p>Sam, Greg, Elon, Reid Hoffman, Jessica Livingston, Peter Thiel, Amazon Web Services (AWS), Infosys, e <a href="https://ycr.org/" title="YC Research">YC Research</a> estão doando para apoiar a OpenAI. No total, esses financiadores comprometeram 1 bilhão de dolares, embora esperemos gastar apenas uma pequena fração disso nos próximos anos.</p>

<p>Você pode nos seguir no twitter em <a href="https://twitter.com/openai" title="Follow OpenAI on Twitter">@openai</a>.</p>

        
      </div>
      
    </div>
  </div>
</div>
</div>

    

<?php include '../../scripts.html.php'; ?>
    
    
    <!-- 1 -->
  </body>
</html>