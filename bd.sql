-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela larbooratory.clients: ~2 rows (aproximadamente)
INSERT INTO `clients` (`id`, `code`, `name`, `url`, `situation`, `created_at`, `updated_at`) VALUES
	(1, 'K01', 'Kettlow', '', 1, '2024-04-08 14:31:45', '2024-04-08 14:31:45'),
	(2, 'S01', 'Synergya', '', 1, '2024-04-08 14:31:57', '2024-04-08 14:31:57');

-- Copiando dados para a tabela larbooratory.migrations: ~13 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_02_22_195611_create_profiles_table', 1),
	(6, '2024_02_22_195725_create_clients_table', 1),
	(7, '2024_02_22_195845_alter_table_profiles_add_client', 1),
	(8, '2024_02_22_200253_create_user_clients_table', 1),
	(9, '2024_02_23_173554_alter_table_user_clients_add_homepage', 1),
	(10, '2024_02_23_193248_alter_table_users_add_last', 1),
	(11, '2024_03_01_110323_create_sidebar_table', 1),
	(12, '2024_03_27_135238_alter_table_user_clients_add_situation', 1),
	(13, '2024_04_03_165201_create_user_infos_table', 1);

-- Copiando dados para a tabela larbooratory.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando dados para a tabela larbooratory.profiles: ~2 rows (aproximadamente)
INSERT INTO `profiles` (`id`, `name`, `created_at`, `updated_at`, `client_id`) VALUES
	(1, 'Usuário', '2024-04-08 16:06:46', '2024-04-08 16:06:46', '1,2'),
	(2, 'Administrador', '2024-04-08 16:06:56', '2024-04-08 16:06:56', '1,2');

-- Copiando dados para a tabela larbooratory.sidebar: ~8 rows (aproximadamente)
INSERT INTO `sidebar` (`id`, `name`, `icon`, `slug`, `url`, `affiliate_id`, `client_id`, `permission`, `order`, `created_at`, `updated_at`) VALUES
	(1, 'Inicio', 'bx bx-home-circle', 'dashboard', '/dashboard', NULL, '1', NULL, 1, '2024-03-14 19:32:15', '2024-03-14 19:32:15'),
	(2, 'Sistema', 'bx bx-cog', 'sys', NULL, NULL, '1', NULL, 2, '2024-03-14 19:54:15', '2024-03-14 19:54:15'),
	(3, 'Clientes', NULL, 'sys-client', '/clients', '2', '1', NULL, 1, '2024-03-14 19:54:56', '2024-03-14 19:54:56'),
	(4, 'Perfils', NULL, 'sys-profile', '/profiles', '2', '1', NULL, 2, '2024-03-14 19:55:23', '2024-03-14 19:55:23'),
	(5, 'Usuários', NULL, 'sys-user', '/users', '2', '1', NULL, 3, '2024-03-14 20:10:03', '2024-03-14 20:10:03'),
	(6, 'Telas', 'bx bx-layout', 'screens', NULL, NULL, '1', NULL, 3, '2024-03-20 18:17:02', '2024-03-20 18:17:02'),
	(7, 'Just Test', NULL, 'screens-just-test', '/screens/test', '6', '1', NULL, 1, '2024-03-20 18:09:47', '2024-03-20 18:09:47'),
	(8, 'Vínculos', NULL, 'sys-bond', '/bonds', '2', '1', NULL, 4, '2024-03-27 16:51:03', '2024-03-27 16:51:03');

-- Copiando dados para a tabela larbooratory.users: ~0 rows (aproximadamente)

-- Copiando dados para a tabela larbooratory.user_clients: ~0 rows (aproximadamente)

-- Copiando dados para a tabela larbooratory.user_infos: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
