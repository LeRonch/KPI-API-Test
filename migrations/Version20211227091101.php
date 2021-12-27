<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211227091101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE investment (id INT AUTO_INCREMENT NOT NULL, titreoperation VARCHAR(255) NOT NULL, entreprise VARCHAR(255) DEFAULT NULL, annee_de_livraison INT DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, mandataire VARCHAR(255) DEFAULT NULL, ppi VARCHAR(255) DEFAULT NULL, lycee VARCHAR(255) NOT NULL, notification_du_marche DATE DEFAULT NULL, codeuai VARCHAR(255) NOT NULL, longitude DOUBLE PRECISION NOT NULL, etat_d_avancement VARCHAR(255) NOT NULL, montant_des_ap_votes_en_meu DOUBLE PRECISION DEFAULT NULL, cao_attribution DATE DEFAULT NULL, latitude DOUBLE PRECISION NOT NULL, maitrise_d_oeuvre VARCHAR(255) DEFAULT NULL, mode_de_devolution VARCHAR(255) DEFAULT NULL, annee_d_individualisation VARCHAR(4) DEFAULT NULL, enveloppe_prev_en_meu DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE investment');
    }
}
