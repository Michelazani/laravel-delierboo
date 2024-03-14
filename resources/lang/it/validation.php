<?php

// File di traduzione per le regole di validazione in Laravel

return [
    // Messaggio di errore per campo obbligatorio
    'required' => 'Il campo :attribute è obbligatorio.',
    
    // Array di messaggi di errore per la lunghezza massima della stringa
    'max' => [
        'string' => 'Il campo :attribute non può essere più lungo di :max caratteri.',
    ],
    
    // Messaggio di errore per campo univoco
    'unique' => 'Questo :attribute è già stato preso.',
    
    // Messaggio di errore per indirizzo email non valido
    'email' => 'Il campo :attribute deve essere un indirizzo email valido.',
    
    // Messaggio di errore per conferma non corrispondente
    'confirmed' => 'La conferma :attribute non corrisponde.',
    
    // Array di messaggi di errore per la lunghezza minima della stringa
    'min' => [
        'string' => 'Il campo :attribute deve essere di almeno :min caratteri.',
    ],
];
