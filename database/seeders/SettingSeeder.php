<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * 執行資料庫種子。
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::insert(<<<SQL
REPLACE INTO `settings` (`id`, `section`, `type`, `title`, `active`, `key`, `value`, `created_at`, `updated_at`) VALUES
    (NULL, '1menu', 'image', '標誌', 1, 'logo_png', NULL, '2022-08-02 04:44:57', '2022-08-02 04:44:57'),
    (NULL, '2top', 'text', '主要部分標題', 1, 'top1text', '熱銷商品', '2022-08-02 04:53:04', '2022-08-02 05:23:03'),
    (NULL, '2top', 'cat', '主要部分類別', 1, 'top1cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:23:57'),
    (NULL, '2top', 'text', '上方部分標題', 1, 'top2text', '33%', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
    (NULL, '2top', 'cat', '上方部分類別', 1, 'top2cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
    (NULL, '2top', 'text', '底部部分標題', 1, 'top3text', '15%', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
    (NULL, '2top', 'cat', '底部部分類別', 1, 'top3cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
    (NULL, '3top', 'text', '第二部分標題', 1, 'sectext', '其他商品', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
    (NULL, '3top', 'cat', '第二部分類別', 1, 'seccat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
    (NULL, '4sec', 'text', '第三部分有篩選標題', 1, '3text', '配件', '2022-08-02 05:03:47', '2022-08-02 05:24:06'),
    (NULL, '4sec', 'cat', '第三部分有篩選類別', 1, '3cat', '1', '2022-08-02 05:04:35', '2022-08-02 05:24:06'),
    (NULL, '5sec', 'cat', '品牌類別', 1, '4cat', '1', '2022-08-02 05:04:35', '2022-08-02 05:24:06'),
    (NULL, '6footer', 'category', '右側頁腳類別', 1, 'footer1', '1', '2022-08-02 05:08:10', '2022-08-02 05:24:06'),
    (NULL, '6footer', 'category', '中央頁腳', 1, 'footer2', '4', '2022-08-02 05:08:42', '2022-09-12 05:57:55'),
    (NULL, '6footer', 'code', '右側頁腳', 1, 'footer3', '<img src="http://parsavps.com/enamad.png" width="145px" />', '2022-08-02 05:10:14', '2022-08-02 05:31:52'),
    (NULL, '6footer', 'text', 'Instagram社交網站', 1, 'soc_in', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
    (NULL, '6footer', 'text', 'Telegram社交網站', 1, 'soc_tg', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
    (NULL, '6footer', 'text', 'Twitter社交網站', 1, 'soc_tw', 'https://twitter.com/a1gard', '2022-08-02 05:11:20', '2022-08-02 05:24:06'),
    (NULL, '6footer', 'text', 'Whatsapp社交網站(附國碼)', 1, 'soc_wp', '+989121234567', '2022-08-02 05:11:20', '2022-08-02 05:27:02'),
    (NULL, '6footer', 'text', 'YouTube社交網站', 1, 'soc_yt', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
    (NULL, '7seo', 'text', '網站顏色代碼', 1, 'color', '#3593D2', '2022-08-02 05:18:38', '2022-08-02 05:24:06'),
    (NULL, '7seo', 'text', 'SEO關鍵字', 1, 'keywords', '商店、線上購物', '2022-08-02 05:19:10', '2022-08-02 05:24:06'),
    (NULL, '7seo', 'text', 'SEO細節', 1, 'desc', '您商店的描述', '2022-08-02 05:20:08', '2022-08-02 05:24:06'),
    (NULL, '7seo', 'text', '版權聲明文字', 1, 'copyright', '本網站所有權利均受保護', '2022-08-02 05:40:18', '2022-08-02 05:40:37'),
    (NULL, '1menu', 'text', '電話', 1, 'tel', NULL, '2023-02-23 00:21:33', '2023-02-23 00:21:33'),
    (NULL, '1menu', 'text', '電子郵件', 1, 'email', NULL, '2023-02-23 00:21:53', '2023-02-23 00:21:53');
SQL
);
        \DB::insert(<<<SQL
insert into settings (`id`, `section`, `type`, title, `active`, `key`, `value`, `created_at`, `updated_at`)
values  (null, 'seo', 'text', '網站名稱', 1, 'site_name', 'X Shop商店', '2022-09-14 09:46:58', '2022-09-14 09:47:20'),
        (null, 'seo', 'text', '簡短網站描述(SEO)', 1, 'site_description', '最新手機，最優惠價格', '2022-09-14 09:48:23', '2022-09-14 09:48:39'),
        (null, 'seo', 'text', '網站關鍵字(SEO- 以逗號分隔)', 1, 'site_keywords', '手機,便宜,購物,X Shop', '2022-09-14 09:52:56', '2022-09-14 09:53:41'),
        (null, 'seo', 'text', 'Google Web Master代碼', 1, 'site_webmaster_google', null, '2022-09-14 09:59:17', '2022-09-14 09:59:17'),
        (null, 'seo', 'image', '網站圖片(SEO)', 1, 'site_image', null, '2022-09-14 10:00:51', '2022-09-14 10:00:51');
SQL
);
    }
}
