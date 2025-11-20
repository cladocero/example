<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251120180219 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal_disease ADD animalType NVARCHAR(255)');
        $this->addSql('ALTER TABLE animal_disease ADD eyeDischarge BIT');
        $this->addSql('ALTER TABLE animal_disease ADD CONSTRAINT FK_80E405FBFE09AA03C76588F FOREIGN KEY (animalType, eyeDischarge) REFERENCES animal_disease_stats (animal_type, eye_discharge)');
        $this->addSql('CREATE INDEX IDX_80E405FBFE09AA03C76588F ON animal_disease (animalType, eyeDischarge)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA db_accessadmin');
        $this->addSql('CREATE SCHEMA db_backupoperator');
        $this->addSql('CREATE SCHEMA db_datareader');
        $this->addSql('CREATE SCHEMA db_datawriter');
        $this->addSql('CREATE SCHEMA db_ddladmin');
        $this->addSql('CREATE SCHEMA db_denydatareader');
        $this->addSql('CREATE SCHEMA db_denydatawriter');
        $this->addSql('CREATE SCHEMA db_owner');
        $this->addSql('CREATE SCHEMA db_securityadmin');
        $this->addSql('CREATE SCHEMA dbo');
        $this->addSql('ALTER TABLE animal_disease DROP CONSTRAINT FK_80E405FBFE09AA03C76588F');
        $this->addSql('DROP INDEX IDX_80E405FBFE09AA03C76588F ON animal_disease');
        $this->addSql('ALTER TABLE animal_disease DROP COLUMN animalType');
        $this->addSql('ALTER TABLE animal_disease DROP COLUMN eyeDischarge');
    }
}
