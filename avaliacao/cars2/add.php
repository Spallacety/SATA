<?php 
  require_once('functions.php');
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">CARS -  Escala de Classificação de Autismo na Infância</p></h4>
<h6><b>Paciente:</b> 1</h6>
<h6><b>Profissional Responsável:</b> <?php echo $_COOKIE['nome']?></h6>

<form action = "add.php" method = "post">
  <div id="q1div" class="row">
    <h5 class="main-text center">Relacionamento interpessoal (Questão 1/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-1" value="1" required/>
      <label for="q1-1" class="black-text">O comportamento da criança é apropriado para a idade. Alguma timidez, inquietação ou prejuízo pode ser observado, mas não a um nível diferente (atípico) quando comparado com outra de mesma idade.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i1" value="1.5" />
      <label for="q1-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-2" value="2" />
      <label for="q1-2" class="black-text">A criança evita olhar o adulto nos olhos; evita o adulto; demonstra dificuldade quando é forçada a tal; é extremamente tímida; não é tão sociável com um adulto quanto uma criança normal de mesma idade; fica agarrada aos familiares de forma mais intensa que outras de mesma idade.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i2" value="2.5" />
      <label for="q1-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-3" value="3" />
      <label for="q1-3" class="black-text">A criança às vezes demonstra isolamento. Há necessidade de esforço persistente para obter sua atenção. Há um contato mínimo por iniciativa da criança (o contato pode ser impessoal).</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i3" value="3.5" />
      <label for="q1-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-4" value="4" />
      <label for="q1-4" class="black-text">A criança é isolada realmente, não se dando conta do que o adulto está fazendo; nunca responde as iniciativas do adulto ou inicia contato. Somente as tentativas muito intensas para obter sua atenção tem algum efeito positivo.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars1to2();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q2div" class="row" style="display:none">
    <h5 class="main-text center">Imitação (Questão 2/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-1" value="1" required/>
      <label for="q2-1" class="black-text">A criança imita sons, palavras e movimentos que são apropriados para seu nível de desenvolvimento.</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-i1" value="1.5" />
      <label for="q2-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-2" value="2" />
      <label for="q2-2" class="black-text">A criança imita comportamentos simples como bater palmas ou palavras isoladas na maior parte do tempo. As vezes reproduz uma imitação atrasada (após tempo de latência).</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-i2" value="2.5" />
      <label for="q2-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-3" value="3" />
      <label for="q2-3" class="black-text">A criança só imita as vezes e mesmo assim precisa de considerável persistência e auxílio do adulto. Frequentemente reproduz uma imitação atrasada.</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-i3" value="3.5" />
      <label for="q2-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-4" value="4" />
      <label for="q2-4" class="black-text">A criança raramente ou mesmo nunca imita sons, palavras, ou movimentos mesmo com auxílio de adultos ou após período de latência.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars2to1();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars2to3();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q3div" class="row" style="display:none">
    <h5 class="main-text center">Resposta emocional (Questão 3/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q3" type="radio" id="q3-1" value="1" required/>
      <label for="q3-1" class="black-text">A resposta emocional (forma e quantidade) demonstra sintonia com a expressão facial, postura corporal e modos.</label>
    </p>
    <p>
      <input class="with-gap" name="q3" type="radio" id="q3-i1" value="1.5" />
      <label for="q3-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q3" type="radio" id="q3-2" value="2" />
      <label for="q3-2" class="black-text">A criança ocasionalmente demonstra alguma inadequação na forma e quantidade das reações emocionais.  Às vezes as reações são não relacionadas a objetos ou acontecimentos do “entorno”.</label>
    </p>
    <p>
      <input class="with-gap" name="q3" type="radio" id="q3-i2" value="2.5" />
      <label for="q3-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q3" type="radio" id="q3-3" value="3" />
      <label for="q3-3" class="black-text">Há presença definitiva de sinais inapropriados na forma e quantidade das respostas emocionais. As reações podem ser inibidas ou exageradas, mas também podem não estar relacionadas com a situação. A criança pode fazer caretas, rir ou ficar estática apesar de não estarem presentes fatos que possam estar causando tais reações.</label>
    </p>
    <p>
      <input class="with-gap" name="q3" type="radio" id="q3-i3" value="3.5" />
      <label for="q3-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q3" type="radio" id="q3-4" value="4" />
      <label for="q3-4" class="black-text">As respostas são raramente apropriadas as situações: quando há determinado tipo de humor é muito difícil modificá-lo mesmo que se mude a atividade. O contrário também é verdadeiro podendo haver enorme variedade de diferentes reações emocionais durante um curto espaço de tempo mesmo que não tenha sido acompanhado por nenhuma mudança no meio ambiente.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars3to2();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars3to4();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q4div" class="row" style="display:none">
    <h5 class="main-text center">Expressão corporal (Questão 4/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q4" type="radio" id="q4-1" value="1" required/>
      <label for="q4-1" class="black-text">A criança se move com a mesma facilidade, agilidade e coordenação que outra da mesma idade.</label>
    </p>
    <p>
      <input class="with-gap" name="q4" type="radio" id="q4-i1" value="1.5" />
      <label for="q4-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q4" type="radio" id="q4-2" value="2" />
      <label for="q4-2" class="black-text"> Algumas peculiaridades “menores” podem estar presentes como movimentos desajeitados, repetitivos, coordenação motora pobre, ou presença rara de movimentos não usuais descritos no próximo item.</label>
    </p>
    <p>
      <input class="with-gap" name="q4" type="radio" id="q4-i2" value="2.5" />
      <label for="q4-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q4" type="radio" id="q4-3" value="3" />
      <label for="q4-3" class="black-text">Comportamentos que são claramente estranhos ou não usuais para outras crianças de mesma idade. Podem estar presente: peculiar postura de dedos e corpo, autoagressão, balançar-se, rodar e contorcer-se, movimentos serpentiformes de dedos ou andar na ponta dos pés.</label>
    </p>
    <p>
      <input class="with-gap" name="q4" type="radio" id="q4-i3" value="3.5" />
      <label for="q4-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q4" type="radio" id="q4-4" value="4" />
      <label for="q4-4" class="black-text">Movimentos frequentes ou intensos (descritos acima) são sinais de comprometimento severo do uso do corpo. Estes comportamentos podem estar presentes apesar de um persistente trabalho de modificação comportamental assim como se manterem quando a criança está envolvida em atividades.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars4to3();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars4to5();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q5div" class="row" style="display:none">
    <h5 class="main-text center">Uso do objeto (Questão 5/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q5" type="radio" id="q5-1" value="1" required/>
      <label for="q5-1" class="black-text">A criança demonstra interesse adequado em brinquedos e outros objetos relativos a seu nível de desenvolvimento. Há uso funcional dos brinquedos.</label>
    </p>
    <p>
      <input class="with-gap" name="q5" type="radio" id="q5-i1" value="1.5" />
      <label for="q5-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q5" type="radio" id="q5-2" value="2" />
      <label for="q5-2" class="black-text">A criança apresenta menos interesse pelo brinquedo que acriança normal ou há um uso inapropriado para a idade (bater o brinquedo no chão ou colocá-lo na boca).</label>
    </p>
    <p>
      <input class="with-gap" name="q5" type="radio" id="q5-i2" value="2.5" />
      <label for="q5-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q5" type="radio" id="q5-3" value="3" />
      <label for="q5-3" class="black-text">Há muito pouco interesse por brinquedos e objetos ou o uso é disfuncional. Pode haver um foco de interesse em uma parte insignificante do brinquedo,ficar fascinado com o reflexo de luz do objeto, ou eleger um excluindo todos os outros. Este comportamento pode ao menos ser parcialmente ou temporariamente modificável.</label>
    </p>
    <p>
      <input class="with-gap" name="q5" type="radio" id="q5-i3" value="3.5" />
      <label for="q5-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q5" type="radio" id="q5-4" value="4" />
      <label for="q5-4" class="black-text">A criança pode apresentar os sintomas descritos acima porém com uma intensidade e frequência maior. Há significativa dificuldade em distrair a criança quando está “ocupada” com estas atividades inadequadas e é extremamente difícil modificar o uso inadequado do uso dos objetos.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars5to4();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars5to6();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q6div" class="row" style="display:none">
    <h5 class="main-text center">Adaptação a mudanças (Questão 6/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q6" type="radio" id="q6-1" value="1" required/>
      <label for="q6-1" class="black-text">Apesar da criança notar e comentar sobre as mudanças de rotina, há uma aceitação sem grandes distúrbios.</label>
    </p>
    <p>
      <input class="with-gap" name="q6" type="radio" id="q6-i1" value="1.5" />
      <label for="q6-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q6" type="radio" id="q6-2" value="2" />
      <label for="q6-2" class="black-text">Quando o adulto tenta modificar algumas rotinas a criança continua com a mesma atividade ou no uso dos mesmos materiais, porém pode ficar facilmente “confusa” assim com aceitar a mudança. Ex: fica muito agitada quando é levada numa padaria diferente / o caminho para a escola é mudado, mas é acalmada facilmente.</label>
    </p>
    <p>
      <input class="with-gap" name="q6" type="radio" id="q6-i2" value="2.5" />
      <label for="q6-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q6" type="radio" id="q6-3" value="3" />
      <label for="q6-3" class="black-text">Há resistência as mudanças da rotina. Há uma tentativa de persistir na atividade costumeira e é difícil acalmá-la; ficam raivosos ou tristes quando há modificação.</label>
    </p>
    <p>
      <input class="with-gap" name="q6" type="radio" id="q6-i3" value="3.5" />
      <label for="q6-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q6" type="radio" id="q6-4" value="4" />
      <label for="q6-4" class="black-text">Quando ocorrem mudanças a criança apresenta reações graves que são difíceis de serem eliminadas. Se são forçadas a modificarem a rotina podem ficar extremamente irritados/raivosos ou não cooperativos e talvez respondam com birras.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars6to5();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars6to7();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q7div" class="row" style="display:none">
    <h5 class="main-text center">Uso do olhar (Questão 7/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q7" type="radio" id="q7-1" value="1" required/>
      <label for="q7-1" class="black-text">O uso do olhar é normal para a idade. A visão é usada junto com os outros sentidos como a audição e tato, como forma de explorar os objetos.</label>
    </p>
    <p>
      <input class="with-gap" name="q7" type="radio" id="q7-i1" value="1.5" />
      <label for="q7-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q7" type="radio" id="q7-2" value="2" />
      <label for="q7-2" class="black-text">A criança precisa ser lembrada de vez em quando para olhar para os objetos. A criança pode estar mais interessada em olhar para espelhos e luzes que outras crianças da mesma idade, ou ficar olhando para o espaço de forma vaga. Pode haver evitação do olhar.</label>
    </p>
    <p>
      <input class="with-gap" name="q7" type="radio" id="q7-i2" value="2.5" />
      <label for="q7-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q7" type="radio" id="q7-3" value="3" />
      <label for="q7-3" class="black-text">A criança precisa ser lembrada a olhar o que está fazendo. Podem ficar olhando para o espaço de forma vaga; evitação do olhar; olhar para objetos de modo peculiar; colocar objetos muito próximos aos olhos apesar de não terem deficit visual.</label>
    </p>
    <p>
      <input class="with-gap" name="q7" type="radio" id="q7-i3" value="3.5" />
      <label for="q7-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q7" type="radio" id="q7-4" value="4" />
      <label for="q7-4" class="black-text">Há uma persistência recusa em olhar para pessoas ou certos objetos e podem apresentar outras peculiaridades no uso do olhar em graus extremos como os descritos acima.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars7to6();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars7to8();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q8div" class="row" style="display:none">
    <h5 class="main-text center">Uso da audição (Questão 8/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q8" type="radio" id="q8-1" value="1" required/>
      <label for="q8-1" class="black-text">O uso da audição é normal para a idade. A audição é usada junto com os outros sentidos como a visão e tato.</label>
    </p>
    <p>
      <input class="with-gap" name="q8" type="radio" id="q8-i1" value="1.5" />
      <label for="q8-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q8" type="radio" id="q8-2" value="2" />
      <label for="q8-2" class="black-text">Pode haver falta de resposta a certos sons, assim como uma hiper-reação. As vezes a reação é atrasada, as vezes é necessário a repetição de um determinado som para “ativar” a atenção da criança. A criança pode apresentar uma resposta catastrófica a sons estranhos a ela.</label>
    </p>
    <p>
      <input class="with-gap" name="q8" type="radio" id="q8-i2" value="2.5" />
      <label for="q8-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q8" type="radio" id="q8-3" value="3" />
      <label for="q8-3" class="black-text">A resposta aos sons podem variar: ignorá-lo das primeiras vezes, ficar assustado com sons de seu cotidiano, tampar os ouvidos.</label>
    </p>
    <p>
      <input class="with-gap" name="q8" type="radio" id="q8-i3" value="3.5" />
      <label for="q8-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q8" type="radio" id="q8-4" value="4" />
      <label for="q8-4" class="black-text">Há uma sub ou hiper-reatividade aos sons, de uma forma extremada,independentemente do tipo do som.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars8to7();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars8to9();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q9div" class="row" style="display:none">
    <h5 class="main-text center">Uso do paladar, olfato e do tato (Questão 9/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q9" type="radio" id="q9-1" value="1" required/>
      <label for="q9-1" class="black-text">A criança explora novos objetos de acordo com a idade geralmente através dos sentidos. O paladar e olfato são usados apropriadamente quando o objeto é percebido como comível. Quando há dor resultante de batida, queda, ou pequenos machucados acriança expressa seu desconforto, porém sem uma reação desmedida.</label>
    </p>
    <p>
      <input class="with-gap" name="q9" type="radio" id="q9-i1" value="1.5" />
      <label for="q9-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q9" type="radio" id="q9-2" value="2" />
      <label for="q9-2" class="black-text">A criança persiste no levar e manter objetos na boca, em discrepância de outras da mesma idade. Pode cheirar ou colocar na boca, de vez em quando, objetos não comestíveis. A criança pode ignorar ou reagir de forma exacerbada a um beliscão ou alguma dor leve que numa criança normal seria expressada de forma adequada (leve).</label>
    </p>
    <p>
      <input class="with-gap" name="q9" type="radio" id="q9-i2" value="2.5" />
      <label for="q9-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q9" type="radio" id="q9-3" value="3" />
      <label for="q9-3" class="black-text">Pode haver um comportamento de grau moderado de tocar, cheirar,lamber objetos ou pessoas. Pode haver uma reação não usual a dor de grau moderado,assim como sub ou hiper-reação.</label>
    </p>
    <p>
      <input class="with-gap" name="q9" type="radio" id="q9-i3" value="3.5" />
      <label for="q9-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q9" type="radio" id="q9-4" value="4" />
      <label for="q9-4" class="black-text">Há um comportamento de cheirar, colocar na boca, ou pegar objetos – pela sensação em si - sem o objetivo de exploração do objeto. Pode haver uma completa falta de resposta a dor assim como uma hiper-reação a algo que é só levemente desconfortável.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars9to8();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars9to10();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q10div" class="row" style="display:none">
    <h5 class="main-text center">Medo e nervosismo (Questão 10/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q10" type="radio" id="q10-1" value="1" required/>
      <label for="q10-1" class="black-text">O comportamento é apropriado a situação e a idade da criança.</label>
    </p>
    <p>
      <input class="with-gap" name="q10" type="radio" id="q10-i1" value="1.5" />
      <label for="q10-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q10" type="radio" id="q10-2" value="2" />
      <label for="q10-2" class="black-text">De vez em quando a criança demonstra medo e nervosismo que é levemente inapropriado (para mais ou menos) quando comparado a outras de mesma idade.</label>
    </p>
    <p>
      <input class="with-gap" name="q10" type="radio" id="q10-i2" value="2.5" />
      <label for="q10-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q10" type="radio" id="q10-3" value="3" />
      <label for="q10-3" class="black-text">A criança apresenta um pouco mais ou um pouco menos de medo que umacriança normal mesmo quando comparado a outra de menor idade colocada em situação idêntica. Pode ser difícil entender o que está causando o comportamento de medo apresentado,assim como é difícil confortá-la nessa situação.</label>
    </p>
    <p>
      <input class="with-gap" name="q10" type="radio" id="q10-i3" value="3.5" />
      <label for="q10-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q10" type="radio" id="q10-4" value="4" />
      <label for="q10-4" class="black-text">  Há manutenção de medo mesmo após repetidas experiências de esperado bem-estar. Na consulta de avaliação a criança pode estar amedrontada sem razão aparente. É extremamente difícil acalmá-la. Pode também não apresentar medo/sentido de autoconservação a cachorros não conhecidos, a riscos da rua e trânsito, como outras que as da mesma idade evitam.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars10to9();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars10to11();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q11div" class="row" style="display:none">
    <h5 class="main-text center">Comunicação verbal (Questão 11/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q11" type="radio" id="q11-1" value="1" required/>
      <label for="q11-1" class="black-text">A comunicação verbal é apropriada a situação e a idade da criança.</label>
    </p>
    <p>
      <input class="with-gap" name="q11" type="radio" id="q11-i1" value="1.5" />
      <label for="q11-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q11" type="radio" id="q11-2" value="2" />
      <label for="q11-2" class="black-text">  A fala apresenta um atraso global. A maior parte da fala é significativa, porém pode estar presente ecolalia ou inversão pronominal em idade onde já não é normal sua presença. Algumas palavras peculiares e jargões podem estar presentes ocasionalmente.</label>
    </p>
    <p>
      <input class="with-gap" name="q11" type="radio" id="q11-i2" value="2.5" />
      <label for="q11-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q11" type="radio" id="q11-3" value="3" />
      <label for="q11-3" class="black-text">A fala pode estar ausente. Quando presente a comunicação verbal pode ser uma mistura de fala significativa + fala peculiar como jargões; comerciais de TV; jogo de futebol; reportagem sobre o tempo + ecolalia + inversão pronominal. Quando há fala significativa podem estar presentes um excessivo questionamento e preocupação com tópicos específicos.</label>
    </p>
    <p>
      <input class="with-gap" name="q11" type="radio" id="q11-i3" value="3.5" />
      <label for="q11-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q11" type="radio" id="q11-4" value="4" />
      <label for="q11-4" class="black-text">Não há fala significativa; há grunhidos, gritos, sons que lembram animais ou até sons mais complexos que se aproximam da fala humana. A criança pode mostrar persistente e bizarro uso de conhecimento de algumas palavras ou frases.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars11to10();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars11to12();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q12div" class="row" style="display:none">
    <h5 class="main-text center">Comunicação não-verbal (Questão 12/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q12" type="radio" id="q12-1" value="1" required/>
      <label for="q12-1" class="black-text">A comunicação não-verbal é apropriada a situação e a idade da criança.</label>
    </p>
    <p>
      <input class="with-gap" name="q12" type="radio" id="q12-i1" value="1.5" />
      <label for="q12-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q12" type="radio" id="q12-2" value="2" />
      <label for="q12-2" class="black-text">  O uso da comunicação não-verbal é imaturo, por exemplo: acriança somente aponta/mostra sem precisão o que quer numa situação em que a criança normal de mesma idade aponta ou demonstra por gestos de forma mais significativa o que quer.</label>
    </p>
    <p>
      <input class="with-gap" name="q12" type="radio" id="q12-i2" value="2.5" />
      <label for="q12-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q12" type="radio" id="q12-3" value="3" />
      <label for="q12-3" class="black-text">A criança é incapaz, geralmente, de expressar necessidades e desejos através de meios não-verbais, assim como é, geralmente, incapaz de compreender a comunicação não-verbal dos outros. Pegam na mão do adulto o levando ao objeto desejado, mas são incapazes de mostrar através de gestos o objeto desejado.</label>
    </p>
    <p>
      <input class="with-gap" name="q12" type="radio" id="q12-i3" value="3.5" />
      <label for="q12-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q12" type="radio" id="q12-4" value="4" />
      <label for="q12-4" class="black-text">Há somente uso de gestos bizarros e peculiares que não aparentam significado. Demonstram não terem conhecimento do significado de gestos ou expressões faciais de terceiros.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars12to11();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars12to13();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q13div" class="row" style="display:none">
    <h5 class="main-text center">Atividade (Questão 13/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q13" type="radio" id="q13-1" value="1" required/>
      <label for="q13-1" class="black-text">A atividade é apropriada a situação e a idade da criança, quando comparada a outras.</label>
    </p>
    <p>
      <input class="with-gap" name="q13" type="radio" id="q13-i1" value="1.5" />
      <label for="q13-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q13" type="radio" id="q13-2" value="2" />
      <label for="q13-2" class="black-text">Pode haver uma leve inquietação ou alguma lentidão demovimentos. O grau de atividade interfere somente de forma leve na performance da criança. Geralmente é possível encorajar a manter um nível adequado de atividade.</label>
    </p>
    <p>
      <input class="with-gap" name="q13" type="radio" id="q13-i2" value="2.5" />
      <label for="q13-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q13" type="radio" id="q13-3" value="3" />
      <label for="q13-3" class="black-text">A criança pode ser inquieta e ter dificuldade de ficar quietar. Pode aparentar ter uma quantidade infinita de energia e não querer/ter vontade de dormir a noite. Pode também ser letárgica e exigir grande esforço para modificação deste comportamento. Podem não gostar de jogos que requeiram atividade física e assim “passar” por preguiçosos.</label>
    </p>
    <p>
      <input class="with-gap" name="q13" type="radio" id="q13-i3" value="3.5" />
      <label for="q13-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q13" type="radio" id="q13-4" value="4" />
      <label for="q13-4" class="black-text">Há demonstração de níveis de atividade em seus extremos: hiper ou hipo,podendo também passar de uma para outra. É difícil o manejo desta criança. Quando há hiperatividade ela está presente em todos os níveis do cotidiano, sendo necessário quase que um constante acompanhamento por parte de um adulto. Se a criança é letárgica é muito difícil motivá-la a alguma atividade.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars13to12();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars13to14();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q14div" class="row" style="display:none">
    <h5 class="main-text center">Grau e consistência das respostas da inteligência (Questão 14/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q14" type="radio" id="q14-1" value="1" required/>
      <label for="q14-1" class="black-text">A criança é inteligente como uma criança normal de sua idade não havendo nenhuma habilidade não-usual ou problema.</label>
    </p>
    <p>
      <input class="with-gap" name="q14" type="radio" id="q14-i1" value="1.5" />
      <label for="q14-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q14" type="radio" id="q14-2" value="2" />
      <label for="q14-2" class="black-text">A criança não é tão inteligente quanto uma criança de mesma idade e suas habilidades apresentam um atraso global em todas as áreas, de forma equitativa.</label>
    </p>
    <p>
      <input class="with-gap" name="q14" type="radio" id="q14-i2" value="2.5" />
      <label for="q14-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q14" type="radio" id="q14-3" value="3" />
      <label for="q14-3" class="black-text">Em geral a criança não é tão inteligente quanto outra de mesma idade,entretanto há algumas áreas intelectivas que o funcionamento beira o normal.</label>
    </p>
    <p>
      <input class="with-gap" name="q14" type="radio" id="q14-i3" value="3.5" />
      <label for="q14-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q14" type="radio" id="q14-4" value="4" />
      <label for="q14-4" class="black-text">Mesmo em uma criança que geralmente não é tão inteligente quanto uma normal de mesma idade, pode haver um funcionamento até melhor em uma ou mais áreas. Podem estar presentes certas habilidades não-usuais como por exemplo: talento para música, ou facilidade com números.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars14to13();" class="btn orange white-text btn-primary">Voltar</a>
      <a href="#!" onClick="cars14to15();" class="btn green white-text btn-primary">Avançar</a>
    </div>
  </div>

  <div id="q15div" class="row" style="display:none">
    <h5 class="main-text center">Impressão geral (Questão 15/15)</h5> 
    <br>
    <p>
      <input class="with-gap" name="q15" type="radio" id="q15-1" value="1" required/>
      <label for="q15-1" class="black-text">A criança não apresentou nenhum sintoma característico de autismo.</label>
    </p>
    <p>
      <input class="with-gap" name="q15" type="radio" id="q15-i1" value="1.5" />
      <label for="q15-i1" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q15" type="radio" id="q15-2" value="2" />
      <label for="q15-2" class="black-text">A criança apresentou somente alguns poucos sintomas ou grau leve de autismo.</label>
    </p>
    <p>
      <input class="with-gap" name="q15" type="radio" id="q15-i2" value="2.5" />
      <label for="q15-i2" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q15" type="radio" id="q15-3" value="3" />
      <label for="q15-3" class="black-text">A criança apresentou um número de sintomas ou um moderado grau de autismo.</label>
    </p>
    <p>
      <input class="with-gap" name="q15" type="radio" id="q15-i3" value="3.5" />
      <label for="q15-i3" class="black-text">Intermediário.</label>
    </p>
    <p>
      <input class="with-gap" name="q15" type="radio" id="q15-4" value="4" />
      <label for="q15-4" class="black-text">A criança apresentou muitos sintomas ou um grau severo de autismo.</label>
    </p>

    <div class="row center">
      <br>
      <a href="#!" onClick="cars15to14();" class="btn orange white-text btn-primary">Voltar</a>
      <button type="submit" class="btn blue white-text btn-primary">Salvar</button>
    </div>
  </div>
</form>
  
<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>