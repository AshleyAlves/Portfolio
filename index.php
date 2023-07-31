<?php

$head = (object) array(
    'title' => 'Home',
    'description' => '',
    'canonical' => 'index.php'
);

include 'include/head.php'; ?>

<!-- Header -->
<?php 
	$page = 'home';

	include 'include/header.php'; ?>

<body id="landing" class="landing">
  
<section id="inicio-pag">
  <!-- Banner -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/images/banner/banner-1.jpg" alt="Primeiro Slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="assets/images/banner/banner-2.jpg" alt="Segundo Slide">
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
</section>

<!-- Sobre Mim -->
<section id="sobre-mim">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Quem é Ashley?</h1>
        <p>Olá! Meu nome é Ashley, nasci no dia 12 de agosto de 2000. Sou muito curiosa e estou constantemente vendo e pesquisando sobre os mais variados assuntos.
          Me descrevo como uma pessoa mais racional do que emocional, valorizo a autonomia e liberdade. Me disponibilizo a ajudar sempre que possível, e adoro dar vida às coisas em meus projetos.
          Atualmente estou cursando o bacharel em Engenharia de Software, e adoro a área de tecnologia desde a infância. Entrei na área de front-end em 2020, através de uma oportunidade de estágio,
          e quanto mais aprendo sobre a área, mais eu me encanto.
        </p>

        <div class="btn btn-animated">
          <span><a href="#contato">Contato</a></span>
        </div>

        <div class="box-sobre">
          <h2>Personalidade</h2>
            <img src="assets/images/personalidade.png" />
            <p><strong>Executor:</strong> prefere atuar focado no resultado e na superação de obstáculos. 
              Pessoas com esse perfil tendem a ser: autoconfiantes, competitivas, ousadas, determinadas, 
              proativas e gostam de desafios.</p>
            <p><strong>Analítico:</strong> prefere atuar focado na qualidade e precisão. Pessoas com esse 
              perfil tendem a ser: curiosas, investigativas, observadoras, cuidadosas, organizadas e atentas 
              aos detalhes.
            </p>
        </div>

        <div class="box-sobre">
          <h2>Comportamental</h2>
            <img src="assets/images/comportamental.png" />
            <p><strong>Visão Analítica:</strong> analisar diferentes argumentos e pontos de vista para se posicionar criticamente.</p>
            <p><strong>Comunicação:</strong> transmitir informações com clareza e objetividade por meio da oratória e escrita.</p>
            <p><strong>Trabalho Em Equipe:</strong> trabalhar com pessoas de diferentes perfis e construir relações colaborativas.</p>
            <p><strong>Criatividade:</strong> combinar diferentes elementos para criar uma solução nova e gerar resultados mais efetivos.</p>      
        </div>

      </div>

      <div class="col">
        <div class="imagem-sobre">
          <img src="assets/images/ashley-de-freitas.jpg" />
        </div>

        <div class="box-sobre" id="valores">
          <h2>Valores</h2>
            <img src="assets/images/valores.png" />
            <p><strong>Autonomia:</strong> abertura para propor e realizar novas iniciativas, tarefas e ações.</p>
            <p><strong>Crescimento:</strong>  oportunidades de promoção e de receber novos desafios e responsabilidades.</p>
            <p><strong>Aprendizado:</strong> incentivo constante para diferenciação de perfil e de competências.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hobbies -->
<section id="hobbies" class="linha-hobbies">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Meus Hobbies</h2>
        <hr>        
      </div>
    </div>

    <div class="row linha-box">

      <div class="col" data-animation="top">
        <div class="box-hobbies">
          <h3>Jogos</h3>
          <hr>  
          <p>Como primeiro hobbie, resolvi destacar os jogos, que são minha paixão! Com certeza o que mais passo meu tempo livre fazendo, e adoro todos os tipos de jogos, 
            principalmente aqueles multiplayer.</p>
        </div>
      </div>

      <div class="col" id="box-2" data-animation="top">
        <div class="box-hobbies">
          <h3>Músicas</h3>
          <hr>  
          <p>Vamos admitir, quem não ama uma boa música? Elas estão andando lado a lado de mãos dadas com todos os códigos que faço, ajudando a manter a concentração, calma e foco.</p>
        </div>
      </div>

      <div class="col" data-animation="top">
        <div class="box-hobbies">
          <h3>Animes</h3>
          <hr>  
          <p>Amante da cultura japonesa, os animes são como um refúgio para mim. Melhoram muito o meu humor, e me ajudam a distrair do mundo exterior um pouco.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Projetos -->
<section id="projetos">
  <div class="row">
    <div class="container">
      <h2>Confira abaixo os sites que já desenvolvi</h2>
      <p>Observação: layout da home desevolvido previamente pela equipe de design, através do Photoshop.</p>
      <div class="col">
					<div>
						<a href="assets/images/projetos/artachos-decoracoes.jpg" data-fancybox="projeto" data-caption="Artachos Decorações">
							<span class="img" style="background-image: url(assets/images/projetos/artachos-decoracoes.jpg)"></span>
						</a>						
					</div>
			</div>
			<div class="col">
					<div>
						<a href="assets/images/projetos/cl-film.jpg" data-fancybox="projeto" data-caption="CL Film">
							<span class="img" style="background-image: url(assets/images/projetos/cl-film.jpg)"></span>
						</a>						
					</div>
			</div>
			<div class="col">
					<div>
						<a href="assets/images/projetos/colimed.jpg" data-fancybox="projeto" data-caption="Colimed">
							<span class="img" style="background-image: url(assets/images/projetos/colimed.jpg)"></span>
						</a>						
					</div>
			</div>
			<div class="col">
					<div>
						<a href="assets/images/projetos/feel-log.jpg" data-fancybox="projeto" data-caption="Feel Log">
							<span class="img" style="background-image: url(assets/images/projetos/feel-log.jpg)"></span>
						</a>						
					</div>
			</div>
			<div class="col">
					<div>
						<a href="assets/images/projetos/ensino-mais.jpg" data-fancybox="projeto" data-caption="Ensino Mais">
							<span class="img" style="background-image: url(assets/images/projetos/ensino-mais.jpg)"></span>
						</a>						
					</div>
			</div>
			<div class="col">
					<div>
						<a href="assets/images/projetos/god-lion.jpg" data-fancybox="projeto" data-caption="God Lion">
							<span class="img" style="background-image: url(assets/images/projetos/god-lion.jpg)"></span>
						</a>						
					</div>
			</div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/instituto-doutor-chao.jpg" data-fancybox="projeto" data-caption="Instituto Dr. Chao">
            <span class="img" style="background-image: url(assets/images/projetos/instituto-doutor-chao.jpg)"></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/marcenaria-freire.jpg" data-fancybox="projeto" data-caption="Marcenaria Freire">
            <span class="img" style="background-image: url(assets/images/projetos/marcenaria-freire.jpg)"></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/mercosul-pack.jpg" data-fancybox="projeto" data-caption="Mercosul Pack">
            <span class="img" style="background-image: url(assets/images/projetos/mercosul-pack.jpg)"></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/mkm-salgados.jpg" data-fancybox="projeto" data-caption="MKM Salgados">
            <span class="img" style="background-image: url(assets/images/projetos/mkm-salgados.jpg)"></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/moura-pereira.jpg" data-fancybox="projeto" data-caption="Moura Pereira Advocacia">
            <span class="img" style="background-image: url(assets/images/projetos/moura-pereira.jpg)"></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/sanemaxi.jpg" data-fancybox="projeto" data-caption="Sanemaxi">
            <span class="img" style="background-image: url(assets/images/projetos/sanemaxi.jpg)"></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/technort.jpg" data-fancybox="projeto" data-caption="Technort">
            <span class="img" style="background-image: url(assets/images/projetos/technort.jpg)"></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/mn-seguros.jpg" data-fancybox="projeto" data-caption="MN Seguros">
            <span class="img" style="background-image: url(assets/images/projetos/mn-seguros.jpg)"></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="assets/images/projetos/fiberk.jpg" data-fancybox="projeto" data-caption="MN Seguros">
            <span class="img" style="background-image: url(assets/images/projetos/fiberk.jpg)"></span>
          </a>
        </div>
      </div>
    </div>
	</div>
</section>

<!-- Contato -->
<section id="match">
  <div class="container">

    <div class="row">
      <h2>Gostou do que viu até agora?</h2>
      <h3>Vamos então calcular suas chances de dar certo comigo!</h3>
    </div>

    <div class="row">
      <div class="col">
        <div class="calculadora">
          <form action="" name="Calculator">
            <input type="text" class="text main-color" name="text1" disabled>
            <input type="text" class="text1 main-color" name="text2" value="C" onclick="location.reload()"><br>

            <input type="button" class="num main-color" name="btn9" value="9" onclick="displayNum(btn9.value)">
            <input type="button" class="num main-color" name="btn8" value="8" onclick="displayNum(btn8.value)">
            <input type="button" class="num main-color" name="btn7" value="7" onclick="displayNum(btn7.value)">
            <input type="button" class="num pink" name="addbtn" value="+" onclick="displayNum(addbtn.value)"><br>
            
            <input type="button" class="num main-color" name="btn6" value="6" onclick="displayNum(btn6.value)">
            <input type="button" class="num main-color" name="btn5" value="5" onclick="displayNum(btn5.value)">
            <input type="button" class="num main-color" name="btn4" value="4" onclick="displayNum(btn4.value)">
            <input type="button" class="num green" name="subbtn" value="-" onclick="displayNum(subbtn.value)"><br>
            

            <input type="button" class="num main-color" name="btn3" value="3" onclick="displayNum(btn3.value)">
            <input type="button" class="num main-color" name="btn2" value="2" onclick="displayNum(btn2.value)">
            <input type="button" class="num main-color" name="btn1" value="1" onclick="displayNum(btn1.value)">
            <input type="button" class="num purple" name="multbtn" value="*" onclick="displayNum(multbtn.value)"><br>
            

            <input type="button" class="num main-color" name="dot" value="." onclick="displayNum(dot.value)">
            <input type="button" class="num main-color" name="btn0" value="0" onclick="displayNum(btn0.value)">
            <input type="button" class="num main-color" name="equal" value="=" onclick="text1.value=eval(text1.value)">
            <input type="button" class="num blue" name="divbtn" value="/" onclick="displayNum(divbtn.value)"><br>        
          </form>
        </div>
      </div>

      <div class="col">
        <div class="notas">
          <h4>Some 1 ponto para cada característica que você busca em seus profissionais</h4>
          <p><strong>E retire 1 ponto para cada característica que não está de acordo com o que você procura:</strong></p>
          <ul>
            <li><i class="fa-solid fa-circle-check"></i> Criatividade;</li>
            <li><i class="fa-solid fa-circle-check"></i> Responsabilidade;</li>
            <li><i class="fa-solid fa-circle-check"></i> Trabalho em equipe;</li>
            <li><i class="fa-solid fa-circle-check"></i> Proatividade;</li>
            <li><i class="fa-solid fa-circle-check"></i> Detalhista;</li>
            <li><i class="fa-solid fa-circle-check"></i> Autonomia;</li>
            <li><i class="fa-solid fa-circle-check"></i> Competitividade;</li>
            <li><i class="fa-solid fa-circle-check"></i> Espírito de liderança;</li>
            <li><i class="fa-solid fa-circle-check"></i> Ousadia;</li>
            <li><i class="fa-solid fa-circle-check"></i> Ambição.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row linha-btn-contato">
        <div class="col">
          <a href="" target="_blank">
            <button class="btn-contato">
              <i class="fa-brands fa-whatsapp"></i>
            </button>
          </a>
        </div>
    </div>
  </div>
</section>

</body>

<?php include 'include/footer.php'; ?>
