<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170411103755 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE test');
        $this->addSql('ALTER TABLE blog_section DROP title');
        $this->addSql('ALTER TABLE blog_section ALTER path SET NOT NULL');
        $this->addSql('ALTER TABLE blog_section ALTER path TYPE VARCHAR(255)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE TABLE test (rno INT DEFAULT NULL)');
        $this->addSql('ALTER TABLE blog_section ADD title VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE blog_section ALTER path DROP NOT NULL');
        $this->addSql('ALTER TABLE blog_section ALTER path TYPE VARCHAR(100)');
    }
}
