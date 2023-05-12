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

Il progetto è un progetto multi-tenant, ciò significa che si utilizza lo stesso codice del progetto su più domini.  
Ogni dominio dovrà avere il suo file di configurazione principale, il file xra.php  

Ogni file xra.php si dovrà trovare dentro la cartella laravel/config/path_specifica_del_dominio, esempio:  

in laravel/config/local/dominio/xra.php



- copio la cartella laravel/config/localhost in laravel/config/local/dominio/* e imposto i parametri nei file

- questo significa che il virtual host deve chiamarsi dominio.local







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