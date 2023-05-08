---
title: Wizard\Service\Add
description: Documentazione del Livewire Component Wizard\Service\Add
extends: _layouts.documentation
section: content
---

#  Documentazione del Livewire Component Wizard\Service\Add {#wizard-service-add}

## Documentazione del codice

Il codice fornito rappresenta un componente Livewire che permette di aggiungere un nuovo servizio tramite un wizard a più step.

## Struttura del codice

Il componente Add è un componente Livewire che estende la classe WizardComponent. La classe contiene una sola proprietà pubblica: $form_data.

Il componente contiene il metodo mount(), che viene chiamato quando il componente viene caricato e imposta la proprietà $form_data.

Il componente contiene anche il metodo steps(), che definisce gli step del wizard. Gli step sono rappresentati da classi che estendono la classe Spatie\LivewireWizard\WizardStep.

I passi dello wizard sono i seguenti:

    * ChooseCategoryCompany: permette di scegliere la categoria dell'azienda del nuovo servizio.
    * ChooseCompany: permette di scegliere l'azienda del nuovo servizio.
    * ChooseService: permette di scegliere il servizio tra quelli disponibili.
    * InsertData: permette di inserire i dati necessari del nuovo servizio.
    * InsertConsents: permette di inserire i consensi per il nuovo servizio.
    * V2Confirm: permette di confermare il nuovo servizio.

I passi commentati, InsertConsents e V2Confirm, non sono attualmente utilizzati nello wizard.

Il componente contiene anche il metodo initialState(), che è commentato e potrebbe essere utilizzato per impostare lo stato iniziale del componente.

## Utilizzo di framework

Il componente  fa uso del pacchetto spatie/livewire-wizard per implementare lo wizard a più step.