---
title: Chat Lucio
description: Chat Lucio
extends: _layouts.documentation
section: content
---

# Chat Lucio {#lucio}

## conversazione 16/05/2023

Solo per sapere se siamo allineati nel capire tutti e 4 bene le cose:

Per fare un esempio semplice

- vado in profilo
- aggiungo un Full Name
- metto Davide Cavallini
- Mi mette sia nel json del gruppo (l'abbiamo fatto per scalabilità) {fist_name:Davide,last_name:Cavallini}
- Mette anche nel campo singolo first_name Davide e nell'altro campo last_name Cavallini
- Sia il gruppo che il campo dove l'utente ha memorizzato i valori hanno UUID uguale 

Quando vai nel servizio e scegli il campo:

- Ti scegli il gruppo dalla tendina, in base ai gruppi che hai messo nel profili
- Ti copia sia il gruppo che i campi associandoli al modello "service"  con lo stesso UUID del profilo

Così quando vai nel profilo e cancelli full name, ad esempio:

- Ti mostra l'elenco di quali servizi con i gruppi con lo stesso UUID verranno disattivati
- Se clicchi ok cancella sia Full name dal servizio, che disattiva i servizi che ce l'hanno come campo obbligatorio

Se poi le aziende non sono clienti di pfed invia quelle famose pec di notifica per aggiunta, modifica e disattivazione servizi.

Giusto?

Se ti iscirvi ad un serviizo di azienda cliente va comunque notificato all'azienda e al utente ma senza delega firmata
mi serve sia per essere tutti allineati sulle richieste e sia per la documentazione

Lucio, 14:27
Non capisco la parte che fa riferimento ai campi singoli. Perchè ti salvi anche i valori dei campi singoli?

14:38
intendi perchè li salvo anche nella polimorfica del gruppo?

Lucio, 14:42
Da quel che ho capito salvi 3 dati:
Luca Cavallini
Luca
Cavallini

giusto?

14:44
Si, Luca Cavallini come json nella tabella polimorfica dei gruppi (first_name:Luca, last_name:Cavallini}, che sarebbero i dati composti, e in più nei campi (semplici) first_name e last_name
l'ha voluto fare Marco per scalabilità in caso di fossero problemi di qualche tipo 

Lucio, 14:44
Non capisco a cosa ti serve salvare i campi singoli

14:47
è per avere un sistema più adatto ad ogni esigenza di eventuale cambiamento

Lucio, 14:49
Io non ne vedo la necessità ma se ritenete corretto va bene, prolifera un po' di dati.

14:49
si un po si però se dopo i clienti vogliono delle logiche dove serve separare i campi ce l'0hai già pronto
era peccato non farlo per una query in più penso
perchè altrimenti ti toccherebbe fare tutta la migrazione dei dati dopo

Lucio, 14:50
Come detto quello che si usa per creare servizi/aggiungerli al profilo sono solo i campi Composti