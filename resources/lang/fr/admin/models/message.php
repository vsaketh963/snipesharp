<?php

return [

    'does_not_exist' => 'Le modèle n\'existe pas.',
    'assoc_users'     => 'Ce modèle est actuellement associé à au moins un actif et ne peut pas être supprimé. Veuillez supprimer les actifs associés et essayer à nouveau. ',

    'create' => [
        'error'   => 'Le modèle n\'a pas été créé, veuillez essayer à nouveau.',
        'success' => 'Le modèle a été créé avec succès.',
        'duplicate_set' => 'Un modèle d\'actif avec ce nom, fabricant et modèle existe déjà.',
    ],

    'update' => [
        'error'   => 'Le modèle n\'a pas été mis à jour, veuillez essayer à nouveau',
        'success' => 'Le modèle a été mis à jour avec succès.',
    ],

    'delete' => [
        'confirm'   => 'Êtes-vous sûr de vouloir supprimer ce modèle d\'actif ?',
        'error'   => 'Un problème a eu lieu pendant la suppression du modèle. Veuillez essayer à nouveau.',
        'success' => 'Le modèle a été supprimé avec succès.',
    ],

    'restore' => [
        'error'        => 'Le modèle d\'actif n\'a pas été restauré, veuillez réessayer',
        'success'        => 'Modèle d\'actif restauré correctement.',
    ],

    'bulkedit' => [
        'error'        => 'Aucun champ n\'a été changé, donc rien n\'a été mis à jour.',
        'success'        => 'Modèles mis à jour.',
    ],

];
