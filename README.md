# RedirectUrlComponent

Настройка редиректов со старых ссылок на новые, через csv файл.

После установки добавьте в components

```
'components' => [
  'RedirectUrlComponent' => [
      'class' => app\components\RedirectUrlComponent\RedirectUrlComponent::class,
  ],
],
```

и так же bootstrap

```
'bootstrap' => [
  \app\components\RedirectUrlComponent\RedirectUrlComponent::class,
],
```
