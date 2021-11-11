<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211111094645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD phone_number VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ALTER pays_id DROP NOT NULL');
        $this->addSql('ALTER TABLE users ALTER niveau_id DROP NOT NULL');
        $this->addSql('ALTER TABLE users ALTER sexe DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE users DROP phone_number');
        $this->addSql('ALTER TABLE users ALTER pays_id SET NOT NULL');
        $this->addSql('ALTER TABLE users ALTER niveau_id SET NOT NULL');
        $this->addSql('ALTER TABLE users ALTER sexe SET NOT NULL');
    }
}
