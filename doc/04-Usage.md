# Usage <a id="module-loginhooks-usage"></a>

## Module Usage  <a id="module-loginhooks-usage"></a>

The following directory contains a sample implementation of a LoginFormModifier:
```
library/Loginhooks/ProvidedHook/LoginFormModifier.php
```

You can enable this modifier by adding this to the loginhooks run.php
```php
$this->provideHook('loginhooks/LoginFormModifier', \Icinga\Module\Loginhooks\ProvidedHook\LoginFormModifier::class, true);
```

This is just a reference use the LoginFormHook in your own module!

