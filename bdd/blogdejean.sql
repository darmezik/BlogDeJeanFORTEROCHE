-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 20 déc. 2019 à 13:28
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogdejean`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `commentDate` datetime NOT NULL,
  `report` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `postId`, `pseudo`, `comment`, `commentDate`, `report`) VALUES
(31, 1, 'kiki', 'Commentaires 1 sur le chapitre 1', '2019-12-16 17:29:58', 0),
(32, 2, 'kiki', 'Commentaires 1 sur le chapitre 2', '2019-12-16 17:30:24', 0),
(33, 2, 'kiki', 'Commentaires 2 sur le chapitre 2 merde', '2019-12-16 17:30:52', 1),
(37, 1, 'kiki', 're', '2019-12-20 12:40:25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`pseudo`, `pass`) VALUES
('Admin73', '$2y$10$yXJ6xhzIxfMK0ZzvlY/Nneeem/jJtcPj5toYNSfhgMzJPVPQynmP6');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`) VALUES
(1, 'Chapitre 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum lacus sit amet nunc viverra molestie quis vel est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sollicitudin sollicitudin nibh, et convallis nulla dictum vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas auctor odio at vulputate posuere. Suspendisse interdum ante dapibus erat semper, eu condimentum elit varius. Vestibulum ac elit laoreet, scelerisque purus iaculis, pretium erat.\r\n\r\nCurabitur interdum, ex eu elementum egestas, velit tellus dapibus massa, ac aliquet libero diam eu purus. Vivamus magna erat, lacinia a vulputate vulputate, placerat pellentesque velit. Maecenas non arcu at dolor sollicitudin pharetra. Suspendisse a viverra lacus, at bibendum augue. Phasellus mollis lacus eget imperdiet imperdiet. Vestibulum in nibh neque. Nunc at condimentum risus, id pharetra nulla.\r\n\r\nCurabitur massa orci, vulputate rhoncus orci nec, ullamcorper rutrum erat. Cras hendrerit ornare justo, ut sodales turpis facilisis vitae. Suspendisse efficitur, nibh eget ultrices scelerisque, velit purus fringilla nunc, at lacinia ex ligula a libero. Pellentesque at tortor vitae velit pharetra porttitor a vel erat. Quisque vehicula, nisl sed scelerisque blandit, mi felis imperdiet massa, eget dignissim mi elit at odio. Maecenas egestas quam quis eros ornare, ultrices laoreet nibh tempor. Curabitur sagittis, magna eu pulvinar aliquet, nisl arcu venenatis sapien, eu ornare eros nunc sed eros. Vivamus facilisis vestibulum ipsum at volutpat. Nam hendrerit dolor ac tempus aliquam. Nullam condimentum massa a justo scelerisque, eu vehicula arcu dapibus. Nam efficitur metus consectetur, malesuada metus sed, auctor sapien. Donec sit amet mi sit amet sem scelerisque vestibulum id efficitur diam. Aliquam erat volutpat. Aliquam erat volutpat.\r\n\r\nNunc consequat, dui sit amet consectetur lobortis, arcu turpis rhoncus magna, ut sollicitudin diam leo ut augue. Morbi feugiat ligula sed dolor placerat cursus. Aliquam finibus est eu suscipit pharetra. Quisque sed urna metus. Vestibulum eu lacus vel arcu vehicula placerat. Pellentesque sit amet tempus libero. Nunc semper, augue consequat varius cursus, justo ligula auctor quam, a rutrum dolor turpis ut metus. Ut eu elementum quam. Phasellus tempus ultrices viverra. Maecenas ultricies gravida blandit.\r\n\r\nSuspendisse blandit dui a tortor elementum maximus. Nam viverra tristique finibus. Nulla quis gravida dui. Praesent ut cursus nunc. Nunc sed libero aliquam tellus viverra interdum. Nunc luctus nibh nulla, et fermentum mi hendrerit a. Nullam a nibh vitae nisl pulvinar consequat nec non ipsum. Cras consectetur orci metus, vitae elementum libero fermentum sit amet.'),
(2, 'Chapitre 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet nisi vitae diam pretium scelerisque. Vestibulum eleifend eleifend cursus. Praesent vehicula, orci id aliquam blandit, augue diam posuere urna, et aliquet tellus ligula sit amet felis. In pellentesque tellus vitae vehicula sodales. Morbi molestie iaculis maximus. Nulla arcu augue, faucibus id lorem dapibus, varius bibendum leo. Nam sit amet orci tristique sem tincidunt rutrum. Pellentesque molestie aliquam fringilla. Suspendisse dolor tellus, sodales eu orci molestie, pulvinar fermentum metus. Pellentesque sed sem tincidunt, eleifend dolor vel, tempor ante. Etiam volutpat rutrum pellentesque. Nam eget libero porta, consectetur velit vitae, aliquam magna. Donec in ex neque. Nulla eleifend massa ut varius molestie. Praesent convallis efficitur quam, a sollicitudin nisi. Fusce vestibulum libero imperdiet, rhoncus mauris non, rutrum ex. In ac elit malesuada, consequat lectus sed, rutrum magna. Vestibulum venenatis tortor sollicitudin fermentum aliquet. Duis mattis nunc id tincidunt tincidunt. Aenean aliquam interdum sem, et viverra ligula. Aenean cursus mi at leo consectetur, id vulputate leo suscipit. Etiam eget maximus massa. Cras vel congue eros, non fringilla massa. Nullam sed sem sodales est imperdiet semper. Aenean porta, mauris laoreet accumsan iaculis, arcu sapien pulvinar est, sollicitudin pharetra tellus lectus tempor lacus. Nunc augue velit, mattis vel tempor a, imperdiet in nulla. Maecenas odio purus, eleifend sit amet diam nec, congue fermentum tellus. Vivamus in tellus ipsum. Aenean hendrerit ipsum sit amet gravida convallis. Nullam varius ullamcorper arcu, tristique porttitor mauris. Mauris eu luctus neque, eu porta orci. Nunc sollicitudin sapien ullamcorper, pharetra sapien a, suscipit lacus. Cras nec tempus quam. Nam at pulvinar erat. Mauris sit amet neque vitae nibh tincidunt pulvinar ut nec ligula. Aliquam sed maximus felis, sit amet tincidunt nibh. Curabitur congue efficitur scelerisque. Etiam sollicitudin risus mauris. Nulla vestibulum vehicula massa in eleifend. Proin sit amet enim dapibus, fermentum mi id, vulputate enim. Nullam congue odio mollis efficitur tincidunt. Phasellus pharetra ultricies vehicula. Phasellus mattis diam eros, ac placerat augue aliquet a. Sed ut convallis elit. Ut consequat magna tortor, eleifend vulputate dolor lacinia et. Aenean vestibulum libero quis justo convallis, fringilla porta ex iaculis. Sed semper viverra massa, at porta sem ullamcorper eget. Aliquam eros magna, tempor eget condimentum ut, porttitor vel arcu. Aliquam tempor sit amet erat nec gravida. Aliquam faucibus leo a est pharetra, vitae fringilla mi interdum. Vivamus ac neque vel risus laoreet tincidunt in in metus. Nullam augue ante, commodo sit amet diam a, blandit convallis velit. Nulla magna justo, commodo vitae elementum ac, tincidunt sit amet tellus. Sed scelerisque libero a porta consequat. Maecenas et neque et justo rhoncus blandit. Vestibulum et nisi id ipsum varius commodo.D');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postId` (`postId`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fkCommentPost` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
