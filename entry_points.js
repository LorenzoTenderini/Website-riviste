const path = require('path');
const fs = require('fs');

// check if file exists: fs.existsSync('/path/to/file')
/*
	Aggiungi un oggetto alla variabile "obj" qui sotto per aggiungere un entry point
	- chiave -> il nome del bundle che vogliamo ottenere
	(e che avrà la forma nomeBundle.bundle.js)
	- valore -> il percorso del file javascript sorgente
*/

const obj = {
	lista_utenti: path.join(path.resolve(__dirname, 'src/js'), 'lista_utenti.js'),
	lista_riviste: path.join(path.resolve(__dirname, 'src/js'), 'lista_riviste.js'),
	lista_comuni: path.join(path.resolve(__dirname, 'src/js'), 'lista_comuni.js'),
	in_utente: path.join(path.resolve(__dirname, 'src/js'), 'in_utente.js'),
	dett_utente: path.join(path.resolve(__dirname, 'src/js'), 'dett_utente.js'),
}

module.exports = obj
