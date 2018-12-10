<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181210064522 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE chassis (product_number INT NOT NULL, chassis_type VARCHAR(10) NOT NULL, gpu_length INT NOT NULL, cooler_support INT NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chassis_cooler (product_number INT NOT NULL, size INT NOT NULL, rpm VARCHAR(10) NOT NULL, airflow DOUBLE PRECISION NOT NULL, noise_level DOUBLE PRECISION NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cpu (product_number INT NOT NULL, socket VARCHAR(10) NOT NULL, speed INT NOT NULL, cores INT NOT NULL, power_consumption INT NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cpucooler (product_number INT NOT NULL, rpm VARCHAR(10) NOT NULL, noise_level DOUBLE PRECISION NOT NULL, size INT NOT NULL, cpucooler_type VARCHAR(10) NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gpu (product_number INT NOT NULL, memory INT NOT NULL, core_clock DOUBLE PRECISION NOT NULL, memory_type VARCHAR(10) NOT NULL, size INT NOT NULL, power_consumption INT NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mb (product_number INT NOT NULL, cpu_socket VARCHAR(64) NOT NULL, ram_type VARCHAR(64) NOT NULL, size VARCHAR(10) NOT NULL, power_consumption INT NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE psu (product_number INT NOT NULL, form VARCHAR(10) NOT NULL, watts INT NOT NULL, modular VARCHAR(10) NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ram (product_number INT NOT NULL, ramtype VARCHAR(10) NOT NULL, speed INT NOT NULL, cas INT NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE storage (product_number INT NOT NULL, size INT NOT NULL, storage_type VARCHAR(10) NOT NULL, form VARCHAR(10) NOT NULL, PRIMARY KEY(product_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chassis ADD CONSTRAINT FK_35C973DFF4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chassis_cooler ADD CONSTRAINT FK_AA370F51F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cpu ADD CONSTRAINT FK_BA80502EF4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cpucooler ADD CONSTRAINT FK_80EC0058F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gpu ADD CONSTRAINT FK_BD89F8F2F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mb ADD CONSTRAINT FK_32360761F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE psu ADD CONSTRAINT FK_8FCD1EC4F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ram ADD CONSTRAINT FK_E7D1222FF4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE storage ADD CONSTRAINT FK_547A1B34F4EC5EF0 FOREIGN KEY (product_number) REFERENCES product (product_number) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product CHANGE type type VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE chassis');
        $this->addSql('DROP TABLE chassis_cooler');
        $this->addSql('DROP TABLE cpu');
        $this->addSql('DROP TABLE cpucooler');
        $this->addSql('DROP TABLE gpu');
        $this->addSql('DROP TABLE mb');
        $this->addSql('DROP TABLE psu');
        $this->addSql('DROP TABLE ram');
        $this->addSql('DROP TABLE storage');
        $this->addSql('ALTER TABLE product CHANGE type type VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
