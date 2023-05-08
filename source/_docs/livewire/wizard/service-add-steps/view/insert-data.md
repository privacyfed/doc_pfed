---
title: Service/Steps/InsertData.php
description: Documentazione di Service/Steps/InsertData.php
extends: _layouts.documentation
section: content
---

# Documentazione di Service/Steps/InsertData.php {#insert-data}

## Documentazione del codice

Il codice fornito rappresenta una sezione di una vista di un wizard per la selezione dei campi extra di un servizio.

## Struttura del codice

La vista estende il layout 'ui::layouts.wizard' e visualizza i campi extra associati al servizio selezionato.

La vista contiene un ciclo foreach che itera sugli array di gruppi di campi extra associati al servizio corrente. Per ogni gruppo di campi extra viene visualizzato un titolo con il nome del gruppo, ottenuto dalla chiave 'name' dell'array del gruppo.

All'interno del ciclo foreach principale, viene creato un altro ciclo foreach che itera sui campi extra del gruppo corrente. Per ogni campo extra viene generato un componente di input, definito come un componente Laravel Blade x-input.field. Il componente accetta il parametro :field, che è ottenuto tramite il metodo toData() del componente.

## Utilizzo di framework

La vista fa uso del framework Laravel, in particolare del sistema di templating Blade e dei componenti x-input.field e x-input.group per la generazione degli input. Inoltre, fa uso del layout 'ui::layouts.wizard' per definire la struttura della pagina del wizard.