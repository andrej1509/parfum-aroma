<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'andrej1509_parf' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'andrej1509_parf' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'VO&oU00h' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );


/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W_hca91f(7*{CqH<PzQ#`WY;Vf?=e!l =]o=o( +xwIy1jZ0Nk_VsV#<]>*im:):' );
define( 'SECURE_AUTH_KEY',  '7#2H9#!yMlaC!/nHb$vlGgjx%h:crW8tOs^@D+*,7Q<`f4t{9b9B8^<V,uLJQRL7' );
define( 'LOGGED_IN_KEY',    'LsDgX.db@LUmfw5ynYiKYhoLhY-em/n50f(tm$`>0oACNv,XaMS|OgNsIS=U6D]T' );
define( 'NONCE_KEY',        'Q}}E]IP!}7<cxPgw 8nbqyTB,:rSFoDpx>s,/@-!,$*Tq+o@~5EIbGrj)HM!Elg+' );
define( 'AUTH_SALT',        'x hq119e83Q}Z4e@-*1oZa1y-1QKhG[18cs0=NkCYCT(!4PA;zRo$2EfD:s$UVJB' );
define( 'SECURE_AUTH_SALT', 'XS~dpyN}y&lh{bm`*4KZQXR,g^]?^`$CR!7vTbE)U3kJU.@bD3uWF}n&F0*^Mm/o' );
define( 'LOGGED_IN_SALT',   '7eP2?uTlBr1RJj(t x=+$mBbb2HKW-J`0(GfoFX;O+.,[.kRH6Gyl7d9B@0LZ_S1' );
define( 'NONCE_SALT',       'i(9w3u_1Rgr~E;.P>F8{7K35.dO  cOL*N *=?BpG,jEHA$>>Quamp{!GePVjW/Z' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
