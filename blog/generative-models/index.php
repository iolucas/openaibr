
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Generative Models</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index,follow,archive">
    <meta property="og:locale" content="en_us">
    <meta property="og:title" content="Generative Models">
    <meta property="og:url" content="https://openai.com/blog/generative-models/">
    <meta property="og:site_name" content="OpenAI">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Our first research results are now live: four projects that share
a common theme of enhancing or using generative models, a branch
of unsupervised learning techniques in machine learning.
">    

    
    <meta property="og:image" content="https://openai.com/assets/social/generative-models-facebook-3125e6bc7e49b92b823b63d32c05a1e2aeffd66a6a6fc404314dfa7123ffeedf.jpg">
    
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1400">
    <meta property="og:image:height" content="700">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@openai">
    <meta name="twitter:url" content="https://openai.com/blog/generative-models/">
    <meta name="twitter:title" content="Generative Models">
    <meta name="twitter:description" content="Our first research results are now live: four projects that share
a common theme of enhancing or using generative models, a branch
of unsupervised learning techniques in machine learning.
">
    
    
    <meta name="twitter:image" content="https://openai.com/assets/social/generative-models-twitter-f6acd7ffc0577f3a7f196ccb415588f4456bfefb58545cbe892b03dd7207a727.jpg">


    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/1b9ff7da-9bc0-4849-80e5-eeee396a0b17.css"/>
    <link type="text/css" rel="stylesheet" href="https://openai.com/assets/shared-34b0931c40d8e24dc7b7dbe1db15e28061648524c809a05cfa824d983b0e9271.css">
    
    <link type="text/css" rel="stylesheet" href="https://openai.com/assets/research-post/2016-06-16-generative-models-c93c5fdd221a87051877fd26bbd0000046dc96e63398cac89db037350c4e53df.css">
    
    
    <link rel="icon" href="https://openai.com/assets/favicon-81f16c8d5fcc93e1b02354b72b40abb680deb71081fa467625154ccf471883dc.ico">
    <link rel="shortcut icon" href="https://openai.com/assets/favicon-81f16c8d5fcc93e1b02354b72b40abb680deb71081fa467625154ccf471883dc.ico">
    <link rel="apple-touch-icon" href="https://openai.com/assets/favicon-b52807aa8dda8e2badc657cccbdd1d44f388941a3c10522ba682098881d7c4ed.png">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://openai.com/feed.xml" />
</head>

  <body class=''>

    
    <main class='PageWrap'>
    

    
<?php include '../../header.html.php'; ?>


<div class='ResearchHeader'>
  <div class='container-fluid'>
    <div class='row
                center-xs
                x-middle-xs'>
      <div class='col-xs-12
                  col-sm-6
                  col-md-6'>
        
        <div class='ResearchCover-container'>

        <div class='ResearchCover'>
          <div class='ResearchCover-content'>
            <div class='ResearchCover-header'>
              <div class='ResearchCover-meta
                          ResearchCover-meta--release'>Pesquisa #1</div>
              <h1 class='ResearchCover-title'>Generative Models</h1>
            </div>
            <div class="ResearchCover-footer">
                
<figure class='CoverImage'>
    <img src="https://openai.com/assets/research/generative-models/cluster-08c5cf2c5eb8900665ddd96a81b3148b4b81daa2a232708e0dfe1b6ff0f88abe.svg">
    <!--<div class='CoverImage-img--generativeModel'></div>-->
</figure>


              <div class='ResearchCover-footerContent'>
                <div class='ResearchCover-meta
                            ResearchCover-meta--date'>16 de Junho de 2016</div>
                <div class='ResearchCover-meta'>Andrej Karpathy, Pieter Abbeel, Greg Brockman, Peter Chen, Vicki Cheung, Rocky Duan, Ian Goodfellow, Durk Kingma, Jonathan Ho, Rein Houthooft, Tim Salimans, John Schulman, Ilya Sutskever, e Wojciech Zaremba.</div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
      <div class="col-xs-12
                  col-sm-6
                  col-md-6
                  ResearchIntro-container">

        <div class='Post Post--ResearchHeader'>
          
<p class='Post-lead'>
<!-- If you update this, make sure to update `excerpt` above, too. -->
Nossos primeiros resultados de pesquisa estão no ar: <a href="#contributions">quatro projetos</a> que compartilham um tema comum de aprimorar ou usar generative models, um ramo de técnicas de <a href="https://www.quora.com/What-is-the-difference-between-supervised-and-unsupervised-learning-algorithms">unsupervised learning</a> em machine learning.</p>

            
<p>
Além de descrever o nosso trabalho, este post irá dizer-lhe um pouco mais sobre generative models: o que são, por que eles são importantes, e qual a direção que eles podem estar caminhando.
</p>


        </div>

        <!--</div>-->

      </div>
    </div>
  </div>
</div>

<div class="container Post">
  <div class="row
              center-xs">

  <div class="col-xs-12
              col-sm-11
              col-md-8
              col-lg-8">
      
          

<figure class='Decoration-1'>
  <img src="https://openai.com/assets/research/generative-models/cluster-2-d4d1679aeb6edaeda51ed6bbca7a0adbd19bf96b98aa0b5a157b7b4ae720a740.svg">
</figure>

<figure class='Decoration-2'>
  <img src="https://openai.com/assets/research/generative-models/cluster-08c5cf2c5eb8900665ddd96a81b3148b4b81daa2a232708e0dfe1b6ff0f88abe.svg">
</figure>






<p class='Post-lead'>
Uma das nossas principais aspirações na OpenAI é desenvolver algoritmos e técnicas que dêem aos computadores uma compreensão do nosso mundo.
</p>

<p>
  É fácil esquecer o quanto você sabe sobre o mundo:
  você entende que ele é composto de ambientes 3D, objetos que se movem, colidem, interagem; Pessoas que andam, conversam e pensam;
  Animais que pastam, voam, correm ou latem; Monitores que exibem informações codificadas em linguagem sobre o clima, quem ganhou um jogo de basquete,
  ou o que aconteceu em 1970.
</p>
      
      
<p>
  Esta enorme quantidade de informação está lá fora e, em grande medida, facilmente acessível &mdash;
  seja no mundo físico dos átomos ou no mundo digital de bits.
  A única parte complicada é desenvolver modelos e algoritmos que podem analisar e compreender este tesouro de dados.
</p>

      
<p>
  <strong>Generative models é uma das abordagens mais promissoras para este objetivo</strong>. Para treinar um generative model primeiro coletamos uma grande quantidade de dados em algum domínio (por exemplo, pensamos em milhões de imagens, frases ou sons, etc.) e treinamos um modelo para gerar dados como esse. A intuição por trás desta abordagem segue uma famosa citação de <a href="https://en.wikipedia.org/wiki/Richard_Feynman">Richard
  Feynman</a>:
</p>

</div>

<!--<div class='Blockquote'>-->
  <div class="col-xs-12">
    <div class='Blockquote-body'>“O que eu não posso criar, eu não entendo.”</div>
  </div>
  <div class="col-xs-12
              col-sm-11
              col-md-8
              col-lg-8">
    <footer class='Blockquote-footer'>&mdash;Richard Feynman</footer>
  </div>
<!--</div>-->

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">
      
    
<p>
  O truque é que as neural networks que usamos como generative models
  têm um número de parâmetros significativamente menor do que a quantidade de dados em que os treinamos, então os modelos são forçados a descobrir e internalizar eficientemente a essência dos dados afim de gerá-los.
</p>

    
<p>
  Generative models têm muitas <a href="#going-forward">aplicações</a> de curto prazo. Mas, a longo prazo, eles possuem o potencial de aprender automaticamente as características naturais de um conjunto de dados, sejam categorias ou dimensões ou algo completamente diferente.
</p>

<hr>

<h2>Gerando imagens</h2>

    
<p>
  Vamos fazer isso mais concreto com um exemplo. Suponha que tenhamos uma grande coleção de imagens, como 1,2 milhões de imagens do conjunto de dados da <a href="http://www.image-net.org/">ImageNet</a> (mas tenha em mente que isso poderia eventualmente ser uma grande coleção de imagens ou vídeos da internet ou robôs). Se redimensionamos cada imagem para ter largura e altura de 256 (como normalmente é feito), nosso conjunto de dados é um grande bloco de pixels de
  <code>1,200,000x256x256x3</code> (cerca de 200GB). Como exemplo, aqui estão algumas imagens desse conjunto de dados:
</p>

</div>

<div class='col-xs-12
            col-sm-12
            '>

  <figure class="Post-photo" style='max-width:839px;'>
    <div class='Post-photoContainer Post-photoContainer--setHeight' style='padding-bottom:31.94%;'>
      <img class="" src="https://openai.com/assets/research/generative-models/example-photos-ab1e5de77a9002c3a86aae101a67d82cf5c897007fa8ef557262e42a6b416fba.jpg" width='839' height='268' />
      
    </div>
  </figure>

</div>


<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">

        
<p>
 Essas imagens são exemplos do aspecto visual de nosso mundo e nos referimos a elas como "amostras da distribuição de dados real". Agora construímos o nosso generative model que gostaríamos de treinar para gerar imagens como essas a partir do zero. Um generative model neste caso poderia ser uma grande neural network que produz imagens e nós nos referimos a elas como "amostras vindas do modelo". </p>

<hr>
<h2>DCGAN</h2>
    

<p> Um modelo recente é a <a href="https://github.com/Newmu/dcgan_code">DCGAN network</a> de Radford et al. (mostrado abaixo). Esta rede toma como entrada 100 números aleatórios desenhados a partir de uma <a href="https://en.wikipedia.org/wiki/Uniform_distribution_(continuous)">distribuição uniforme</a> (nos referimos a estes como um <i>código</i>, ou <i>variáveis latentes</i>, em vermelho) e produz uma imagem (neste caso <code>64x64x3</code> imagens à direita, em verde). Como o código é alterado de forma incremental, as <a href="https://github.com/Newmu/dcgan_code#walking-from-one-point-to-another-in-bedroom-latent-space">imagens geradas</a> também são &mdash; isso mostra que o modelo aprendeu características para descrever como o mundo se parece, ao invés de apenas memorizar alguns exemplos. </p>
    
    
<p> A rede (em amarelo) é constituída por componentes padrões de <a href="http://cs231n.github.io/convolutional-networks/">convolutional neural network</a>, como <a href="http://datascience.stackexchange.com/questions/6107/what-are-deconvolutional-layers">camadas deconvolucionais</a> (reverso de camadas convolucionais), <a href="http://cs231n.github.io/convolutional-networks/#fc">camadas totalmente conectadas</a>, etc.:
</p>

</div>

<div class='col-xs-12
            col-sm-12
            '>

  <figure class="Post-photo">
    <div class='Post-photoContainer Post-photoContainer--noBackground'>
      <img src="https://openai.com/assets/research/generative-models/gencnn-afe135ff8d2725325a22455a488562b0e1cb7ac6a3f60b3cecb373fd043eb202.svg">
      
    </div>
  </figure>

</div>


<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">
    
    
<p>
DCGAN é inicializado com pesos aleatórios, então um código aleatório conectado à rede geraria uma imagem completamente aleatória. No entanto, como você pode imaginar, a rede tem milhões de parâmetros que podemos ajustar, e o objetivo é encontrar uma configuração desses parâmetros que faz as amostras geradas a partir de códigos aleatórios se parecerem com os dados de treinamento. Ou, de outra forma, queremos que a distribuição do modelo coincida com a distribuição de dados reais no espaço das imagens.
<p>

<hr>

<h2> Treinando um generative model </h2>

    
<p>
  Suponha que usamos uma rede recém-inicializada para gerar 200 imagens, cada vez começando com um código aleatório diferente. A questão é: como ajustar os parâmetros da rede para encorajá-la a produzir amostras um pouco mais convincentes no futuro? Observe que não estamos em um ambiente supervisionado simples e não temos nenhum <i>alvo desejado</i> para nossas 200 imagens geradas;  Nós apenas queremos que eles pareçam reais. </p>    
    
    
<p> Uma abordagem inteligente em torno deste problema é seguir a abordagem <a href='http://arxiv.org/abs/1406.2661'>Generative Adversarial Network (GAN)</a>. Nesse caso introduzimos uma segunda rede <i>discriminadora</i> (normalmente uma convolutional neural network padrão) que tenta classificar se uma imagem de entrada é real ou gerada. Por exemplo, poderíamos alimentar as 200 imagens geradas e 200 imagens reais para o discriminador e treiná-lo como um classificador padrão para distinguir entre as duas origens. Mas, além disso &mdash; e aqui está o truque &mdash; também podemos <a href="http://neuralnetworksanddeeplearning.com/chap2.html">backpropagar</a> através tanto do discriminador e do gerador para encontrar como devemos alterar os parâmetros do gerador para tornar suas 200 amostras um pouco mais difíceis de classificar para o discriminador. Essas duas redes estão, portanto, presas em uma batalha: o discriminador está tentando distinguir imagens reais de imagens falsas e o gerador está tentando criar imagens que fazem o discriminador pensar que elas são reais. No final, a rede do gerador está produzindo imagens que são indistinguíveis das imagens reais para o discriminador.
</p>
    
    
<p>
Existem algumas outras abordagens para combinar essas distribuições que vamos discutir brevemente abaixo. Mas antes de chegarmos lá, abaixo estão duas animações que mostram amostras de um generative model para dar um senso visual sobre o processo de treinamento.
Em ambos os casos as amostras do gerador começam com ruídos e caóticas, e ao longo do tempo convergem para imagens mais plausíveis.
</p>


</div>

<div class='PhotoGroup PhotoGroup--alignCenter'>
  <div class='container-fluid
              container-fluid--noPadding'>
  <div class='row'>



  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/learning-vae.gif
    1: 320x320-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:320px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/learning-vae-d09214c18c65c97ee61d03a5d40c863b52462d49ea975669970fcdb1537382fc.gif"
            width='320'
            height='320'>
        
      </div>
      
      
        <figcaption style='max-width: 320px'><a href="#vae">VAE</a> aprendendo a gerar imagens (tempo logaritmo)
             </figcaption>
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/learning-gan.gif
    1: 320x320-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:320px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/learning-gan-ffc4c09e6079283f334b2485ae663a6587d937a45ebc1d8aeac23a67889a3cf5.gif"
            width='320'
            height='320'>
        
      </div>
      
      
        <figcaption style='max-width: 320px'><a href="#gan">GAN</a> aprendendo a gerar imagens (tempo linear)</figcaption>
      
    </figure>

  </div>




  </div>
</div>
</div>

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">
        

<p>
  Isso é empolgante &mdash; essas neural networks estão aprendendo como o mundo se parece visualmente! Estes modelos geralmente têm apenas cerca de 100 milhões de parâmetros, então uma rede treinada com a ImageNet tem que <a href="http://prize.hutter1.net/">comprimir</a> (com perdas) 200GB de dados de pixels em 100MB de pesos. Isso a incentiva a descobrir as características mais salientes dos dados: por exemplo, ela provavelmente vai aprender que os pixels próximos provavelmente terão a mesma cor, ou que o mundo é composto de bordas horizontais ou verticais ou blobs de cores diferentes. Eventualmente, o modelo pode descobrir muitas regularidades mais complexas: que existem certos tipos de fundos, objetos, texturas, que ocorrem em certos arranjos prováveis ou que se transformam de certa forma ao longo do tempo em vídeos.
</p>

<hr>

<h2>Formulação mais geral</h2>

<p>
  Matematicamente, nós pensamos em um conjunto de dados <span class="MathJax_Preview"></span>

  <script type="math/tex" id="MathJax-Element-1">x_1, \ldots, x_n</script>  como amostras de uma distribuição de dados real <span class="MathJax_Preview"></span>

  <script type="math/tex" id="MathJax-Element-3">p(x)</script>. Na imagem abaixo, a região azul mostra a parte do espaço de imagem que, com uma alta probabilidade (acima de algum limite) contém imagens reais, e os pontos pretos indicam nossos dados (cada um é uma imagem no nosso conjunto de dados). Agora, nosso modelo também descreve uma distribuição <span class="MathJax_Preview"></span>
  <script type="math/tex" id="MathJax-Element-4">\hat{p}_{\theta}(x)</script>  (verde) que é definida implicitamente pegando pontos de uma <a href="https://en.wikipedia.org/wiki/Normal_distribution">distribuição Gaussiana</a> unitária (vermelha) e mapeando-os através de uma neural network (determinística)  &mdash; nosso generative model (amarelo). </p>

    

    
<p> Nossa rede é uma função com parâmetros <span class="MathJax_Preview"></span><script type="math/tex" id="MathJax-Element-5">\theta</script>,
  e ajustar esses parâmetros irá ajustar a distribuição gerada de imagens. Nosso objetivo é, então, encontrar parâmetros <span class="MathJax_Preview"></span>
  <script type="math/tex" id="MathJax-Element-6">\theta</script> que produzam uma distribuição que se aproxime da distribuição de dados real (por exemplo, tendo uma pequena perda de <a href='https://en.wikipedia.org/wiki/Kullback%E2%80%93Leibler_divergence'>divergência KL</a><a href="https://en.wikipedia.org/wiki/Loss_function"></a>). Portanto, você pode imaginar a distribuição verde começando aleatoriamente e, em seguida, o processo de treinamento iterativamente alterando os parâmetros <span class="MathJax_Preview"></span>

  <script type="math/tex" id="MathJax-Element-7">\theta</script> para esticar e espremê-lo para melhor corresponder à distribuição azul.
</p>


</div>

<div class='col-xs-12
            col-sm-12
            '>

  <figure class="Post-photo">
    <div class='Post-photoContainer
                Post-photoContainer--noBackground'
           style='max-width:608px'>
      <img src="https://openai.com/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg"
           width='608'
           height='211'>
      
    </div>
  </figure>

</div>

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">


<hr>
    

<h2> Três abordagens de generative models </h2>

<p>A maioria dos generative models têm essa configuração básica, mas diferem nos detalhes. Aqui estão três exemplos populares de abordagens de generative models para lhe dar uma noção da variação:</p>
<ul>

    
    
  <li id="gan">
    <a href='http://arxiv.org/abs/1406.2661'>Generative Adversarial Networks (GANs)</a>, que já discutimos acima, colocam o processo de treinamento como um jogo entre duas redes distintas: uma rede de geradores (como visto acima) e uma segunda rede discriminativa que tenta classificar amostras como provenientes da distribuição real <span class="MathJax_Preview"></span>

    <script type="math/tex" id="MathJax-Element-10">p(x)</script> ou a distribuição do modelo <span class="MathJax_Preview"></span>


    <script type="math/tex" id="MathJax-Element-11">\hat{p}(x)</script>. Cada vez que o discriminador percebe uma diferença entre as duas distribuições, o gerador ajusta ligeiramente seus parâmetros para eliminar essa diferença, até que no final (em teoria) o gerador reproduza exatamente a distribuição de dados real e o discriminador estiver adivinhando aleatoriamente, incapaz de encontrar uma diferença.
  </li>
    
    
    
  <li id="vae"><a href='https://arxiv.org/abs/1312.6114'>Variational Autoencoders (VAEs)</a> nos permitem formalizar este problema no framework de <a href="https://en.wikipedia.org/wiki/Graphical_model">modelos gráficos probabilísticos</a> onde estamos maximizando um <a href="https://en.wikipedia.org/wiki/Variational_Bayesian_methods">limite inferior</a> na probabilidade logaritma dos dados.</li>
    

    
    
  <li>Autoregressive models como <a href='http://arxiv.org/abs/1601.06759'>PixelRNN</a> treinam uma rede que modela a distribuição condicional de cada pixel individual dado os pixels anteriores (à esquerda e ao topo). Isso é semelhante a conectar os pixels da imagem em uma <a href='http://karpathy.github.io/2015/05/21/rnn-effectiveness/'>char-rnn</a>, mas as RNNs funcionam tanto horizontalmente e verticalmente sobre a imagem ao invés de apenas em uma seqüência de caracteres de uma dimensão.</li>
    
    
</ul>
    
    
<p>Todas essas abordagens têm seus prós e contras. Por exemplo, Variational Autoencoders nos permitem realizar tanto a aprendizagem como a inferência bayesiana eficiente em sofisticados modelos gráficos probabilísticos com variáveis latentes (por exemplo veja <a href='https://arxiv.org/abs/1502.04623'>DRAW</a>, ou <a href='http://arxiv.org/abs/1603.08575'>Attend Infer Repeat</a> para dicas de modelos recentes relativamente complexos). No entanto, as amostras geradas tendem a ser ligeiramente desfocadas. GANs geram atualmente as imagens mais nítidas, mas são mais difíceis de otimizar devido à dinâmica de treinamento instável. PixelRNNs têm um processo de treinamento muito simples e estável (<a href="https://en.wikipedia.org/wiki/Softmax_function">softmax loss</a>) e atualmente geral a melhor probabilidade logaritma (ou seja, plausibilidade dos dados gerados). No entanto, eles são relativamente ineficientes durante a amostragem e não fornecem facilmente <i>códigos</i> simples de baixa dimensão para imagens. Todos estes modelos são áreas ativas de pesquisa e estamos ansiosos para ver como eles se desenvolverão no futuro!</p>

<hr>

<h2 id="contributions"><a name='header-c847' class='md-header-anchor '></a>Nossas contribuições recentes</h2>
<p>Estamos bastante entusiasmados com generative models na OpenAI, e acabamos de lançar quatro projetos que avançam o estado da arte. Para cada uma dessas contribuições também estamos lançando um relatório técnico e o código-fonte.</p>

    
    
<p id="improving-gans"><a href="https://arxiv.org/abs/1606.03498"><strong>Melhorando as GANs</strong></a> (<a href="https://github.com/openai/improved-gan">código</a>). Primeiramente, como mencionado acima GANs são uma família muito promissora de generative models porque, ao contrário de outros métodos, eles produzem imagens muito limpas e nítidas e aprendem códigos que contêm informações valiosas sobre essas texturas. No entanto, as GANs são formulados como um jogo entre duas redes e é importante (e complicado!) mantê-las em equilíbrio: por exemplo, eles podem oscilar entre soluções, ou o gerador tem uma tendência a colapso. Neste trabalho, Tim Salimans, Ian Goodfellow, Wojciech Zaremba e colegas introduziram algumas novas técnicas para tornar o treinamento da GAN mais estável. Estas técnicas nos permitem escalar as GANs e obter boas amostras de <code>128x128</code> da ImageNet:</p>


</div>

<div class='PhotoGroup '>
  <div class='container-fluid
              container-fluid--noPadding'>
  <div class='row'>



  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/gans-1.jpg
    1: 491x491-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:491px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/gans-1-7d46c196a02a77f1d88868da3a0ffde017494712cbf5008998fba224126918db.jpg"
            width='491'
            height='491'>
        
      </div>
      
      
        <figcaption style='max-width: 491px'>Imagens Reais (ImageNet)
             </figcaption>
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/gans-2.jpg
    1: 491x491-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:491px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/gans-2-6345b04cb02f720a95ea4cb9483e2fd5a5f6e46ec6ea5bbefadf002a010cda82.jpg"
            width='491'
            height='491'>
        
      </div>
      
      
        <figcaption style='max-width: 491px'>Imagens Geradas</figcaption>
      
    </figure>

  </div>




  </div>
</div>
</div>

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">
    

<p>As nossas amostras <a href="https://www.cs.toronto.edu/~kriz/cifar.html">CIFAR-10</a> também são bastante nítidas - os trabalhadores da Amazon Mechanical Turk podem distinguir as nossas amostras dos dados reais com uma taxa de erro de 21,3% (50% seria uma suposição aleatória):</p>


</div>

<div class='PhotoGroup '>
  <div class='container-fluid
              container-fluid--noPadding'>
  <div class='row'>



  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/cifar10samples-1.jpg
    1: 484x484-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:484px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/cifar10samples-1-38125a079992216097dd6e6aff61f8f28c6531dd3e7d9861ce5e12889ad98650.jpg"
            width='484'
            height='484'>
        
      </div>
      
      
        <figcaption style='max-width: 484px'>Imagens Reais (CIFAR-10)
             </figcaption>
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/cifar10samples-2.jpg
    1: 484x484-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:484px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/cifar10samples-2-5f6f6c0616f4cf0e63817d2e857e1a4bedd5c9f28f6971ae9f427b37105c3a2f.jpg"
            width='484'
            height='484'>
        
      </div>
      
      
        <figcaption style='max-width: 484px'>Imagens Geradas</figcaption>
      
    </figure>

  </div>




  </div>
</div>
</div>

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">

<p>In addition to generating pretty pictures, we introduce an approach for <a href="https://en.wikipedia.org/wiki/Semi-supervised_learning">semi-supervised learning</a> with GANs that involves the discriminator producing an additional output indicating the label of the input. This approach allows us to obtain state of the art results on <a href="http://yann.lecun.com/exdb/mnist/">MNIST</a>, <a href="http://ufldl.stanford.edu/housenumbers/">SVHN</a>, and CIFAR-10 in settings with very few <a href="http://stackoverflow.com/questions/19170603/what-is-the-difference-between-labeled-and-unlabeled-data">labeled examples</a>. On MNIST, for example, we achieve 99.14% accuracy with only 10 labeled examples per class with a fully connected neural network &mdash; a result that’s very close to the best known results with fully supervised approaches using all 60,000 labeled examples. This is very promising because labeled examples can be quite expensive to obtain in practice.</p>
<p>Generative Adversarial Networks are a relatively new model (introduced only two years ago) and we expect to see more rapid progress in further improving the stability of these models during training.</p>

<p><a href='http://arxiv.org/abs/1606.04934'><strong>Improving VAEs</strong></a> (<a href='http://github.com/openai/iaf'>code</a>). In this work Durk Kingma and Tim Salimans introduce a flexible and computationally scalable method for improving the accuracy of <a href="https://www.cs.jhu.edu/~jason/tutorials/variational.html">variational inference</a>. In particular, most VAEs have so far been trained using crude <a href="http://www.cs.princeton.edu/courses/archive/spr06/cos598C/papers/chapter2.pdf">approximate posteriors</a>, where every latent variable is independent. <a href='http://arxiv.org/abs/1505.05770'>Recent extensions</a> have addressed this problem by conditioning each latent variable on the others before it in a chain, but this is computationally inefficient due to the introduced sequential dependencies. The core contribution of this work, termed <i>inverse autoregressive flow</i> (IAF), is a new approach that, unlike previous work, allows us to parallelize the computation of rich approximate posteriors, and make them almost arbitrarily flexible.</p>
<p>We show some example <code>32x32</code> image samples from the model in the image below, on the right. On the left are earlier samples from the <a href='https://arxiv.org/abs/1502.04623'>DRAW</a> model for comparison (vanilla VAE samples would look even worse and more blurry). The DRAW model was published only one year ago, highlighting again the rapid progress being made in training generative models.</p>



</div>

<div class='PhotoGroup '>
  <div class='container-fluid
              container-fluid--noPadding'>
  <div class='row'>



  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/vaecomp-1.jpg
    1: 414x414-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:414px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/vaecomp-1-ef39d772d04eb8e6f7676d4c7ecd927b08ffc63e88128ab45485fdc8a25f00e7.jpg"
            width='414'
            height='414'>
        
      </div>
      
      
        <figcaption style='max-width: 414px'>Generated from DRAW model
             </figcaption>
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/vaecomp-2.jpg
    1: 414x414-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:414px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/vaecomp-2-e5847333e4829244af9290a0501247a042e3327d9c55572f60fb03a8656c4ea4.jpg"
            width='414'
            height='414'>
        
      </div>
      
      
        <figcaption style='max-width: 414px'>Generated from a VAE trained with IAF</figcaption>
      
    </figure>

  </div>




  </div>
</div>
</div>

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">


<p><a href="https://arxiv.org/abs/1606.03657 "><strong>InfoGAN</strong></a> (<a href="https://github.com/openai/InfoGAN">code</a>). Peter Chen and colleagues introduce InfoGAN &mdash; an extension of GAN that learns disentangled and interpretable representations for images. A regular GAN achieves the objective of reproducing the data distribution in the model, but the layout and organization of the code space is <i>underspecified</i> &mdash; there are many possible solutions to mapping the unit Gaussian to images and the one we end up with might be intricate and highly entangled. The InfoGAN imposes additional structure on this space by adding new objectives that involve maximizing the <a href="https://en.wikipedia.org/wiki/Mutual_information">mutual information</a> between small subsets of the representation variables and the observation. This approach provides quite remarkable results. For example, in the images of 3D faces below we vary one continuous dimension of the code, keeping all others fixed. It&#39;s clear from the five provided examples (along each row) that the resulting dimensions in the code capture interpretable dimensions, and that the model has perhaps <i>understood</i> that there are camera angles, facial variations, etc., without having been told that these features exist and are important:


</div>

<div class='PhotoGroup '>
  <div class='container-fluid
              container-fluid--noPadding'>
  <div class='row'>



  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/infogan-1.jpg
    1: 389x197-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:389px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/infogan-1-6c55908a5aba179ce63cb4badeac0859cd8e7c8b8b4379cc51604d5de11fe78a.jpg"
            width='389'
            height='197'>
        
      </div>
      
      
        <figcaption style='max-width: 389px'>(a) Azimuth (pose)
             </figcaption>
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/infogan-2.jpg
    1: 389x197-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:389px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/infogan-2-069a9ff24c4194a444ba286980a5f2693446c1d8f42c2dc240da05fe48e0378d.jpg"
            width='389'
            height='197'>
        
      </div>
      
      
        <figcaption style='max-width: 389px'>(b) Elevation
             </figcaption>
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/infogan-3.jpg
    1: 389x197-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:389px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/infogan-3-20e68c4ad01bd22874596ec9b799f76865e89db6768d412c6d9f6e26e37e6823.jpg"
            width='389'
            height='197'>
        
      </div>
      
      
        <figcaption style='max-width: 389px'>(c) Lighting
             </figcaption>
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/infogan-4.jpg
    1: 389x197-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:389px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/infogan-4-c365dd84f656915bd0efb1a22d69a3caecdea5d8c9993a499230d792ce308d11.jpg"
            width='389'
            height='197'>
        
      </div>
      
      
        <figcaption style='max-width: 389px'>(d) Wide or Narrow</figcaption>
      
    </figure>

  </div>




  </div>
</div>
</div>

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">

<p>We also note that nice, disentangled representations have been achieved before (such as with <a href='https://arxiv.org/abs/1503.03167'>DC-IGN</a> by Kulkarni et al.), but these approaches rely on additional supervision, while our approach is entirely unsupervised.</p>

<hr>

<p>The next two recent projects are in a <a href="https://en.wikipedia.org/wiki/Reinforcement_learning">reinforcement learning</a> (RL) setting (another area of <a href="https://openai.com/blog/openai-gym-beta/">focus</a> at OpenAI), but they both involve a generative model component.</p>
<p><a href="http://arxiv.org/abs/1605.09674"><strong>Curiosity-driven Exploration in Deep Reinforcement Learning via Bayesian Neural Networks</strong></a> (<a href="https://github.com/openai/vime">code</a>). Efficient exploration in high-dimensional and continuous spaces is presently an unsolved challenge in reinforcement learning. Without effective exploration methods our agents <a href='http://karpathy.github.io/2016/05/31/rl/'>thrash around</a> until they randomly stumble into rewarding situations. This is sufficient in many simple toy tasks but inadequate if we wish to apply these algorithms to complex settings with high-dimensional action spaces, as is common in robotics. In this paper, Rein Houthooft and colleagues propose VIME, a practical approach to exploration using uncertainty on generative models. VIME makes the agent self-motivated; it actively seeks out surprising state-actions. We show that VIME can improve a range of <a href="https://en.wikipedia.org/wiki/Reinforcement_learning#Direct_policy_search">policy search</a> methods and makes significant progress on more realistic tasks with sparse rewards (e.g. scenarios in which the agent has to learn locomotion primitives without any guidance).</p>


</div>

<div class='PhotoGroup PhotoGroup--alignCenter'>
  <div class='container-fluid
              container-fluid--noPadding'>
  <div class='row'>



  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/vime-hier_320px.gif
    1: 320x320-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:320px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/vime-hier_320px-dbf8f4323b7d34155b592c4d4427b7338657ae781d6ce8f58b0fb66df56b01b8.gif"
            width='320'
            height='320'>
        
      </div>
      
      
        <figcaption style='max-width: 320px'>Policy trained with VIME
             </figcaption>
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/vime-trpo_hier_320px.gif
    1: 320x320-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:320px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/vime-trpo_hier_320px-295381b78a73932e2dfb2490786ff1031c0152973f405488b7ee73484862063d.gif"
            width='320'
            height='320'>
        
      </div>
      
      
        <figcaption style='max-width: 320px'>Policy trained with naive exploration</figcaption>
      
    </figure>

  </div>




  </div>
</div>
</div>

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">

<p>Finally, we would like to include a bonus fifth project: <a href="http://arxiv.org/abs/1606.03476"><strong>Generative Adversarial Imitation Learning</strong></a> (<a href="https://github.com/openai/imitation">code</a>), in which Jonathan Ho and colleagues present a new approach for <em>imitation learning</em>. Jonathan Ho is joining us at OpenAI as a summer intern. He did most of this work at Stanford but we include it here as a related and highly creative application of GANs to RL. The standard reinforcement learning setting usually requires one to design a reward function that describes the desired behavior of the agent. However, in practice this can sometimes involve expensive trial-and-error process to get the details right. In contrast, in imitation learning the agent learns from example demonstrations (for example provided by teleoperation in robotics), eliminating the need to design a reward function. </p>


</div>

<div class='PhotoGroup PhotoGroup--alignCenter'>
  <div class='container-fluid
              container-fluid--noPadding'>
  <div class='row'>



  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/gail-humanoid_ga_240_short.gif
    1: 320x320
             -->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:320px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/gail-humanoid_ga_240_short-1236eb78a0320b78a3e589a1c916d8203906c880843b5754fcc6402be0002b29.gif"
            width='320'
            height='320
             '>
        
      </div>
      
      
    </figure>

  </div>




  <div class='col-xs-12
              col-sm-6'>

    
    
<!--
    0: research/generative-models/gail-ant_ga_25_short.gif
    1: 320x320-->

    <figure class="Post-photo">
      <div class='Post-photoContainer
                  Post-photoContainer--noBackground'
            style='max-width:320px'>
            <!--/assets/research/generative-models/gen-c994c9370597f62edbce64af321e7186c41e8fcf4d7503ea876f8a6bdf901135.svg-->
        <img src="https://openai.com/assets/research/generative-models/gail-ant_ga_25_short-1f31274a548f6fda15396d607f74c323e1de2eb53ad9b3d9855d5f5c99600d25.gif"
            width='320'
            height='320'>
        
      </div>
      
      
    </figure>

  </div>




  </div>
</div>
</div>

<div class="col-xs-12
            col-sm-11
            col-md-8
            col-lg-8">

<p>Popular imitation approaches involve a two-stage pipeline: first learning a reward function, then running RL on that reward. Such a pipeline can be slow, and because it’s indirect, it is hard to guarantee that the resulting policy works well. This work shows how one can directly extract policies from data via a connection to GANs. As a result, this approach can be used to learn policies from expert demonstrations (without rewards) on hard <a href="https://gym.openai.com">OpenAI Gym</a> environments, such as <a href="https://gym.openai.com/envs/Ant-v1">Ant</a> and <a href="https://gym.openai.com/envs/Humanoid-v1">Humanoid</a>.</p>

<hr>

<h2 id="going-forward"><a name='header-c878' class='md-header-anchor '></a>Going forward</h2>
<p>Generative models are a rapidly advancing area of research. As we continue to advance these models and scale up the training and the datasets, we can expect to eventually generate samples that depict entirely plausible images or videos. This may by itself find use in multiple applications, such as on-demand generated art, or Photoshop++ commands such as &quot;make my smile wider&quot;. Additional presently known applications include <a href="https://math.berkeley.edu/~sethian/2006/Applications/ImageProcessing/noiseremoval.html">image denoising</a>, <a href="https://en.wikipedia.org/wiki/Inpainting">inpainting</a>, <a href="https://en.wikipedia.org/wiki/Super-resolution_imaging">super-resolution</a>, <a href="https://en.wikipedia.org/wiki/Structured_prediction">structured prediction</a>, <a href="https://en.wikipedia.org/wiki/Reinforcement_learning#Exploration">exploration</a> in reinforcement learning, and neural network <a href="http://image.diku.dk/shark/sphinx_pages/build/html/rest_sources/tutorials/algorithms/deep_denoising_autoencoder_network.html">pretraining</a> in cases where labeled data is expensive. </p>

<p> However, the deeper promise of this work is that, in the process of training generative models, we will endow the computer with an understanding of the world and what it is made up of.</p>

<script type="text/x-mathjax-config">
	MathJax.Hub.Config({
	  messageStyle: "none"
	});
</script>
<script type="text/javascript" async
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

        
      
    </div>
  </div>

</div>

    
    </main>
    
<?php include '../../scripts.html.php'; ?>

  </body>
</html>