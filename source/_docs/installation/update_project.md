---
title: Aggiornamento del progetto
description: Aggiornamento del progetto
extends: _layouts.documentation
section: content
---

# Aggiornamento del progetto

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