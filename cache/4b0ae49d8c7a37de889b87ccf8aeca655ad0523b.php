<?php $__env->startSection('content'); ?><h1 id="choose-company">Documentazione di Service/Steps/ChooseCompany.php</h1>

<h2>Documentazione del codice</h2>

<p>Il codice fornito rappresenta uno step del wizard per l'aggiunta di un nuovo servizio.
Struttura del codice</p>

<p>Lo step ChooseCompany è una classe che estende la classe StepComponent. La classe contiene due proprietà pubbliche: $form_data e $companies. La proprietà $view contiene la vista associata allo step.</p>

<p>La proprietà $form_data contiene i dati del form per la scelta dell'azienda del nuovo servizio. La proprietà $companies contiene le aziende disponibili per la scelta del nuovo servizio, selezionate in base alla categoria scelta nello step precedente. Le aziende vengono ottenute tramite la classe Company, che è un modello Eloquent.</p>

<p>Il componente contiene il metodo mount(), che viene chiamato quando lo step viene caricato e imposta le proprietà $form_data e $companies.</p>

<p>Il metodo render() viene utilizzato per renderizzare la vista associata allo step, ottenuta attraverso la classe GetViewAction. Inoltre, il metodo passa alla vista le opzioni per la scelta dell'azienda.</p>

<p>Il metodo getView() viene utilizzato per ottenere la vista associata allo step. Se la proprietà $view non è stata ancora impostata, viene ottenuta la vista tramite l'azione GetViewAction e la proprietà viene impostata.</p>

<p>Il metodo stepInfo() viene utilizzato per definire le informazioni relative allo step, come il label e l'icona.</p>

<p>Il metodo goNextStep() viene utilizzato per validare i dati del form e passare allo step successivo.</p>

<h2>Utilizzo di dipendenze</h2>

<p>Il componente fa uso del modello Eloquent Company per ottenere le aziende disponibili.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>