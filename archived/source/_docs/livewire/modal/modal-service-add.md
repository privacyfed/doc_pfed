---
title: Modal\Service\Add
description: Documentazione del Livewire Component Modal\Service\Add
extends: _layouts.documentation
section: content
---

#  Documentazione del Livewire Component Modal\Service\Add {#modal-service-add}

## Documentazione del codice 

Il codice fornito rappresenta un componente Livewire che estende la classe Modal e permette di aggiungere un nuovo servizio.

## Struttura del codice

Il componente Add è un componente Livewire che estende la classe Modal. La classe contiene tre proprietà pubbliche: $user_id, $form_data e $size.

La proprietà $user_id contiene l'ID dell'utente autenticato tramite la facades Auth, mentre la proprietà $form_data contiene i dati del form per l'aggiunta di un nuovo servizio. La proprietà $size viene impostata a '4xl' tramite il metodo statico attributes() e definisce la dimensione della modal.

Il componente contiene il metodo mount(), che viene chiamato quando il componente viene caricato e imposta la proprietà $user_id e $form_data.

Il componente contiene anche i metodi statici attributes() e behavior(), che definiscono rispettivamente gli attributi e il comportamento della modal.

Il metodo render() viene utilizzato per renderizzare la vista associata al componente, ottenuta attraverso la classe GetViewAction.

## Documentazione della view (blade)

Il codice fornito rappresenta una modale che permette di aggiungere un nuovo servizio.
Struttura del codice

La modale è definita come un componente blade, che estende il componente modal.skin. 

Il componente modal.skin definisce lo scheletro della modale, mentre il componente wizard.service.add rappresenta il contenuto della modale.

All'interno del componente modal.skin, viene definito un slot con nome "title", che contiene il titolo della modale. Il titolo viene ottenuto attraverso la funzione __('pfed::modal.title.add_service'), che recupera una stringa di traduzione dal file di lingua pfed.php.

All'interno del componente modal.skin, viene definito un altro slot con nome "buttons", che contiene i pulsanti della modale. In questo caso, viene definito un pulsante di tipo "cancel" tramite il componente button, che emette un evento "modal.close" quando viene cliccato.