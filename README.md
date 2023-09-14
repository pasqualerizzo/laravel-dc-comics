Come avviare e sviluppare un progetto in Laravel
Passi post-clone di una repo di Laravel
Clono la repo del nuovo esercizio (che probabilmente è la copia del template)
Copio il file .env.example e lo rinomino in .env (senza cancellare il file .env.example)
Apro il terminale ed eseguo il comando composer install
Dopo l'esecuzione di composer install, eseguo nel terminale il comando php artisan key:generate
Dopo l'esecuzione di php artisan key:generate, eseguo nel terminale il comando npm i
Dopo l'esecuzione di npm i: a. O avvio npm run dev b. Oppure eseguo il comando npm run build
Se ne ho bisogno (MOLTO probabilmente si), collego il database modificando il file .env
Avvio (se ho avviato npm run dev -> lo faccio in un altro terminale) il comando php artisan serve
Come aggiungere un'entità (e relativa CRUD) -> es. pasta, libri, macchine...
N.B. l'entità User è già implementata in Laravel
Creo una migration tramite il comando php artisan make:migration create_NOMETABELLA_table (es. create_pastas_table)
Riempio la migration con le colonne necessarie
Eseguo la migration tramite il comando php artisan migrate
Creo il model associato alla mia entità tramite il comando php artisan make:model NOMEENTITA (es. Pasta)
Creo il seeder associato alla mia entità tramite il comando php artisan make:seeder NOMEENTITASeeder (es. PastaSeeder)
Riempio il seeder con le operazioni necessarie a creare i salvare i miei dati iniziali (quelli reali)/di test (quelli fake)
Eseguo il seeder con il comando php artisan db:seed --class=NOMEENTITASeeder
Creo un resource controller tramite il comando php artisan make:controller NOMEENTITAController --resource (es. PastaController)
Associo le funzioni (già definite) del nuovo controller alle rispettive rotte aggiungendo in web.php Route::resource('NOMETABELLA', NOMEENTITAController::class)
Riempio i corpi delle funzioni secondo necessità
Passi workflow di Git

