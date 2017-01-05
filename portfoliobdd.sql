-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: portfoliobdd
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `citation`
--

DROP TABLE IF EXISTS `citation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extrait` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citation`
--

LOCK TABLES `citation` WRITE;
/*!40000 ALTER TABLE `citation` DISABLE KEYS */;
INSERT INTO `citation` VALUES (1,'Maître Yoda','La peur mène à la colère, la colère mène à la haine, la haine.... mène à la souffrance'),(2,'Forest Gump','La vie, c\'est comme une boîte de chocolat, on ne sait jamais sur quoi on va tomber.'),(3,'Kung Fu Panda','Hier est derrière, demain est mystère, et aujourd’hui est un cadeau, c’est pour cela qu’on l’appelle le présent.'),(4,'Abraham Lincoln','La plupart des citations sur Internet sont fausses.'),(5,'Albus Dumbledore, Harry Potter','Il faut du courage pour affronter ses ennemis mais il en faut encore plus pour affronter ses amis.'),(6,'le Sphinx, Mystery Men','Si tu doutes de tes pouvoirs tu donnes du pouvoir à tes doutes'),(7,'Emile, La cité de la peur','On peut pas tromper tromper 1 fois 1000 personnes mais on peut tromper 1000 fois euh... Ah non attendez...'),(8,'La vie de Brian, Monty Python','Always look on the bright side of life!'),(9,'Rachel, Batman Begins','Qui que l’on soit au fond de nous, nous ne sommes jugés que d’après nos actes'),(10,'Morpheus, Matrix','Il y a une différence entre connaître le chemin, et arpenter le chemin.'),(11,'Mondoshawan, le cinquième élément','Le temps n\'a pas d\'importance. Seule la vie compte.'),(12,'Le guide du voyageur intergalactique, Douglas Adams','La serviette est, nous apprend-t-il, est sans doute l\'objet le plus vastement utile que puisse posséder le voyageur interstellaire.'),(13,'Oncle Ben, Spiderman','Un grand pouvoir implique de grandes responsabilités'),(14,'Amiral Ackbar, Star Wars','It\'s a trap!');
/*!40000 ALTER TABLE `citation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `culture`
--

DROP TABLE IF EXISTS `culture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `culture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `why` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `culture`
--

LOCK TABLES `culture` WRITE;
/*!40000 ALTER TABLE `culture` DISABLE KEYS */;
INSERT INTO `culture` VALUES (5,'Film d\'animation','Le Voyage de Chihiro, de Hayao Miyazaki','Un film d\'animation entre réel et rêve, où une petite fille apprends le courage au travers de mille histoires fantastiques!','8b6d6140c8da04317280024234f82a5a.jpeg'),(6,'Film','Equilibrium, de Kurt Wimmer','J\'adore ce film! Outre la présence de Christian bale en acteur principal, la réflexion autour des ressenti et des émotions est très bien traitée, dans une sortie d\'utopie un peu à la sauce 1984.','62484aa6f2eadd9aa1a93fe4e541e2dd.jpeg'),(7,'Livre','Les Guerriers du silence, de Pierre Bordage','Une excellente triolgie de Science Fiction, avec des intrigues politiques à l\'échelle universelle, rien que ça!','d6f31d9e3960e04edf0a7dc62c73556a.jpeg'),(8,'Musique','Some Nights, de Fun','Remplie de musiques punchy! Ecouter cet album me met de bonne humeur et me donne du courage!','7c4e9ecdb4f99326c09d742f191513a3.jpeg'),(9,'Jeux Vidéos','Starcraft 2, de la société Blizzard','J\'aime bien ce jeu parce que c\'est un RTS (Real Time Strategy) qui demande de bien connaître ses unités de jeu, et d\'imaginer des stratégies pour contrer son adversaire. Je joue zerg (et je suis classé silver, ce qui est bien, mais pas top.)','f15aa9be0ed77ccbc46f0136a2e0b5bc.jpeg'),(10,'Voyage','Japon - entre mars et avril 2016','La langue japonaise, leur culture, leur respect, leur serviabilité, leur créativité, la nourriture.... oui, il y a vraiment beaucoup de chose que j\'admire dans ce pays. (sauf leur manière de travailler. ça, c\'est vraiment particulier!)','046613bdd4d5baeba4cc121e58834b6a.jpeg');
/*!40000 ALTER TABLE `culture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projet`
--

DROP TABLE IF EXISTS `projet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imgpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projet`
--

LOCK TABLES `projet` WRITE;
/*!40000 ALTER TABLE `projet` DISABLE KEYS */;
INSERT INTO `projet` VALUES (4,'Mondial des Métiers','Création d\'une application Web pour le mondial des métiers en équipe de 4, permettant de créer un compte utilisateur, puis de rattacher des mots-clés à des métiers.\nApplication Web en cours de création, fin de développement le 20 janvier.','c726fca6eaf7cdda82a13dbf561188e9.png',''),(5,'Klap Affaires','Création d\'un site Web en équipe de 4 personnes, pour présenter le concept de la société Klap Affaires. Ajout d\'une partie back-office, pour personnaliser certaines parties du site. Projet réalisé avec Symfony 2.8 et MySQL','0077fbdc96c9aa15386b0eae173dd902.png','http://klapaffaires.fr/'),(6,'Biesse France','Refonte de la partie Service et création d\'une partie présentation des commerciaux pour la version française du site de la société Biesse. Echanges réguliers avec les développeurs web au siège en Italie (et donc, en italien). Réflexion en amont et gestion entière du projet (pas de service informatique ni de développement web dans la société française :)), de sa conception à sa réalisation via un backoffice déjà prêt mais à adapter.','2d7aeb3ae722a9f4bb8fae9b26789096.png','http://www.biesse.com/fr/formation');
/*!40000 ALTER TABLE `projet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projets_tags`
--

DROP TABLE IF EXISTS `projets_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projets_tags` (
  `projet_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag_tech` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`projet_title`,`tag_tech`),
  KEY `IDX_E951CEC6809097DD` (`projet_title`),
  KEY `IDX_E951CEC668B38FA4` (`tag_tech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projets_tags`
--

LOCK TABLES `projets_tags` WRITE;
/*!40000 ALTER TABLE `projets_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `projets_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tech` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'Php'),(2,'MySQL'),(3,'HTML'),(4,'CSS'),(5,'Bootstrap'),(6,'Javascript'),(7,'Jquery'),(8,'Symfony');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-05  8:59:28
