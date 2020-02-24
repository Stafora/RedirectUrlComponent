# RedirectUrlComponent

Компонент для редиректа со старых адресов на новые

Установка через Composer

```
composer require stafora/redirect-url-component
```

Добавьте модуль в ваш bootstrap в файле конфига: 
```
'bootstrap' => [
    'RedirectUrl' => [
        'class' => "stafora\redirect\RedirectUrl",
        'filepath' => "@vendor/stafora/redirect-url-component/files/redirect.csv",
    ],
],
```
и замените filepath на свой, где лежит ваш файл csv
