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
define('DB_NAME', 'funnyfaces');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qwe');

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
define('AUTH_KEY',         'wl8SZRdbSrX[K5ho`9 Z<J$SjLwLB?=:;c@PeQ{zI^>z[4rRN)W+7Tg:t=:cN`[i');
define('SECURE_AUTH_KEY',  'F4h;}YU#rz#Mk(ol@8#xtyXCxd&`mhBZD?O:hAq>2hk5fpY8,5?p3q#~F4Fcx81D');
define('LOGGED_IN_KEY',    '+t^w)It)iv=%}empDd%-S<&9leT|@&}9kkK*~;K]U!,h5^|CN) _*F3W?{}ZN.sL');
define('NONCE_KEY',        ' pNWV~,2rc3E[MT[Dn[8^(*%!X+Bgb~+@DfMk[[B|wFTc@=FvuQ[dY+we@>X:X08');
define('AUTH_SALT',        'kc `[cRe0ieV$aIt,0=6E^M;R>T >.ay#%7[l[2^J=l-}+nOVj:>+B }(xkvzlgf');
define('SECURE_AUTH_SALT', '{}_4.|K`mPgm`)Y=|6Cb^(*|1bhAy[B7|}*W*}S^iC!b7D,*[TI34m2gNT3olxlb');
define('LOGGED_IN_SALT',   'quHOV2h`hC}w&^N1-J/3v}1-~gZ?ercML n-3@p^JTvkGa[Ou767{h84{?0Nr=4E');
define('NONCE_SALT',       'Z33rLYAj!5yw{T{+G,u)X_SjvXo/RBgHUgBb3+ 7v&_4UCE^R6VGTW=x(s_cyh;c');

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
