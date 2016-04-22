<?php 

return [
    'menu' => [
        'list' => [
            'name' => 'Галереи',
            'description' => 'Управление галереями',
        ],
        'create' => [
            'name' => 'Добавить галерею',
            'description' => 'Добавление новых альбомов с изображениями',
        ],
        'update' => [
            'name' => 'Редактировать галерею',
            'description' => 'Редактировать существующие галереи',
        ],
        'delete' => [
            'name' => 'Удалить галерею',
            'description' => 'Удаление галерей со всеми вложенными изображениями',
        ],
    ],
    'table' => [
        'updated' => 'Обновлено',
        'slug' => 'Адрес',
        'title' => 'Название',
    ],
    'form' => [
        'main' => 'Основные данные',
        'additional' => 'Настройки',
        'gallery' => 'Изображения',
        'info' => [
            'title' => 'Мудрость',
            'text' => 'Чтобы использовать галереи в тексте страниц или новостей, можно использовать Blade директивы. Примеры: <code>&#64;gallery(\'my-gallery\')</code> или <code>&#64;gallery(1, 2)</code>.',
        ],
        'slug' => 'Адрес',
        'title' => 'Название',
        'description' => 'Описание (HTML)',
        'preset' => [
            'name' => 'Шаблон загрузки',
        ],
    ],
    'options' => [
        'settings' => [
            'group' => 'Галерея',
        ],
        'index' => [
            'name' => 'Галерей на главной',
        ],
        'paginate' => [
            'name' => 'Галерей на страницу',
        ],
        'presets' => [
            'name' => 'Показать выбор шаблона загрузки',
        ],
    ],
];