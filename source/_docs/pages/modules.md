---
title: I Moduli
description: I Moduli
extends: _layouts.documentation
section: content
---

# I Moduli {#modules}
Il progetto è strutturato a Moduli, inseriti dentro una base/progetto di laravel, utilizzando il pacchetto nwidart di laravel (https://nwidart.com/laravel-modules/v6/introduction). 
Esistono moduli necessari per l'esistenza stessa del progetto, come il modulo Xot, Cms, Tenant.
Gli altri moduli son stati pensati per implementare determinati funzioni.
Oltre a questi, esiste il modulo PFed, creato appositamente per il progetto.


### vedere la lista dei moduli con il comando

da url tramite il browser: 

```bash
http://VIRTUAL_HOST.EXT/?_act=artisan&cmd=module-list
```

alternativa da terminale:

```bash
php artisan module:list 
```

### abilitare tutti i moduli con il comando

da url tramite il browser: 

```bash
http://VIRTUAL_HOST.EXT/?_act=artisan&cmd=module-enable&module=NOME_MODULO
```

alternativa da terminale:

```bash
php artisan module:enable NomeModulo
```

### fare la migration

da url tramite il browser: 

```bash
http://VIRTUAL_HOST.EXT/?_act=artisan&cmd=migrate
```

in alternativa da terminale:

```bash
php artisan migrate
```

