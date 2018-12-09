<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181209134935 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cpucooler (product_number INT NOT NULL, rpm VARCHAR(10) NOT NULL, noise_level DOUBLE PRECISION NOT NULL, size INT NOT NULL, cpucooler_type VARCHAR(10) NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cpucooler ADD CONSTRAINT FK_80EC0058F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('DROP TABLE cpu_cooler');
        $this->addSql('ALTER TABLE chassis DROP id');
        $this->addSql('ALTER TABLE chassis_cooler DROP id');
        $this->addSql('ALTER TABLE cpu DROP id');
        $this->addSql('ALTER TABLE gpu DROP id');
        $this->addSql('ALTER TABLE psu DROP id');
        $this->addSql('ALTER TABLE ram DROP id');
        $this->addSql('ALTER TABLE storage DROP id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cpu_cooler (product_number INT NOT NULL, id INT NOT NULL, rpm VARCHAR(10) NOT NULL COLLATE utf8mb4_unicode_ci, noise_level DOUBLE PRECISION NOT NULL, size INT NOT NULL, cpucooler_type VARCHAR(10) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cpu_cooler ADD CONSTRAINT FK_9DFD5F1F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('DROP TABLE cpucooler');
        $this->addSql('ALTER TABLE chassis ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE chassis_cooler ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE cpu ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE gpu ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE psu ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE ram ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE storage ADD id INT NOT NULL');
    }
}
