<?php $__env->startSection('content'); ?><h1 id="choose-category-company">Documentazione di Service/Steps/ChooseCategoryCompany.php</h1>

<h2>Documentazione del codice</h2>

<p>Il codice fornito rappresenta una sezione di una vista di un wizard per l'aggiunta di un nuovo servizio.</p>

<h2>Struttura del codice</h2>

<p>La vista estende il layout 'ui::layouts.wizard' e visualizza un gruppo di input di tipo select per la selezione della categoria del nuovo servizio.</p>

<p>L'input è definito come un componente Laravel Blade x-input.group, che accetta i seguenti parametri:</p>

<ul>
<li>type: il tipo di input, in questo caso 'select';</li>
<li>name: il nome dell'input, in questo caso 'category_id';</li>
<li>options: le opzioni per il menu a tendina, passate come un array di chiavi-valori;</li>
<li>class: una classe CSS opzionale, in questo caso 'mb-5' per aggiungere margin-bottom.</li>
</ul>

<p>L'array $category_opts, contenente le opzioni per il menu a tendina, viene passato alla vista dal controller che la renderizza.</p>

<h2>Utilizzo di framework</h2>

<p>La vista fa uso del framework Laravel, in particolare del sistema di templating Blade e del componente x-input.group per la generazione dell'input di tipo select.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>