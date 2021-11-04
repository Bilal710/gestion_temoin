<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211104113231 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE admin_user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE apprenant_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE enseigner_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE niveau_enseignement_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE participation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pays_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE postes_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE profession_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE reunion_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE admin_user (id INT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AD8A54A9F85E0677 ON admin_user (username)');
        $this->addSql('CREATE TABLE apprenant (id INT NOT NULL, pays_id INT NOT NULL, niveau_id INT NOT NULL, profession_id INT NOT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, sexe VARCHAR(3) DEFAULT NULL, naissance_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C4EB462EA6E44244 ON apprenant (pays_id)');
        $this->addSql('CREATE INDEX IDX_C4EB462EB3E9C81 ON apprenant (niveau_id)');
        $this->addSql('CREATE INDEX IDX_C4EB462EFDEF8996 ON apprenant (profession_id)');
        $this->addSql('CREATE TABLE enseigner (id INT NOT NULL, temoin_id INT NOT NULL, poste_id INT NOT NULL, start_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, end_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, observation TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_663E85CD1655312C ON enseigner (temoin_id)');
        $this->addSql('CREATE INDEX IDX_663E85CDA0905086 ON enseigner (poste_id)');
        $this->addSql('CREATE TABLE niveau_enseignement (id INT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE participation (id INT NOT NULL, temoin_id INT DEFAULT NULL, reunion_id INT DEFAULT NULL, presence VARCHAR(120) NOT NULL, motif_absence TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_AB55E24F1655312C ON participation (temoin_id)');
        $this->addSql('CREATE INDEX IDX_AB55E24F4E9B7368 ON participation (reunion_id)');
        $this->addSql('CREATE TABLE pays (id INT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE postes (id INT NOT NULL, post_pays_id INT NOT NULL, name VARCHAR(255) NOT NULL, adrress VARCHAR(255) DEFAULT NULL, first_day VARCHAR(25) DEFAULT NULL, second_day VARCHAR(25) DEFAULT NULL, created_at DATE DEFAULT NULL, phone_number VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5A763C649B0CF577 ON postes (post_pays_id)');
        $this->addSql('CREATE TABLE profession (id INT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE reunion (id INT NOT NULL, type VARCHAR(120) NOT NULL, reunion_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN reunion.reunion_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE users (id INT NOT NULL, pays_id INT NOT NULL, niveau_id INT NOT NULL, profession_id INT DEFAULT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, sexe VARCHAR(1) NOT NULL, naissance_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1483A5E9A6E44244 ON users (pays_id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9B3E9C81 ON users (niveau_id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9FDEF8996 ON users (profession_id)');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EA6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau_enseignement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EFDEF8996 FOREIGN KEY (profession_id) REFERENCES profession (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE enseigner ADD CONSTRAINT FK_663E85CD1655312C FOREIGN KEY (temoin_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE enseigner ADD CONSTRAINT FK_663E85CDA0905086 FOREIGN KEY (poste_id) REFERENCES postes (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F1655312C FOREIGN KEY (temoin_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F4E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunion (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE postes ADD CONSTRAINT FK_5A763C649B0CF577 FOREIGN KEY (post_pays_id) REFERENCES pays (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau_enseignement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9FDEF8996 FOREIGN KEY (profession_id) REFERENCES profession (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE apprenant DROP CONSTRAINT FK_C4EB462EB3E9C81');
        $this->addSql('ALTER TABLE users DROP CONSTRAINT FK_1483A5E9B3E9C81');
        $this->addSql('ALTER TABLE apprenant DROP CONSTRAINT FK_C4EB462EA6E44244');
        $this->addSql('ALTER TABLE postes DROP CONSTRAINT FK_5A763C649B0CF577');
        $this->addSql('ALTER TABLE users DROP CONSTRAINT FK_1483A5E9A6E44244');
        $this->addSql('ALTER TABLE enseigner DROP CONSTRAINT FK_663E85CDA0905086');
        $this->addSql('ALTER TABLE apprenant DROP CONSTRAINT FK_C4EB462EFDEF8996');
        $this->addSql('ALTER TABLE users DROP CONSTRAINT FK_1483A5E9FDEF8996');
        $this->addSql('ALTER TABLE participation DROP CONSTRAINT FK_AB55E24F4E9B7368');
        $this->addSql('ALTER TABLE enseigner DROP CONSTRAINT FK_663E85CD1655312C');
        $this->addSql('ALTER TABLE participation DROP CONSTRAINT FK_AB55E24F1655312C');
        $this->addSql('DROP SEQUENCE admin_user_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE apprenant_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE enseigner_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE niveau_enseignement_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE participation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pays_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE postes_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE profession_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE reunion_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE users_id_seq CASCADE');
        $this->addSql('DROP TABLE admin_user');
        $this->addSql('DROP TABLE apprenant');
        $this->addSql('DROP TABLE enseigner');
        $this->addSql('DROP TABLE niveau_enseignement');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE postes');
        $this->addSql('DROP TABLE profession');
        $this->addSql('DROP TABLE reunion');
        $this->addSql('DROP TABLE users');
    }
}
