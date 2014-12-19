<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'agb');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0@[_R7?0|aI)!sZn36If:T|0nAJR=CDtI?.&vQR|`M4s|%{5=o+a8gU5,T_^K-+{');
define('SECURE_AUTH_KEY',  'Yd%0m-3B1JC-V7|9@0+7sPLTpg?#)vs:wvzvQ=A1MTla+2zM)ZQ|4wL{Aoi#h]`D');
define('LOGGED_IN_KEY',    's,n@kFaUYUamabb8P/bI5=iPXX=-cPYo$/NL;qsk5d6W%DG{iqwS&HDN1^oN4Q-<');
define('NONCE_KEY',        'X|P}dwb|@PB&A<+p&8XDn>VfkPPm%$Oj$ZbKxc(*(nL!RRsO0sm2BSI)--/;?ox[');
define('AUTH_SALT',        '5I&-Xj=d2=&hgMuV@=Q2aS5=-KbHPlLX+c4G$?fXu(_zK2,yC:0bMI{H)j6Ct?!+');
define('SECURE_AUTH_SALT', 'Fd?(jG+u=/}cqZ1nzrk,3%tsclR>K/4ej`l|E#d?/c6q~ti%Y!D-i52kP=aJ4-Y_');
define('LOGGED_IN_SALT',   'z<3]j@K@IqO(zsWItSk,4hd{Z``b3Pr RNx~zFU%~[vGc|Z g#v*TS&=YZ<F}*sJ');
define('NONCE_SALT',       '^|qI8|,j`kw:+rP%h79G-ua{zl^)Vy6P@<h@k.em4[AJ8LdMAvQxMG-gULgYq+_O');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
