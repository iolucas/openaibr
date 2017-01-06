<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>OpenAI Gym Beta</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index,follow,archive">
    <meta property="og:locale" content="en_us">
    <meta property="og:title" content="OpenAI Gym Beta">
    <meta property="og:url" content="https://openai.com/blog/openai-gym-beta/">
    <meta property="og:site_name" content="OpenAI">
    <meta property="og:type" content="website">
    <meta property="og:description" content=" We're releasing the public beta of OpenAI Gym, a toolkit for developing and comparing reinforcement learning (RL) algorithms. It consists of a growing suite of environments (from simulated robots to Atari games), and a site for comparing and reproducing results.

">    

    
    <meta property="og:image" content="https://openai.com/assets/social-8a6bde705feb6c4073a948e6aa1fd346bb34d02677d4a699c9f173f7060b57b1.jpg">
    
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1400">
    <meta property="og:image:height" content="700">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@openai">
    <meta name="twitter:url" content="https://openai.com/blog/openai-gym-beta/">
    <meta name="twitter:title" content="OpenAI Gym Beta">
    <meta name="twitter:description" content=" We're releasing the public beta of OpenAI Gym, a toolkit for developing and comparing reinforcement learning (RL) algorithms. It consists of a growing suite of environments (from simulated robots to Atari games), and a site for comparing and reproducing results.

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
          <h1 class='Post-title'>OpenAI Gym Beta</h1>
          <div class='Post-meta'>
            <span class="Post-author">Greg Brockman, John Schulman</span>
            <span class="Post-date">27 DE ABRIL DE 2016</span>
          </div>
        </div>

        <p class='Post-lead'> Nós estamos liberando o beta público do <a href="https://gym.openai.com/">OpenAI Gym</a>, um toolkit para desenvolver e comparar algoritmos de <a href="#rl">reinforcement learning</a> (RL). Ele consiste de um crescente conjunto de <a href="https://gym.openai.com/envs">ambientes</a> (de <a href="https://gym.openai.com/envs/Humanoid-v0">simulação de robôs</a> a jogos de  <a href="https://gym.openai.com/envs/MsPacman-v0">Atari</a>), e um site para <a href="https://gym.openai.com/envs/CartPole-v0#feed">comparar e reproduzir</a> resultados.</p>


<p>OpenAI Gym é compatível com algoritmos escritos em qualquer framework, como <a href="https://www.tensorflow.org/">Tensorflow</a> e <a href="https://github.com/Theano/Theano">Theano</a>. Os ambientes são escritos em Python, mas nós iremos em breve facilitar o uso em qualquer linguagem. Originalmente, nós criamos o OpenAI Gym como uma ferramenta para acelerar nossa própria pesquisa em RL. Nós esperamos que ele seja útil da mesma forma para o resto da comunidade. </p>

<hr>

<h2> Começando </h2>

<p> Se você quiser começar agora, você pode usar nosso <a href="https://gym.openai.com/docs">tutorial</a>. Você também pode ajudar enquanto aprende <a href="https://gym.openai.com/evaluations/eval_uMw59DyCQe6J75lxtMPA">reproduzindo</a> <a href="https://gym.openai.com/evaluations/eval_lEi8I8v2QLqEgzBxcvRIaA">um</a> <a href="https://gym.openai.com/evaluations/eval_glkKKInTm6GlmcOQRZuhQ">resultado</a>. </p>

<hr>

<h2 id="rl" name="rl"> Por quê RL? </h2>

<p> Reinforcement learning (RL) é o subcampo de machine learning envolvido com tomada de decisão e controle motor. Ele estuda como um agente pode aprender como alcançar objetivos em um ambiente complexo e incerto. É empolgante por duas razões: </p>

<ul class="list">

    
    
  <li> <strong>RL é muito geral, englobando todos os problemas que envolvem fazer uma seqüência de decisões:</strong> por exemplo, controlar os motores de um robô para que ele seja capaz de <a href="https://gym.openai.com/envs/Humanoid-v0">correr</a> e <a href="https://gym.openai.com/envs/Hopper-v0">saltar</a>, tomar decisões de negócios como preços e gerenciamento de inventário, ou jogar <a href="https://gym.openai.com/envs#atari">video games</a> e <a href="https://gym.openai.com/envs#board_game">jogos de tabuleiro</a>. RL pode até ser aplicado a problemas de supervised learning com saídas <a href="http://arxiv.org/abs/1511.06732">sequenciais</a> <a href="http://arxiv.org/abs/0907.0786">ou</a> <a href="http://arxiv.org/abs/1601.01705">estruturadas</a>. </li>

    
    
<li> <strong>Algoritmos de RL começaram a obter bons resultados em muitos ambientes difíceis.</strong> RL tem uma longa história, mas até recentes avanços no deep learning, ele precisava de uma engenharia específica para cada problema. Os <a href="https://deepmind.com/dqn.html">resultados do Atari</a> no DeepMind, <a href="http://news.berkeley.edu/2015/05/21/deep-learning-robot-masters-skills-via-trial-and-error/">BRETT</a> do grupo de <a href="/blog/welcome-pieter-and-shivon">Pieter Abbeel</a>, e o <a href="https://googleblog.blogspot.com/2016/01/alphago-machine-learning-game-go.html">AlphaGo</a> todos usaram algoritmos de RL profundos que não fizeram muitos pressupostos sobre seu ambiente e, portanto, podem ser aplicados em outras problemas.</li>
</ul>

<p> No entanto, a pesquisa de RL é desacelerada por dois fatores: </p>
      
      
<ul class="list">
<li><strong>A necessidade de melhores benchmarks.</strong> Em supervised learning, o progresso tem sido impulsionado por grandes conjuntos de dados rotulados como <a href="http://www.image-net.org/">ImageNet</a>. Em RL, o equivalente mais próximo seria uma grande e diversificada coleção de ambientes. No entanto, os conjuntos de ambientes de RL open-source existentes não têm variedade suficiente, e muitas vezes são difíceis de configurar e usar. </li>
        
<li><strong>Falta de padronização dos ambientes utilizados nas publicações.</strong> Diferenças sutis na definição do problema, como a função de recompensa ou o conjunto de ações, podem alterar drasticamente a dificuldade de uma tarefa. Esta questão torna difícil a reprodução de pesquisas publicadas e comparação dos resultados de diferentes artigos. </li>
</ul>

<p> OpenAI Gym é uma tentativa de resolver esses dois problemas. </p>


<hr>

<h2> Os ambientes </h2>

<p>
O OpenAI Gym fornece um conjunto diversificado de ambientes que variam de fácil a difícil e envolvem muitos tipos diferentes de dados. Estamos começando com as seguintes coleções:
</p>
<ul class="list">
<li>
    
<a href="https://gym.openai.com/envs#classic_control">Controle clássico</a> e <a href="https://gym.openai.com/envs#toy_text">brincadeira do texto</a>: tarefas completas em pequena escala, principalmente da literatura sobre RL. Eles estão aqui para você começar.
</li>
    
<li>
<a href="https://gym.openai.com/envs#algorithmic">Algorítmica</a>: execute cálculos como adição de números de vários dígitos e reversão de seqüências. Alguém pode dizer que essas tarefas são fáceis para um computador. O desafio é aprender esses algoritmos puramente a partir de exemplos. Estas tarefas têm a interessante propriedade de ser fácil de variar sua dificuldade variando apenas o comprimento da seqüência.
</li>
<li>

<a href="https://gym.openai.com/envs#atari">Atari</a>: jogue os jogos clássicos de Atari. Integramos o <a href="http://www.arcadelearningenvironment.org">Arcade Learning Environment</a> (que teve um grande impacto na pesquisa de reinforcement learning) em um formato <a href="https://github.com/openai/gym#atari">fácil de instalar</a>.
</li>
    
    
<li>
<a href="https://gym.openai.com/envs#board_games">Jogos de tabuleiro</a>: jogue Go em tabuleiros 9x9 e 19x19. Jogos de dois jogadores são fundamentalmente diferentes das outros modos que incluímos, porque há um adversário jogando contra você.
Em nosso lançamento inicial, há um oponente fixo fornecido pela <a href="http://pachi.or.cz/">Pachi</a>, e poderemos adicionar outros adversários mais tarde (patches bem-vindos!). Também provavelmente expandiremos o OpenAI Gym para ter suporte de primeira classe para jogos com vários jogadores.
</li>
    
<li>
<a href="https://gym.openai.com/envs#mujoco">Robôs 2D e 3D</a>: controle um robô em uma simulação. Essas tarefas usam a physics engine <a href="http://www.mujoco.org/">MuJoCo</a>, que foi projetada para uma rápida e precisa simulação de robôs. Estão incluídos alguns ambientes de um recente <a href="http://arxiv.org/abs/1604.06778">benchmark</a> feito por pesquisadores da UC Berkeley (que incidentalmente se <a href="/blog/equipe-mais-mais/">juntaram a nós</a> neste verão). MuJoCo é um software proprietário, mas oferece <a href="https://www.roboti.us/trybuy.html">licenças de teste gratuitas</a>.
</li>
</ul>
            
<p>
Com o tempo, planejamos expandir bastante esse conjunto de ambientes. Contribuições da comunidade são mais do que bem-vindas.
</p>
            
<p>
Cada ambiente tem um número de versão (como <a href="https://gym.openai.com/envs/Hopper-v0"><strong>Hopper-v0</strong></a>). Se precisarmos alterar um ambiente, vamos conflitar o número da versão, definindo uma tarefa inteiramente nova. Isso garante que os resultados em um determinado ambiente serão sempre comparáveis.
</p>

<hr>

<h2> Avaliações </h2>
            
<p> Facilitamos o <a href="https://gym.openai.com/docs#uploading">upload de resultados</a> para o OpenAI Gym. No entanto, optamos por não criar tabelas de classificação tradicionais. O que importa para a pesquisa não é a sua pontuação (é possível burlar os resultados dando overfit ou criando as soluções manualmente para certas tarefas), mas sim a generalidade da sua técnica. </p>
      
      
<p> Estamos começando mantendo uma <a href="https://gym.openai.com/docs#review">lista curada</a> de contribuições que dizem algo interessante sobre capacidades algorítmicas. A longo prazo, queremos que esta cura seja um esforço da comunidade e não algo de nossa propriedade. Nós necessariamente teremos que descobrir os detalhes ao longo do tempo, e gostaríamos que a sua <a href="https://gym.openai.com/docs#help">ajuda</a> para fazê-lo. </p>

<hr /> 
      
      
  <p> Queremos que o OpenAI Gym seja um esforço comunitário desde o início. Começamos a trabalhar com parceiros para reunir recursos em torno do OpenAI Gym: </p>

  <ul class="list">
    <li><a href="http://www.nvidia.com/">NVIDIA</a>: <a href="https://devblogs.nvidia.com/parallelforall/train-reinforcement-learning-agents-openai-gym">perguntas e respostas</a> técnicas com John. </li>
    <li> <a href="http://www.nervanasys.com/">Nervana</a>: implementação de uma <a href="http://www.nervanasys.com/openai">DQN OpenAI Gym agent</a>. </li>
      
    <li> <a href="https://aws.amazon.com/">Amazon Web Services (AWS)</a>: vouchers de crédito de 250 dólares para usuários selecionados do OpenAI Gym. Se você tiver uma avaliação demonstrando a promessa do seu algoritmo e estiver com recursos limitados para escalá-lo, <a href="mailto:gym@openai.com">contate nos</a> para um voucher. (Enquanto durarem os estoques!) </li>
  </ul>

  <p> Durante o beta público, estamos pedindo feedback sobre como tornar isso uma ferramenta ainda melhor para a pesquisa. Se você gostaria de ajudar, você pode tentar melhorar o estado da arte em cada ambiente, reproduzindo os resultados de outras pessoas, ou mesmo implementando seus próprios ambientes. Também por favor junte-se a nós na <a href="https://gym.openai.com/chat">comunidade bate-papo</a>! </p>
        
      </div>
      
    </div>
  </div>
</div>
</div>

    

<?php include '../../scripts.html.php'; ?>
    
    
    <!-- 1 -->
  </body>
</html>