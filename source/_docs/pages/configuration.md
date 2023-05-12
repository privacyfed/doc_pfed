---
title: Configurazione
description: Configurazione
extends: _layouts.documentation
section: content
---

# Struttura della configurazione del progetto 

Il progetto è un progetto multi-tenant, ciò significa che si utilizza lo stesso codice del progetto su più domini.  
Ogni dominio dovrà avere il suoi file di configurazione, che si trovano dentro la cartella laravel/config secondo una specifica path, esempio:  

per i file di configurazione di http://pfed.lan2/, il tutto sarà all'interno della cartella  
laravel/config/lan2/pfed/  
per i file di configurazione di https://app.privacyfed.eu/, il tutto sarà all'interno della cartella  
laravel/config/eu/privacyfed/app/

il criterio da seguire per strutturare i file di configurazione dentro la cartella laravel/config è:  
- prendere il dominio utilizzato  
- sostituire il .(punto) con /(slash), creando una path con directory  
- invertire l'ordine delle directory  

# Il file xra.php {#xra-file}

File di configurazione principale, dove vengono inseriti i principali parametri, esempio:  

```bash
<?php

declare(strict_types=1);

return [
    'adm_theme' => 'Clever',
    'enable_ads' => '1',
    'main_module' => 'PFed',
    'primary_lang' => 'it',
    'pub_theme' => 'Clever',
    'register_type' => env('REGISTER_TYPE', '0'),
    'verification_type' => env('VERIFICATION_TYPE', ''),
    'login_verified' => env('LOGIN_VERIFIED', true),
    'login_referrer' => '/admin/pfed/it?_act=profile_show',
    'home' => '02',
    'show_trans_key' => true,
];
```

- adm_theme: indica il modulo/tema utilizzato per l'area amministrativa  
- pub_theme: indica il modulo/tema utilizzato per l'area utente/frontend/pubblico
- main_module: indica il modulo principale utilizzato per il progetto che si sta usando  
- home: indica la blade del tema pubblico che verrà visualizzata nella home, si ha quindi la possibilità di creare home differenti per lo stesso tema, da poter utilizzare nelle diverse configurazioni  







### per compilare il tema (da dentro la cartella laravel/Themes/NOME_TEMA)

```bash
npm install
npm run dev
```



### IMPORTANTISSIMO per sincronizzare la base si utilizzano i famosi TRE FILES. 

Questi file si trovano nella cartella BASE/bashscripts.

Vanno lanciati dalla cartella della root della BASE.

Si utilizzano così:

```bash
- ./bashscripts/git_pull.sh && ./bashscripts/git_branch.sh per fare il pull
- ./bashscripts/git_pull.sh && ./bashscripts/git_branch.sh per fare il push
```

Dopo aver fatto push, siccome su git ci sono delle azioni che possono modificare i file, bisogna rilanciare subito il pull, come scritto sopra


### FORMATTAZIONE DEL CODICE

Per formattare il codice in modo corretto bisogna usare cs-fixer global. Per installarlo seguire le istruzioni nel seguente file:

```bash
bashscripts/tips/cs-fixer.txt
```

### STRUTTURA, TIPS AND TRICKS E RISOLUZIONE ERRORI COMUNI
Per tips & tricks rivolgersi alla seguente [Documentazione Generica](https://laraxot.github.io/module_xot/docs/base/issues/)