<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181209163226 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE chassis CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE chassis_cooler CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE cpu CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE cpucooler CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE gpu CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE mb CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE psu CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE ram CHANGE product_number product_number VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE storage CHANGE product_number product_number VARCHAR(32) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chassis CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE chassis_cooler CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE cpu CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE cpucooler CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE gpu CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE mb CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE product CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE psu CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE ram CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE storage CHANGE product_number product_number INT NOT NULL');
    }
}
