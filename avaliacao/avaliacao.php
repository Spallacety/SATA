<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>


		<form action = "cars.php" method = "post">
			<fieldset>
			<h2><p align = "center"><b>CARS</b> -  (Escala de Classificação de Autismo na Infância)</p></h2> 
			<h3> Paciente: Fulano de Tal</h3>
			<h3> Profissional: Fisiotepeuta do Piauí </h3>	
			<br />		
			<label for = "p1"><b><u>Pergunta 01 - Relacionamento interpessoal</u></b> 
			<br />
			<input type = "radio" name = "p1" value = "1" required/> O comportamento da criança é apropriado para a idade. Alguma timidez, inquietação ou prejuízo pode ser observado, mas não a um nível diferente (atípico) quando comparado com outra de mesma idade. 
			<br />
			<input type = "radio" name = "p1" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p1" value = "2" /> A criança evita olhar o adulto nos olhos; evita o adulto; demonstra dificuldade quando é forçada a tal; é extremamente tímida; não é tão sociável com um adulto quanto uma criança normal de mesma idade; fica agarrada aos familiares de forma mais intensa que outras de mesma idade. 
			<br />
			<input type = "radio" name = "p1" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p1" value = "3" /> A criança às vezes demonstra isolamento. Há necessidade de esforço persistente para obter sua atenção. Há um contato mínimo por iniciativa da criança (o contato pode ser impessoal). 
			<br />
			<input type = "radio" name = "p1" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p1" value = "4" /> A criança é isolada realmente, não se dando conta do que o adulto está fazendo; nunca responde as iniciativas do adulto ou inicia contato. Somente as tentativas muito intensas para obter sua atenção tem algum efeito positivo. 
			<br />
			<br />
			<label for = "p2"><b><u>Pergunta 02 - Imitação</u></b> 
			<br />
			<input type = "radio" name = "p2" value = "1" required /> A criança imita sons, palavras e movimentos que são apropriados para seu nível de desenvolvimento. 
			<br />
			<input type = "radio" name = "p2" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p2" value = "2" /> A criança imita comportamentos simples como bater palmas ou palavras isoladas na maior parte do tempo. As vezes reproduz uma imitação atrasada (após tempo de latência). 
			<br />
			<input type = "radio" name = "p2" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p2" value = "3" /> A criança só imita as vezes e mesmo assim precisa de considerável persistência e auxílio do adulto. Frequentemente reproduz uma imitação atrasada. 
			<br />
			<input type = "radio" name = "p2" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p2" value = "4" /> A criança raramente ou mesmo nunca imita sons, palavras, ou movimentos mesmo com auxílio de adultos ou após período de latência. 
			<br />
			<br />
			<label for = "p3"><b><u>Pergunta 03 - Resposta emocional</u></b> 
			<br />
			<input type = "radio" name = "p3" value = "1" required /> A resposta emocional (forma e quantidade) demonstra sintonia com a expressão facial, postura corporal e modos. 
			<br />
			<input type = "radio" name = "p3" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p3" value = "2" /> A criança ocasionalmente demonstra alguma inadequação na forma e quantidade das reações emocionais.  Às vezes as reações são não relacionadas a objetos ou acontecimentos do “entorno”. 
			<br />
			<input type = "radio" name = "p3" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p3" value = "3" /> Há presença definitiva de sinais inapropriados na forma e quantidade das respostas emocionais. As reações podem ser inibidas ou exageradas, mas também podem não estar relacionadas com a situação. A criança pode fazer caretas, rir ou ficar estática apesar de não estarem presentes fatos que possam estar causando tais reações. 
			<br />
			<input type = "radio" name = "p3" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p3" value = "4" /> As respostas são raramente apropriadas as situações: quando há determinado tipo de humor é muito difícil modificá-lo mesmo que se mude a atividade. O contrário também é verdadeiro podendo haver enorme variedade de diferentes reações emocionais durante um curto espaço de tempo mesmo que não tenha sido acompanhado por nenhuma mudança no meio ambiente. 
			<br />
			<br />
			<label for = "p4"><b><u>Pergunta 04 - Expressão corporal</u></b> 
			<br />
			<input type = "radio" name = "p4" value = "1" required /> A criança se move com a mesma facilidade, agilidade e coordenação que outra da mesma idade. 
			<br />
			<input type = "radio" name = "p4" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p4" value = "2" /> Algumas peculiaridades “menores” podem estar presentes como movimentos desajeitados, repetitivos, coordenação motora pobre, ou presença rara de movimentos não usuais descritos no próximo item. 
			<br />
			<input type = "radio" name = "p4" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p4" value = "3" /> Comportamentos que são claramente estranhos ou não usuais para outras crianças de mesma idade. Podem estar presente: peculiar postura de dedos e corpo, autoagressão, balançar-se, rodar e contorcer-se, movimentos serpentiformes de dedos ou andar na ponta dos pés. 
			<br />
			<input type = "radio" name = "p4" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p4" value = "4" /> Movimentos frequentes ou intensos (descritos acima) são sinais de comprometimento severo do uso do corpo. Estes comportamentos podem estar presentes apesar de um persistente trabalho de modificação comportamental assim como se manterem quando a criança está envolvida em atividades. 
			<br />
			<br />
			<label for = "p5"><b><u>Pergunta 05 - Uso do objeto</u></b> 
			<br />
			<input type = "radio" name = "p5" value = "1" required /> A criança demonstra interesse adequado em brinquedos e outros objetos relativos a seu nível de desenvolvimento. Há uso funcional dos brinquedos. 
			<br />
			<input type = "radio" name = "p5" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p5" value = "2" /> A criança apresenta menos interesse pelo brinquedo que acriança normal ou há um uso inapropriado para a idade (bater o brinquedo no chão ou colocá-lo na boca). 
			<br />
			<input type = "radio" name = "p5" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p5" value = "3" /> Há muito pouco interesse por brinquedos e objetos ou o uso é disfuncional. Pode haver um foco de interesse em uma parte insignificante do brinquedo,ficar fascinado com o reflexo de luz do objeto, ou eleger um excluindo todos os outros. Este comportamento pode ao menos ser parcialmente ou temporariamente modificável. 
			<br />
			<input type = "radio" name = "p5" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p5" value = "4" /> A criança pode apresentar os sintomas descritos acima porém com uma intensidade e frequência maior. Há significativa dificuldade em distrair a criança quando está “ocupada” com estas atividades inadequadas e é extremamente difícil modificar o uso inadequado do uso dos objetos. 
			<br />
			<br />
			<label for = "p6"><b><u>Pergunta 06 - Adaptação a mudanças</u></b> 
			<br />
			<input type = "radio" name = "p6" value = "1" required /> Apesar da criança notar e comentar sobre as mudanças de rotina, há uma aceitação sem grandes distúrbios. 
			<br />
			<input type = "radio" name = "p6" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p6" value = "2" /> Quando o adulto tenta modificar algumas rotinas a criança continua com a mesma atividade ou no uso dos mesmos materiais, porém pode ficar facilmente “confusa” assim com aceitar a mudança. Ex: fica muito agitada quando é levada numa padaria diferente / o caminho para a escola é mudado, mas é acalmada facilmente. 
			<br />
			<input type = "radio" name = "p6" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p6" value = "3" /> Há resistência as mudanças da rotina. Há uma tentativa de persistir na atividade costumeira e é difícil acalmá-la; ficam raivosos ou tristes quando há modificação. 
			<br />
			<input type = "radio" name = "p6" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p6" value = "4" /> Quando ocorrem mudanças a criança apresenta reações graves que são difíceis de serem eliminadas. Se são forçadas a modificarem a rotina podem ficar extremamente irritados/raivosos ou não cooperativos e talvez respondam com birras. 
			<br />
			<br />
			<label for = "p7"><b><u>Pergunta 07 - Uso do olhar</u></b> 
			<br />
			<input type = "radio" name = "p7" value = "1" required /> O uso do olhar é normal para a idade. A visão é usada junto com os outros sentidos como a audição e tato, como forma de explorar os objetos. 
			<br />
			<input type = "radio" name = "p7" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p7" value = "2" /> A criança precisa ser lembrada de vez em quando para olhar para os objetos. A criança pode estar mais interessada em olhar para espelhos e luzes que outras crianças da mesma idade, ou ficar olhando para o espaço de forma vaga. Pode haver evitação do olhar. 
			<br />
			<input type = "radio" name = "p7" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p7" value = "3" /> A criança precisa ser lembrada a olhar o que está fazendo. Podem ficar olhando para o espaço de forma vaga; evitação do olhar; olhar para objetos de modo peculiar;colocar objetos muito próximos aos olhos apesar de não terem deficit visual. 
			<br />
			<input type = "radio" name = "p7" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p7" value = "4" /> Há uma persistência recusa em olhar para pessoas ou certos objetos e podem apresentar outras peculiaridades no uso do olhar em graus extremos como os descritos acima. 
			<br />
			<br />
			<label for = "p8"><b><u>Pergunta 08 - Uso da audição</u></b> 
			<br />
			<input type = "radio" name = "p8" value = "1" required /> O uso da audição é normal para a idade. A audição é usada junto com os outros sentidos como a visão e tato. 
			<br />
			<input type = "radio" name = "p8" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p8" value = "2" /> Pode haver falta de resposta a certos sons, assim como uma hiper-reação.  As vezes a reação é atrasada, as vezes é necessário a repetição de um determinado som para “ativar” a atenção da criança. A criança pode apresentar uma resposta catastrófica a sons estranhos a ela. 
			<br />
			<input type = "radio" name = "p8" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p8" value = "3" /> A resposta  aos sons podem variar: ignorá-lo das primeiras vezes, ficar assustado com sons de seu cotidiano, tampar os ouvidos. 
			<br />
			<input type = "radio" name = "p8" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p8" value = "4" /> Há uma sub ou hiper-reatividade aos sons, de uma forma extremada,independentemente do tipo do som. 
			<br />
			<br />
			<label for = "p9"><b><u>Pergunta 09 - Uso do paladar, olfato e do tato</u></b> 
			<br />
			<input type = "radio" name = "p9" value = "1" required /> A criança explora novos objetos de acordo com a idade geralmente através dos sentidos. O paladar e olfato são usados apropriadamente quando o objeto é percebido como comível. Quando há dor resultante de batida, queda, ou pequenos machucados acriança expressa seu desconforto, porém sem uma reação desmedida. 
			<br />
			<input type = "radio" name = "p9" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p9" value = "2" /> A criança persiste no levar e manter objetos na boca, em discrepância de outras da mesma idade. Pode cheirar ou colocar na boca, de vez em quando, objetos não comestíveis. A criança pode ignorar ou reagir de forma exacerbada a um beliscão ou alguma dor leve que numa criança normal seria expressada de forma adequada (leve). 
			<br />
			<input type = "radio" name = "p9" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p9" value = "3" /> Pode haver um comportamento de grau moderado de tocar, cheirar,lamber objetos ou pessoas. Pode haver uma reação não usual a dor de grau moderado,assim como sub ou hiper-reação. 
			<br />
			<input type = "radio" name = "p9" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p9" value = "4" /> Há um comportamento de cheirar, colocar na boca, ou pegar objetos – pela sensação em si - sem o objetivo de exploração do objeto. Pode haver uma completa falta de resposta a dor assim como uma hiper-reação a algo que é só levemente desconfortável. 
			<br />
			<br />
			<label for = "p10"><b><u>Pergunta 10 - Medo e nervosismo</u></b> 
			<br />
			<input type = "radio" name = "p10" value = "1" required /> O comportamento é apropriado a situação e a idade da criança. 
			<br />
			<input type = "radio" name = "p10" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p10" value = "2" /> De vez em quando a criança demonstra medo e nervosismo que élevemente inapropriado (para mais ou menos) quando comparado a outras de mesma idade. 
			<br />
			<input type = "radio" name = "p10" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p10" value = "3" /> A criança apresenta um pouco mais ou um pouco menos de medo que umacriança normal mesmo quando comparado a outra de menor idade colocada em situação idêntica. Pode ser difícil entender o que está causando o comportamento de medo apresentado,assim como é difícil confortá-la nessa situação. 
			<br />
			<input type = "radio" name = "p10" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p10" value = "4" /> Há manutenção de medo mesmo após repetidas experiências de esperado bem-estar. Na consulta de avaliação a criança pode estar amedrontada sem razão aparente. É extremamente difícil acalmá-la. Pode também não apresentar medo/sentido de autoconservação a cachorros não conhecidos, a riscos da rua e trânsito, como outras que as da mesma idade evitam. 
			<br />
			<br />
			<label for = "p11"><b><u>Pergunta 11 - Comunicação verbal</u></b> 
			<br />
			<input type = "radio" name = "p11" value = "1" required /> A comunicação verbal é apropriada a situação e a idade da criança. 
			<br />
			<input type = "radio" name = "p11" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p11" value = "2" /> A fala apresenta um atraso global. A maior parte da fala é significativa, porém pode estar presente ecolalia ou inversão pronominal em idade onde já não é normal sua presença. Algumas palavras peculiares e jargões podem estar presentes ocasionalmente. 
			<br />
			<input type = "radio" name = "p11" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p11" value = "3" />
			 A fala pode estar ausente. Quando presente a comunicação verbal pode ser uma mistura de fala significativa + fala peculiar como jargões; comerciais de TV; jogo de futebol; reportagem sobre o tempo + ecolalia + inversão pronominal. Quando há fala significativa podem estar presentes um excessivo questionamento e preocupação com tópicos específicos. 
			<br />
			<input type = "radio" name = "p11" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p11" value = "4" />
			 Não há fala significativa; há grunhidos, gritos, sons que lembram animais ou até sons mais complexos que se aproximam da fala humana. A criança pode mostrar persistente e bizarro uso de conhecimento de algumas palavras ou frases. 
			<br />
			<br />
			<label for = "p12"><b><u>Pergunta 12 - Comunicação não-verbal</u></b> 
			<br />
			<input type = "radio" name = "p12" value = "1" required />
			 A comunicação não-verbal é apropriada a situação e a idade da criança. 
			<br />
			<input type = "radio" name = "p12" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p12" value = "2" />
			 O uso da comunicação não-verbal é imaturo, por exemplo: acriança somente aponta/mostra sem precisão o que quer numa situação em que a criança normal de mesma idade aponta ou demonstra por gestos de forma mais significativa o que quer. 
			<br />
			<input type = "radio" name = "p12" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p12" value = "3" />
			 A criança é incapaz, geralmente, de expressar necessidades e desejos através de meios não-verbais, assim como é, geralmente, incapaz de compreender a comunicação não-verbal dos outros. Pegam na mão do adulto o levando ao objeto desejado, mas são incapazes de mostrar através de gestos o objeto desejado. 
			<br />
			<input type = "radio" name = "p12" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p12" value = "4" /> Há somente uso de gestos bizarros e peculiares que não aparentam significado. Demonstram não terem conhecimento do significado de gestos ou expressões faciais de terceiros. 
			<br />
			<br />
			<label for = "p13"><b><u>Pergunta 13 - Atividade</u></b> 
			<br />
			<input type = "radio" name = "p13" value = "1" required /> A atividade é apropriada a situação e a idade da criança, quando comparada a outras. 
			<br />
			<input type = "radio" name = "p13" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p13" value = "2" /> Pode haver uma leve inquietação ou alguma lentidão demovimentos. O grau de atividade interfere somente de forma leve na performance da criança. Geralmente é possível encorajar a manter um nível adequado de atividade. 
			<br />
			<input type = "radio" name = "p13" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p13" value = "3" /> A criança pode ser inquieta e ter dificuldade de ficar quietar. Pode aparentar ter uma quantidade infinita de energia e não querer/ter vontade de dormir a noite. Pode também ser letárgica e exigir grande esforço para modificação deste comportamento. Podem não gostar de jogos que requeiram atividade física e assim “passar” por preguiçosos. 
			<br />
			<input type = "radio" name = "p13" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p13" value = "4" /> Há demonstração de níveis de atividade em seus extremos: hiper ou hipo,podendo também passar de uma para outra. É difícil o manejo desta criança. Quando há hiperatividade ela está presente em todos os níveis do cotidiano, sendo necessário quase que um constante acompanhamento por parte de um adulto. Se a criança é letárgica é muito difícil motivá-la a alguma atividade. 
			<br />
			<br />
			<label for = "p14"><b><u>Pergunta 14 - Grau e consistência das respostas da inteligência</u></b> 
			<br />
			<input type = "radio" name = "p14" value = "1" required /> A criança é inteligente como uma criança normal de sua idade não havendo nenhuma habilidade não-usual ou problema.1,5  2 Grau leve de anormalidade: A criança não é tão inteligente quanto uma criança de mesma idade e suas habilidades apresentam um atraso global em todas as áreas, de forma equitativa. 
			<br />
			<input type = "radio" name = "p14" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p14" value = "2" /> A criança não é tão inteligente quanto uma criança de mesma idade e suas habilidades apresentam um atraso global em todas as áreas, de forma equitativa. 
			<br />
			<input type = "radio" name = "p14" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p14" value = "3" /> Em geral a criança não é tão inteligente quanto outra de mesma idade,entretanto há algumas áreas intelectivas que o funcionamento beira o normal. 
			<br />
			<input type = "radio" name = "p14" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p14" value = "4" /> Mesmo em uma criança que geralmente não é tão inteligente quanto uma normal de mesma idade, pode haver um funcionamento até melhor em uma ou mais áreas. Podem estar presentes certas habilidades não-usuais como por exemplo: talento para música, ou facilidade com números. 
			<br />
			<br />
			<label for = "p15"><b><u>Pergunta 15 - Impressão geral</u></b> 
			<br />
			<input type = "radio" name = "p15" value = "1" required /> A criança não apresentou nenhum sintoma característico de autismo. 
			<br />
			<input type = "radio" name = "p15" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p15" value = "2" /> A criança apresentou somente alguns poucos sintomas ou grau leve de autismo. 
			<br />
			<input type = "radio" name = "p15" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p15" value = "3" /> A criança apresentou um número de sintomas ou um moderado grau de autismo. 
			<br />
			<input type = "radio" name = "p15" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p15" value = "4" /> A criança apresentou muitos sintomas ou um grau severo de autismo. 
			<br />
			<br />
			<br />
			<button type="submit" class="btn btn-primary">Calcular</button>			
			<button type="reset" class="btn btn-primary">Limpar Tudo</button>			
			
			</fieldset>
		</form>
	

<?php include(FOOTER_TEMPLATE); ?>
