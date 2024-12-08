<?php

// Общее
$MESS['COMPLEMENTER_CATALOG_NAME'] = 'Дополнитель: Каталог';
$MESS['COMPLEMENTER_CATALOG_DESCRIPTION'] = 'Модуль позволяет хранить и выводить каталог продуктов. В тестовом варианте это ноутбуки';
$MESS['COMPLEMENTER_CATALOG_PARTNER_NAME'] = 'oleg_igorich';
$MESS['COMPLEMENTER_CATALOG_PARTNER_URI'] = 'mailto:olegichi@yandex.ru?subject=complementer.catalog';

// Установка
$MESS['COMPLEMENTER_INSTALL_STEP_1'] = 'Параметры установки модуля "' . $MESS['COMPLEMENTER_CATALOG_NAME'] . '"';
$MESS['COMPLEMENTER_INSTALL_DESCRIPTION'] = 'Описание модуля';

$MESS['COMPLEMENTER_INSTALL_STEP_1_INFO'] = ''.<<<TEXT
Таблицы БД<br/>
Для работы модуля используются 5 таблиц ORM:<br/>
Бренды (id, имя)<br/>
Модели (id, имя, бренд)<br/>
Продукты-Ноутбуки (id, имя, модель, год, цены, опции)<br/>
Опции (id, имя)<br/>
Продукты-Ноутбуки (id, продукт, опция)<br/>
<br/>
Тестовые данные<br/>
По умолчанию создаются: 2 бренда, по 2 модели в бренде, по 6 ноутбуков в модели.<br/>
Во время установки можно указать другие величины с учетом следующих ограничений во избежание засорения БД:<br/>
Бренды – 1 … 5<br/>
Модели -  1 … 6<br/>
Продукты (Ноутбуки) – 1 ... 100<br/>
Все значения за исключением id генерируются случайным образом.<br/>
Опции заданы «жестко» в коде. Их 9. Случайна их привязка и количество для каждого ноутбука.<br/>
<br/>
Установка<br/>
При установке можно создать таблицы, сгенерировав тестовые данные с учетом приведенных ограничений. Можно не создавать таблиц. 
В этом случае в компонентах будут выводиться сообщения о том, что нет нужных справочников.<br/>
<br/>
Отображение<br/>
Для вывода каталога нужно создать страницу, разместить там компонент «Дополнитель.Каталог\ Каталог ноутбуков» и указать в настройках относительные URL в корне сайта, 
при обращении по которому должен выводиться каталог.<br/>
Внешний вид списка брендов, моделей и ноутбуков формируется через грид main.ui.grid (Bitrix\Main\Grid).<br/>
Внешний вид детальной страницы Продукт-Ноутбук – через слайдер bitrix:ui.sidepanel.wrapper. Возможна проблема с открытием/закрытием 
слайдера если некорректно настроен SSL или DNS.<br/>
В верхней части каждой страницы выводится подобие "хлебных крошек" для навигации по каталогу, которе формируется через набор 
кнопок ui.buttons (Bitrix\UI\Buttons\CreateButton).<br/>
<br/>
TEXT;

$MESS['COMPLEMENTER_INSTALL_SETTINGS_TEST_DATA'] = 'Настройка тестовых данных';

$MESS['COMPLEMENTER_DELETE_AND_CREATE_DB_TABLES'] = 'Создать таблицы, сгенерировав тестовые данные';

$MESS['COMPLEMENTER_COUNT_DIAPASON'] = 'от 1 до ';
$MESS['COMPLEMENTER_COUNT_ENTITIES'] = 'Количество сущностей по типам';
$MESS['COMPLEMENTER_COUNT_BRANDS'] = 'Всего брендов';
$MESS['COMPLEMENTER_COUNT_MODELS'] = 'Моделей в бренде';
$MESS['COMPLEMENTER_COUNT_PRODUCTS'] = 'Ноутбуков в модели';
$MESS['COMPLEMENTER_PRODUCTS_OPTIONS'] = '<b>Опции ноутбуков:</b> Не настраивается. Каждому ноутбуку будет присвоено случайным образом от 0 до 9 опций';

$MESS['COMPLEMENTER_INSTALL_SUBMIT'] = 'Установить модуль';
$MESS['COMPLEMENTER_INSTALL_CANCEL'] = 'Не устанавливать';

// Удаление
$MESS['COMPLEMENTER_UNINSTALL_STEP_1'] = 'Удаление модуля "' . $MESS['COMPLEMENTER_CATALOG_NAME'] . '"';

$MESS['COMPLEMENTER_UNINSTALL_SETTINGS'] = 'Параметры удаления';

$MESS['COMPLEMENTER_UNINSTALL_STEP_1_INFO'] = ''.<<<TEXT
Таблицы БД, используемые модулем, можно оставить в системе или удалить<br/>
TEXT;

$MESS['COMPLEMENTER_DELETE_DB_TABLES'] = 'Удалить таблицы';

$MESS['COMPLEMENTER_UNINSTALL_SUBMIT'] = 'Удалить модуль';
$MESS['COMPLEMENTER_UNINSTALL_CANCEL'] = 'Не удалять';




