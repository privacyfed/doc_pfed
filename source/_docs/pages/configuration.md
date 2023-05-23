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

Andare dentro la cartella del tema in laravel/Themes/nome_tema_interessato ed eseguire:  

```bash
npm install
npm run dev
```