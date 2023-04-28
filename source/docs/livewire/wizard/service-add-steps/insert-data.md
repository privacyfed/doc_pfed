---
title: Service/Steps/InsertData.php
description: Documentazione di Service/Steps/InsertData.php
extends: _layouts.documentation
section: content
---

# Documentazione di Service/Steps/InsertData.php {#insert-data}

## Documentazione del codice

Il codice fornito rappresenta uno step del wizard per l'inserimento dei dati del nuovo servizio.
Struttura del codice

Lo step InsertData è una classe che estende la classe StepComponent. La classe contiene tre proprietà pubbliche: $form_data, $user_id e $service_id. La proprietà $view contiene la vista associata allo step.

La proprietà $form_data contiene i dati del form per l'inserimento dei dati del nuovo servizio. La proprietà $user_id contiene l'ID dell'utente che sta aggiungendo il nuovo servizio. La proprietà $service_id contiene l'ID del servizio che sta per essere aggiunto.

Il componente contiene il metodo mount(), che viene chiamato quando lo step viene caricato e imposta le proprietà $form_data e $extra_field_groups. L'array $extra_field_groups viene ottenuto tramite l'azione GetArrayByModelTypeModelId, che restituisce i gruppi di campi extra associati al tipo di modello 'service' e all'ID del servizio corrente.

Il metodo updateFormData() viene utilizzato per aggiornare i dati del form.

Il metodo toData() viene utilizzato per convertire i dati del form in un oggetto FieldData.

Il metodo render() viene utilizzato per renderizzare la vista associata allo step, ottenuta attraverso la classe GetViewAction.

Il metodo getView() viene utilizzato per ottenere la vista associata allo step. Se la proprietà $view non è stata ancora impostata, viene ottenuta la vista tramite l'azione GetViewAction e la proprietà viene impostata.

Il metodo stepInfo() viene utilizzato per definire le informazioni relative allo step, come il label e l'icona.

Il metodo goNextStep() viene utilizzato per validare i dati del form e passare allo step successivo. La validazione viene effettuata in base ai campi extra associati al servizio corrente, ottenuti attraverso il metodo getProfileExtraFieldGroupsOptions(). Se i campi extra sono richiesti, vengono impostate le regole di validazione e viene effettuata la validazione. Infine, viene passato allo step successivo.

Il metodo userExtraFieldGroupCreate() viene utilizzato per aprire una finestra modale per la creazione di un nuovo gruppo di campi extra per l'utente corrente.

## Utilizzo di dipendenze

Il componente fa uso della classe Service per ottenere le informazioni sul servizio corrente e dell'azione GetArrayByModelTypeModelId per ottenere i gruppi di campi extra associati al servizio corrente.