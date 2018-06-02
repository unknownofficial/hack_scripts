<?php if(!defined('__CP__'))die();
define('LNG_STATS',                   'Общая статистика');
define('LNG_STATS_TOTAL_INFO',        'Общая информация');
define('LNG_STATS_TOTAL_REPORTS',     'Всего отчетов в базе данных:');
define('LNG_STATS_TOTAL_BOTS24',      'Всего активных ботов за 24 часа (нажми для подробностей):');
define('LNG_STATS_TOTAL_BOTS',        'Всего ботов:');
define('LNG_STATS_TOTAL_BOTS_DEAD',   'Потенциально мёртвых (>14 дней):');
define('LNG_STATS_TOTAL_VERSIONS',    'Версии ботов (нажми для подробностей):');
define('LNG_STATS_TOTAL_VERSIONS_ALL',          'Все');
define('LNG_STATS_TOTAL_VERSIONS_DAY',          'Сутки');
define('LNG_STATS_TOTAL_VERSIONS_WEEK',         'Неделя');
define('LNG_STATS_TOTAL_VERSIONS_MONTH',        'Месяц');
define('LNG_STATS_TOTAL_MIN_VERSION', 'Минимальная версия бота:');
define('LNG_STATS_TOTAL_MAX_VERSION', 'Максимальная версия бота:');
define('LNG_STATS_FIRST_BOT',         'Время первой активности');
define('LNG_STATS_RESET_NEWBOTS',     'Обнулить');
define('LNG_STATS_RESET_NEWBOTS_Q',   'Вы действительно хотите обнулить список новых ботов?');
define('LNG_STATS_COUNTRYLIST_EMPTY', '-- Пусто --');
define('LNG_STATS_COLUMN_NEWBOTS',    'Новые боты (%s)');
define('LNG_STATS_COLUMN_ONLINEBOTS', 'Боты в онлайне (%s)');
define('LNG_STATS_BOTNET',            'Текущий ботнет:');
define('LNG_STATS_BOTNET_ACTIONS',    'Действия:');

define('LNG_CRON_WARNING',				'Для корректной работы дополнительных функций, Вам нужно добавить в cron Вашего сервера следующую задачу:');
define('LNG_CRON_WARNING_DESCR',		'Скрипт запускается каждую минуту и выполняет системные задачи');

define('LNG_STATS_EXELIST',           'Эффективность и Безопасность');
define('LNG_STATS_EXELIST_SETUP',     '[ Настройка ]');
define('LNG_STATS_EXELIST_SETUP_CRON','[ Добавить в cron ]');
define('LNG_STATS_EXELIST_FILE',      'Файл');
define('LNG_STATS_EXELIST_FILECTIME', 'Создан');
define('LNG_STATS_EXELIST_FILEAGE',   'Возраст');
define('LNG_STATS_EXELIST_FILEAVIR',  'Проверка на вирусы');
define('LNG_STATS_EXELIST_DAYS',      ' дней');
define('LNG_STATS_EXELIST_DAYSHINT',  'С даты последнего перекриптования');
define('LNG_STATS_EXELIST_VIRUS',      ' антивирусов');
define('LNG_STATS_EXELIST_NAVIR',     'НЕ ПРОВЕРЯЛСЯ');
define('LNG_STATS_EXELIST_AGEALERT',  'Рекомендуется перекриптовать файл так как он не обновлялся более 3х дней!');
define('LNG_STATS_EXELIST_AVIRALERT', 'Многие антивирусы считают этот файл угрозой! Рекомендуется перекриптовать файл.');

define('LNG_STATS_EXELIST_CRONBOX', 'Чтобы включить автоматическое сканирование несколькими антивирусами, Вам нужно добавить в cron Вашего сервера следующую задачу:');
define('LNG_STATS_EXELIST_CRONBOX_HTTP', 'Кроме того, Вы можете вручную открывать этот URL раз в сутки:');
define('LNG_STATS_EXELIST_CRONBOX_SCAN4YOU', 'Функция не будет работать пока Вы не укажете ID и Token сервиса Scan4you <a href="?m=ajax_config&action=scan4you" class="ajax_colorbox">здесь</a>! Также, не забудьте вписать логин,пароль,jabber-сервер для бот-уведомлений в разделе Jabber notifier');

define('LNG_STATS_FLASHINFECT',                         'FlashInfect');
define('LNG_STATS_FLASHINFECT_TOTAL_BOTS',              'Всего ботов');
define('LNG_STATS_FLASHINFECT_ACTIVATED_BOTS',          'Активировано ботов');
define('LNG_STATS_FLASHINFECT_PENDRIVES_INFECTED',      'Флешек заражено');
define('LNG_STATS_FLASHINFECT_PENDRIVES',               'Флешек обнаружено');
define('LNG_STATS_FLASHINFECT_PENDRIVES_PER_PC',        'Флешек у бота, в среднем');

define('LNG_STATS_ACTIVITY',                  'Активность');
define('LNG_STATS_ACTIVITY_7DAYS',            '7 дней');
define('LNG_STATS_ACTIVITY_14DAYS',           '14 дней');
define('LNG_STATS_ACTIVITY_30DAYS',           '30 дней');
define('LNG_STATS_ACTIVITY_TH_DATE',          'Дата');
define('LNG_STATS_ACTIVITY_TH_TOTAL',         'Всего');
define('LNG_STATS_ACTIVITY_TH_ACTIVE',        'Активных');
define('LNG_STATS_ACTIVITY_TH_PERCENT',       '%');
