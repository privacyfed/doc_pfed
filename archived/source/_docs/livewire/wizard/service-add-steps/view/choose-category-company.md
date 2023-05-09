---
title: Service/Steps/ChooseCategoryCompany.php
description: Documentazione di Service/Steps/ChooseCategoryCompany.php
extends: _layouts.documentation
section: content
---

# Documentazione di Service/Steps/ChooseCategoryCompany.php {#choose-category-company}

## Documentazione del codice

Il codice fornito rappresenta una sezione di una vista di un wizard per l'aggiunta di un nuovo servizio.

## Struttura del codice

La vista estende il layout 'ui::layouts.wizard' e visualizza un gruppo di input di tipo select per la selezione della categoria del nuovo servizio.

L'input è definito come un componente Laravel Blade x-input.group, che accetta i seguenti parametri:

*    type: il tipo di input, in questo caso 'select';
*    name: il nome dell'input, in questo caso 'category_id';
*    options: le opzioni per il menu a tendina, passate come un array di chiavi-valori;
*    class: una classe CSS opzionale, in questo caso 'mb-5' per aggiungere margin-bottom.

L'array $category_opts, contenente le opzioni per il menu a tendina, viene passato alla vista dal controller che la renderizza.

## Utilizzo di framework

La vista fa uso del framework Laravel, in particolare del sistema di templating Blade e del componente x-input.group per la generazione dell'input di tipo select.