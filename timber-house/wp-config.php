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
define( 'DB_NAME', 'timber' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         's8Ph[KHM8bwd*<0j9r/{+41A!k: +{7TylM9aWk2s;NgtTP<Obj3}nM2j_mdsFw;' );
define( 'SECURE_AUTH_KEY',  'iAm!0%g`8gmJ5z.)hYC4=1=_;}4$R3&y J&$-*~)tc_ATi|=n;@JcJRwEJQ69gMo' );
define( 'LOGGED_IN_KEY',    'U.[lh,p{knlN6WLGq}y/;SY%(do4cy wzPhrqJibkU.LRI#xWsmSJFOqRS@Y>NH~' );
define( 'NONCE_KEY',        'g%eIkx#Hs=/rG(e3NO;1uc.%~SrLx2X{Y6(=?t69#@m2-%`,svRf-fT|0X(h4+6x' );
define( 'AUTH_SALT',        'ah(vy?ld1FRuLVI4+ *OEQ[=Aq+jNrzxQX(}xL)p(:;#}]+nYy&4vT/[,dOeTQ1.' );
define( 'SECURE_AUTH_SALT', '*!}G8XcBP@5(+E>:/2Sl]yD:J$qIqy&%xoXgEf/,E_WX?%qtRseoP~ep{]dRQ:lH' );
define( 'LOGGED_IN_SALT',   'lEo};u; Bkd+,pD}wg7IDCMMK8Qg*XM?nulA-XIj6$I6ddTq7QuN(53fF-W! TwK' );
define( 'NONCE_SALT',       ')}UU/~Dc;YA}4ao,BT)wEp.1# (%Ju8/A|<#^pz]}(+O1^?HXk9O|ij6lZb4<_>a' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
