<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_car_rent' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jK%*=*edm}a kiBaPbQQ-FSp:vvZu%E3C<9{CovELzh~oCl`Aq+b7x;jRo(AA~D>' );
define( 'SECURE_AUTH_KEY',  '9=[`(ajL(F>79.OE/nn{70]dc#}}8LB5NA)0:$)%y@[GKoiEinn}Kla;uV:IebcG' );
define( 'LOGGED_IN_KEY',    'Hj][uMYp>[31Lz(w.&uO(p1sz3Vpqowx46}I3T:h;jrQJtaO#@~gFtxE*TZg-Vxa' );
define( 'NONCE_KEY',        '[/t9J8i:]u8n7z?6K-BB-I -~?P}oL@fLQC;S[9Ax2G)Oop(7MuG@^ goWW4E$`$' );
define( 'AUTH_SALT',        'F^EhG{OcP]gEKb%3y2w38dzQY9E_ /(V7u)~8b 6Mj^DHyT[?zq9jhh=ky6nf80a' );
define( 'SECURE_AUTH_SALT', 'Zjp&?QSRmO$/W*|y_xg8/L_dK2BxV+rd0K5UBua_u*^RBa0HI!+1 1cc+s?gAUv(' );
define( 'LOGGED_IN_SALT',   '_;!bsMj4n;tR[wcF~xll)^8|o(K.1g^~-X<bpsamv~:zipM`I8r1TZo<*4TxNQ?K' );
define( 'NONCE_SALT',       '@?jE~X 0vXg[93Auy!oR1,?M^NT4O+`CBBQqPVKt.fS@6S:]b&Q%m``TTOd$^xGo' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
