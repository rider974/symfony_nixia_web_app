<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221213070750 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employee DROP id_employee');
        $this->addSql('ALTER TABLE intervention DROP id_intervention');
        $this->addSql('ALTER TABLE utilisateurs DROP id_user, DROP yes');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE intervention ADD id_intervention INT NOT NULL');
        $this->addSql('ALTER TABLE employee ADD id_employee INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs ADD id_user INT NOT NULL, ADD yes VARCHAR(75) NOT NULL');
    }
}
