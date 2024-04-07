<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Array di base
        $words = [
            [
                'title' => 'Programmazione',
                'slug' => 'programmazione',
                'description' => 'La programmazione è il processo di ideazione, progettazione e costruzione di programmi informatici eseguibili volti alla risoluzione di problemi. La programmazione è costituita da fasi come l\'analisi e la generazione di algoritmi, lo studio della loro accuratezza e del consumo di risorse, e l\'implementazione di suddetti algoritmi (solitamente in un linguaggio di programmazione), fase nota come scrittura di codice.'
            ],
            [
                'title' => 'Framework',
                'slug' => 'framework',
                'description' => 'è un\'architettura logica di supporto (spesso un\'implementazione logica di un particolare design pattern) sulla quale un software può essere progettato e realizzato, spesso facilitandone lo sviluppo da parte del programmatore.'
            ],
            [
                'title' => 'Debug',
                'slug' => 'debug',
                'description' => 'Il debugging (o semplicemente debug) o depurazione, consiste nell\'individuare e correggere errori nel codice (bug)'
            ],
            [
                'title' => 'Libreria',
                'slug' => 'libreria',
                'description' => 'Una libreria si compone di un pacchetto di uno o più file volti a fornire metodi aggiuntivi (e magari completi) per lo sviluppo di un applicazione o di un software.'
            ],
            [
                'title' => 'HEAD',
                'slug' => 'head',
                'description' => 'Un documento HTML è composto da due parti principali, una parte superiore chiamata \'head\' ( testa ) e una parte inferiore chiamata "body" ( corpo ). La sezione head è l\'area dedicata all\'intestazione ( header ) del documento HTML e comprende tutte quelle informazioni di controllo che non sono visualizzate dal browser ma che consentono la corretta visualizzazione della pagina. In questa sezione vengono inseriti tutti i meta tag in HTML per definire il titolo, gli stili, gli script e le altre informazioni.'
            ],
            [
                'title' => 'BODY',
                'slug' => 'body',
                'description' => 'E\' la sezione centrale, o corpo appunto, delle pagine web. Questa sezione racchiude tutti i contenuti, come il testo, le immagini e i collegamenti che costituiscono la parte visualizzata dal browser.'
            ],
            [
                'title' => 'TAG',
                'slug' => 'tag',
                'description' => 'Si tratta di una una keyword del linguaggio di markup racchiusa tra parentesi angolari ( <> ).'
            ],
            [
                'title' => 'Selettore',
                'slug' => 'selettore',
                'description' => 'Costrutto che permette di selezionare uno o più elementi dalla pagina web per applicare degli stili grafici'
            ],
            [
                'title' => 'Proprietà',
                'slug' => 'proprietà',
                'description' => 'Definisce un aspetto grafico dell\'elemento o gruppo di elementi da modificare'
            ],
            [
                'title' => 'Commenti',
                'slug' => 'commenti',
                'description' => 'Aiutano il programmatore ad annotare, ordinare, descrivere le operazioni svolte'
            ],
            [
                'title' => 'Costrutti',
                'slug' => 'costrutti',
                'description' => 'un costrutto non è altro che una struttura di controllo in un linguaggio di programmazione che permettono di combinare tra loro istruzioni elementari creando cosi istruzioni complesse, controllando il flusso della loro esecuzione, i piu famosi sono i costrutti selettivi come if - else e lo switch, e i costrutti iterativi come il while e il for.'
            ],
            [
                'title' => 'if',
                'slug' => 'if',
                'description' => 'if è collegata con una condizione e seguita
                da un blocco di codice.
                Se la condizione risulta vera il blocco 
                di codice viene eseguito una sola volta;'
            ],
            [
                'title' => 'else if',
                'slug' => 'else-if',
                'description' => 'else if è usato a cascata di un if ed è seguito da un\'altra condizione booleana e da un altro blocco di codice. Se la condizione dell\'if a cui l\'else if è collegato risulta falsa allora viene verificata quella dell\'else if che, se vera, porterà all\'esecuzione del blocco di codice al suo interno'
            ],
            [
                'title' => 'Server-side/backend',
                'slug' => 'server-side/backend',
                'description' => 'I linguaggi server/side sono linguaggi di programmazione che vengono elaborati lato server, il più diffuso è PHP. Il compito principale è quello di interpretare ed elaborare dati provenienti da un database e fornire un riscontro alla componente client/side'
            ],
            [
                'title' => 'PHP',
                'slug' => 'php',
                'description' => 'PHP è un acronimo il cui significato è “Hypertext Preprocessor” (in origine nato come “Personal Home Page Tools”).
                Si tratta di un linguaggio di scripting definito "server side", ovvero un linguaggio che risiede in un server in remoto e che interpreta le istruzioni del client, le elabora e le restituisce al client che ha formulato la richiesta.
                PHP è un linguaggio interpretato, ovvero esiste un programma chiamato “interprete” che si occupa di tradurre il codice PHP in un linguaggio comprensibile al computer.'
            ],
            [
                'title' => 'API',
                'slug' => 'api',
                'description' => 'L\'acronimo API sta per Application Programming Interface e può essere tradotto come interfaccia di programmazione. Come suggerisce il nome italiano, un\'API consente ai programmatori di accedere a determinate funzioni. Le interfacce servono, per così dire, come punto di accesso.'
            ],
            [
                'title' => 'Data',
                'slug' => 'data',
                'description' => 'è un oggetto che rappresenta il modello dati reattivo che viene reso disponibile da Vue.'
            ],
            [
                'title' => 'Methods',
                'slug' => 'methods',
                'description' => 'I metodi sono le funzioni assegnate agli oggetti. Servono a far eseguire un blocco di codice in risposta a un evento scatenato dall\'utente'
            ],
            [
                'title' => 'Computed',
                'slug' => 'computed',
                'description' => 'Proprietà definite attraverso delle funzioni che non ricevono argomenti e restituiscono sempre qualcosa, che permettono di manipolare le proprietà di base dell\'oggetto data, restituendo valori che vengono ricalcolati quando una delle proprietà reattive viene modificata.'
            ],
            [
                'title' => 'Database',
                'slug' => 'database',
                'description' => 'Un database è una collezione organizzata di dati coerenti. Organizzato in tabelle formate da righe e colonne. (il termine database viene utilizzato anche
                per riferirsi al DBMS).'
            ],
            [
                'title' => 'Tabella DB',
                'slug' => 'tabella-db',
                'description' => 'Una tabella di un database è formata da righe (o tuple) e colonne. 
                Le colonne rappresentano la struttura, ossia le caratteristiche del dato da memorizzare.
                Ogni riga rappresenta un dato inserito.'
            ],
            [
                'title' => '(R)DBMS',
                'slug' => '(r)dbms',
                'description' => '(Relational) Database Management System è il
                mezzo tecnologico che permette di gestire la collezione di dati (il
                database).'
            ],
            /* [
                'title' => '',
                'description' => ''
            ], */
        ];


        foreach ($words as $word) {
            $new_word = new Word();
            $new_word->fill($word);
            $new_word->save();
        }
    }
}
