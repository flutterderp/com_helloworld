DROP TABLE IF EXISTS `#__helloworld_greetings`;

CREATE TABLE IF NOT EXISTS `#__helloworld_greetings` (
  `id` SERIAL, -- SERIAL is an alias for BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE.
  `greeting` VARCHAR(200) NOT NULL,
  `published` BOOLEAN NOT NULL DEFAULT FALSE,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

INSERT INTO `#__helloworld_greetings` (`greeting`) VALUES
  ('Hello world!'),
  ('Good bye world!');
