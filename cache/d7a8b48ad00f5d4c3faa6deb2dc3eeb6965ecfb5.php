<?php $__env->startSection('content'); ?><h2 id="profile-page">La pagina Profilo</h2>

<p>In questa pagina è possibile aggiungere, modificare, cancellare le proprie informazioni che poi verranno utilizzate nei consensi.</p>

<p>Sotto l'avatar vengono visualizzate le varie categorie di dato.</p>

<p>Selezionando una categoria si potrà visualizzare<br />
1. l'elenco dei dati già inseriti<br />
2. un apposito tasto dove poter aggiungere un proprio dato</p>

<h3 id="add-data">Aggiungere Dato</h3>

<p>Tramite il tasto col segno +, si potrà aggiungere il proprio dato.<br />
Si visualizzerà un modal dove poter seguire i diversi passi per aggiungere un proprio dato.</p>

<h5 id="first-step">Primo Passo</h5>

<p>Si potrà scegliere il tipo di dato che si vuole inserire.<br />
L'elenco dei tipi di dato varierà in base alla categoria scelta.</p>

<h5 id="second-step">Secondo Passo</h5>

<p>Dopo aver scelto il tipo di dato, bisognerà inserire il loro valore.</p>

<h5>Terzo Passo <?php echo e({'@'); ?>third-step}</h5>

<p>In quest'ultimo passo, si potrà inserire un eventuale nota o descrizione.</p>

<h3 id="change-data">Modificare Dato</h3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>