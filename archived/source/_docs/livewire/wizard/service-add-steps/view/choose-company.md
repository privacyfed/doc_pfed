---
title: Service/Steps/ChooseCompany.php
description: Documentazione di Service/Steps/ChooseCompany.php
extends: _layouts.documentation
section: content
---

# Documentazione di Service/Steps/ChooseCompany.php {#choose-company}

## Documentazione del codice

Il codice fornito rappresenta una sezione di una vista di un wizard.

## Struttura del codice

La vista estende il layout 'ui::layouts.wizard' e visualizza un gruppo di input di tipo select per la selezione dell'azienda.

L'input è definito come un componente Laravel Blade x-input.group, che accetta i seguenti parametri:

*    type: il tipo di input, in questo caso 'select';
*    name: il nome dell'input, in questo caso 'company_id';
*    options: le opzioni per il menu a tendina, passate come un array di chiavi-valori;
*    class: una classe CSS opzionale, in questo caso 'mb-5' per aggiungere margin-bottom.

L'array $companies, contenente le opzioni per il menu a tendina, viene passato alla vista dal controller che la renderizza.

## Utilizzo di framework

La vista fa uso del framework Laravel, in particolare del sistema di templating Blade e del componente x-input.group per la generazione dell'input di tipo select. Inoltre, fa uso del layout 'ui::layouts.wizard' per definire la struttura della pagina del wizard.