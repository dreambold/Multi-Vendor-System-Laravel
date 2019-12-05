<?php
/**
* Language file for user error/success messages
*
*/

return array(

    'user_exists'              => 'Korisnik ve? postoji!',
    'user_not_found'           => 'Korisnik [:id] ne postoji.',
    'user_login_required'      => 'Prijava je neuspješna, pokušajte ponovno',
    'user_password_required'   => 'Lozinka je obavezna',
    'insufficient_permissions' => 'Zabrane psristupa.',
    'banned'              => 'banovan',
    'suspended'             => 'suspendovan',

    'success' => array(
        'create'    => 'Korisnik je uspješno kreiran.',
        'update'    => 'Korisnik je uspješno izmjenjen.',
        'delete'    => 'Korisnik je uspješno obrisan.',
        'ban'       => 'Korisnik je uspješno banovan.',
        'unban'     => 'Korisnik je uspješno debanovan.',
        'suspend'   => 'Korisnik je uspješno suspendovan.',
        'unsuspend' => 'Korisnik je uspješno desuspendovan.',
        'restored'  => 'Korisnik je uspješno vra?en.'
    ),

    'error' => array(
        'create'    => 'Desila se greška prilikom stvaranja korisnika. Pokušajte kasnije.',
        'update'    => 'Desila se greška prilikom izmjene korisnika. Pokušajte kasnije.',
        'delete'    => 'Desila se greška prilikom brisanja korisnika. Pokušajte kasnije.',
        'unsuspend' => 'Desila se greška prilikom povratka iz ssuspenzije korisnika. Pokušajte kasnije.'
    ),

);
