<?php $__env->startSection('content'); ?><h1 id="wizard-service-add">Documentazione del Livewire Component Wizard\Service\Add</h1>

<h2>Documentazione del codice</h2>

<p>Il codice fornito rappresenta un componente Livewire che permette di aggiungere un nuovo servizio tramite un wizard a più step.</p>

<h2>Struttura del codice</h2>

<p>Il componente Add è un componente Livewire che estende la classe WizardComponent. La classe contiene una sola proprietà pubblica: $form_data.</p>

<p>Il componente contiene il metodo mount(), che viene chiamato quando il componente viene caricato e imposta la proprietà $form_data.</p>

<p>Il componente contiene anche il metodo steps(), che definisce gli step del wizard. Gli step sono rappresentati da classi che estendono la classe Spatie\LivewireWizard\WizardStep.</p>

<p>I passi dello wizard sono i seguenti:</p>

<pre><code>* ChooseCategoryCompany: permette di scegliere la categoria dell'azienda del nuovo servizio.
* ChooseCompany: permette di scegliere l'azienda del nuovo servizio.
* ChooseService: permette di scegliere il servizio tra quelli disponibili.
* InsertData: permette di inserire i dati necessari del nuovo servizio.
* InsertConsents: permette di inserire i consensi per il nuovo servizio.
* V2Confirm: permette di confermare il nuovo servizio.
</code></pre>

<p>I passi commentati, InsertConsents e V2Confirm, non sono attualmente utilizzati nello wizard.</p>

<p>Il componente contiene anche il metodo initialState(), che è commentato e potrebbe essere utilizzato per impostare lo stato iniziale del componente.</p>

<h2>Utilizzo di framework</h2>

<p>Il componente  fa uso del pacchetto spatie/livewire-wizard per implementare lo wizard a più step.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>