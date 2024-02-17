-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 17 fév. 2024 à 20:31
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `onepiece`
--

-- --------------------------------------------------------

--
-- Structure de la table `arc`
--

DROP TABLE IF EXISTS `arc`;
CREATE TABLE IF NOT EXISTS `arc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `number` int NOT NULL,
  `pathimg` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories_name`
--

DROP TABLE IF EXISTS `categories_name`;
CREATE TABLE IF NOT EXISTS `categories_name` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories_name`
--

INSERT INTO `categories_name` (`id`, `category_name`) VALUES
(1, 'crew'),
(2, 'personnage'),
(3, 'fruit');

-- --------------------------------------------------------

--
-- Structure de la table `crew`
--

DROP TABLE IF EXISTS `crew`;
CREATE TABLE IF NOT EXISTS `crew` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `captain` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pathimg` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `captain` (`captain`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `crew`
--

INSERT INTO `crew` (`id`, `name`, `captain`, `pathimg`, `description`) VALUES
(1, 'L\'equipage du chapeau de paille', 'Monkey_D_Luffy', 'assets\\img\\crew\\Chapeau_de_paille.jpg', 'L\'équipage du Chapeau de Paille dans One Piece est composé de pirates dirigés par Monkey D. Luffy.membres principaux de l\'équipage : <br>\r\n            <strong>Monkey D. Luffy </strong>- Capitaine<br> \r\n           <strong> Roronoa Zoro </strong>- Épéiste <br>\r\n           <strong> Nami </strong>- Navigateur<br>\r\n           <strong> Usopp </strong>- Tireur d\'élite <br>\r\n           <strong> Sanji</strong> - Cuisinier <br>\r\n           <strong> Tony Tony Chopper </strong> - Médecin<br>\r\n           </strong> Nico Robin </strong> - Archéologue<br>\r\n            Ensemble, ils parcourent Grand Line, affrontent des ennemis redoutables et poursuivent leurs rêves individuels tout en formant un équipage solide et diversifié.'),
(2, 'L\'equipage du heart', 'Trafalgar_D_Water_Law', 'assets\\img\\crew\\heart.jpg', 'L\'équipage du Heart dans One Piece est dirigé par Trafalgar D. Water Law. Voici quelques membres clés de l\'équipage du Heart :\r\n\r\n    Trafalgar D. Water Law - Capitaine : Un chirurgien et utilisateur du fruit Ope Ope, il est également l\'allié de Luffy.\r\n\r\n    Bepo - Navigateur : Un ours polaire parlant qui fait partie intégrante de l\'équipage.\r\n\r\n    Jean Bart - Membre de l\'équipage : Un homme puissant avec une grande loyauté envers Law.\r\n\r\n    Shachi et Penguin - Membres de l\'équipage : Deux membres loyaux de l\'équipage, souvent en compagnie de Law.\r\n\r\nL\'équipage du Heart a été un facteur clé dans certains arcs de l\'histoire, en particulier lors de l\'Arc Punk Hazard, où Law et Luffy ont formé une alliance temporaire pour atteindre leurs objectifs communs.'),
(3, 'L\'Équipage du Roux', 'Shanks', 'assets\\img\\crew\\shanks.jpg', 'L\'équipage de Shanks dans One Piece est dirigé par Shanks le Roux, l\'un des Quatre Empereurs. Bien que les membres spécifiques de son équipage n\'aient pas été entièrement révélés, voici quelques-uns des membres connus et des informations sur l\'équipage de Shanks :\r\n\r\n    Shanks le Roux - Capitaine : Un des Quatre Empereurs, Shanks est un pirate respecté et puissant.\r\n\r\n    Ben Beckman - Premier officier : Ben Beckman est le bras droit de Shanks et est considéré comme l\'un des pirates les plus puissants de l\'équipage.\r\n\r\n    Yasopp - Tireur d\'élite : Yasopp est le tireur d\'élite de l\'équipage et est également le père d\'Usopp de l\'équipage du Chapeau de Paille.\r\n\r\n    Rockstar : Rockstar est un membre de l\'équipage de Shanks, apparaissant pour la première fois lors de la confrontation avec Kaido.\r\n\r\nL\'équipage de Shanks est connu pour son calme et sa sagesse, en plus de sa puissance. Ils ont également une relation spéciale avec l\'équipage de Luffy, en particulier avec le capitaine Shanks et Luffy ayant échangé leurs chapeaux de paille symboliques.'),
(4, 'L\'Équipage de Barbe Blanche', 'Edward Newgate', 'assets\\img\\crew\\barbe_blanche.jpg', 'L\'équipage de Barbe Blanche, aussi connu sous le nom des Pirates de Barbe Blanche, était dirigé par Edward Newgate, surnommé Barbe Blanche. Cet équipage était l\'un des plus puissants de son époque et a joué un rôle majeur dans l\'histoire de One Piece. Voici quelques membres notables de l\'équipage de Barbe Blanche :\r\n\r\n    Edward Newgate (Barbe Blanche) - Capitaine : L\'un des Quatre Empereurs, il était connu pour sa force physique énorme et sa capacité à créer des séismes avec le pouvoir du fruit Gura Gura.\r\n\r\n    Marco - Commandant en chef : Un utilisateur du fruit Zoan mythique Tori Tori no Mi, modèle Phénix. Marco était l\'un des commandants les plus puissants de l\'équipage.\r\n\r\n    Jozu - Commandant : Jozu avait le pouvoir du fruit Kira Kira no Mi, qui lui permettait de se transformer en diamant. Il était un commandant de l\'équipage et avait une grande force physique.\r\n\r\n    Vista - Commandant : Vista était un épéiste habile et un commandant de l\'équipage de Barbe Blanche.\r\n\r\n    Thatch : Un membre de l\'équipage et l\'un des commandants de la 4e division, Thatch était tué par Barbe Noire pour s\'emparer du fruit Yami Yami.\r\n\r\nL\'équipage de Barbe Blanche était réputé pour sa loyauté envers son capitaine et ses membres étaient connus pour leur puissance individuelle. Lors de la guerre au sommet à Marineford, l\'équipage a joué un rôle majeur, démontrant sa force et son impact dans l\'univers de One Piece.\r\n'),
(5, 'Marine', NULL, 'assets\\img\\crew\\marine.png', 'La Marine dans One Piece est une organisation militaire qui maintient l\'ordre mondial. Dirigée par des amiraux et des vice-amiraux, elle lutte contre les pirates et les menaces. Ses bases, amiraux et agents, tels que le Cipher Pol, jouent un rôle majeur dans l\'univers de One Piece.'),
(6, 'Inconnu', NULL, 'assets\\img\\crew\\inconnu.png', 'Cette personne ne possède pas d\'équipage ou nous n\'en connaissons pas le nom . '),
(7, 'L\'equipage d\'Arlong', 'Arlong', 'assets\\img\\crew\\arlong.jpg', 'L\'équipage d\'Arlong, dirigé par Arlong, est composé principalement d\'hommes-poissons. Leur objectif principal est de contrôler l\'île Cocoyasi. Des membres notables incluent Arlong, un requin homme-poisson, et Hatchan, un poulpe homme-poisson.'),
(8, 'L\'equipage a Don Quichotte Doflamingo', 'Doflamingo', 'assets\\img\\crew\\doflamingo.webp', 'L\'équipage de Don Quichotte Doflamingo est dirigé par Doflamingo, un ancien noble mondial et trafiquant d\'armes. Parmi ses membres notables figure Vergo, un haut commandant et vice-amiral infiltré.'),
(9, 'L\'equipage de baggy le clown', 'Baggy', 'assets\\img\\crew\\baggy.webp', 'L\'équipage de Baggy le Clown, dirigé par Buggy, est un groupe de pirates comiques dans One Piece. Baggy le Clown est le capitaine, et son équipage est principalement composé de pirates aux compétences variées. Bien que comiques, ils ont joué un rôle dans certains arcs de l\'histoire, comme l\'Arc d\'East Blue et l\'Arc d\'Impel Down.');

-- --------------------------------------------------------

--
-- Structure de la table `fruit`
--

DROP TABLE IF EXISTS `fruit`;
CREATE TABLE IF NOT EXISTS `fruit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int DEFAULT NULL,
  `pathimg` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personnage_id` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `personnage_id` (`personnage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `genre`, `price`, `pathimg`, `personnage_id`, `description`) VALUES
(1, 'Goro Goro no Mi ', 'Logia', NULL, 'assets\\img\\fruits\\', 12, 'Le Goro Goro no Mi est un fruit du démon de type Logia dans \"One Piece\", conférant à son utilisateur le pouvoir de créer, contrôler et devenir la foudre. Enel, un antagoniste, est un utilisateur notable de ce fruit, exploitant ces pouvoirs pour régner sur l\'île de Skypiea.'),
(2, 'Mera Mera no Mi', 'Logia', NULL, 'assets\\img\\fruits\\', 7, 'Le Mera Mera no Mi est un fruit du démon de type Logia dans \"One Piece\". Celui qui le consomme obtient le pouvoir de créer, contrôler et devenir le feu. Les capacités de ce fruit confèrent à son utilisateur une maîtrise totale du feu, lui permettant de lancer des attaques incendiaires et de devenir intangible en se transformant en flammes. '),
(3, 'Moku Moku no Mi', 'Logia', NULL, 'assets\\img\\fruits\\', 8, 'Le Moku Moku no Mi est un fruit du démon de type Logia. Celui qui le mange obtient le pouvoir de créer, manipuler et devenir la fumée. Cette capacité confère à l\'utilisateur des avantages offensifs et défensifs, lui permettant de se déplacer rapidement et de créer des attaques dévastatrices à partir de la fumée.'),
(4, 'Suna Suna no Mi', 'Logia', NULL, 'assets\\img\\fruits\\', 6, 'Le Suna Suna no Mi est un fruit du démon de type Logia dans \"One Piece\". Il accorde à son utilisateur le pouvoir de créer, manipuler et devenir du sable. L\'utilisateur de ce fruit peut générer des tempêtes de sable, se transformer en sable pour éviter les attaques physiques, et même utiliser le sable pour des attaques offensives. '),
(5, 'Hito Hito no Mi', 'Zoan', NULL, 'assets\\img\\fruits\\', 9, 'Le Hito Hito no Mi est un fruit du démon de type Zoan, permettant à son utilisateur de se transformer en humain ou en une forme hybride homme-animal. Le modèle particulier du fruit peut varier, conférant différentes capacités et caractéristiques à l\'utilisateur. \r\n'),
(6, 'Neko Neko no Mi', 'Zoan', NULL, 'assets\\img\\fruits\\', 10, 'Le Neko Neko no Mi est un fruit du démon de type Zoan, permettant à l\'utilisateur de se transformer en chat ou en une forme hybride homme-chat. Plusieurs variantes existent, chacune offrant la capacité de se métamorphoser en un type spécifique de chat.'),
(7, 'Inu Inu no Mi', 'Zoan Mythique', NULL, 'assets\\img\\fruits\\', 11, 'Le fruit de Yamato, l\'Uo Uo no Mi, modèle Ryūsei Ryūsei, est de type Zoan Mythique, lui permettant de se transformer en dragon de glace. Cette transformation lui confère une puissance redoutable au combat.'),
(8, 'Gomu Gomu no Mi', 'Paramecia', NULL, 'assets\\img\\fruits\\', 1, 'Le Gomu Gomu no Mi est un fruit du démon de type Paramecia la capacité d\'avoir un corps élastique comme du caoutchouc. Cela lui permet d\'étirer ses membres pour des attaques puissantes, mais le rend vulnérable à la noyade.'),
(10, 'Pas de fruit', 'Haki', NULL, NULL, NULL, 'seul la force suffit');

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pathimg` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `crew_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `crew_id` (`crew_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`id`, `name`, `pathimg`, `price`, `description`, `crew_id`) VALUES
(1, 'Monkey_D_Luffy', '/assets/img/people/', '/assets/img/price/', 'Luffy est le héros de \"One Piece\", un jeune pirate avec le pouvoir de l\'étirement grâce au fruit du démon. Capitaine du Chapeau de Paille, il cherche à devenir le Roi des Pirates en explorant Grand Line avec son équipage.', 1),
(2, 'Roronoa Zoro', '/assets/img/people/', '/assets/img/price/', 'Roronoa Zoro est le premier membre de l\'équipage du Chapeau de Paille dans \"One Piece\". Maître épéiste, il rêve de devenir le meilleur sabreur du monde. Zoro manie trois sabres et est connu pour sa puissance brute et sa détermination.', 1),
(3, 'Nami', '/assets/img/people/', '/assets/img/price/', 'Nami est la navigatrice talentueuse de l\'équipage du Chapeau de Paille dans \"One Piece\". Autrefois arnaqueuse, elle aspire à cartographier le monde. Nami possède une grande habileté en navigation et utilise son bâton climatique pour manipuler le temps.', 1),
(4, 'Vinsmoke Sanji', '/assets/img/people/', '/assets/img/price/', 'Sanji est le cuisinier passionné de l\'équipage du Chapeau de Paille dans \"One Piece\". Maître du style de combat \"Jambe Noire\", il n\'utilise jamais ses mains pour se battre, réservant ses pieds. Sanji voue une admiration particulière aux femmes et refuse de frapper une femme sous aucun prétexte.', 1),
(5, 'Usopp', '/assets/img/people/', '/assets/img/price/', 'Usopp est le tireur d\'élite et le menteur invétéré de l\'équipage du Chapeau de Paille dans \"One Piece\". Originaire de Syrup Village, il rêve de devenir un grand guerrier des mers. Usopp utilise son ingéniosité pour créer des armes et des gadgets, et bien que ses histoires soient souvent exagérées, son courage est indéniable lorsqu\'il est confronté à des défis.', 1),
(6, 'Crocodile', '/assets/img/people/', '/assets/img/price/', 'Crocodile dans One Piece, ex-Capitaine Corsaire, maîtrise le sable avec le fruit Suna Suna. Dirigeant de Baroque Works, il combine intelligence machiavélique et ambition démesurée.', 6),
(7, 'Portgas_D_Ace', '/assets/img/people/', '/assets/img/price/', 'Portgas D. Ace, le frère de Luffy dans One Piece, est un puissant utilisateur du fruit Mera Mera. Capitaine de l\'équipage Spade Pirates, il cherche à faire devenir le Roi des Pirates barbe blanche. Son attitude chaleureuse et son sens du sacrifice en font un personnage inoubliable.', 4),
(8, 'smoker', '/assets/img/people/', '/assets/img/price/', 'Smoker dans One Piece est le Vice-Amiral de la Marine, traquant Luffy pour sa prime. Fumant continuellement deux cigares, il utilise le fruit Moku Moku pour manipuler la fumée. Impitoyable envers les pirates, il incarne la justice de la Marine avec une volonté inflexible.', 5),
(9, 'Tony Tony Chopper', '/assets/img/people/', '/assets/img/price/', 'Chopper dans One Piece est le médecin de l\'équipage de Luffy. Un renne qui a mangé le fruit Hito Hito, il peut prendre différentes formes, y compris une version humanoïde. Malgré son apparence mignonne, Chopper est un guérisseur compétent et un membre précieux de l\'équipage.', 1),
(10, 'Rob Lucci', '/assets/img/people/', '/assets/img/price/', 'Rob Lucci, membre du Cipher Pol 9, est un antagoniste redoutable dans One Piece. Utilisateur du fruit Zoan, modèle léopard, il peut se transformer en léopard humain. Son habileté au combat combinée à sa cruauté impitoyable en fait un agent redoutable du Gouvernement Mondial, notamment lors de l\'Arc Enies Lobby.', 5),
(11, 'Yamato', '/assets/img/people/', '/assets/img/price/', 'Yamato dans One Piece est le fils de Kaido et aspire à devenir le samouraï légendaire, Oden Kozuki. Rejetant l\'héritage de son père, Yamato admire Luffy et souhaite naviguer avec lui vers un monde de liberté. Son puissant désir de liberté le distingue dans l\'histoire.', 6),
(12, 'Ener', '/assets/img/people/', '/assets/img/price/', 'Ener dans One Piece est un ancien Dieu de Skypiea, utilisateur du fruit Goro Goro. Il cherche le légendaire trésor One Piece sur l\'île céleste. Avec son pouvoir de la foudre, il se considère comme un dieu et impose sa justice sans pitié. Son arrogance et sa puissance font de lui un antagoniste mémorable.', 6),
(13, 'Shanks', '/assets/img/people/', '/assets/img/price/', 'Shanks le Roux est un personnage majeur dans One Piece. Capitaine d\'un équipage de pirates, il est respecté en tant que l\'un des Quatre Empereurs. Shanks est connu pour sa sagesse, sa loyauté et son influence positive sur Monkey D. Luffy. Il a perdu son bras pour sauver Luffy et a joué un rôle clé dans l\'histoire, notamment en confiant à Luffy son chapeau de paille symbolique, symbole de la volonté de devenir le Roi des Pirates.', 3),
(16, 'Arlong', '/assets/img/people/', '/assets/img/price/', 'Arlong est le capitaine de l\'Équipage d\'Arlong ainsi qu\'un ancien membre de L\'Équipage des Pirates du Soleil sous les ordres de Fisher Tiger puis de Jinbe.', 7),
(17, 'Trafalgar D Water Law', 'assets\\img\\people\\', 'assets\\img\\price\\', 'Trafalgar Law, de son vrai nom Trafalgar D. Water Law, est le Capitaine et Docteur de l\'Équipage du Heart, un équipage pirate constitué surtout de docteurs.', 2),
(18, 'Don Quichotte Doflamingo', 'assets\\img\\people\\', 'assets\\img\\price\\', 'Doflamingo est un puissant pirate dans One Piece, chef du gang Donquixote. Il utilise le fruit du démon \"Ito Ito no Mi\" pour manipuler les fils. Son ambition et sa cruauté en font un antagoniste mémorable.', 8),
(19, 'Baggy le clown', 'assets\\img\\people\\', 'assets\\img\\price\\', 'Baggy le Clown est un pirate de l\'univers One Piece. Capitaine des Baggy Pirates, il possède le fruit du démon Bara Bara no Mi, lui permettant de séparer son corps en morceaux. Son excentricité et ses apparitions font de lui un personnage mémorable.', 9);

-- --------------------------------------------------------

--
-- Structure de la table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
CREATE TABLE IF NOT EXISTS `role_users` (
  `id` int NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role_users`
--

INSERT INTO `role_users` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `role_id` int NOT NULL,
  `email` varchar(130) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `role_id`, `email`, `firstname`) VALUES
(9, 'admin', 'admin', '2024-02-17 13:22:41', 1, 'admin@admin.fr', 'admin'),
(10, 'yams', '1234', '2024-02-17 13:22:41', 2, 'yams@roronoa.fr', 'yams');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fruit`
--
ALTER TABLE `fruit`
  ADD CONSTRAINT `fruit_ibfk_1` FOREIGN KEY (`personnage_id`) REFERENCES `personnage` (`id`);

--
-- Contraintes pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD CONSTRAINT `personnage_ibfk_1` FOREIGN KEY (`crew_id`) REFERENCES `crew` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
