---
title: Installazione
description: Come Installare la Base
extends: _layouts.documentation
section: content
---

# Installazione {#installation}

### Clonare la base in locale nella cartella del server, scaricando i submodules, e senza la storia delle modifiche

```bash
git clone https://github.com/privacyfed/base_privacyfed.git base_pfed --recurse-submodules --depth=1
git submodule foreach git stash
./bashscripts/git_pull.sh
./bashscripts/git_branch.sh
```

### dalla cartella "laravel" creare il file delle variabili d'ambiente .env 
    
```bash
cp .env.latest .env
```
- creare il database geek_lu (degli utenti, email, password)  
- creare il database geek_pfed (database dedicato al progetto, profili e modelli necessari per il progetto)  
- inserire i parametri di configurazione dei database:  

```bash
DB_DATABASE=geek_pfed
DB_USERNAME=root
DB_PASSWORD=root

DB_DATABASE_LU=geek_lu
DB_USERNAME_LU=root
DB_PASSWORD_LU=root
```

### dalla cartella laravel, lanciare in bash il comando

comando per installare i pacchetti utilizzati di default nei vari moduli
```bash
../bashscripts/composer_init.sh
```

comando per installare i pacchetti utilizzati specificatamente per il progetto pfed
```bash
../composer_custom.sh
```

generare la key necessaria per laravel
```bash
php artisan key:generate
```

sotto Modules/Xot/Services vengono utilizzati pacchetti utilizzati meno recentemente, ma necessari
```bash
cd Modules/Xot/Services
./bashscripts/composer_init.sh
```

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

### per compilare il tema (da dentro la cartella laravel/Themes/NOME_TEMA)

```bash
npm install
npm run dev
```

### a questo punto bisogna crearsi il virtual host con il nome del dominio uguale a quello del file di configurazione. Esempio:

- copio la cartella laravel/config/localhost in laravel/config/local/dominio/* e imposto i parametri nei file

- questo significa che il virtual host deve chiamarsi dominio.local

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