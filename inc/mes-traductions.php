<?php
/*
* polylang
* à rajouter dans le theme : <?php echo pll__('ceci est un exemple'); ?>
* <?php echo pll__(''); ?>
*/

pll_register_string('test', 'ceci est un test');

// 404
pll_register_string('404: pas de résultats', 'Désolé, la page demandée n\'existe pas, n\'existe plus ou son lien a été modifié.');

// recherche
pll_register_string('recherche: bouton', 'Recherche');
pll_register_string('recherche: titre', 'Résultats de recherche pour:');
pll_register_string('recherche: pas de résultats', 'Désolé, pas de résultats.');

pll_register_string('recherche: Catégories', 'Catégories');
pll_register_string('recherche: Etiquettes', 'Etiquettes');

// ACF champs download
pll_register_string('Champs Download: titre document', 'Nom du fichier');
pll_register_string('Champs Download: légende', 'Légende');
pll_register_string('Champs Download: description', 'Description');
pll_register_string('Champs Download: taille du fichier', 'Taille du fichier');

// Section privée
pll_register_string('Private: bouton', 'Zone Membre');
pll_register_string('Private: bouton', 'Déconnexion');
pll_register_string('Private: titre page', 'Page de connexion');
