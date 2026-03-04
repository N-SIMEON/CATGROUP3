-- NAME NAYITURIKI SIMEON| REG 2530692| ROLE
-- Role 7 — Database + QA + Git Integration


CREATE TABLE IF NOT EXISTS `records` (
  `id`         INT           NOT NULL AUTO_INCREMENT,
  `client`     VARCHAR(100)  NOT NULL,
  `service`    VARCHAR(100)  NOT NULL,
  `quantity`   INT           NOT NULL DEFAULT 1,
  `unit_price` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `total`      DECIMAL(12,2) NOT NULL DEFAULT 0.00,
  `created_at` TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
