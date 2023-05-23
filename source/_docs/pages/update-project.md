---
title: Aggiornare il progetto
description: Aggiornare il progetto
extends: _layouts.documentation
section: content
---

# Aggiornare il progetto, i tre files .sh

Per aggiornare il progetto, in quanto composto da vari moduli, sarebbe non pratico aggiornarli uno ad uno.  
Per ovviare a ciò, sono stati creati 3 file dentro il modulo bashscripts,  
quindi, nella cartella della root del progetto, eseguire i seguenti comandi per effettuare il pull:  
```bash
./bashscripts/git_pull.sh
./bashscripts/git_branch.sh
./bashscripts/git_push.sh
```

invertire l'ordine del primo e terzo comando per effettuare il push:  
```bash
./bashscripts/git_push.sh
./bashscripts/git_branch.sh
./bashscripts/git_pull.sh
```

Dopo aver fatto push, siccome su git ci sono delle azioni che possono modificare i file, bisogna rilanciare subito il pull, come scritto sopra


### FORMATTAZIONE DEL CODICE

Per formattare il codice in modo corretto bisogna usare cs-fixer global. Per installarlo seguire le istruzioni nel seguente file:

```bash
bashscripts/tips/cs-fixer.txt
```

### STRUTTURA, TIPS AND TRICKS E RISOLUZIONE ERRORI COMUNI
Per tips & tricks rivolgersi alla seguente [Documentazione Generica](https://laraxot.github.io/module_xot/docs/base/issues/)