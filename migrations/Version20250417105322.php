<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250417105322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE booking (booking_id INT AUTO_INCREMENT NOT NULL, flight_id INT DEFAULT NULL, hotel_id INT DEFAULT NULL, transport_id INT DEFAULT NULL, conference_location_id INT DEFAULT NULL, id_evement INT DEFAULT NULL, userid INT DEFAULT NULL, booking_date DATE NOT NULL, status VARCHAR(255) NOT NULL, airlines VARCHAR(255) DEFAULT NULL, departure_time TIME DEFAULT NULL, back_time TIME DEFAULT NULL, flight_price NUMERIC(10, 2) DEFAULT NULL, hotel_name VARCHAR(255) DEFAULT NULL, hotel_location VARCHAR(255) DEFAULT NULL, hotel_price_per_night NUMERIC(10, 2) DEFAULT NULL, hotel_rating NUMERIC(3, 1) DEFAULT NULL, conference_name VARCHAR(255) DEFAULT NULL, conference_price_per_day NUMERIC(10, 2) DEFAULT NULL, transport_type VARCHAR(255) DEFAULT NULL, transport_price NUMERIC(10, 2) DEFAULT NULL, transport_description LONGTEXT DEFAULT NULL, price_total NUMERIC(10, 2) DEFAULT NULL, name_evement VARCHAR(255) DEFAULT NULL, numberof_invites INT DEFAULT NULL, start_evement DATETIME DEFAULT NULL, end_evement DATETIME DEFAULT NULL, special_requests LONGTEXT DEFAULT NULL, user_name VARCHAR(255) DEFAULT NULL, user_email VARCHAR(255) DEFAULT NULL, INDEX IDX_E00CEDDE91F478C5 (flight_id), INDEX IDX_E00CEDDE3243BB18 (hotel_id), INDEX IDX_E00CEDDE9909C13F (transport_id), INDEX IDX_E00CEDDEA3B90C52 (conference_location_id), INDEX IDX_E00CEDDE3D90D6B4 (id_evement), INDEX IDX_E00CEDDEF132696E (userid), PRIMARY KEY(booking_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE conference_location (location_id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, city VARCHAR(100) NOT NULL, address VARCHAR(255) NOT NULL, capacity INT DEFAULT NULL, price_per_day NUMERIC(10, 2) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(location_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE demande_sponsoring (id INT AUTO_INCREMENT NOT NULL, sponsor INT NOT NULL, event_id INT NOT NULL, statut VARCHAR(255) DEFAULT NULL, justification LONGTEXT DEFAULT NULL, INDEX IDX_1295AFAF818CC9D4 (sponsor), INDEX IDX_1295AFAF71F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE employee_event_assignments (id INT AUTO_INCREMENT NOT NULL, employee_id INT NOT NULL, event_id INT NOT NULL, role VARCHAR(100) NOT NULL, status VARCHAR(50) DEFAULT 'Assigned' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_9D64DD7C8C03F15C (employee_id), INDEX IDX_9D64DD7C71F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(100) NOT NULL, nombreInvite INT NOT NULL, dateDebut DATETIME NOT NULL, dateFin DATETIME NOT NULL, description LONGTEXT DEFAULT NULL, lieuEvenement VARCHAR(255) DEFAULT NULL, budgetPrevu DOUBLE PRECISION DEFAULT NULL, activities LONGTEXT DEFAULT NULL, imagePath VARCHAR(255) DEFAULT NULL, validated VARCHAR(255) DEFAULT NULL, eventMood VARCHAR(50) DEFAULT NULL, INDEX IDX_B26681EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE flight (flight_id INT AUTO_INCREMENT NOT NULL, airline VARCHAR(255) NOT NULL, destination VARCHAR(255) NOT NULL, departure_time TIME NOT NULL, back_time TIME NOT NULL, type VARCHAR(50) NOT NULL, price DOUBLE PRECISION NOT NULL, aeroports VARCHAR(255) DEFAULT NULL, PRIMARY KEY(flight_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE hotel (hotel_id INT AUTO_INCREMENT NOT NULL, city VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, name VARCHAR(255) DEFAULT NULL, price_per_night NUMERIC(10, 0) DEFAULT NULL, rating INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(hotel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE statistiques (id_statistique INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, hotel_name VARCHAR(255) NOT NULL, transport_type VARCHAR(255) NOT NULL, sponsoring TINYINT(1) NOT NULL, price_total NUMERIC(10, 2) NOT NULL, status VARCHAR(50) NOT NULL, PRIMARY KEY(id_statistique)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE transaction (id_transaction INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_event INT NOT NULL, id_booking INT NOT NULL, price_total NUMERIC(10, 2) NOT NULL, status VARCHAR(20) NOT NULL, date_transaction DATETIME NOT NULL, PRIMARY KEY(id_transaction)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE transport (transport_id INT AUTO_INCREMENT NOT NULL, type VARCHAR(100) NOT NULL, price NUMERIC(10, 2) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(transport_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, mot_de_passe VARCHAR(255) DEFAULT NULL, telephone VARCHAR(20) DEFAULT NULL, role VARCHAR(50) DEFAULT NULL, compte_valide TINYINT(1) DEFAULT NULL, montant NUMERIC(10, 2) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, status VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE91F478C5 FOREIGN KEY (flight_id) REFERENCES flight (flight_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (hotel_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE9909C13F FOREIGN KEY (transport_id) REFERENCES transport (transport_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEA3B90C52 FOREIGN KEY (conference_location_id) REFERENCES conference_location (location_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE3D90D6B4 FOREIGN KEY (id_evement) REFERENCES evenement (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEF132696E FOREIGN KEY (userid) REFERENCES `user` (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE demande_sponsoring ADD CONSTRAINT FK_1295AFAF818CC9D4 FOREIGN KEY (sponsor) REFERENCES `user` (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE demande_sponsoring ADD CONSTRAINT FK_1295AFAF71F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employee_event_assignments ADD CONSTRAINT FK_9D64DD7C8C03F15C FOREIGN KEY (employee_id) REFERENCES `user` (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employee_event_assignments ADD CONSTRAINT FK_9D64DD7C71F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evenement ADD CONSTRAINT FK_B26681EA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE91F478C5
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE3243BB18
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE9909C13F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEA3B90C52
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE3D90D6B4
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEF132696E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE demande_sponsoring DROP FOREIGN KEY FK_1295AFAF818CC9D4
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE demande_sponsoring DROP FOREIGN KEY FK_1295AFAF71F7E88B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employee_event_assignments DROP FOREIGN KEY FK_9D64DD7C8C03F15C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employee_event_assignments DROP FOREIGN KEY FK_9D64DD7C71F7E88B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE booking
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE conference_location
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE demande_sponsoring
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE employee_event_assignments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE evenement
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE flight
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE hotel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE statistiques
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE transaction
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE transport
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE `user`
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
