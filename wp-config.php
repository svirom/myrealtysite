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
define('DB_NAME', 'myrealtysite');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`0#m|EdW~k=d|*O?f}Sp^O>A?)F rq%RiysZWXjY>5,yn5 nZg846S+,b+-8aUAR');
define('SECURE_AUTH_KEY',  '^l=1%=+|c^m;Rm _eRxHktS$PY`D,U,DQ>J>ER?$qK|4/gngOg@Ivd_msI:Gio3C');
define('LOGGED_IN_KEY',    ':kO}_*PUH-5x$SpM9-L;&Seb4-Ozgev{kAFqc~-|VF+0@F i8:bi|!y,202Z{J9B');
define('NONCE_KEY',        'Dg0]1!@0zbs4{q!hngxOr &S++x~3yLRPjwbWl{Va.6Y~Lo<r/BrI-W q7ZFq{9V');
define('AUTH_SALT',        'NbGIq!zx]#^#XA&i{-%F;~6k8qfCXs+;|j-N*:UMA`-uUc`5b6#r3Kb`8wPhs^O2');
define('SECURE_AUTH_SALT', 's7kD -4H,g5:A7l-~H8~IK.po_4_R4)b(wtbI.>;{.pWNm=:CzUIWC^S6uB|F[uz');
define('LOGGED_IN_SALT',   'Ny)8O!$?}ztJ>QOq]gfGMXJ~lh[Jvy5e+[6R>2-/6};|+O+]7*?sle+r>;;|]PXq');
define('NONCE_SALT',       'IP0Lw0~A9Kg`LWL?fpBKG]L>e=gPAp%^BLeFi)<[> c]kDo[.KQp/lS$B A]] yu');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
