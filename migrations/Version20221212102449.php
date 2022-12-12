<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221212102449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, id_client INT NOT NULL, surname_client VARCHAR(75) NOT NULL, firstname_client VARCHAR(75) NOT NULL, email_client VARCHAR(100) NOT NULL, mobile_phone VARCHAR(14) DEFAULT NULL, home_phone VARCHAR(14) DEFAULT NULL, street_number VARCHAR(5) NOT NULL, street_name VARCHAR(100) NOT NULL, city VARCHAR(100) NOT NULL, zipt_code VARCHAR(7) NOT NULL, address_complement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee (id INT AUTO_INCREMENT NOT NULL, id_employee INT NOT NULL, surname_employee VARCHAR(100) NOT NULL, firstname_employee VARCHAR(100) NOT NULL, pin VARCHAR(4) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention (id INT AUTO_INCREMENT NOT NULL, id_intervention INT NOT NULL, title_intervention LONGTEXT NOT NULL, description_intervention LONGTEXT DEFAULT NULL, date_time_intervention DATETIME NOT NULL, time_min_intervention INT NOT NULL, signature VARCHAR(250) DEFAULT NULL, id_employee_intervention INT NOT NULL, id_client_intervention INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE intervention');
    }
}
