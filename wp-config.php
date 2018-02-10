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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Moyo2012');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XHXG8q~C=(E?cJ}c`K;@EugSEtP|$<%E0h*Tl1(_^|aJbL6iVS*T=D8$OWH`~9Q2');
define('SECURE_AUTH_KEY',  '~H$#v~U-@ovEju&Db@E,%{d,F;,,sZB~1C={*If2&AJ:T~#x+~9e6[XXX:,y)Z@k');
define('LOGGED_IN_KEY',    'OJD!.e].]as.x_z:tG Tn7N8&R*bHMFA_XGruYKPwjy7GaM{u!svXU6n9+?eN<}Z');
define('NONCE_KEY',        'kK;<%2~;_r<OgO9AqcCJWTsyu]GXHm8Vv>:|AIbHq80@3PBE`R>zq;+.j.s2>bn_');
define('AUTH_SALT',        ',[x3[`Yd$j$q%QL6E;<!mJZKAXg:R~5mgPD{OVo=q$_]~,+}Ra/>g=60_H~Gk<s9');
define('SECURE_AUTH_SALT', 'AD}-(.64Ic@}{MjqOP8FB.NJPXh@yOR]vU@=,pVJe*kXFz.`7w}779>8nhss,k24');
define('LOGGED_IN_SALT',   '~1vp@Ex;7whx+55GDw<A1{<Qvu^nwkD.U26>Q,<q{~fo`{+|@SO2MeW/V7$bL]3Y');
define('NONCE_SALT',       '^Q9c}O%[I+ j,?$DDc!DEyyA&j])u:!L Uenei{3qe:Idp7 ;=F 3HGyb>pScQ}C');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ghs7_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

