-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Fev-2023 às 03:11
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pvnn`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idCategory` int(4) NOT NULL,
  `tag` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idCategory`, `tag`) VALUES
(1, 'Comunidade'),
(2, 'Sugestões'),
(3, 'Comentário'),
(4, 'Teoria'),
(5, 'Opinião'),
(6, 'Personagens'),
(7, 'Lugares'),
(8, 'Boas vindas'),
(9, 'Dúvida'),
(10, 'Esclarecimento'),
(11, 'Melany'),
(12, 'Andrew'),
(13, 'Raj'),
(14, 'Aadi'),
(14, 'Mãe do Andrew'),
(15, 'Capitão'),
(17, 'Jake'),
(18, 'Pais da Melany'),
(19, 'Magia'),
(20, 'Sol e Lua');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `idPosts` int(4) NOT NULL,
  `titulo` text NOT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `resumo` tinytext NOT NULL,
  `texto` longtext,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`idPosts`, `titulo`, `autor`, `resumo`, `texto`, `data`, `idCategoria`) VALUES
(1, 'Boas vindas!', 'Anna', 'Sejam bem vindos ao blog PVNN!\r\nTodos da equipe e da comunidade agradecem que esteja juntando a nós.', ' Este blog foi feito como intuito de publicar o livro \"Primeira vez num navio\" de forma digital e acessiva a todos, além de criar uma comunidade onde os leitores podem participar do desenrolar da história e trazer suas ideias e opiniões sobre o livro à tona. Esperamos que aproveitem bem essa interação com a autora e os outros participantes da comunidade. ', '2023-01-20 17:14:21', 8),
(2, 'Conheça os personagens do livro.', 'Jefferson', 'No livro os personagens são muito importantes para entender a história e como ela irá se desenrolar.', 'O PVNN foi um livro escrito majoritariamente durante a pandemia, sendo assim a autora teve tempo de sobra para pensar em como seus personagens seriam, tanto em personalidade quanto aparência.\r\nNeste post você vai conhecer cada um deles mais detalhadamente.\r\n\r\nMelany Geisell \r\n\r\nDescrição: \r\n- Idade: 17 anos (Porém faz aniversário no meio da viagem)\r\n- Altura: 1,70 m\r\n- Peso: 62 kg\r\n- Profissão: Modelo da marca Geisell\r\n- Academicamente: Curso superior em Design de moda\r\n\r\nPersonalidade:\r\n- Introvertida, com boas habilidades sociais, desconfiada, curiosa, destemida, persistente, meiga, gentil, animada, detalhista e observadora.\r\n\r\n\r\nMelany é descrita como uma garota que prefere estar no meio dos livros e estar em contato com a natureza ao estar no meio das pessoas, por mais que sua presença atraia olhares. Uma grande entusiasta da arte, vive observando tudo e guarda suas ideias em um diário, o mesmo que sua avó lhe deu de presente. Cansada de viver como o centro das atenções, ela prefere ser reclusa e não fazer amizades, já que essas duram pouco tempo. \r\n\r\nAndrew Payne\r\n\r\nDescrição:\r\n- Idade: 18 anos\r\n- Altura: 1,80 m\r\n- Peso: 75 kg\r\n- Profissão: Sucessor do capitão\r\n- Academicamente: Autodidata\r\n\r\nPersonalidade:\r\n- Introvertido, bom orador, discreto, misterioso, frio, petulante, gentil, cuidadoso, protetor, desconfiado, observador e determinado.\r\n\r\n\r\nAndrew é descrito como um garoto que conhece o navio como a palma de sua, e por essa habilidade consegue \"desaparecer\" quando quer, e encontrar qualquer coisa ou qualquer um muito mais rápido. Apesar de ser o filho d capitão a maioria das pessoas não o reconhecem e esse é o motivo perfeito para ele não ter amigos, além de sua amiga de infância a quem seus pais juntaram muito cedo achando que no futuro eles poderiam estar juntos como casal, mas Andrew nunca foi fã da ideia.\r\n\r\nNo romance os dois são como dois opostos, e as intrigas e brincadeiras do inicio só reforçam essa ideia, mas com o passar no tempo os dois percebem que são mais parecidos do que imaginavam e acabam se unindo para fazer de sua vida mais livre e não só o que os pais de ambos querem que seja. Com isso eles acabam descobrindo que têm um segredo compartilhado...Mas isso já é spoiller demais! \r\n\r\nLeiam o livro para conhecerem melhor nosso personagens principais, beijos!\r\n', '2023-02-04 14:50:47', 6),
(3, 'Quem é Melany Geisell?', 'M.G', 'Conheça mais sobre a personagem principal do livro!', ' Melany Geisell é uma jovem de família grande em status, filha dos donos da mais famosa marca de roupas de seu estado, a \"Geisell\'s Atelier\". \r\n Uma aluna aplicada que, logo no início do ano em que se passa o livro, descobriu que havia conseguido ingressar em sua faculdade de moda dos sonhos, para ser futuramente uma grande estilista e modelo da marca de seus pais.\r\n \r\n Melany sendo uma bela jovem e de família endinheirada já foi alvo de pessoas fúteis que se aproximaram dela somente para se aproveitarem de seu status e conseguirem mais atenção, porém toda vez que percebia isso Melany se afastava e deixava todos para trás, assim sofrendo as consequências e se tornando ainda mais o centro das atenções pelos boatos que criavam sobre sua personalidade, dita como \"arrogante\". Sendo assim com o passar do tempo sua imagem na escola era de uma pessoa que quem se deveria manter distância, sendo muitas vezes comparada com sol, \"muitos querem sua luz e seu calor, mas nenhum aguenta chegar muito perto\".\r\n\r\n Ao ganhar uma viagem de cruzeiro como recompensa por ter ingressado à faculdade a jovem pensava que seria hora de descansar e se deixar ser mais sociável, porém não esperava que a pessoa de quem mais queria manter distância fosse a que mais gostaria de sua companhia, exclusivamente. Sendo assim, Andrew seria seu amigo depois de anos acostumada a estar sozinha.\r\n\r\n Uma bela jovem de pele bronzeada, cabelos cacheados e curtos, olhos cor de âmbar, pequenas sardas, alta e magra, uma \"modelo que não modela\" como dizia sua família. Melany é a personificação do Sol em sua história sendo assim como era descrito no livro de sua avó, e por isso era seu dever acabar com o ciclo que se repetia a milênios em sua família e na de Andrew.\r\n\r\n Para entender melhor a história de Melany e todo o resto da trama LEIA O LIVRO! Obrigada por ler meu post!', '2023-02-11 15:13:56', 11),
(4, 'Quem é Andrew Payne?', 'A.P', 'Conheça nosso herói da trama!', ' Andrew Payne é o filho do Capitão do navio em se passa a história do livro. Com um passado complicado Andrew perdeu sua mãe ainda criança e passou a viver viajando com seu pai ao redor do mundo sem nunca se relacionar com ninguém de maneira íntima, nem com seu pai. \r\n\r\n Um jovem misterioso, frio e altruísta sempre está a disposição de todos por mais que na maioria das vezes não o percebam no meio da multidão. Andrew nunca teve a oportunidade de mostrar seu verdadeiro valor, sem poder ir a uma escola comum sempre estudou à distância e se manteve informado do mundo por meio da internet, então não possui ainda alguma profissão além de ser \"o filho do dono do navio\".\r\n\r\n Um rapaz bonito, de pele clara, olhos azuis vibrantes, cabelo liso e escuro, magro porém forte e ágil é atraente e magnético a quem o observa, e por ter um temperamento apático não é fácil de se aproximar, porém uma pessoa conseguiu chamar sua atenção, e a de muitos outros também, Melany Geisell.\r\n\r\n Sem esperar que fosse conseguir ao menos uma amizade com a garota, Andrew a segue pelo navio e a observa de longe, assim como era descrita a Lua no livro que ela sempre carregava consigo. O jovem é a personificação da lua e é insignificante para a maioria das pessoas, mas é reconhecido pela tangível Mel, como a chama carinhosamente.\r\n\r\n Sempre alegre e confortável com ela ao seu lado Andrew questiona se pode mesmo ser a solução para a história que sempre ouvia quando criança, e sente que tem responsabilidade de estar ao lado de Melany enquanto puder, ou pelo menos até que o destino os deixe ficar lado a lado.\r\n\r\n Obrigado por ler meu post.', '2023-02-11 15:13:56', 12),
(5, 'O que significam o Sol e a Lua?', 'Anna', 'Entenda o significado por trás da escolha da autora.', ' Desde o início dos tempos os humanos acreditam na bipolaridade do equilíbrio como algo essencial para a vida, só pode haver luz se existem as trevas e por aí vai. Isso não é diferente com o Sol e a Lua, ambos coexistem sendo a Lua comumente designada como fria e sem luz, sendo assim mais próxima da escuridão, e o Sol sendo a própria luz que emana calor e trás os seres à vida. \r\n A ideia do livro é justamente trazer esses opostos, colocá-los juntos como dependentes um do outro e colocá-los a prova.', '2023-02-11 15:16:06', 20),
(6, 'Olá, sou nova por aqui!', 'Evie', 'Acabei de entrar na comunidade, aceito algumas dicas de onde começar.', ' Olá, sou Evie e sou amante de livros de fantasia, e queria saber por onde começar a ler no blog. \r\n Obrigada desde já!', '2023-02-11 15:16:06', 9),
(7, 'Boas vindas aos leitores!', 'Todos os personagens', 'Sejam bem vindos ao nosso mundo!', ' Olá jovens leitores, estamos super felizes que tenham escolhido participar de nossa história, somos gratos ao engajamento que nossa história está tendo e queremos agradecer por terem entrado em nossa comunidade, sejam bem vindos!', '2023-02-11 15:16:06', 8),
(8, 'Regras da comunidade', 'Anna', 'Leiam com atenção as regras e aproveitem!', ' Olá, nossa comunidade é pequena, mas como todas as outras pela internet, ela depende de regras básicas para uma boa convivência virtual.\r\n 1: Educação e respeito, sempre é bom lembrar que é bom ser cordial com todos para não haver brigas, caso essa regra for quebrada o acesso dos envolvidos será removido, e sim é uma regra muito importante para nós.\r\n 2: Nada de compartilhar o livro ou infringir o copyright, o livro foi escrito com muito carinho e esforço, compartilhar de forma indevida faria tudo isso cair por terra, então não seja um babaca e compartilhe o blog para que mais pessoas possam conhecer o trabalho da autora!\r\n 3: Evite falar de sua vida pessoal, aqui é um ambiente de compartilhamento de informações e opiniões sobre o livro, não uma rede social comum, e evite deixar com que possam saber seus dados pessoais para não ter sua conta ou vida infringidas.\r\n Obrigada por lerem!', '2023-02-11 15:17:27', 1),
(9, 'O capitão é o vilão?', 'Fã número 1', 'Razões pelas quais eu tenho absoluta certeza de que o Capitão Payne é o vilão do livro.', ' Desde o início da história ele está lá cuidando do navio e dos seus passageiros, mas a atitude que ele tem ao se dirigir a Andrew sempre me deixou com uma pulga atrás da orelha, e se ele for na verdade o real vilão do livro? Querendo aproximar os protagonistas desde o momento em que se conheceram e então agindo mais firme e rude com o passar do tempo, me faz pensar que na verdade é tudo parte de um plano mirabolante dele para os dois criarem ódio um do outro e não ficarem juntos. Conforme o fim do livro chega mais e mais perto, mais eu tenho medo de descobrir o que realmente está por trás de tudo... Tudo o que eu quero é o romance de volta!', '2023-02-11 15:17:27', 4),
(10, 'Conheçam Jake, o personagem mais fofo e engraçado do livro!', 'J.K', 'Venham conhecer o garotinho que rouba as cenas e ama se divertir e encher o saco da irmã mais velha!', ' Esse garotinho fofo e traquina, de 9 anos de idade, que vive correndo pelos corredores a procura de algo interessante pra fazer é a sensação no livro \"Primeira vez num navio\", por justamente roubar a cena ao ser fofo e engraçado quando interage com os mais velhos. \r\n Um garoto de pele clara, olhos verdes e cabelo loiro que não para quieto por um segundo. Foi inspirado no irmão mais novo da autora, tanto que até os nomes são parecidos e ela quis trazer essa pequena realidade de sua vida para sua obra de uma forma bem interessante, mas obviamente o Jake da vida real já é mais crescido. \r\n Espero que deem bastante carinho a este personagem que nos lembra de alguém que já tivemos em nossas vidas, o bendito garoto que não para quieto mas sempre é educado.', '2023-02-11 15:17:57', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `tipoUsuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `username`, `dataNascimento`, `tipoUsuario`) VALUES
(1, 'autora', 'autora@gmail.com', 'autora', 'Autora', '2004-01-26', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategory`,`tag`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`idPosts`,`idCategoria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategory` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `idPosts` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

