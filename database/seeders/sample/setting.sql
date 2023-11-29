-- --------------------------------------------------------
-- 主機：                         127.0.0.1
-- 服務器版本：                 10.5.15-MariaDB-0+deb11u1 - Debian 11
-- 服務器操作系統：             debian-linux-gnu
-- HeidiSQL版本：               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 為表xshop.settings轉儲結構
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 為表xshop.settings轉儲數據：約24行
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
REPLACE INTO `settings` (`id`, `section`, `type`, `title`, `active`, `key`, `value`, `created_at`, `updated_at`) VALUES
    (1, '1menu', 'image', '標誌', 1, 'logo_png', NULL, '2022-08-02 04:44:57', '2022-08-02 04:44:57'),
    (2, '2top', 'text', '主要部分標題', 1, 'top1text', '熱銷商品', '2022-08-02 04:53:04', '2022-08-02 05:23:03'),
    (3, '2top', 'cat', '主要部分類別', 1, 'top1cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:23:57'),
    (4, '2top', 'text', '上方部分標題', 1, 'top2text', '33%', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
    (5, '2top', 'cat', '上方部分類別', 1, 'top2cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
    (6, '2top', 'text', '底部部分標題', 1, 'top3text', '15%', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
    (7, '2top', 'cat', '底部部分類別', 1, 'top3cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
    (8, '3top', 'text', '第二部分標題', 1, 'sectext', '其他商品', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
    (9, '3top', 'cat', '第二部分類別', 1, 'seccat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
    (10, '4sec', 'text', '第三部分有篩選標題', 1, '3text', '配件', '2022-08-02 05:03:47', '2022-08-02 05:24:06'),
    (11, '4sec', 'cat', '第三部分有篩選類別', 1, '3cat', '1', '2022-08-02 05:04:35', '2022-08-02 05:24:06'),
    (12, '5sec', 'cat', '品牌類別', 1, '4cat', '1', '2022-08-02 05:04:35', '2022-08-02 05:24:06'),
    (13, '6footer', 'category', '右側頁腳類別', 1, 'footer1', '1', '2022-08-02 05:08:10', '2022-08-02 05:24:06'),
    (14, '6footer', 'category', '中央頁腳', 1, 'footer2', '4', '2022-08-02 05:08:42', '2022-09-12 05:57:55'),
    (15, '6footer', 'code', '右側頁腳', 1, 'footer3', '<img src="http://parsavps.com/enamad.png" width="145px" />', '2022-08-02 05:10:14', '2022-08-02 05:31:52'),
    (16, '6footer', 'text', 'Instagram社交網站', 1, 'soc_in', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
    (17, '6footer', 'text', 'Telegram社交網站', 1, 'soc_tg', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
    (18, '6footer', 'text', 'Twitter社交網站', 1, 'soc_tw', 'https://twitter.com/a1gard', '2022-08-02 05:11:20', '2022-08-02 05:24:06'),
    (19, '6footer', 'text', 'WhatsApp社交網站（包含國家代碼的號碼）', 1, 'soc_wp', '+989121234567', '2022-08-02 05:11:20', '2022-08-02 05:27:02'),
    (20, '6footer', 'text', 'YouTube社交網站', 1, 'soc_yt', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
    (21, '7seo', 'text', '網站顏色代碼', 1, 'color', '#3593D2', '2022-08-02 05:18:38', '2022-08-02 05:24:06'),
    (22, '7seo', 'text', 'SEO關鍵字', 1, 'keywords', '商店，網上銷售', '2022-08-02 05:19:10', '2022-08-02 05:24:06'),
    (23, '7seo', 'text', 'SEO細節', 1, 'desc', '您商店的描述', '2022-08-02 05:20:08', '2022-08-02 05:24:06'),
    (24, '7seo', 'text', '版權聲明文字', 1, 'copyright', '本網站所有權利均受保護', '2022-08-02 05:40:18', '2022-08-02 05:40:37');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
