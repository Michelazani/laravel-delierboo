<?php

$restaurants = [
    'restaurants' => [
        [
            "id" => 1,

            //USER
            "name_user" => "Gino",
            "lastname_user" => "Debellis",
            "email_user" => "ristoranteitaliano@gmail.com", //EMAIL UTENTE/RISTO??? stessa email???
            "password_user" => "XXXXXX",

            //RESTAURANT
            "name_restaurant"  => "Ristorante Italiano", //aggiunto voce name 
            "address_restaurant" => "Corso Buenos Aires 3 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT12345678901",
            "image_restaurant" => "",
            "type" => "Italiano" , 
            "menu" => [
                ["name" => "Pasta alla carbonara", "price" => 12.99, "ingredients" => "pasta, uova, guanciale, pecorino", "Available" => "true", "img_dish" => "",],
                ["name" => "Pizza Margherita", "price" => 9.99, "ingredients" => "farina, pomodoro, mozzarella, basilico", "Available" => "true","img_dish" => "",],
                ["name" => "Filetto di manzo", "price" => 18.99, "ingredients" => "filetto di manzo, rosmarino, sale, pepe", "Available" => "true","img_dish" => "",],
                ["name" => "Insalata di stagione", "price" => 7.99, "ingredients" => "insalata mista, pomodoro, olive, olio d'oliva", "Available" => "true","img_dish" => "",],
                ["name" => "Tiramisù", "price" => 6.99, "ingredients" => "savoiardi, mascarpone, uova, caffè", "Available" => "true",],
                ["name" => "Acqua minerale", "price" => 1.99, "ingredients" => "acqua, minerali", "Available" => "true", "img_dish" => "",],
            ]
        ],
        [
            "id" => 2,

            //USER
            "name_user" => "David",
            "lastname_user" => "Chang",
            "email_user" => "RistoranteWanYuan@gmail.com",
            "password_user" => "XXXXXX",

            //RESTAURANT
            "name_restaurant"  => "Ristorante Cinese Wan Yuan", //aggiunto voce name 
            "address_restaurant" => "Via Paolo Sarpi, 123 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT1234567890",
            "image_restaurant" => "",
            "type" => "Cinese" , 
            "menu" => [
                ["name" => "Anatra all'arancia", "price" => 14.99, "ingredients" => "anatra, arancia, soia, zenzero", "Available" => "true","img_dish" => "",],
                ["name" => "Ravioli al vapore", "price" => 10.99, "ingredients" => "maiale, acciughe, zenzero, aglio", "Available" => "true", "img_dish" => "",],
                ["name" => "Manzo con broccoli", "price" => 16.99, "ingredients" => "manzo, broccoli, soia, aglio", "Available" => "true","img_dish" => "",],
                ["name" => "Riso fritto", "price" => 8.99, "ingredients" => "riso, uova, piselli, cipolla", "Available" => "true","img_dish" => "",],
                ["name" => "Gelato al sesamo", "price" => 5.99, "ingredients" => "latte, sesamo, zucchero","Available" => "true","img_dish" => "",],
                ["name" => "Birra Tsingtao", "price" => 3.99, "ingredients" => "acqua, malto d'orzo, luppolo","Available" => "true","img_dish" => "",],
            ]
        ],
        [
            "id" => 3,

            //USER
            "name_user" => "Pasquale",
            "lastname_user" => "Ghirardi",
            "email_user" => "info@pizzerianapoli.it",
            "password_user" => "XXXXXX",

            //RESTAURANT
            "name_restaurant"  => "Pizzeria Napoli", //aggiunto voce name 
            "address_restaurant" => "Via Roberto Sarfatti - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT98765432109",
            "image_restaurant" => "",
            "type" => "Pizzeria, Italiano" , 
            "menu" => [
                ["name" => "Margherita", "price" => 10.99, "ingredients" => "pomodoro, mozzarella, basilico", "Available" => "true","img_dish" => "",],
                ["name" => "Quattro Formaggi", "price" => 12.99, "ingredients" => "mozzarella, gorgonzola, parmigiano, ricotta", "Available" => "true","img_dish" => "",],
                ["name" => "Prosciutto e Funghi", "price" => 11.99, "ingredients" => "pomodoro, mozzarella, prosciutto, funghi", "Available" => "true","img_dish" => "",],
                ["name" => "Calzone", "price" => 13.99, "ingredients" => "mozzarella, ricotta, prosciutto, funghi, pomodoro", "Available" => "true","img_dish" => "",],
                ["name" => "Tiramisù", "price" => 6.99, "ingredients" => "savoiardi, mascarpone, cacao, caffè", "Available" => "true","img_dish" => "",],
                ["name" => "Coca-Cola", "price" => 1.99, "ingredients" => "acqua, zucchero, anidride carbonica, coloranti", "Available" => "true","img_dish" => "",],
            ]
        ],
        [
            "id" => 4,

            //USER
            "name_user" => "Morimoto",
            "lastname_user" => "Masaharu",
            "email_user" => "sushifusion@gmail.com",
            "password_user" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "Sushi Fusion", //aggiunto voce name 
            "address_restaurant" => "Via Bligny 1 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT71955306825",
            "image_restaurant" => "",
            "type" => "Giapponese" , 
            "menu" => [
                ["name" => "Sushi assortito", "price" => 19.99, "ingredients" => "riso, pesce crudo, alga nori, wasabi", "Available" => "true","img_dish" => "",],
                ["name" => "Tempura mista", "price" => 14.99, "ingredients" => "verdure, gamberi, tempura batter, salsa teriyaki", "Available" => "true","img_dish" => "",],
                ["name" => "Ramen al miso", "price" => 12.99, "ingredients" => "noodles, brodo di miso, carne di maiale, cipolla","Available" => "true","img_dish" => "",],
                ["name" => "Edamame", "price" => 6.99, "ingredients" => "fagioli di soia, sale", "category" => "Antipasto", "img_dish" => "",],
                ["name" => "Matcha affogato", "price" => 8.99, "ingredients" => "gelato al matcha, tè verde matcha", "Available" => "true","img_dish" => "",],
                ["name" => "Saké giapponese", "price" => 9.99, "ingredients" => "riso, acqua, fermentazione", "Available" => "true","img_dish" => "",]
            ]
        ],
        [
            "id" => 5,

            //USER
            "name_user" => "Luciana",
            "lastname_user" => "Rossi",
            "email_user" => "frutti.di.mare@gmail.com",
            "password_user" => "XXXXXX",

            //RESTAURANT
            "name_restaurant"  => "Frutti di Mare", //aggiunto voce name 
            "address_restaurant" => "Via Paolo Sarpi, 12 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT13345678901",
            "image_restaurant" => "",
            "type" => "Pesce" , 
            "menu" => [
                ["name" => "Antipasto di mare", "price" => 16.99, "ingredients" => "gamberi, calamari, mussels, limone", "Available" => "true","img_dish" => "",],
                ["name" => "Spaghetti alle vongole", "price" => 18.99, "ingredients" => "spaghetti, vongole, aglio, prezzemolo","Available" => "true","img_dish" => "",],
                ["name" => "Grigliata mista di pesce", "price" => 24.99, "ingredients" => "orata, salmone, gamberi, limone", "Available" => "true","img_dish" => "",],
                ["name" => "Insalata di mare", "price" => 14.99, "ingredients" => "polpo, calamari, pomodorini, olive",  "Available" => "true","img_dish" => "",],
                ["name" => "Panna cotta al limone", "price" => 7.99, "ingredients" => "panna, limone, zucchero", "Available" => "true","img_dish" => "",],
                ["name" => "Rosso di casa mia", "price" => 15.99, "ingredients" => "uva, fermentazione, amore" , "Available" => "true","img_dish" => "",]
            ]
        ],
        [
            "id" => 6,

            //USER
            "name_user" => "Javier",
            "lastname_user" => "Plascencia",
            "email_user" => "taqueriadelsol@gmail.com",
            "password_user" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "Taqueria del Sol", //aggiunto voce name 
            "address_restaurant" => "Via Lambertenghi 30 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT98765432179",
            "image_restaurant" => "",
            "type" => "Messicano" , 
            "menu" => [
                ["name" => "Taco al pastor", "price" => 3.99, "ingredients" => "maiale marinato, cipolla, coriandolo",  "Available" => "true","img_dish" => "",],
                ["name" => "Quesadilla con guacamole", "price" => 5.99, "ingredients" => "tortilla di mais, pollo, formaggio, guacamole", "Available" => "true","img_dish" => "",],
                ["name" => "Burrito con carne asada", "price" => 7.99, "ingredients" => "tortilla di farina, carne asada, fagioli, riso", "Available" => "true","img_dish" => "",],
                ["name" => "Salsa di mango", "price" => 2.99, "ingredients" => "mango, peperoncino, cipolla, coriandolo",  "Available" => "true","img_dish" => "",],
                ["name" => "Churros con cioccolato", "price" => 4.99, "ingredients" => "churros, cioccolato fuso", "Available" => "true","img_dish" => "",],
                ["name" => "Corona Extra", "price" => 3.49, "ingredients" => "acqua, malto d'orzo, luppolo", "Available" => "true","img_dish" => "",],
            ]
        ],
        [
            "id" => 7,

            //USER
            "name_user" => "Francesco",
            "lastname_user" => "Laturro",
            "email_user" => "info@chefsdelightristorante.it",
            "password_user" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "Chef's Delight", //aggiunto voce name 
            "address_restaurant" => "Via Carlo Porta, 456 - Milano (MI), 20123 Italia",
            "vat_restaurant" =>"IT9876543510",
            "image_restaurant" => "",
            "type" => "Italiano" , 
            "menu" => [
                ["name" => "Antipasto dello chef", "price" => 20.99, "ingredients" => "selezione dello chef di formaggi e affettati", "Available" => "true","img_dish" => "",],
                ["name" => "Risotto ai frutti di mare", "price" => 22.99, "ingredients" => "riso, gamberi, cozze, pomodoro", "Available" => "true","img_dish" => "",],
                ["name" => "Filetto alla griglia con salsa al vino rosso", "price" => 28.99, "ingredients" => "filetto di manzo, vino rosso, rosmarino", "Available" => "true","img_dish" => "",],
                ["name" => "Insalata gourmet", "price" => 15.99, "ingredients" => "insalata mista, noci, formaggio di capra, miele", "Available" => "true","img_dish" => "",],
                ["name" => "Panna cotta al cioccolato bianco", "price" => 8.99, "ingredients" => "panna, cioccolato bianco, frutti di bosco",  "Available" => "true","img_dish" => "",],
                ["name" => "DonnaFugata", "price" => 17.99, "ingredients" => "uva, fermentazione, gioia", "Available" => "true","img_dish" => "",],
            ]
        ],
        [
            "id" => 8,

            //USER
            "name_user" => "Rick",
            "lastname_user" => "Bayless",
            "email_user" => "info@elrinconmexicano.it",
            "password_user" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "El Rincon Mexicano", //aggiunto voce name 
            "address_restaurant" => "Piazzale Cadorna - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT98763432108",
            "image_restaurant" => "",
            "type" => "Messicano",
            "menu" => [
                ["name" => "Enchiladas al pollo", "price" => 8.99, "ingredients" => "pollo, tortillas, salsa di pomodoro, formaggio",  "Available" => "true","img_dish" => "",],
                ["name" => "Guacamole fresco", "price" => 4.99, "ingredients" => "avocado, pomodoro, cipolla, coriandolo", "Available" => "true","img_dish" => "",],
                ["name" => "Tostadas con carne", "price" => 6.99, "ingredients" => "carne macinata, fagioli neri, lattuga, formaggio", "Available" => "true","img_dish" => "",],
                ["name" => "Flan al caramello", "price" => 5.99, "ingredients" => "latte condensato, uova, zucchero", "Available" => "true","img_dish" => "",],
                ["name" => "Corona Extra", "price" => 3.49, "ingredients" => "acqua, malto d'orzo, luppolo", "Available" => "true","img_dish" => "",],
            ]
        ],
        [
            "id" => 9,

            //USER
            "name_user" => "Gabriela",
            "lastname_user" => "Cámara",
            "email_user" => "lafiestagrill@gmail.com",
            "password_user" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "La Fiesta Grill", //aggiunto voce name 
            "address_restaurant" => "Corso Como 32 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT02822916519",
            "image_restaurant" => "",
            "type" => "Messicano",
            "menu" => [
                ["name" => "Tacos al pastor", "price" => 4.99, "ingredients" => "maiale marinato, cipolla, coriandolo", "Available" => "true","img_dish" => "",],
                ["name" => "Nachos con formaggio", "price" => 6.99, "ingredients" => "nachos, formaggio fuso, pico de gallo", "Available" => "true","img_dish" => "",],
                ["name" => "Burrito vegetariano", "price" => 7.99, "ingredients" => "tortilla di farina, fagioli neri, riso, avocado", "Available" => "true","img_dish" => "",],
                ["name" => "Tres Leches", "price" => 5.99, "ingredients" => "torta, latte condensato, panna montata", "Available" => "true","img_dish" => "",],
                ["name" => "Pacifico Clara", "price" => 3.79, "ingredients" => "acqua, malto d'orzo, luppolo", "Available" => "true","img_dish" => "",],
            ]
        ],
    ]
];

return $restaurants;

?>
