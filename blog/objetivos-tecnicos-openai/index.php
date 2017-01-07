
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Objetivos técnicos da OpenAI</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index,follow,archive">
    <meta property="og:locale" content="en_us">
    <meta property="og:title" content="OpenAI technical goals">
    <meta property="og:url" content="https://openai.com/blog/openai-technical-goals/">
    <meta property="og:site_name" content="OpenAI">
    <meta property="og:type" content="website">
    <meta property="og:description" content=" OpenAI’s mission is to build safe AI, and ensure AI's benefits are
  as widely and evenly distributed as possible. We’re trying to build
  AI as part of a larger community, and we want to share our plans and
  capabilities along the way. We’re also working to solidify our
  organization's governance structure and will share our thoughts on
  that later this year. 

">    

    
    <meta property="og:image" content="https://openai.com/assets/social-8a6bde705feb6c4073a948e6aa1fd346bb34d02677d4a699c9f173f7060b57b1.jpg">
    
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1400">
    <meta property="og:image:height" content="700">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@openai">
    <meta name="twitter:url" content="https://openai.com/blog/openai-technical-goals/">
    <meta name="twitter:title" content="OpenAI technical goals">
    <meta name="twitter:description" content=" OpenAI’s mission is to build safe AI, and ensure AI's benefits are
  as widely and evenly distributed as possible. We’re trying to build
  AI as part of a larger community, and we want to share our plans and
  capabilities along the way. We’re also working to solidify our
  organization's governance structure and will share our thoughts on
  that later this year. 

">
    
    
    <meta name="twitter:image" content="https://openai.com/assets/social-8a6bde705feb6c4073a948e6aa1fd346bb34d02677d4a699c9f173f7060b57b1.jpg">


    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/1b9ff7da-9bc0-4849-80e5-eeee396a0b17.css"/>
    <link type="text/css" rel="stylesheet" href="https://openai.com/assets/shared-34b0931c40d8e24dc7b7dbe1db15e28061648524c809a05cfa824d983b0e9271.css">
    
    <link type="text/css" rel="stylesheet" href="https://openai.com/assets/blog/2016-06-20-openai-technical-goals-65eeb71e383c33acbbb8cc77b8912633060f66f91d40fb03a1da6a4c1edeb06a.css">
    
    
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
          <h1 class='Post-title'>Objetivos técnicos da OpenAI</h1>
          <div class='Post-meta'>
            <span class="Post-author">Ilya Sutskever, Greg Brockman, Sam Altman, Elon Musk</span>
            <span class="Post-date">20 de Junho de 2016</span>
          </div>
        </div>
      
      
        
        <p class='lead'> A missão da OpenAI é criar IAs seguras e assegurar que os benefícios da IA sejam tão amplamente e tão distribuídos quanto possível. Estamos tentando construir uma IA como parte de uma comunidade maior, e queremos compartilhar nossos planos e capacidades ao longo do caminho. Também estamos trabalhando para consolidar a estrutura de governança da nossa organização e compartilharemos nossas idéias sobre isso ainda este ano. </p>

<hr>
      

<h2> Nossa métrica </h2>

<p> Definir uma métrica para inteligência é complicado, mas precisamos de uma para medir o nosso progresso e focar nossa pesquisa. Estamos, portanto, construindo uma métrica ativa que mede quão bem um agente pode atingir o objetivo pretendido do usuário em uma ampla gama de ambientes. </p>

</div>

  <!-- Start card -->
  <div class="col-xs-12
              col-sm-12
              col-md-9
              col-lg-9">
    <div class='TechnicalGoal
                TechnicalGoal--1'>

      <h2 id="goal1" name="goal1"><span>Objetivo 1:</span> Medir o nosso progresso</h2>

    </div>
  </div>
  <!-- End card -->

  <div class="col-xs-12
              col-sm-11
              col-md-8
              col-lg-8">


<p> A métrica consistirá em uma variedade de ambientes do <a href="https://gym.openai.com">OpenAI Gym</a> com um <a href="https://gym.openai.com/docs#spaces">espaço</a> de observação e ação unificado
  (para que um único agente possa ser executado em todos eles), incluindo jogos, robótica e tarefas baseadas em linguagem. Nossa implementação evoluirá ao longo do tempo e manteremos a comunidade atualizada ao longo do caminho.</p>

<hr>
      
      
      
<h2> Nossa pesquisa </h2>

<p> Uma fração significativa da nossa capacidade de pesquisa está sendo gasta em pesquisa fundamental. Estaremos sempre desenvolvendo e testando novas idéias, especialmente aquelas que não se encaixam perfeitamente em nossa visçao de mundo atual. Isso é importante &mdash; nossas idéias atuais não serão suficientes para atingir nosso objetivo de longo prazo. </p>

<p> Também formamos equipes em torno de projetos específicos. A intenção não é apenas para resolver esses problemas, mas para desenvolver algoritmos de aprendizagem geral no processo. Esses algoritmos, por sua vez, nos ajudarão a criar agentes que sejam mais capazes de acordo com nossa métrica. Esses projetos são: </p>

  </div>

  <!-- Start card -->
  <div class="col-xs-12
              col-sm-12
              col-md-9
              col-lg-9">
    <div class='TechnicalGoal
                TechnicalGoal--2'>

      <h2 id="goal2" name="goal2"><span>Objetivo 2:</span> Construir um robô doméstico</h2>

    </div>
  </div>
  <!-- End card -->

  <div class="col-xs-12
              col-sm-11
              col-md-8
              col-lg-8">
      
      

  <p>
    Estamos trabalhando para permitir que um robô físico (que possa ser comprado, não fabricado pela OpenAI) realize tarefas domésticas básicas. <a href="https://en.wikipedia.org/wiki/Simultaneous_localization_and_mapping">Existem</a> <a href="https://en.wikipedia.org/wiki/Motion_planning">técnicas</a> para tarefas específicas, mas acreditamos que os algoritmos de aprendizagem podem eventualmente ser <a href="http://www.bloomberg.com/features/2015-preschool-for-robots/">confiáveis</a> o <a href="http://www.theverge.com/2016/3/9/11186940/google-robotic-arms-neural-network-hand-eye-coordination">suficiente</a>
    para criar um robô de uso geral. De forma geral, a robótica é um bom campo de teste para muitos desafios em IA. </li>
  </p>

  </div>

  <!-- Start card -->
  <div class="col-xs-12
              col-sm-12
              col-md-9
              col-lg-9">
    <div class='TechnicalGoal
                TechnicalGoal--3'>

      <h2 id="goal3" name="goal3"><span>Objetivo 3:</span> Construir um agente com uma compreensão útil da linguagem natural</h2>

    </div>
  </div>
  <!-- End card -->

  <div class="col-xs-12
              col-sm-11
              col-md-8
              col-lg-8">

  <p>
    Planejamos construir um agente que possa executar uma tarefa complexa especificada por linguagem e pedir esclarecimentos sobre a tarefa se ela for ambígua. Hoje, existem algoritmos promissores para tarefas de linguagem supervisionada, como <a href="http://arxiv.org/pdf/1503.08895.pdf">question</a> <a href="https://arxiv.org/pdf/1601.01705v4.pdf">answering</a>,
    <a href="http://arxiv.org/pdf/1603.06042.pdf">syntactic</a> <a href="https://arxiv.org/pdf/1412.7449.pdf">parsing</a>
    e
    <a href="http://arxiv.org/pdf/1409.3215.pdf">machine</a> <a href="https://arxiv.org/pdf/1409.0473.pdf">translation</a> mas não existe nenhum para metas lingüísticas mais avançadas, como a capacidade de realizar uma conversa, a capacidade de entender completamente um documento, e a capacidade de seguir instruções complexas em linguagem natural. Esperamos desenvolver novos algoritmos de aprendizagem e paradigmas para enfrentar esses problemas.
  </p>

  </div>

  <!-- Start card -->
  <div class="col-xs-12
              col-sm-12
              col-md-9
              col-lg-9">
    <div class='TechnicalGoal
                TechnicalGoal--4'>

      <h2 id="goal4" name="goal4"><span>Objetivo 4:</span> Resolver uma grande variedade de jogos usando um único agente</h2>

    </div>
  </div>
  <!-- End card -->

  <div class="col-xs-12
              col-sm-11
              col-md-8
              col-lg-8">
      
      (Estamos inspirados no trabalho pioneiro da DeepMind, que produziu resultados impressionantes nessa área nos últimos anos).


  <p> Em nossa métrica inicial, pretendemos treinar um agente capaz de resolver qualquer jogo. Os jogos são mini-mundos virtuais que são muito diversos, e aprender a jogar jogos rapidamente e bem exigirá avanços significativos em <a href="/blog/generative-models">generative models</a>
    e <a href="http://karpathy.github.io/2016/05/31/rl/">reinforcement
    learning</a>. (Estamos inspirados no trabalho pioneiro 
    da <a href="https://deepmind.com/">DeepMind</a>, que produziu <a href="http://www.nature.com/nature/journal/v529/n7587/full/nature16961.html">resultados</a> <a href="http://www.nature.com/nature/journal/v518/n7540/full/nature14236.html">impressionantes</a> nessa área nos últimos anos.) </li>
</p>

<hr />
      

<p> Nossos projetos e pesquisas fundamentais têm núcleos compartilhados, de modo que o progresso em qualquer deles é susceptível de beneficiar os outros. Cada um capta um aspecto diferente da resolução de problemas, e foi escolhido por seu potencial para mover significativamente nossa métrica. </p>

<p> Estamos apenas começando nesses projetos, e os detalhes podem mudar à medida que ganhamos dados adicionais. Também esperamos adicionar novos projetos ao longo do tempo. </p>

<!--
<p> If you’re excited about any of the above,
  please <a href="https://jobs.lever.co/openai">join us</a> (or just
  join our <a href="https://gitter.im/openai/research">community chat</a>!) </p>-->


</div><!-- ./Col -->
</div><!-- ./Row -->
</div><!-- ./Container -->

<div class='Post-Actions-Container'>
  <div class='container'>
    <div class='row center-xs'>
      <div class="col-xs-12
                  col-sm-11
                  col-md-8
                  col-lg-8">
          
          
  <p>
    Se você está animado com qualquer um dos assuntos acima, gostaríamos de ouvir de você, seja <a href="https://gitter.im/openai/research">discutindo com outros</a> na comunidade OpenAI ou <a href="https://jobs.lever.co/openai">juntando-se a nós</a> em tempo integral.
  </p>

  <div class='Post-Actions'>
    <a href='https://gitter.im/openai/research'>Entre no chat da comunidade</a>
    <a href='https://jobs.lever.co/openai'>Veja as vagas disponíveis</a>
  </div>

    </div><!-- ./Col -->
  </div><!-- ./Row -->
</div><!-- ./Container -->

</div>

        
      </div>
      
    </div>
  </div>
</div>
</div>

    

<?php include '../../scripts.html.php'; ?>
    
    
    <!-- 1 -->
  </body>
</html>