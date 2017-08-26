-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Ago-2017 às 07:59
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sata-lims`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profissional` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `modificacao` date NOT NULL,
  `q1` double NOT NULL,
  `q2` double NOT NULL,
  `q3` double NOT NULL,
  `q4` double NOT NULL,
  `q5` double NOT NULL,
  `q6` double NOT NULL,
  `q7` double NOT NULL,
  `q8` double NOT NULL,
  `q9` double NOT NULL,
  `q10` double NOT NULL,
  `q11` double NOT NULL,
  `q12` double NOT NULL,
  `q13` double NOT NULL,
  `q14` double NOT NULL,
  `q15` double NOT NULL,
  `resultado` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_profissional` (`id_profissional`),
  KEY `id_paciente` (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `id_profissional`, `id_paciente`, `modificacao`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `resultado`) VALUES
(2, 4, 1, '2017-08-25', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 4, 4, 1, 24),
(3, 5, 2, '2017-08-25', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 60),
(4, 4, 1, '2017-08-26', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 4, 4, 1, 24),
(5, 4, 1, '2017-08-27', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 4, 4, 1, 24),
(6, 4, 1, '2017-08-28', 4, 4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carsrespostas`
--

CREATE TABLE IF NOT EXISTS `carsrespostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questao` int(11) NOT NULL,
  `valor` float NOT NULL,
  `significado` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carsrespostas`
--

INSERT INTO `carsrespostas` (`id`, `questao`, `valor`, `significado`) VALUES
(1, 1, 1, 'O comportamento da crianÃ§a Ã© apropriado para a idade. Alguma timidez, inquietaÃ§Ã£o ou prejuÃ­zo pode ser observado, mas nÃ£o a um nÃ­vel diferente (atÃ­pico) quando comparado com outra de mesma idade.'),
(2, 1, 1.5, 'IntermediÃ¡rio entre \"O comportamento da crianÃ§a Ã© apropriado para a idade\" e \"Extrema timidez, pequenas dificuldades de socializaÃ§Ã£o e fica agarrada aos familiares de forma mais intensa que outras de mesma idade\".'),
(3, 1, 2, 'A crianÃ§a evita olhar o adulto nos olhos; evita o adulto; demonstra dificuldade quando Ã© forÃ§ada a tal; Ã© extremamente tÃ­mida; nÃ£o Ã© tÃ£o sociÃ¡vel com um adulto quanto uma crianÃ§a normal de mesma idade; fica agarrada aos familiares de forma mais intensa que outras de mesma idade.'),
(4, 1, 2.5, 'IntermediÃ¡rio entre \"Extrema timidez, pequenas dificuldades de socializaÃ§Ã£o e fica agarrada aos familiares de forma mais intensa que outras de mesma idade\" e \"A crianÃ§a Ã s vezes demonstra isolamento\".'),
(5, 1, 3, 'A crianÃ§a as vezes demonstra isolamento. HÃ¡ necessidade de esforÃ§o persistente para obter sua atenÃ§Ã£o. HÃ¡ um contato mÃ­nimo por iniciativa da crianÃ§a (o contato pode ser impessoal).'),
(6, 1, 3.5, 'IntermediÃ¡rio entre \"A crianÃ§a as vezes demonstra isolamento\" e \"A crianÃ§a Ã© isolada realmente, nÃ£o se dando conta do que o adulto estÃ¡ fazendo\".'),
(7, 1, 4, 'A crianÃ§a Ã© isolada realmente, nÃ£o se dando conta do que o adulto estÃ¡ fazendo; nunca responde as iniciativas do adulto ou inicia contato. Somente as tentativas muito intensas para obter sua atenÃ§Ã£o tem algum efeito positivo.'),
(8, 2, 1, 'A crianÃ§a imita sons, palavras e movimentos que sÃ£o apropriados para seu nÃ­vel de desenvolvimento.'),
(9, 2, 1.5, 'IntermediÃ¡rio entre \"A crianÃ§a imita sons, palavras e movimentos que sÃ£o apropriados para seu nÃ­vel de desenvolvimento\" e \"A crianÃ§a imita comportamentos simples como bater palmas ou palavras isoladas na maior parte do tempo\".'),
(10, 2, 2, 'A crianÃ§a imita comportamentos simples como bater palmas ou palavras isoladas na maior parte do tempo. As vezes reproduz uma imitaÃ§Ã£o atrasada (apÃ³s tempo de latÃªncia).'),
(11, 2, 2.5, 'IntermediÃ¡rio entre \"A crianÃ§a imita comportamentos simples como bater palmas ou palavras isoladas na maior parte do tempo\" e \"A crianÃ§a sÃ³ imita as vezes e mesmo assim precisa de considerÃ¡vel persistÃªncia e auxÃ­lio do adulto\".'),
(12, 2, 3, 'A crianÃ§a sÃ³ imita as vezes e mesmo assim precisa de considerÃ¡vel persistÃªncia e auxÃ­lio do adulto. Frequentemente reproduz uma imitaÃ§Ã£o atrasada.'),
(13, 2, 3.5, 'IntermediÃ¡rio entre \"A crianÃ§a sÃ³ imita as vezes e mesmo assim precisa de considerÃ¡vel persistÃªncia e auxÃ­lio do adulto\" e \"A crianÃ§a raramente ou mesmo nunca imita sons, palavras, ou movimentos mesmo com auxÃ­lio de adultos ou apÃ³s perÃ­odo de latÃªncia\".'),
(14, 2, 4, 'A crianÃ§a raramente ou mesmo nunca imita sons, palavras, ou movimentos mesmo com auxÃ­lio de adultos ou apÃ³s perÃ­odo de latÃªncia.'),
(15, 3, 1, 'A resposta emocional (forma e quantidade) demonstra sintonia com a expressÃ£o facial, postura corporal e modos.'),
(16, 3, 1.5, 'IntermediÃ¡rio entre \"A resposta emocional (forma e quantidade) demonstra sintonia com a expressÃ£o facial, postura corporal e modos\" e \"A crianÃ§a ocasionalmente demonstra alguma inadequaÃ§Ã£o na forma e quantidade das reaÃ§Ãµes emocionais\".'),
(17, 3, 2, 'A crianÃ§a ocasionalmente demonstra alguma inadequaÃ§Ã£o na forma e quantidade das reaÃ§Ãµes emocionais.  Ãs vezes as reaÃ§Ãµes sÃ£o nÃ£o relacionadas a objetos ou acontecimentos do âentornoâ.'),
(18, 3, 2.5, 'IntermediÃ¡rio entre \"A crianÃ§a ocasionalmente demonstra alguma inadequaÃ§Ã£o na forma e quantidade das reaÃ§Ãµes emocionais\" e \"HÃ¡ presenÃ§a definitiva de sinais inapropriados na forma e quantidade das respostas emocionais\".'),
(19, 3, 3, 'HÃ¡ presenÃ§a definitiva de sinais inapropriados na forma e quantidade das respostas emocionais. As reaÃ§Ãµes podem ser inibidas ou exageradas, mas tambÃ©m podem nÃ£o estar relacionadas com a situaÃ§Ã£o. A crianÃ§a pode fazer caretas, rir ou ficar estÃ¡tica apesar de nÃ£o estarem presentes fatos que possam estar causando tais reaÃ§Ãµes.'),
(20, 3, 3.5, 'IntermediÃ¡rio entre \"HÃ¡ presenÃ§a definitiva de sinais inapropriados na forma e quantidade das respostas emocionais\" e \"As respostas sÃ£o raramente apropriadas as situaÃ§Ãµes: quando hÃ¡ determinado tipo de humor Ã© muito difÃ­cil modificÃ¡-lo mesmo que se mude a atividade\".'),
(21, 3, 4, 'As respostas sÃ£o raramente apropriadas as situaÃ§Ãµes: quando hÃ¡ determinado tipo de humor Ã© muito difÃ­cil modificÃ¡-lo mesmo que se mude a atividade. O contrÃ¡rio tambÃ©m Ã© verdadeiro podendo haver enorme variedade de diferentes reaÃ§Ãµes emocionais durante um curto espaÃ§o de tempo mesmo que nÃ£o tenha sido acompanhado por nenhuma mudanÃ§a no meio ambiente.'),
(22, 4, 1, 'A crianÃ§a se move com a mesma facilidade, agilidade e coordenaÃ§Ã£o que outra da mesma idade.'),
(23, 4, 1.5, 'IntermediÃ¡rio entre \"A crianÃ§a se move com a mesma facilidade, agilidade e coordenaÃ§Ã£o que outra da mesma idade\" e \"Algumas peculiaridades \"menores\" podem estar presentes como movimentos desajeitados, repetitivos, entre outros\".'),
(24, 4, 2, 'Algumas peculiaridades \"menores\" podem estar presentes como movimentos desajeitados, repetitivos, coordenaÃ§Ã£o motora pobre, ou presenÃ§a rara de movimentos nÃ£o usuais descritos no prÃ³ximo item.'),
(25, 4, 2.5, 'IntermediÃ¡rio entre \"Algumas peculiaridades \"menores\" podem estar presentes como movimentos desajeitados, repetitivos, entre outros\" e \"Comportamentos que sÃ£o claramente estranhos ou nÃ£o usuais para outras crianÃ§as de mesma idade\".'),
(26, 4, 3, 'Comportamentos que sÃ£o claramente estranhos ou nÃ£o usuais para outras crianÃ§as de mesma idade. Podem estar presente: peculiar postura de dedos e corpo, autoagressÃ£o, balanÃ§ar-se, rodar e contorcer-se, movimentos serpentiformes de dedos ou andar na ponta dos pÃ©s.'),
(27, 4, 3.5, 'IntermediÃ¡rio entre \"Comportamentos que sÃ£o claramente estranhos ou nÃ£o usuais para outras crianÃ§as de mesma idade\" e \"Movimentos frequentes ou intensos sÃ£o sinais de comprometimento severo do uso do corpo\".'),
(28, 4, 4, 'Movimentos frequentes ou intensos (descritos acima) sÃ£o sinais de comprometimento severo do uso do corpo. Estes comportamentos podem estar presentes apesar de um persistente trabalho de modificaÃ§Ã£o comportamental assim como se manterem quando a crianÃ§a estÃ¡ envolvida em atividades.'),
(29, 5, 1, 'A crianÃ§a demonstra interesse adequado em brinquedos e outros objetos relativos a seu nÃ­vel de desenvolvimento. HÃ¡ uso funcional dos brinquedos.'),
(30, 5, 1.5, 'IntermediÃ¡rio entre \"A crianÃ§a demonstra interesse adequado em brinquedos e outros objetos relativos a seu nÃ­vel de desenvolvimento. HÃ¡ uso funcional dos brinquedos\" e \"A crianÃ§a apresenta menos interesse pelo brinquedo que a crianÃ§a normal ou hÃ¡ um uso inapropriado para a idade\".'),
(31, 5, 2, 'A crianÃ§a apresenta menos interesse pelo brinquedo que a crianÃ§a normal ou hÃ¡ um uso inapropriado para a idade (bater o brinquedo no chÃ£o ou colocÃ¡-lo na boca).'),
(32, 5, 2.5, 'IntermediÃ¡rio entre \"A crianÃ§a apresenta menos interesse pelo brinquedo que a crianÃ§a normal ou hÃ¡ um uso inapropriado para a idade\" e \"HÃ¡ muito pouco interesse por brinquedos e objetos ou o uso Ã© disfuncional\".'),
(33, 5, 3, 'HÃ¡ muito pouco interesse por brinquedos e objetos ou o uso Ã© disfuncional. Pode haver um foco de interesse em uma parte insignificante do brinquedo,ficar fascinado com o reflexo de luz do objeto, ou eleger um excluindo todos os outros. Este comportamento pode ao menos ser parcialmente ou temporariamente modificÃ¡vel.'),
(34, 5, 3.5, 'IntermediÃ¡rio entre \"HÃ¡ muito pouco interesse por brinquedos e objetos ou o uso Ã© disfuncional\" e \"A crianÃ§a pode apresentar os sintomas descritos acima porÃ©m com uma intensidade e frequÃªncia maior\".'),
(35, 5, 4, 'A crianÃ§a pode apresentar os sintomas descritos acima porÃ©m com uma intensidade e frequÃªncia maior. HÃ¡ significativa dificuldade em distrair a crianÃ§a quando estÃ¡ \"ocupada\" com estas atividades inadequadas e Ã© extremamente difÃ­cil modificar o uso inadequado do uso dos objetos.'),
(36, 6, 1, 'Embora a crianÃ§a possa perceber ou comentar as mudanÃ§as na rotina, ela Ã© capaz de aceitar estas mudanÃ§as sem angÃºstia excessiva.'),
(37, 6, 1.5, 'IntermediÃ¡rio entre \"Embora a crianÃ§a possa perceber ou comentar as mudanÃ§as na rotina, ela Ã© capaz de aceitar estas mudanÃ§as sem angÃºstia excessiva\" e \"Quando um adulto tenta mudar tarefas, a crianÃ§a pode continuar na mesma atividade ou usar os mesmos materiais\".'),
(38, 6, 2, 'Quando um adulto tenta mudar tarefas, a crianÃ§a pode continuar na mesma atividade ou usar os mesmos materiais.'),
(39, 6, 2.5, 'IntermediÃ¡rio entre \"Quando um adulto tenta mudar tarefas, a crianÃ§a pode continuar na mesma atividade ou usar os mesmos materiais\" e \"A crianÃ§a resiste ativamente a mudanÃ§as na rotina, tenta continuar sua antiga atividade e Ã© difÃ­cil de distraÃ­-la\".\r\n'),
(40, 6, 3, 'A crianÃ§a resiste ativamente a mudanÃ§as na rotina, tenta continuar sua antiga atividade e Ã© difÃ­cil de distraÃ­-la. Ela pode tornar-se infeliz e zangada quando uma rotina estabelecida Ã© alterada.'),
(41, 6, 3.5, 'IntermediÃ¡rio entre \"A crianÃ§a resiste ativamente a mudanÃ§as na rotina, tenta continuar sua antiga atividade e Ã© difÃ­cil de distraÃ­-la\" e \"A crianÃ§a demonstra reaÃ§Ãµes\r\ngraves Ã s mudanÃ§as\".'),
(42, 6, 4, 'A crianÃ§a demonstra reaÃ§Ãµes graves Ã s mudanÃ§as. Se uma mudanÃ§a Ã© forÃ§ada, ela pode tornar-se extremamente zangada ou nÃ£o disposta a ajudar e responder com acessos de raiva.'),
(43, 7, 1, 'O comportamento visual da crianÃ§a Ã© normal e adequado para sua idade. A visÃ£o Ã© utilizada em conjunto com outros sentidos como forma de explorar um objeto novo.'),
(44, 7, 1.5, 'IntermediÃ¡rio entre \"O comportamento visual da crianÃ§a Ã© normal e adequado para sua idade\" e \"A crianÃ§a precisa, ocasionalmente, ser lembrada de olhar para os objetos\".'),
(45, 7, 2, 'A crianÃ§a precisa, ocasionalmente, ser lembrada de olhar para os objetos. A crianÃ§a pode estar mais interessada em olhar espelhos ou luzes do que o fazem seus pares, pode ocasionalmente olhar fixamente para o espaÃ§o, ou pode evitar olhar as pessoas nos olhos.'),
(46, 7, 2.5, 'IntermediÃ¡rio entre \"A crianÃ§a precisa, ocasionalmente, ser lembrada de olhar para os objetos\" e \"A crianÃ§a deve ser lembrada freqÃ¼entemente de olhar para o que estÃ¡ fazendo\".'),
(47, 7, 3, 'A crianÃ§a deve ser lembrada freqÃ¼entemente de olhar para o que estÃ¡ fazendo, ela pode olhar fixamente para o espaÃ§o, evitar olhar as pessoas nos olhos, olhar objetos de um Ã¢ngulo incomum ou segurar os objetos muito prÃ³ximos aos olhos.'),
(48, 7, 3.5, 'IntermediÃ¡rio entre \"A crianÃ§a deve ser lembrada freqÃ¼entemente de olhar\r\npara o que estÃ¡ fazendo\" e \"A crianÃ§a evita constantemente olhar para as pessoas ou para certos objetos\".'),
(49, 7, 4, 'A crianÃ§a evita constantemente olhar para as pessoas ou para certos objetos e pode demonstrar formas extremas de outras peculiaridades visuais descritas acima.'),
(50, 8, 1, 'O comportamento auditivo da crianÃ§a Ã© normal e adequado para idade. A audiÃ§Ã£o Ã© utilizada junto com outros sentidos.'),
(51, 8, 1.5, 'IntermediÃ¡rio entre \"O comportamento auditivo da crianÃ§a Ã© normal e adequado para idade\" e \"Pode haver ausÃªncia de resposta ou uma resposta levemente exagerada a certos sons\".'),
(52, 8, 2, 'Pode haver ausÃªncia de resposta ou uma resposta levemente exagerada a certos sons. Respostas a sons podem ser atrasadas e os sons podem necessitar de repetiÃ§Ã£o para prender a atenÃ§Ã£o da crianÃ§a. A crianÃ§a pode ser distraÃ­da por sons externos.'),
(53, 8, 2.5, 'IntermediÃ¡rio entre \"Pode haver ausÃªncia de resposta ou uma resposta levemente exagerada a certos sons\" e \"As repostas da crianÃ§a aos sons variam\".'),
(54, 8, 3, 'As repostas da crianÃ§a aos sons variam. FreqÃ¼entemente ignora o som nas primeiros vezes em que Ã© feito. Pode assustar-se ou cobrir as orelhas ao ouvir alguns sons do cotidiano.'),
(55, 8, 3.5, 'IntermediÃ¡rio entre \"As repostas da crianÃ§a aos sons variam\" e \"A crianÃ§a reage exageradamente e/ou ou despreza sons num grau extremamente significativo, independente do tipo de som\".'),
(56, 8, 4, 'A crianÃ§a reage exageradamente e/ou ou despreza sons num grau extremamente significativo, independente do tipo de som.'),
(57, 9, 1, 'A crianÃ§a explora novos objetos de um modo adequado a sua idade, geralmente sentindo ou olhando. Paladar ou olfato podem ser usados quando adequados. Ao reagir a pequenas dores do dia-a-dia, a crianÃ§a expressa desconforto mas nÃ£o reage exageradamente.'),
(58, 9, 1.5, 'IntermediÃ¡rio entre \"A crianÃ§a explora novos objetos de um modo adequado a sua idade\" e \"A crianÃ§a pode persistir em colocar objetos na boca\".'),
(59, 9, 2, 'A crianÃ§a pode persistir em colocar objetos na boca; pode cheirar ou provar/experimentar objetos nÃ£o comestÃ­veis. Pode ignorar ou ter reaÃ§Ã£o levemente exagerada Ã  uma dor mÃ­nima, para a qual uma crianÃ§a normal expressaria somente desconforto.'),
(60, 9, 2.5, 'IntermediÃ¡rio entre \"A crianÃ§a pode persistir em colocar objetos na boca\" e \"A crianÃ§a pode estar moderadamente preocupada em tocar, cheirar ou provar objetos ou pessoas\".'),
(61, 9, 3, 'A crianÃ§a pode estar moderadamente preocupada em tocar, cheirar ou provar objetos ou pessoas. A crianÃ§a pode reagir demais ou muito pouco.'),
(62, 9, 3.5, 'IntermediÃ¡rio entre \"A crianÃ§a pode estar moderadamente preocupada em tocar, cheirar ou provar objetos ou pessoas\" e \"A crianÃ§a estÃ¡ preocupada em cheirar, provar e sentir objetos\".'),
(63, 9, 4, 'A crianÃ§a estÃ¡ preocupada em cheirar, provar e sentir objetos, mais pela sensaÃ§Ã£o do que pela exploraÃ§Ã£o ou uso normal dos objetos. A crianÃ§a pode ignorar completamente a dor ou reagir muito fortemente a desconfortos leves.'),
(64, 10, 1, 'O comportamento da crianÃ§a Ã© adequado tanto Ã  situaÃ§Ã£o quanto Ã  idade.'),
(65, 10, 1.5, 'IntermediÃ¡rio entre \"O comportamento da crianÃ§a Ã© adequado tanto Ã  situaÃ§Ã£o quanto Ã  idade\" e \"A crianÃ§a ocasionalmente demonstra muito ou pouco medo ou nervosismo\".'),
(66, 10, 2, 'A crianÃ§a ocasionalmente demonstra muito ou pouco medo ou nervosismo quando comparada Ã s reaÃ§Ãµes de uma crianÃ§a normal da mesma idade e em situaÃ§Ã£o semelhante.'),
(67, 10, 2.5, 'IntermediÃ¡rio entre \"A crianÃ§a ocasionalmente demonstra muito ou pouco medo ou nervosismo\" e \"A crianÃ§a demonstra bastante mais ou bastante menos medo\".'),
(68, 10, 3, 'A crianÃ§a demonstra bastante mais ou bastante menos medo do que seria tÃ­pico para uma crianÃ§a mais nova ou mais velha em uma situaÃ§Ã£o similar.'),
(69, 10, 3.5, 'IntermediÃ¡rio entre \"A crianÃ§a demonstra bastante mais ou bastante menos medo\" e \"Medos persistem mesmo apÃ³s experiÃªncias repetidas com eventos ou objetos inofensivos\".\r\n'),
(70, 10, 4, 'Medos persistem mesmo apÃ³s experiÃªncias repetidas com eventos ou objetos inofensivos. Extremamente difÃ­cil acalmar ou confortar a crianÃ§a. A crianÃ§a pode, por outro lado, falhar em demonstrar consideraÃ§Ã£o adequada aos riscos que outras crianÃ§as da mesma idade evitam.'),
(71, 11, 1, 'ComunicaÃ§Ã£o verbal normal, adequada a idade e Ã  situaÃ§Ã£o.'),
(72, 11, 1.5, 'IntermediÃ¡rio entre \"ComunicaÃ§Ã£o verbal normal, adequada a idade e Ã  situaÃ§Ã£o\" e \"A fala demonstra um atraso global\".'),
(73, 11, 2, 'A fala demonstra um atraso global. A maior parte do discurso  tem  significado;  porÃ©m,  alguma  ecolalia  ou  inversÃ£o  pronominal  podem  ocorrer. Algumas palavras peculiares ou jargÃµes podem ser usados ocasionalmente.'),
(74, 11, 2.5, 'IntermediÃ¡rio entre \"A fala demonstra um atraso globa\" e \"A fala  pode  estar  ausente\".'),
(75, 11, 3, 'A fala pode estar ausente. Quando presente, a comunicaÃ§Ã£o  verbal pode ser uma mistura de alguma fala significativa e alguma linguagem peculiar, tais como jargÃ£o,  ecolalia  ou  inversÃ£o pronominal. As peculiaridades na fala significativa podem incluir questionamentos excessivos ou preocupaÃ§Ã£o com algumtÃ³pico em particular.'),
(76, 11, 3.5, 'IntermediÃ¡rio entre \"A fala  pode  estar  ausente\" e \"Fala  significativa  nÃ£o  Ã©  utilizada\".'),
(77, 11, 4, 'NÃ£o hÃ¡ fala significativa; hÃ¡ grunhidos, gritos, sons que lembram animais ou atÃ© sons mais complexos que se aproximam da fala humana. A crianÃ§a pode mostrar persistente e bizarro uso de conhecimento de algumas palavras ou frases.'),
(78, 12, 1, 'Uso normal da comunicaÃ§Ã£o nÃ£o-verbal adequado Ã  idade e situaÃ§Ã£o'),
(79, 12, 1.5, 'IntermediÃ¡rio entre \"Uso normal da comunicaÃ§Ã£o nÃ£o-verbal adequado Ã  idade e situaÃ§Ã£o\" e \"Uso imaturo da comunicaÃ§Ã£o nÃ£o-verbal\".'),
(80, 12, 2, 'Uso imaturo da comunicaÃ§Ã£o nÃ£o-verbal; a crianÃ§a pode somente apontar vagamente ou esticar-se para alcanÃ§ar  o que quer, nas mesmas situaÃ§Ãµes   nas   quais   uma   crianÃ§a   da   mesma   idade   pode   apontar   ou   gesticular   mais especificamente para indicar o que deseja.'),
(81, 12, 2.5, 'IntermediÃ¡rio entre \" Uso imaturo da comunicaÃ§Ã£o nÃ£o-verbal\" e \"A crianÃ§a  geralmente  Ã©  incapaz  de expressar  suas  necessidades  ou  desejos  de  forma  nÃ£o  verbal,  e  nÃ£o  consegue  compreender  a comunicaÃ§Ã£o nÃ£o-verbal dos outros\".'),
(82, 12, 3, 'A crianÃ§a  geralmente  Ã©  incapaz  de expressar  suas  necessidades  ou  desejos  de  forma  nÃ£o  verbal,  e  nÃ£o  consegue  compreender  a comunicaÃ§Ã£o nÃ£o-verbal dos outros'),
(83, 12, 3.5, 'IntermediÃ¡rio entre \"A crianÃ§a  geralmente  Ã©  incapaz  de expressar  suas  necessidades  ou  desejos  de  forma  nÃ£o  verbal,  e  nÃ£o  consegue  compreender  a comunicaÃ§Ã£o nÃ£o-verbal dos outros\" e \"A crianÃ§a utiliza somente gestos bizarros ou   peculiares,   sem   significado   aparente,   e   nÃ£o   demonstra   nenhum   conhecimento   do significados associados aos gestos ou expressÃµes faciais dos outros\".'),
(84, 12, 4, 'A crianÃ§a utiliza somente gestos bizarros ou   peculiares,   sem   significado   aparente,   e   nÃ£o   demonstra   nenhum   conhecimento   do significados associados aos gestos ou expressÃµes faciais dos outros'),
(85, 13, 1, 'A crianÃ§a nÃ£o Ã© nem mais nem menos ativa que uma crianÃ§a normal da mesma idade em uma situaÃ§Ã£o semelhante.'),
(86, 13, 1.5, 'IntermediÃ¡rio entre \"A crianÃ§a nÃ£o Ã© nem mais nem menos ativa que uma crianÃ§a normal da mesma idade em uma situaÃ§Ã£o semelhante\" e \"A  crianÃ§a  pode  tanto  ser  um  pouco  irrequieta  quanto  um pouco \"preguiÃ§osa\"  ,  apresentando,  algumas  vezes,  movimentos  lentos\".'),
(87, 13, 2, 'A crianÃ§a pode tanto ser um pouco irrequieta quanto um pouco \"preguiÃ§osa\"  ,  apresentando,  algumas vezes,  movimentos  lentos. O nÃ­vel de atividade da crianÃ§a interfere apenas levemente no seu desempenho.'),
(88, 13, 2.5, 'IntermediÃ¡rio entre \"A crianÃ§a pode tanto ser um pouco irrequieta quanto um pouco \"preguiÃ§osa\",  apresentando,  algumas vezes,  movimentos  lentos\" e \"A  crianÃ§a  pode  ser  bastante  ativa  e  difÃ­cil  de conter\".'),
(89, 13, 3, 'A crianÃ§a pode ser bastante ativa e difÃ­cil de conter. Ela pode ter uma energia ilimitada ou pode nÃ£o ir prontamente para a cama Ã  noite. Por outro lado, a crianÃ§a pode ser bastante letÃ¡rgica e necessitar de um grande estÃ­mulo para mover-se.'),
(90, 13, 3.5, 'IntermediÃ¡rio entre \"A crianÃ§a pode ser bastante ativa e difÃ­cil de conter. Ela pode ter uma energia ilimitada ou pode nÃ£o ir prontamente para a cama Ã  noite\" e \"A crianÃ§a exibe extremos de atividade ou inatividade e pode atÃ© mesmo mudar de um extremo ao outro\".'),
(91, 13, 4, 'A crianÃ§a exibe extremos de atividade ou inatividade e pode atÃ© mesmo mudar de um extremo ao outro.'),
(92, 14, 1, 'A crianÃ§a Ã© tÃ£o inteligente quanto crianÃ§as tÃ­picas da mesma idade e nÃ£o tem qualquer habilidade intelectual ou problemas incomuns.'),
(93, 14, 1.5, 'IntermediÃ¡rio entre \"A crianÃ§a Ã© tÃ£o inteligente quanto crianÃ§as tÃ­picas da mesma idade e nÃ£o tem qualquer habilidade intelectual ou problemas incomuns\" e \"A crianÃ§a nÃ£o Ã© tÃ£o inteligente quanto crianÃ§as tÃ­picas da mesma idade\".'),
(94, 14, 2, 'A crianÃ§a nÃ£o Ã© tÃ£o inteligente quanto crianÃ§as tÃ­picas da mesma idade; as habilidades apresentam-se razoavelmente regulares atravÃ©s de todas as Ã¡reas.'),
(95, 14, 2.5, 'IntermediÃ¡rio entre \"A crianÃ§a nÃ£o Ã© tÃ£o inteligente quanto crianÃ§as tÃ­picas da mesma idade\" e \"Em geral, a crianÃ§a nÃ£o Ã© tÃ£o inteligente quanto uma tÃ­pica crianÃ§a da mesma idade, porÃ©m, a crianÃ§a pode funcionar prÃ³ximo do normal em uma ou mais Ã¡reas intelectuais\".'),
(96, 14, 3, 'Em geral, a crianÃ§a nÃ£o Ã© tÃ£o inteligente quanto uma tÃ­pica crianÃ§a da mesma idade, porÃ©m, a crianÃ§a pode funcionar prÃ³ximo do normal em uma ou mais Ã¡reas intelectuais.'),
(97, 14, 3.5, 'IntermediÃ¡rio entre \"Em geral, a crianÃ§a nÃ£o Ã© tÃ£o inteligente quanto uma tÃ­pica crianÃ§a da mesma idade, porÃ©m, a crianÃ§a pode funcionar prÃ³ximo do normal em uma ou mais Ã¡reas intelectuais\" e \"Embora a crianÃ§a geralmente nÃ£o seja tÃ£o inteligente quanto uma crianÃ§a tÃ­pica da mesma idade, ela pode funcionar atÃ© mesmo melhor que uma crianÃ§a normal da mesma idade em uma ou mais Ã¡reas\".'),
(98, 14, 4, 'Embora a crianÃ§a geralmente nÃ£o seja tÃ£o inteligente quanto uma crianÃ§a tÃ­pica da mesma idade, ela pode funcionar atÃ© mesmo melhor que uma crianÃ§a normal da mesma idade em uma ou mais Ã¡reas.'),
(99, 15, 1, 'A crianÃ§a nÃ£o apresenta nenhum dos sintomas caracterÃ­sticos do autismo.'),
(100, 15, 1.5, 'IntermediÃ¡rio entre \"a crianÃ§a nÃ£o apresenta nenhum dos sintomas caracterÃ­sticos do autismo\" e \"a crianÃ§a apresenta somente um pequeno nÃºmero de sintomas ou somente um grau leve de autismo\".'),
(101, 15, 2, 'A crianÃ§a apresenta somente um pequeno nÃºmero de sintomas ou somente um grau leve de autismo.'),
(102, 15, 2.5, 'IntermediÃ¡rio entre \"a crianÃ§a apresenta somente um pequeno nÃºmero de sintomas ou somente um grau leve de autismo\" e \"a crianÃ§a apresenta muitos sintomas ou um grau moderado de autismo\".'),
(103, 15, 3, 'A crianÃ§a apresenta muitos sintomas ou um grau moderado de autismo.'),
(104, 15, 3.5, 'IntermediÃ¡rio entre \"a crianÃ§a apresenta muitos sintomas ou um grau moderado de autismo\" e \"a crianÃ§a apresenta inÃºmeros sintomas ou um grau extremo de autismo\".'),
(105, 15, 4, 'A crianÃ§a apresenta inÃºmeros sintomas ou um grau extremo de autismo.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicoes`
--

CREATE TABLE IF NOT EXISTS `instituicoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `criacao` date NOT NULL,
  `modificacao` date NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `responsavel` varchar(45) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `cep` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `instituicoes`
--

INSERT INTO `instituicoes` (`id`, `descricao`, `criacao`, `modificacao`, `endereco`, `telefone`, `bairro`, `cidade`, `estado`, `responsavel`, `cnpj`, `cep`) VALUES
(1, 'wise.codes', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(2, 'Sem instituiÃ§Ã£o', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(3, 'IFPI', '2017-03-27', '2017-03-27', 'Centro', '(86) 3222-2222', 'Centro', 'Teresina', 'PI', 'PH', '22.222.222/2222-22', '64000-000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(100) CHARACTER SET big5 COLLATE big5_bin NOT NULL,
  `estado` varchar(2) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `criacao` datetime DEFAULT NULL,
  `modificacao` datetime DEFAULT NULL,
  `sexo` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `cpf`, `nascimento`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`, `criacao`, `modificacao`, `sexo`) VALUES
(1, 'Fernando Santana', '111.111.111-11', '11/11/1111', 'Rua Paraguai', 'Teresina', '66666-666', 'Teresina', 'PI', '(88) 8888-8888', '(66) 66666-6666', '2017-03-26 19:26:56', '2017-06-02 14:47:42', 'M'),
(2, 'Rodrigo Silva', '000.000.000-00', '12/34/5678', 'Rua dos Bobos, nÂº 0', 'Limbo', '64000-000', 'Peido de Velha', '??', '(86) 0000-0000', '(86) 00000-0000', '2017-08-25 00:58:20', '2017-08-25 00:58:20', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionais`
--

CREATE TABLE IF NOT EXISTS `profissionais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `id_profissao` int(11) NOT NULL,
  `id_instituicao` int(11) NOT NULL,
  `criacao` date NOT NULL,
  `modificacao` date DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `nivelacesso` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_profissao` (`id_profissao`),
  KEY `fk_id_instituicao` (`id_instituicao`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissionais`
--

INSERT INTO `profissionais` (`id`, `nome`, `cpf`, `id_profissao`, `id_instituicao`, `criacao`, `modificacao`, `telefone`, `usuario`, `senha`, `celular`, `nivelacesso`) VALUES
(1, 'Lucas Rodrigues', '', 1, 1, '0000-00-00', '0000-00-00', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 9),
(2, 'Fernando Castelo Branco GonÃ§alves Santana', '987.522.953-20', 3, 3, '2017-03-27', '2017-08-26', '(86) 9987-3718', 'fernando', 'c4ca4238a0b923820dcc509a6f75849b', '(86) 99452-0065', 4),
(3, 'Guilherme Nonato de SÃ¡ Ribeiro', '615.341.733-74', 3, 3, '2017-04-11', '2017-08-26', '(86) 0000-0000', 'guilherme', 'c4ca4238a0b923820dcc509a6f75849b', '(86) 98874-5298', 9),
(4, 'Luiza Mendes', '000.000.000-00', 2, 2, '2017-08-25', '2017-08-25', '(00) 0000-0000', 'luiza', 'c4ca4238a0b923820dcc509a6f75849b', '(00) 00000-0000', 1),
(5, 'Ricardo Souza', '999.999.999-99', 2, 2, '2017-08-25', '2017-08-25', '(86) 0000-0000', 'ricardo', 'c4ca4238a0b923820dcc509a6f75849b', '(86) 00000-0000', 1),
(6, 'Adriana Vieira', '000.000.000-00', 2, 2, '2017-08-25', '2017-08-25', '(00) 0000-0000', 'adriana', 'c4ca4238a0b923820dcc509a6f75849b', '(00) 00000-0000', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissoes`
--

CREATE TABLE IF NOT EXISTS `profissoes` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `criacao` date NOT NULL,
  `modificacao` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissoes`
--

INSERT INTO `profissoes` (`id`, `descricao`, `criacao`, `modificacao`) VALUES
(1, 'DB Admin', '0000-00-00', '0000-00-00'),
(2, 'ResponsÃ¡vel', '1999-02-01', '2000-02-02'),
(3, 'Professor (a)', '1999-02-01', '2017-04-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacoes`
--

CREATE TABLE IF NOT EXISTS `relacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profissional` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_profissional` (`id_profissional`),
  KEY `id_paciente` (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `relacoes`
--

INSERT INTO `relacoes` (`id`, `id_profissional`, `id_paciente`, `status`) VALUES
(3, 4, 1, 1),
(4, 5, 2, 1),
(5, 6, 2, 1),
(6, 1, 1, 0),
(7, 1, 1, 1),
(8, 1, 2, 1),
(9, 2, 2, 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_profissional` FOREIGN KEY (`id_profissional`) REFERENCES `profissionais` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `profissionais`
--
ALTER TABLE `profissionais`
  ADD CONSTRAINT `fk_id_instituicao` FOREIGN KEY (`id_instituicao`) REFERENCES `instituicoes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_profissao` FOREIGN KEY (`id_profissao`) REFERENCES `profissoes` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `relacoes`
--
ALTER TABLE `relacoes`
  ADD CONSTRAINT `fk_id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_profissional` FOREIGN KEY (`id_profissional`) REFERENCES `profissionais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
