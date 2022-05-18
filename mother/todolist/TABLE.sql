CREATE TABLE IF NOT EXISTS `to_do_list_contents` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



INSERT INTO `to_do_list_contents` (`id`, `username`, `content`, `date`) VALUES
(1, '::1', 'I have to submit my DFM assignment...', '02-04-2015'),
(2, '::1', 'Remember to Logout...', '05-04-2015'),
(3, '::1', 'Exam on next week.', '18-04-2015');