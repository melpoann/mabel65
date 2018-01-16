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
define('DB_NAME', 'mabel');

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
define('AUTH_KEY',         '2STfy?Z[w w(k&RJi]3F tGtC7S&AF9Eep.HcoU2e7+WinQ:6]B::,`8g:LR|8hH');
define('SECURE_AUTH_KEY',  'JLFB[S6,%c{UH2n4n(qV_K6L$^xd]Q,bnu4>Yq~<hj|S/loip|58?Au0(RZ)v8!g');
define('LOGGED_IN_KEY',    '9S))sE(o^Y]fH!W-d-sWA-rZA bH{~l;JAcJzykA@=&meEYvfwEvCS@yvJBv!.i.');
define('NONCE_KEY',        'SHNu|.:JjIvE,F81px]f[-(a^iaxX>r0MpBMdYc>WjCr&/R] wr:^$UqI#bh((,Y');
define('AUTH_SALT',        ']3rqY_rW^G^eZox}s)>dvl/#7_w+R!9&ujzH4&;5F#%$! 1nFR)(HRo!D_={u#)-');
define('SECURE_AUTH_SALT', 'h!f~CU1r~.!yodcTm:Mr_goty`?>Z#;[!&p<ZU6W^Pf,5HZywgo]Rr4c#vq5MUwe');
define('LOGGED_IN_SALT',   'Q$aq-J*?TpnA6ktA)(KaW$=BD%E?0IGhs(WX$31rY((%N4EVA_ /.@!Rge?xN2SR');
define('NONCE_SALT',       'rc~E2O7lvmmB+zpi8>n q9<rSH+BFnmlz}r}I`7QR/JVB m#t$1]4Q,6M`)qZd2)');

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
