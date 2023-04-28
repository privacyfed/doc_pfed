---
title: Profile Show 
description: Documentazione della blade Profile Show
extends: _layouts.documentation
section: content
---

# Profile Show {#profile-show}

Questo codice Blade parte da un'azione del Panel ed estende il layout adm_theme::layouts.app e definisce la sezione content. 

All'interno di questa sezione, il codice utilizza il componente Livewire extra-field-groups.by.category, passando come parametro il modello $profile->getProfile().

Successivamente, viene creato un ciclo foreach che itera attraverso i risultati del metodo $profile->getSubscriptionUps(). 

All'interno di questo ciclo, viene utilizzato il componente Blade x-card per creare una scheda di abbonamento per ciascuna sottoscrizione. 

Viene utilizzato il componente x-slot per definire il titolo, il sottotitolo, la valuta, l'importo e il pulsante di pagamento per ogni scheda di abbonamento.

Si noti che il file Blade utilizza anche i file di lingua per recuperare i valori delle chiavi di traduzione, come ad esempio  'extrafield::extra_fields.plan.light.title'