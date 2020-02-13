# RedirectUrlComponent

Компонент для редиректа со старых адресов на новые

Добавьте модуль в ваш bootstrap: 
```
'bootstrap' => [
    'RedirectUrl' => [
        'class' => "stafora\components\RedirectUrl\RedirectUrl",
        'filepath' => "@app/components/RedirectUrl/files/redirect.csv",
    ],
],
```
и замените filepath на свой, где лежит ваш файл csv
