-- Génération de la nav
SELECT
  `slug`,
  `nav-title`
FROM
  `content`
;

-- Affichage de la page teletubbies
SELECT
  `title`,
  `h1`,
  `p`,
  `spanClass`,
  `spanText`,
  `img-alt`,
  `img-src`,
  `nav-title`
FROM
  `content`
WHERE
  `slug` = 'teletubbies'
;

INSERT INTO
`content`(
  `slug`,
  `title`,
  `h1`,
  `p`,
  `spanClass`,
  `spanText`,
  `img-alt`,
  `img-src`,
  `nav-title`
)
VALUES
(
  ':slug',
  ':title',
  ':h1',
  ':p',
  ':spanClass',
  ':spanText',
  ':img-alt',
  ':img-src',
  ':nav-title'
);

UPDATE
  `content`
SET
  `slug` = ':slug',
  `title` = ':title',
  `h1` = ':h1',
  `p` = ':p',
  `spanClass` = ':spanClass',
  `spanText` = ':spanText',
  `img-alt` = ':img-alt',
  `img-src` = ':img-src',
  `nav-title` = ':nav-title'
WHERE
  `id` = ':id'
;

DELETE FROM
`content`
WHERE
`id` = ':id'
;

CREATE TABLE content
(
  id          INT(10) AUTO_INCREMENT
    PRIMARY KEY,
  slug        VARCHAR(255)  NOT NULL,
  title       VARCHAR(110)  NOT NULL,
  h1          VARCHAR(60)   NOT NULL,
  p           VARCHAR(3000) NOT NULL,
  spanClass   VARCHAR(50)   NOT NULL,
  spanText    VARCHAR(100)  NOT NULL,
  `img-alt`   VARCHAR(100)  NOT NULL,
  `img-src`   VARCHAR(2048) NOT NULL,
  `nav-title` VARCHAR(30)   NOT NULL
);