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

### creazione del primo utente Super Admin

Dopo aver eseguito l'installazione, bisognerà creare il primo utente Super Admin,  
questo perchè se ci si iscrive normalmente, l'account creato non avrà tutti i permessi necessarie per effettuare le varie configurazioni.  

Per crearlo, andare nella cartella laravel ed eseguire da terminale:  
```bash
php artisan lu:user
```
inserire tutti i dati richiesti, in seguito eseguire  

```bash
php artisan lu:create-areas
```
per associare tutti i permessi di navigazione ai vari moduli presenti

### dalla cartella laravel, lanciare in bash il comando

comando per installare i pacchetti utilizzati di default nei vari moduli
```bash
../bashscripts/composer_init.sh
```

comando per installare i pacchetti utilizzati specificatamente per il progetto pfed
```bash
../composer_custom.sh
```

generare la key necessaria per laravel come da documentazione ufficiale
```bash
php artisan key:generate
```

sotto Modules/Xot/Services vengono utilizzati pacchetti utilizzati meno recentemente, ma necessari
```bash
cd Modules/Xot/Services
./bashscripts/composer_init.sh
```

### eseguire le migrazioni

da dentro la cartella laravel, eseguire il comando:  
```bash
php artisan migrate
```