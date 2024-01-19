<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240118115348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment ALTER post_id SET NOT NULL');
        $this->addSql('ALTER TABLE post ALTER updated_at DROP NOT NULL');
        $this->addSql('ALTER TABLE post RENAME COLUMN is_published TO ispublished');
        $this->addSql('ALTER TABLE "user" ADD is_verified BOOLEAN NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE post ALTER updated_at SET NOT NULL');
        $this->addSql('ALTER TABLE post RENAME COLUMN ispublished TO is_published');
        $this->addSql('ALTER TABLE comment ALTER post_id DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" DROP is_verified');
    }
}
