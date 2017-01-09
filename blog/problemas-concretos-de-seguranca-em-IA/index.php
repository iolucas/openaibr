<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Problemas Concretos na Segurança de IA</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index,follow,archive">
    <meta property="og:locale" content="en_us">
    <meta property="og:title" content="Concrete AI safety problems">
    <meta property="og:url" content="https://openai.com/blog/concrete-ai-safety-problems/">
    <meta property="og:site_name" content="OpenAI">
    <meta property="og:type" content="website">
    <meta property="og:description" content=" We (along with researchers from Berkeley and Stanford) are co-authors on today's paper led by Google Brain researchers, Concrete Problems in AI Safety. The paper explores many research problems around ensuring that modern machine learning systems operate as intended. (The problems are very practical, and we've already seen some being integrated into OpenAI Gym.) 

">    

    
    <meta property="og:image" content="https://openai.com/assets/social-8a6bde705feb6c4073a948e6aa1fd346bb34d02677d4a699c9f173f7060b57b1.jpg">
    
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1400">
    <meta property="og:image:height" content="700">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@openai">
    <meta name="twitter:url" content="https://openai.com/blog/concrete-ai-safety-problems/">
    <meta name="twitter:title" content="Concrete AI safety problems">
    <meta name="twitter:description" content=" We (along with researchers from Berkeley and Stanford) are co-authors on today's paper led by Google Brain researchers, Concrete Problems in AI Safety. The paper explores many research problems around ensuring that modern machine learning systems operate as intended. (The problems are very practical, and we've already seen some being integrated into OpenAI Gym.) 

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
          <h1 class='Post-title'>Problemas Concretos na Segurança de IA</h1>
          <div class='Post-meta'>
            <span class="Post-author">Paul Christiano e Greg Brockman</span>
            <span class="Post-date">21 de Junho de 2016</span>
          </div>
        </div>
              
      
        <p> Nós (juntamente com pesquisadores de Berkeley e Stanford) somos co-autores no artigo de hoje, liderado por pesquisadores do Google Brain, <a href="https://arxiv.org/abs/1606.06565">Problemas Concretos na Segurança de IA</a>. O artigo explora muitos problemas de pesquisa em torno de assegurar que sistemas modernos de machine learning operem como pretendido. (Os problemas são muito práticos, e já vimos alguns sendo integrados no <a href="https://gym.openai.com/envs#safety">OpenAI Gym</a>.) </p>      
      
      
      
<p> O avanço da IA necessita que se crie sistemas de IA mais inteligentes, mas também exige a prevenção de acidentes &mdash; ou seja, garantir que os sistemas de AI façam o que as pessoas realmente querem que eles façam. Há um foco crescente na  <a href="http://futureoflife.org/background/benefits-risks-of-artificial-intelligence/">pesquisa de segurança</a> dentro da comunidade de machine learning, como um recente <a href="https://intelligence.org/files/Interruptibility.pdf">artigo</a> da <a href="https://deepmind.com/">DeepMind</a> e da <a href="https://www.fhi.ox.ac.uk/">FHI</a>. Ainda assim, muitos pesquisadores de machine learning têm se questionado quanta pesquisa de segurança pode ser feita hoje. </p>

<hr />

<p> Os autores discutem cinco áreas: </p>

<ul>    
    
<li> <strong>Exploração segura.</strong> <i>Podem os agentes de <a href="http://karpathy.github.io/2016/05/31/rl/">reinforcement learning</a> (RL) aprender sobre seu ambiente sem executar ações catastróficas?</i> Por exemplo, pode um agente de RL aprender a navegar em um ambiente sem nunca cair de uma borda? </li>
        
    
    
<li> <strong>Robustez à uma mudança distribucional.</strong> <i> Podem os sistemas de machine learning ser robustos a mudanças na distribuição de dados, ou pelo menos falhar graciosamente? </i> Por exemplo, podemos construir <a href="https://www.tensorflow.org/versions/r0.9/tutorials/deep_cnn/index.html">classificadores de imagem</a> que indiquem a incerteza apropriada quando são mostrados novos tipos de imagens, em vez de tentarem confiantemente usar seu modelo aprendido <a href="http://arxiv.org/abs/1412.6572">potencialmente inaplicável</a>? </li>
    
    
    
    
<li> <strong>Evitar efeitos colaterais negativos.</strong> <i> Podemos transformar a  <a href="https://webdocs.cs.ualberta.ca/~sutton/book/ebook/node9.html">função de recompensa</a> de um agente RL para evitar efeitos indesejáveis no ambiente? </i> Por exemplo, podemos construir um robô que mova um objeto enquanto evita bater algo ou quebrar alguma coisa, sem programar manualmente uma penalidade separada para cada possível mau comportamento? </li>
    
    <li> <strong>Evitando "hacking de recompensa" e "<a href="http://www.agroparistech.fr/mmip/maths/laurent_orseau/papers/ring-orseau-AGI-2011-delusion.pdf">wireheading</a>”.</strong> <i> Podemos evitar que os agentes "alterem" suas funções de recompensa, como distorcer suas observações? </i> Por exemplo, podemos treinar um agente RL para minimizar o número de superfícies sujas em um edifício, sem fazer com que ele evite procurar superfícies sujas ou crie novas superfícies sujas para limpar? </li>
        
<li> <strong>Supervisão escalável.</strong> <i>Podem os agentes de RL eficientemente atingir objetivos para os quais o feedback é muito caro?</i> Por exemplo, podemos construir um agente que tenta limpar uma sala da maneira que o usuário seja mais feliz, mesmo que o feedback do usuário seja muito raro tivermos que usar aproximações baratas (como a presença de sujeira visível) durante o treinamento? A divergência entre aproximações baratas e o que realmente nos interessa é uma fonte importante de risco de acidente. </li>
</ul>

<hr />
      
<p> Muitos dos problemas não são novos, mas o artigo os explora no contexto de sistemas de ponta. Esperamos que eles inspirem mais pessoas a trabalharem em pesquisas de segurança de IA, seja <a href="https://jobs.lever.co/openai">na OpenAI</a> ou em qualquer outro lugar. </p>
      
<p> Estamos particularmente animados em participar deste artigo como uma colaboração interinstitucional. Nós entendemos que colaborações amplas na segurança de IA permitirão que todos construam sistemas de machine learning melhores. <a href="https://gitter.im/openai/research">Nos informe</a> se você tem um artigo futuro que você gostaria de colaborar! </p>


        
      </div>
      
    </div>
  </div>
</div>
</div>

    

<?php include '../../scripts.html.php'; ?>
  </body>
</html>