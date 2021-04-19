<?php

/**
 * Template Name: Home template
 * The template for displaying HOME PAGE
 *
 * This is the template that displays HOME PAGE by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Muda_Texto
 */

get_header();
?>

<main id="primary" class="site-main mt-5">
    <div class="row">
        <div class="col-md-12 intro">
            <h1>Mude seu texto facilmente!</h1>
            <p>Esqueceu o CAPS ligado, precisa converter texto para maiúsculas, minúsculas, inverter o texto?</p>
            <p>Você veio ao lugar certo! Utilize o formulário abaixo, digite ou cole seu texto, utilize os botões abaixo do formulário para converter, e depois pode utilizar o botão de "Copiar" para utilizar seu texto onde quiser.</p>
        </div>
        <div class="col-md-12 convertArea">
            <div class="alert alert-success alert-autocloseable-success" style="display:none">
                Copiado com sucesso.
            </div>
            <form class="formConverter" name="convertForm">
                <div class="form-group">
                    <label for="theString">Cole seu texto no campo abaixo:</label>
                    <textarea class="form-control" id="theString" rows="10" placeholder="Digite/cole seu texto aqui..."></textarea>
                </div>
            </form>
            <button onclick="convertToSentenceCase();return false;" class="btn btn-primary">Sentença</button>
            <button onclick="convertToUpper();return false;" class="btn btn-primary">MAIÚSCULAS</button>
            <button onclick="convertToLower();return false;" class="btn btn-primary">minúsculas</button>
            <button onclick="convertToCapitalized();return false;" class="btn btn-primary">Capitalizado</button>
            <button onclick="convertToAlternateCase();return false;" class="btn btn-primary">AlTeRnAdO</button>
            <button onclick="convertToInverseCase();return false;" class="btn btn-primary">iNvErTiDo</button>
            <button class="btn btn-primary btn-clipboard" data-clipboard-target="#theString">
                <i class="fa fa-copy"></i>
                Copiar
            </button>
        </div>
    </div> <!-- row -->
    <div class="row content-home">
        <div class="col-md-12">
            <?php the_content(); ?>
        </div> <!-- col-md-12 -->
    </div>
    <hr>
    <div class="row content-historia">
        <div class="col-md-12">
            <h3>História da escrita</h3>
            <p>
                A história da escrita começou no período da pré-história, quando os homens faziam desenhos na parede das cavernas como uma forma de se comunicar. Esses desenhos, chamados de pinturas rupestres, consistiam na transmissão de ideias desses povos, pois representavam seus desejos e necessidades. A arte rupestre, obviamente, não se trata de um tipo de escrita, uma vez que não havia uma padronização e uma organização, contudo, foi o início da comunicação entre os seres humanos.
            </p>
            <p>Segundo os historiadores, os sistemas de escrita que se tem conhecimento foram instituídos de forma independente, em períodos distintos, por civilizações diferentes, entre elas a Mesopotâmia, China, Egito e América Central. </p>

            <p>Assim como as línguas, o processo da escrita está sempre a mudar. A prova disso é que os textos produzidos a cem anos atrás, por exemplo, provavelmente possuem palavras que não são mais tão usadas hoje em dia.</p>

            <p>Todo o desenrolar da história da escrita foi um passo importante para a humanidade, não somente por ser um recurso que comprova os registros históricos, mas também por representar uma outra forma de ler e interpretar o mundo.</p>

            <p>A mudança da escrita é tão clara que atualmente, em vista da evolução da tecnologia, a caligrafia que tinha tanta relevância, acabou perdendo o primor por conta do acesso aos computadores. O uso de aparelhos tecnológicos acaba por facilitar o uso de letras digitais e, além disso, a internet tem possibilitado uma escrita cada vez menos rica, principalmente por conta do uso do encurtamento das palavras, gírias, etc. </p>

        </div>

    </div> <!-- content-historia -->
    <div class="row content-historia">
        <div class="col-md-12">
            <h3>História da escrita: Mesopotâmia</h3>
            <p>Sabe-se que a história da escrita começou na antiga civilização mesopotâmica (atual Iraque) por meio dos povos sumérios. Essas pessoas desenvolveram a escrita cuneiforme por volta de 4.000 a.C. Eles iniciaram o processo da escrita usando argila e a cunha (uma ferramenta de metal ou madeira dura, em forma de prisma). Geralmente os registros do cotidiano desse povo eram representados por desenhos, feitos nessas placas de barros. Com esse material não precisava um grande desenhista para fazer todos os caracteres. Na escrita cuneiforme eram usados cerca de 2000 símbolos, todos feitos da direita para a esquerda.</p>

            <p>De acordo com os historiadores, no decorrer de três mil anos a escrita cuneiforme foi usada por quinze línguas diferentes e entre eles estava o sumério, o persa e o sírio. Conforme essa escrita se difundia pelo Oriente Médio, outros estilos de escrita eram elaborados nas civilizações do Egito e da China.</p>
        </div>
    </div> <!-- content-historia -->
    <div class="row content-historia">
        <div class="col-md-12">
            <h3>História da escrita: Egito</h3>
            <p>Não muito distante do período em que os sumérios criaram a escrita cuneiforme, na civilização egípcia, os povos antigos também começaram a elaborar a própria escrita. Na sociedade deles foram criadas duas formas de escrita. Uma representa uma técnica mais simples e popular, chamada de escrita demótica e a outra escrita possui uma prática mais complexa, formada por desenhos e símbolos, denominada escrita hieroglífica (escrita sagrada dos túmulos e templos).</p>

            <p>Os povos egípcios usavam a parede das pirâmides para preencher de textos que simbolizavam a vida dos faraós, sobretudo preces e mensagens para afastar a invasão de prováveis saqueadores. Eles utilizavam um papel chamado papiro, feito a partir de uma planta que possuía o mesmo nome. A escrita no Egito, no início, era uma atribuição dos escribas, uma classe de especialistas. Os escrivães, como também eram designados, assumiam uma posição de destaque nessa sociedade. Eles tinham que passar por um processo de formação e, além disso, eram o elo entre o faraó, funcionários do governo, os sacerdotes e o povo.</p>

            <p>Um fato curioso e importante da cultura egípcia é que a escrita hieroglífica só foi decifrada a partir do século XIX, por Jean-François Champollion, um estudioso francês. O francês utilizou uma pedra que continha inscrições em hieróglifos e sua tradução para grego.</p>
        </div>
    </div> <!-- content-historia -->
    <div class="row content-historia">
        <div class="col-md-12">
            <h3>História da escrita: Roma Antiga</h3>
            <p>Já na Roma Antiga, onde foi instituído o alfabeto romano, só existiam letras maiúsculas, inicialmente. Após um tempo, as letras eram escritas em pergaminhos - peles de animais, geralmente cabras, carneiro, ovelhas, cordeiro - com o apoio de hastes de bambu, penas de patos e outras aves. Entretanto, ocorreram algumas modificações no alfabeto romano, em sua forma original, pois criou-se um novo estilo de escrita batizado escrita uncial, que perdurou até o século VIII, muito usado na escritura de Bíblias escritas.</p>

            <p>No período da Alta Idade Média, a partir do século VIII, Alcuíno, um monge da Nortúmbria, decidiu inventar outro tipo de alfabeto a pedido do imperador Carlos Magno. Contudo, este novo modelo também apresentava letras maiúsculas e minúsculas. Com o passar do tempo essa escrita sofreu algumas modificações que tornou a leitura mais difícil. O que aconteceu foi que alguns italianos letrados, em pleno século XV, inquietos com o estilo mais complicado, decidiram elaborar uma nova maneira de escrita.</p>

            <p>Lodovico Arrighi, outro italiano letrado, realizou a publicação do primeiro caderno de caligrafia. A ele se deve o estilo que hoje conhecemos por itálico. Após a publicação do primeiro caderno de caligrafia, foram impressos outros cadernos, nos quais seus tipos eram gravados em chapas de cobre (calcografia). Foi por meio da calcografia que deu-se origem a designação da escrita calcográfica.</p>
        </div>
    </div> <!-- content-historia -->
    <div class="row content-historia">
        <div class="col-md-12">
            <h3>História da escrita: China</h3>
            <p>A história da escrita da China, assim como as outras civilizações, também foi marcada pelo desenvolvimento de forma independente do seu próprio sistema de escrita, criado há mais de 3 mil anos. Antes da invenção do papel, feito por eles, muitos outros recursos foram utilizados para a escrita. O sistema de escrita dos chineses possui um símbolo para cada coisa chamado sistema ideográfico. A escrita chinesa possui um acervo de mais de 160 mil ideogramas, mas boa parte sofreu mudança ao longo dos anos, pois priorizava os traços fundamentais. Hoje, são usados entre 5.000 e 8.000 caracteres. Apenas 3.000 caracteres são utilizados para a vida diária.</p>
        </div>
    </div> <!-- content-historia -->
    <div class="row content-historia">
        <div class="col-md-12">
            <h3>História da escrita: América Central</h3>
            <p>Na América Central, os povos maias e os astecas, possuíam seus próprios sistemas de escrita, mas os europeus, ao invadirem e conquistarem a região, arruinaram boa parte dos seus documentos escritos. A escrita pertencente a esse povo, chamada de escrita nahuatl, teve início a partir do século XIII, mas ela ainda não foi totalmente decifrada pelos pesquisadores.</p>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
