<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220706103104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE borrow (id INT AUTO_INCREMENT NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME DEFAULT NULL, userId INT NOT NULL, equimentId INT NOT NULL, INDEX IDX_55DBA8B064B64DCC (userId), INDEX IDX_55DBA8B0CFDF131E (equimentId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, status INT NOT NULL, typeId INT NOT NULL, INDEX IDX_D338D5839BF49490 (typeId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, roleId INT NOT NULL, INDEX IDX_8D93D649B8C2FD88 (roleId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE borrow ADD CONSTRAINT FK_55DBA8B064B64DCC FOREIGN KEY (userId) REFERENCES user (id)');
        $this->addSql('ALTER TABLE borrow ADD CONSTRAINT FK_55DBA8B0CFDF131E FOREIGN KEY (equimentId) REFERENCES equipment (id)');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D5839BF49490 FOREIGN KEY (typeId) REFERENCES type (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B8C2FD88 FOREIGN KEY (roleId) REFERENCES role (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE borrow DROP FOREIGN KEY FK_55DBA8B0CFDF131E');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B8C2FD88');
        $this->addSql('ALTER TABLE borrow DROP FOREIGN KEY FK_55DBA8B064B64DCC');
        $this->addSql('DROP TABLE borrow');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE user');
    }
}
