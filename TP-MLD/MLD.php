<?php  // balise d'ouverture de php

// TRADUCTION MLD du diagramme MCD
// -> commande 1,N (1 user pour N order)
user(id, email, password, firstname, lastname, birthdate, adress, complements, postal_code, city, #id_order)

// -> contient 1,N (1 order pour N order_line)
order(id, reference, date, #order_line_id)

// contient 1,N (1 order line pour N product)
order_line(id, quantity, price)

// contient 1,N (1 product pour N picture)
product(id, name, description,price)

// contient N,N (N product pour N category)
category(id, nom)
// contient 
picture(id, src, alt)

