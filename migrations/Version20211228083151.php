<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211228083151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE investment CHANGE longitude longitude DOUBLE PRECISION NOT NULL, CHANGE montant_des_ap_votes_en_meu montant_des_ap_votes_en_meu DOUBLE PRECISION NOT NULL, CHANGE cao_attribution cao_attribution DATE NOT NULL, CHANGE latitude latitude DOUBLE PRECISION NOT NULL, CHANGE enveloppe_prev_en_meu enveloppe_prev_en_meu DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE investment CHANGE longitude longitude DOUBLE PRECISION DEFAULT NULL, CHANGE montant_des_ap_votes_en_meu montant_des_ap_votes_en_meu DOUBLE PRECISION DEFAULT NULL, CHANGE cao_attribution cao_attribution DATE DEFAULT NULL, CHANGE latitude latitude DOUBLE PRECISION DEFAULT NULL, CHANGE enveloppe_prev_en_meu enveloppe_prev_en_meu DOUBLE PRECISION DEFAULT NULL');
    }
}
