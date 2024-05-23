<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240520100019 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE about_us (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, auteur VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE action (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, auteur VARCHAR(255) NOT NULL, date DATE DEFAULT NULL, description LONGTEXT NOT NULL, image1 VARCHAR(255) DEFAULT NULL, image2 VARCHAR(255) DEFAULT NULL, image3 VARCHAR(255) DEFAULT NULL, sous_titre1 VARCHAR(255) DEFAULT NULL, sous_titre2 VARCHAR(255) DEFAULT NULL, sous_titre3 VARCHAR(255) DEFAULT NULL, sous_titre4 VARCHAR(255) DEFAULT NULL, sous_titre5 VARCHAR(255) DEFAULT NULL, paragraphe1 LONGTEXT DEFAULT NULL, paragraphe2 LONGTEXT DEFAULT NULL, paragraphe3 LONGTEXT DEFAULT NULL, paragraphe4 LONGTEXT DEFAULT NULL, paragraphe5 LONGTEXT DEFAULT NULL, paragraphe6 LONGTEXT DEFAULT NULL, paragraphe7 LONGTEXT DEFAULT NULL, paragraphe8 LONGTEXT DEFAULT NULL, paragraphe9 LONGTEXT DEFAULT NULL, paragraphe10 LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cotisation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, stripe_id VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE donation (id INT AUTO_INCREMENT NOT NULL, civilite VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mail_data (id INT AUTO_INCREMENT NOT NULL, choice VARCHAR(255) NOT NULL, subject VARCHAR(255) NOT NULL, body VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newz (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, contenu LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, auteur VARCHAR(255) DEFAULT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subscriber (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, is_confirmed TINYINT(1) NOT NULL, subscribed_at DATETIME DEFAULT NULL, unsubscribe_token VARCHAR(255) DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_AD005B69E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unsubscriber (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, subscribed_at DATETIME DEFAULT NULL, unsubscribed_at DATETIME DEFAULT NULL, unsubscribe_reason VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8B14BEAAE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649E899029B FOREIGN KEY (plan_id) REFERENCES plan (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649E899029B ON user (plan_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE about_us');
        $this->addSql('DROP TABLE action');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE cotisation');
        $this->addSql('DROP TABLE donation');
        $this->addSql('DROP TABLE mail_data');
        $this->addSql('DROP TABLE newz');
        $this->addSql('DROP TABLE subscriber');
        $this->addSql('DROP TABLE unsubscriber');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649E899029B');
        $this->addSql('DROP INDEX IDX_8D93D649E899029B ON user');
    }
}
