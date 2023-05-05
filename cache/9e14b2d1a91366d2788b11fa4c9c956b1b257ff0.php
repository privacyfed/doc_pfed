<?php $__env->startSection('content'); ?><h1 id="profile-show">Profile Show</h1>

<p>Questo codice Blade parte da un'azione del Panel ed estende il layout adm_theme::layouts.app e definisce la sezione content.</p>

<p>All'interno di questa sezione, il codice utilizza il componente Livewire extra-field-groups.by.category, passando come parametro il modello $profile->getProfile().</p>

<p>Successivamente, viene creato un ciclo foreach che itera attraverso i risultati del metodo $profile->getSubscriptionUps().</p>

<p>All'interno di questo ciclo, viene utilizzato il componente Blade x-card per creare una scheda di abbonamento per ciascuna sottoscrizione.</p>

<p>Viene utilizzato il componente x-slot per definire il titolo, il sottotitolo, la valuta, l'importo e il pulsante di pagamento per ogni scheda di abbonamento.</p>

<p>Si noti che il file Blade utilizza anche i file di lingua per recuperare i valori delle chiavi di traduzione, come ad esempio  'extrafield::extra_fields.plan.light.title'</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>