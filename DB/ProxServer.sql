-- Database for the ProxServer To,Intended for use with the ProxServer for Data Collection
-- Name, Surname, Id No, Date of Birth, Time of Sign in
CREATE TABLE IF NOT EXISTS `proxserver` (

    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) DEFAULT NULL,
    `surname` varchar(255) DEFAULT NULL,
    `idno` varchar(255) DEFAULT NULL,
    `dob` varchar(255) DEFAULT NULL,
    `timeOfSign` varchar(255) DEFAULT NULL,

    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
