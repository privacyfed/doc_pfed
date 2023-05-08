---
title: Service/Steps/ChooseCategoryCompany.php
description: Documentazione di Service/Steps/ChooseCategoryCompany.php
extends: _layouts.documentation
section: content
---

# Documentazione di Service/Steps/ChooseCategoryCompany.php {#choose-category-company}

## Documentazione del codice

Il codice fornito rappresenta uno step del wizard per l'aggiunta di un nuovo servizio.
Struttura del codice

Lo step ChooseCategoryCompany è una classe che estende la classe StepComponent. La classe contiene tre proprietà pubbliche: $form_data, $category_opts e $view.

La proprietà $form_data contiene i dati del form per la scelta della categoria e dell'azienda del nuovo servizio. La proprietà $category_opts contiene le opzioni per la scelta della categoria, ottenute tramite l'azione GetCategoryOptionsByModelTypeAction. La proprietà $view contiene la vista associata allo step.

Il componente contiene il metodo mount(), che viene chiamato quando lo step viene caricato e imposta la proprietà $category_opts.

Il metodo render() viene utilizzato per renderizzare la vista associata allo step, ottenuta attraverso la classe GetViewAction.

Il metodo getView() viene utilizzato per ottenere la vista associata allo step. Se la proprietà $view non è stata ancora impostata, viene ottenuta la vista tramite l'azione GetViewAction e la proprietà viene impostata.

Il metodo stepInfo() viene utilizzato per definire le informazioni relative allo step, come il label e l'icona.

Il metodo goNextStep() viene utilizzato per validare i dati del form e passare allo step successivo.

## Utilizzo di dipendenze

Il componente fa uso del pacchetto spatie/livewire-wizard per implementare lo wizard a più step.