-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1:3306
-- Tid vid skapande: 17 maj 2019 kl 08:21
-- Serverversion: 5.7.23
-- PHP-version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `cinema`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(50) NOT NULL,
  PRIMARY KEY (`catID`),
  UNIQUE KEY `catName` (`catName`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `categories`
--

INSERT INTO `categories` (`catID`, `catName`) VALUES
(1, 'Action'),
(2, 'Thriller'),
(3, 'Family'),
(4, 'Comedy'),
(5, 'Adventure'),
(6, 'Superhero'),
(7, 'Drama');

-- --------------------------------------------------------

--
-- Tabellstruktur `connections`
--

DROP TABLE IF EXISTS `connections`;
CREATE TABLE IF NOT EXISTS `connections` (
  `conID` int(11) NOT NULL AUTO_INCREMENT,
  `conCatID` int(11) DEFAULT NULL,
  `conMovieID` int(11) DEFAULT NULL,
  PRIMARY KEY (`conID`),
  KEY `conCatID` (`conCatID`),
  KEY `conMovieID` (`conMovieID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `connections`
--

INSERT INTO `connections` (`conID`, `conCatID`, `conMovieID`) VALUES
(1, 1, 1),
(5, 3, 4),
(3, 1, 2),
(4, 2, 2),
(6, 3, 3),
(7, 4, 3),
(8, 6, 1),
(9, 5, 1),
(10, 5, 4),
(11, 7, 5),
(12, 6, 3),
(13, 7, 6),
(14, 3, 7),
(15, 1, 8),
(16, 5, 8);

-- --------------------------------------------------------

--
-- Tabellstruktur `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movieID` int(11) NOT NULL AUTO_INCREMENT,
  `movieTitle` varchar(50) NOT NULL,
  `movieInfo` varchar(250) NOT NULL,
  `movieImg` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`movieID`),
  UNIQUE KEY `movieName` (`movieTitle`),
  UNIQUE KEY `movieImg` (`movieImg`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `movies`
--

INSERT INTO `movies` (`movieID`, `movieTitle`, `movieInfo`, `movieImg`) VALUES
(1, 'Avengers: Endgame', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to undo Thanos actions and restore order to the universe.', 'https://cdn.vox-cdn.com/thumbor/iqbKqSTMnIh5kMdWAw0M0qIAORM=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/15969338/surprise_marvel_releases_a_new_full_trailer_and_poster_for_avengers_endgame_social.jpg'),
(2, 'John Wick 3: Parabellum', 'Super-assassin John Wick is on the run after killing a member of the international assassins guild, and with a $14 million price tag on his head - he is the target of hit men and women everywhere.', 'https://static.adweek.com/adweek.com-prod/wp-content/uploads/2019/05/john-wick-poster-qa-hed-page-2019.jpg'),
(3, 'Shazam!', 'We all have a superhero inside us, it just takes a bit of magic to bring it out. In Billy Batsons case, by shouting out one word - SHAZAM. - this streetwise fourteen-year-old foster kid can turn into the grown-up superhero Shazam.', 'https://icdn2.digitaltrends.com/image/shazam-21.jpg'),
(4, 'Aladdin', 'A kindhearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.', 'http://revistapaperroom.com/wp-content/uploads/2019/04/aladdin-1552415145546_1280w.jpg'),
(5, 'Rocketman', 'A musical fantasy about the fantastical human story of Elton John\'s breakthrough years. ', 'https://ewedit.files.wordpress.com/2019/02/rmdomonlinel.jpg'),
(6, 'Tolkien', 'The formative years of the orphaned author J.R.R. Tolkien as he finds friendship, love and artistic inspiration among a group of fellow outcasts at school. ', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2019/05/Tolkien-movie-poster.jpg'),
(7, 'The Secret Life of Pets 2', 'Continuing the story of Max and his pet friends, following their secret lives after their owners leave them for work or school each day. ', 'http://www.desdehollywood.com/http://desdehollywood.com/wp-content/uploads/2019/04/THE-SECRET-LIFE-OF-PETS-2.jpg'),
(8, 'Godzilla II: King of the Monsters', 'The crypto-zoological agency Monarch faces off against a battery of god-sized monsters, including the mighty Godzilla, who collides with Mothra, Rodan, and his ultimate nemesis, the three-headed King Ghidorah. ', 'https://assets1.ignimgs.com/2019/03/20/kingofmonsterssetvisit-blogroll-1553124612455_1280w.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `postComment` varchar(2000) DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `postTitle` varchar(50) DEFAULT NULL,
  `postImg` varchar(2000) DEFAULT 'sample.jpg',
  `userId` int(11) DEFAULT NULL,
  PRIMARY KEY (`postID`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `posts`
--

INSERT INTO `posts` (`postID`, `postComment`, `postDate`, `postTitle`, `postImg`, `userId`) VALUES
(7, 'Lorem ipsum dolor sit amet, tantas feugait laboramus est no, ut nec error aperiri tamquam. Populo postulant vel ad, at sint volumus corpora est. Et dolor mucius appetere mel. An vel persius labores maluisset, et sed tation semper. Nisl nihil persequeris eu vis, definiebas ullamcorper eu sit, eu liber aperiam has. Nam tamquam noluisse cu, splendide instructior per no, ad nisl mundi possit nec. Ignota voluptua eu nec.\r\n\r\nAudire repudiare his ut, nam amet singulis erroribus at. Ea eum putent nominati. Qui verear dignissim at, albucius mandamus periculis te sed. Nec facilis accommodare ea, eu eius omnium dissentiunt cum. Vero homero gloriatur usu id, usu detracto albucius at. Ex est dicta prompta. Ne mea falli percipit nominati.\r\n', '2019-05-07 08:27:00', 'Buy 2 Tickets - Get 1 For Free ', 'https://images.unsplash.com/photo-1510130315046-1e47cc196aa0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80', 1),
(11, 'Lorem ipsum dolor sit amet, tantas feugait laboramus est no, ut nec error aperiri tamquam. Populo postulant vel ad, at sint volumus corpora est. Et dolor mucius appetere mel. An vel persius labores maluisset, et sed tation semper. Nisl nihil persequeris eu vis, definiebas ullamcorper eu sit, eu liber aperiam has. Nam tamquam noluisse cu, splendide instructior per no, ad nisl mundi possit nec. Ignota voluptua eu nec. Audire repudiare his ut, nam amet singulis erroribus at. Ea eum putent nominati. Qui verear dignissim at, albucius mandamus periculis te sed. Nec facilis accommodare ea, eu eius omnium dissentiunt cum. Vero homero gloriatur usu id, usu detracto albucius at. Ex est dicta prompta. Ne mea falli percipit nominati. ', '2019-05-09 19:31:00', 'Cinema Day Is Upon Us', 'https://experienceluxury.co/wp-content/uploads/2016/08/private-cinema.jpg', 1),
(16, 'Lorem ipsum dolor sit amet, tantas feugait laboramus est no, ut nec error aperiri tamquam. Populo postulant vel ad, at sint volumus corpora est. Et dolor mucius appetere mel. An vel persius labores maluisset, et sed tation semper. Nisl nihil persequeris eu vis, definiebas ullamcorper eu sit, eu liber aperiam has. Nam tamquam noluisse cu, splendide instructior per no, ad nisl mundi possit nec. Ignota voluptua eu nec. Audire repudiare his ut, nam amet singulis erroribus at. Ea eum putent nominati. Qui verear dignissim at, albucius mandamus periculis te sed. Nec facilis accommodare ea, eu eius omnium dissentiunt cum. Vero homero gloriatur usu id, usu detracto albucius at. Ex est dicta prompta. Ne mea falli percipit nominati. ', '2019-05-12 16:19:00', 'Avengers: Endgame - Book Your Tickets Now!', 'https://empirecinema.com.mt/wp-content/uploads/2019/03/Avengers-Endgame-2019-Desktop-Movie-Wallpapers-HD-4-1.jpg', 7),
(13, 'Lorem ipsum dolor sit amet, tantas feugait laboramus est no, ut nec error aperiri tamquam. Populo postulant vel ad, at sint volumus corpora est. Et dolor mucius appetere mel. An vel persius labores maluisset, et sed tation semper. Nisl nihil persequeris eu vis, definiebas ullamcorper eu sit, eu liber aperiam has. Nam tamquam noluisse cu, splendide instructior per no, ad nisl mundi possit nec. Ignota voluptua eu nec. Audire repudiare his ut, nam amet singulis erroribus at. Ea eum putent nominati. Qui verear dignissim at, albucius mandamus periculis te sed. Nec facilis accommodare ea, eu eius omnium dissentiunt cum. Vero homero gloriatur usu id, usu detracto albucius at. Ex est dicta prompta. Ne mea falli percipit nominati. ', '2019-05-09 19:31:00', 'Top 10 - Vote Now!', 'https://thisisyork.org/wp-content/uploads/2019/01/Top-10.jpg', 1),
(14, 'Lorem ipsum dolor sit amet, tantas feugait laboramus est no, ut nec error aperiri tamquam. Populo postulant vel ad, at sint volumus corpora est. Et dolor mucius appetere mel. An vel persius labores maluisset, et sed tation semper. Nisl nihil persequeris eu vis, definiebas ullamcorper eu sit, eu liber aperiam has. Nam tamquam noluisse cu, splendide instructior per no, ad nisl mundi possit nec. Ignota voluptua eu nec. Audire repudiare his ut, nam amet singulis erroribus at. Ea eum putent nominati. Qui verear dignissim at, albucius mandamus periculis te sed. Nec facilis accommodare ea, eu eius omnium dissentiunt cum. Vero homero gloriatur usu id, usu detracto albucius at. Ex est dicta prompta. Ne mea falli percipit nominati. ', '2019-05-09 19:32:00', 'Reruns of Your Favorites', 'https://www.flatpanelshd.com/pictures/disney_investor-day_2019%207_large.jpg', 7);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userCreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `userGroup` int(11) NOT NULL DEFAULT '0',
  `userDesc` varchar(400) DEFAULT 'Welcome to my profile!',
  `userImg` varchar(2000) DEFAULT 'user-placeholder.jpg',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`userID`, `userName`, `userPassword`, `userCreated`, `userGroup`, `userDesc`, `userImg`) VALUES
(1, 'administrator', '$2y$10$g9McVEAxyCUO6lYBEG40f.Hr4.Lqxq8.nfWELUqqqLbrBbwGvpqOO', '2019-05-09 15:01:24', 1, 'Lorem ipsum dolor sit amet, nam cu mazim nominati. Eos modus assum qualisque eu, ad est tractatos neglegentur. Vel ne esse tota, error similique vituperatoribus no quo, mei singulis neglegentur in. Has harum verear id, ut nam tale adhuc evertitur. Amet eius vidit ex ius, ne has velit maiorum. Sit ex idque facer.', 'https://www.magazin-naturist.com/resources/lucrand-acasa-computer-81118.jpg'),
(7, 'Alicia Smith', '$2y$10$SMgUctWluJGMaYTHj4C6x.uCctwp0SgmtCoxBs/5oCMcg74k4R5.S', '2019-05-14 13:00:21', 0, 'After evening and them replenish give. Fowl darkness. From brought. Replenish in winged first place divided doesn\'t and after whales blessed, that firmament female female. A i herb stars may isn\'t. Lesser likeness creature subdue firmament void.\r\n\r\n', 'https://www.nahb.ca/wp-content/uploads/2015/04/legal-office-administrator.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
