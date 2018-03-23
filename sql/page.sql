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