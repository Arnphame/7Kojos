<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181209163439 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chassis CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE chassis ADD CONSTRAINT FK_35C973DFF4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chassis_cooler CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE chassis_cooler ADD CONSTRAINT FK_AA370F51F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cpu CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE cpu ADD CONSTRAINT FK_BA80502EF4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cpucooler CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE cpucooler ADD CONSTRAINT FK_80EC0058F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gpu CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE gpu ADD CONSTRAINT FK_BD89F8F2F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mb CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE mb ADD CONSTRAINT FK_32360761F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE psu CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE psu ADD CONSTRAINT FK_8FCD1EC4F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ram CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE ram ADD CONSTRAINT FK_E7D1222FF4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE storage CHANGE product_number product_number INT NOT NULL');
        $this->addSql('ALTER TABLE storage ADD CONSTRAINT FK_547A1B34F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chassis DROP FOREIGN KEY FK_35C973DFF4EC5EF0');
        $this->addSql('ALTER TABLE chassis CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE chassis_cooler DROP FOREIGN KEY FK_AA370F51F4EC5EF0');
        $this->addSql('ALTER TABLE chassis_cooler CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE cpu DROP FOREIGN KEY FK_BA80502EF4EC5EF0');
        $this->addSql('ALTER TABLE cpu CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE cpucooler DROP FOREIGN KEY FK_80EC0058F4EC5EF0');
        $this->addSql('ALTER TABLE cpucooler CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE gpu DROP FOREIGN KEY FK_BD89F8F2F4EC5EF0');
        $this->addSql('ALTER TABLE gpu CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE mb DROP FOREIGN KEY FK_32360761F4EC5EF0');
        $this->addSql('ALTER TABLE mb CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE psu DROP FOREIGN KEY FK_8FCD1EC4F4EC5EF0');
        $this->addSql('ALTER TABLE psu CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE ram DROP FOREIGN KEY FK_E7D1222FF4EC5EF0');
        $this->addSql('ALTER TABLE ram CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE storage DROP FOREIGN KEY FK_547A1B34F4EC5EF0');
        $this->addSql('ALTER TABLE storage CHANGE product_number product_number VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
