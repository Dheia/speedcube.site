<?php

return [
    'cms_object'   => [
        'invalid_file'             => 'Neveljavno ime datoteke :name. Imena datotek lahko vsebujejo le alfa-numerične simbole, podčrtaje, pomišljaje in pike. Nekaj primerov pravilnih imen datotek: page.htm, page, subdirectory/page',
        'invalid_property'         => "Lastnost ':name' ne more biti nastavljena",
        'file_already_exists'      => "Datoteka ':name' že obstaja",
        'error_saving'             => "Napaka pri shranjevanju datoteke ':name'. Prosimo, preverite vaša uporabniška dovoljenja.",
        'error_creating_directory' => 'Napaka pri ustvarjanju mape :name. Prosimo, preverite vaša uporabniška dovoljenja.',
        'invalid_file_extension'   => "Neveljaven format datoteke :invalid'. Veljavni formati so :allowed.",
        'error_deleting'           => "Napaka pri brisanju predloge ':name'. Prosimo, preverite vaša uporabniška dovoljenja.",
        'delete_success'           => 'Izbrisanih predlog: :count.',
        'file_name_required'       => 'Obvezno polje: Ime datoteke',
        'safe_mode_enabled'        => 'Varnostni način je trenutno vključen.',
    ],
    'dashboard'    => [
        'active_theme' => [
            'widget_title_default' => 'Spletna stran',
            'online'               => 'Aktivna',
            'maintenance'          => 'V vzdrževanju',
            'manage_themes'        => 'Upravljaj teme',
            'customize_theme'      => 'Prilagodi temo',
        ],
    ],
    'theme'        => [
        'not_found_name'             => "Teme ':name' ni bilo mogoče najti.",
        'by_author'                  => 'od :name',
        'active'                     => [
            'not_set'   => 'Aktivna tema ni nastavljena.',
            'not_found' => 'Aktivne teme ni mogoče najti.',
        ],
        'edit'                       => [
            'not_set'   => 'Urejana tema ni nastavljena.',
            'not_found' => 'Urejane teme ni mogoče najti.',
            'not_match' => "Objekt, do katerega poskušate dostopati, ne pripada urejani temi. Prosimo, osvežite stran.",
        ],
        'settings_menu'              => 'Tema spletne strani',
        'settings_menu_description'  => 'Upravljanje s temo spletne strani in možnostmi prilagoditve.',
        'default_tab'                => 'Lastnosti',
        'name_label'                 => 'Ime',
        'name_create_placeholder'    => 'Novo ime teme',
        'author_label'               => 'Avtor',
        'author_placeholder'         => 'Oseba ali ime podjetja',
        'description_label'          => 'Opis',
        'description_placeholder'    => 'Opis teme',
        'homepage_label'             => 'Spletna stran',
        'homepage_placeholder'       => 'URL spletne strani',
        'code_label'                 => 'Koda',
        'code_placeholder'           => 'Unikatna koda teme, ki se uporablja za distribucijo.',
        'preview_image_label'        => 'Slika za predogled',
        'preview_image_placeholder'  => 'Lokacija slike za predogled teme.',
        'dir_name_label'             => 'Ime mape',
        'dir_name_create_label'      => 'Ciljna mapa teme',
        'theme_label'                => 'Tema',
        'theme_title'                => 'Teme',
        'activate_button'            => 'Aktiviraj',
        'active_button'              => 'Aktiviraj',
        'customize_theme'            => 'Prilagodi temo',
        'customize_button'           => 'Prilagodi',
        'duplicate_button'           => 'Podvoji',
        'duplicate_title'            => 'Podvoji temo',
        'duplicate_theme_success'    => 'Tema je podvojena.',
        'manage_button'              => 'Upravljanje',
        'manage_title'               => 'Upravljanje s temo',
        'edit_properties_title'      => 'Tema',
        'edit_properties_button'     => 'Uredi lastnosti',
        'save_properties'            => 'Shrani lastnosti',
        'import_button'              => 'Uvozi',
        'import_title'               => 'Uvozi temo',
        'import_theme_success'       => 'Tema je uvožena.',
        'import_uploaded_file'       => 'Datoteka z arhivom teme',
        'import_overwrite_label'     => 'Prepiši obstoječe datoteke',
        'import_overwrite_comment'   => 'Odkljukajte to polje, če želite uvoziti le nove datoteke.',
        'import_folders_label'       => 'Mape',
        'import_folders_comment'     => 'Prosimo, izberite mape teme, ki jih želite uvoziti.',
        'export_button'              => 'Izvozi',
        'export_title'               => 'Izvozi temo',
        'export_folders_label'       => 'Mape',
        'export_folders_comment'     => 'Prosimo, izberite mape teme, ki jih želite izvoziti.',
        'delete_button'              => 'Izbriši',
        'delete_confirm'             => 'Želite izbrisati to temo? Ukaza ni mogoče razveljaviti!',
        'delete_active_theme_failed' => 'Aktivne teme ni mogoče izbrisati. Najprej je potrebno zamenjati aktivno temo.',
        'delete_theme_success'       => 'Tema je izbrisana.',
        'create_title'               => 'Ustvari temo',
        'create_button'              => 'Ustvari',
        'create_new_blank_theme'     => 'Ustvari novo prazno temo',
        'create_theme_success'       => 'Tema je ustvarjena.',
        'create_theme_required_name' => 'Prosimo, navedite ime teme.',
        'new_directory_name_label'   => 'Mapa za temo',
        'new_directory_name_comment' => 'Podajte novo ime mape za podvojeno temo.',
        'dir_name_invalid'           => 'Ime lahko vsebuje samo številke, latinične črke in naslednje simbole: _-',
        'dir_name_taken'             => 'Želena mapa za temo že obstaja.',
        'find_more_themes'           => 'Poišči več tem',
        'saving'                     => 'Shranjevanje teme...',
        'return'                     => 'Nazaj na seznam tem',
    ],
    'maintenance'  => [
        'settings_menu'             => 'Način vzdrževanja',
        'settings_menu_description' => 'Nastavitve načina vzdrževanja in preklop na način vzdrževanja.',
        'is_enabled'                => 'Omogoči način vzdrževanja',
        'is_enabled_comment'        => 'Izberite stran, ki bo prikazana ob vključenem načinu vzdrževanja.',
        'hint'                      => 'V načinu vzdrževanja bo stran o vzdrževanju prikazana obiskovalcem, ki niso prijavljeni v administracijo.',
    ],
    'page'         => [
        'not_found_name'          => "Strani ':name' ni mogoče najti.",
        'not_found'               => [
            'label' => 'Stran ne obstaja',
            'help'  => 'Zahtevane strani ni bilo mogoče najti.',
        ],
        'custom_error'            => [
            'label' => 'Napaka strani',
            'help'  => 'Žal je prišlo do napake in strani ni mogoče prikazati.',
        ],
        'menu_label'              => 'Strani',
        'unsaved_label'           => 'Neshranjene strani',
        'no_list_records'         => 'Ni najdenih strani.',
        'new'                     => 'Nova stran',
        'invalid_url'             => 'Neveljavna oblika URL formata. URL se mora začeti z znakom za desno poševnico in lahko vsebuje številke, latinične črke in naslednje znake: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Želite izbrisati izbrane strani?',
        'delete_confirm_single'   => 'Želite izbrisati to stran?',
        'no_layout'               => '-- brez postavitve --',
        'cms_page'                => 'CMS stran',
        'title'                   => 'Naslov strani',
        'url'                     => 'URL strani',
        'file_name'               => 'Ime datoteke strani',
    ],
    'layout'       => [
        'not_found_name'          => "Postavitve ':name' ni mogoče najti.",
        'menu_label'              => 'Postavitve',
        'unsaved_label'           => 'Neshranjene postavitve',
        'no_list_records'         => 'Ni najdenih postavitev.',
        'new'                     => 'Nova postavitev',
        'delete_confirm_multiple' => 'Želite izbrisati izbrane postavitve?',
        'delete_confirm_single'   => 'Želite izbrisati to postavitev?',
    ],
    'partial'      => [
        'not_found_name'          => "Predloge ':name' ni mogoče najti.",
        'invalid_name'            => 'Neveljavno ime predloge :name.',
        'menu_label'              => 'Predloge',
        'unsaved_label'           => 'Neshranjene predloge',
        'no_list_records'         => 'Ni najdenih predlog.',
        'delete_confirm_multiple' => 'Želite izbrisati izbrane predloge?',
        'delete_confirm_single'   => 'Želite izbrisati to predlogo?',
        'new'                     => 'Nova predloga',
    ],
    'content'      => [
        'not_found_name'          => "Datoteke z vsebino ':name' ni mogoče najti.",
        'menu_label'              => 'Vsebine',
        'unsaved_label'           => 'Neshranjena vsebina',
        'no_list_records'         => 'Ni najdenih datotek z vsebino.',
        'delete_confirm_multiple' => 'Ali želite izbrisati izbrane datoteke ali mape z vsebino?',
        'delete_confirm_single'   => 'Želite izbrisati to datoteko z vsebino?',
        'new'                     => 'Nova datoteka z vsebino',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Neveljavno ime AJAX akcije: :name',
        'not_found'    => "Ni mogoče najti AJAX akcije ':name'.",
    ],
    'cms'          => [
        'menu_label' => 'CMS'
    ],
    'sidebar'      => [
        'add'    => 'Dodaj',
        'search' => 'Iskanje...',
    ],
    'editor'       => [
        'settings'         => 'Nastavitve',
        'title'            => 'Naslov',
        'new_title'        => 'Nov naslov strani',
        'url'              => 'URL',
        'filename'         => 'Ime datoteke',
        'layout'           => 'Postavitev',
        'description'      => 'Opis',
        'preview'          => 'Predogled',
        'meta'             => 'Meta podatki',
        'meta_title'       => 'Meta naslov',
        'meta_description' => 'Meta opis',
        'markup'           => 'Označevalni jezik',
        'code'             => 'Koda',
        'content'          => 'Vsebina',
        'hidden'           => 'Skrito',
        'hidden_comment'   => 'Skrite strani so dostopne le uporabnikom, ki so prijavljeni v administracijo.',
        'enter_fullscreen' => 'Celozaslonski način',
        'exit_fullscreen'  => 'Zapri celozaslonski način',
        'open_searchbox'   => 'Odpri iskalnik',
        'close_searchbox'  => 'Zapri iskalnik',
        'open_replacebox'  => 'Odpri "Najdi in zamenjaj"',
        'close_replacebox' => 'Zapri "Najdi in zamenjaj"',
        'commit'           => 'Shrani spremembe',
        'reset'            => 'Ponastavi',
        'commit_confirm'   => 'Ali ste prepričani, da želite shraniti spremembe datoteke v datotečni sistem? To bo prepisalo obstoječo datoteko v datotečnem sistemu.',
        'reset_confirm'    => 'Ali ste prepričani, da želite datoteko ponastaviti na kopijo, ki se nahaja v datotečnem sistemu? To bo datoteko v celoti nadomestilo z datoteko, ki se nahaja v datotečnem sistemu.',
        'committing'       => 'Shranjujem spremembe',
        'resetting'        => 'Ponastavljam',
        'commit_success'   => 'Sprememba :type je bila shranjena v datotečni sistem.',
        'reset_success'    => 'Sprememba :type je bila ponastavljena na različico iz datotečnega sistema.',
    ],
    'asset'        => [
        'menu_label'                   => 'Oblikovne datoteke',
        'unsaved_label'                => 'Neshranjene datoteke',
        'drop_down_add_title'          => 'Dodaj...',
        'drop_down_operation_title'    => 'Dejanje...',
        'upload_files'                 => 'Naloži datoteke',
        'create_file'                  => 'Ustvari datoteko',
        'create_directory'             => 'Ustvari mapo',
        'directory_popup_title'        => 'Nova mapa',
        'directory_name'               => 'Ime mape',
        'rename'                       => 'Preimenuj',
        'delete'                       => 'Izbriši',
        'move'                         => 'Premakni',
        'select'                       => 'Izberi',
        'new'                          => 'Nova datoteka',
        'rename_popup_title'           => 'Preimenuj',
        'rename_new_name'              => 'Novo ime',
        'invalid_path'                 => 'Lokacija lahko vsebuje le številke, latinične črke, presledke in naslednje znake: ._-/',
        'error_deleting_file'          => 'Napaka pri brisanju datoteke :name.',
        'error_deleting_dir_not_empty' => 'Napaka pri brisanju mape :name. Mapa ni prazna.',
        'error_deleting_dir'           => 'Napaka pri brisanju mape :name.',
        'invalid_name'                 => 'Ime lahko vsebuje le številke, latinične črke, presledke in naslednje znake: ._-',
        'original_not_found'           => 'Originalne datoteke oziroma mape ni mogoče najti.',
        'already_exists'               => 'Datoteka oziroma mapa s tem imenom že obstaja.',
        'error_renaming'               => 'Napaka pri preimenovanju datoteke oziroma mape.',
        'name_cant_be_empty'           => 'Ime ne more biti prazno.',
        'too_large'                    => 'Naložena datoteka je prevelika. Največja dovoljena velikost datoteke je :max_size.',
        'type_not_allowed'             => 'Dovoljeni so le formati datotek: :alowed_types',
        'file_not_valid'               => 'Neveljavna datoteka',
        'error_uploading_file'         => "Napaka pri nalaganju datoteke ':name': :error",
        'move_please_select'           => 'izberite',
        'move_destination'             => 'Ciljna mapa',
        'move_popup_title'             => 'Premakni oblikovne datoteke',
        'move_button'                  => 'Premakni',
        'selected_files_not_found'     => 'Izbranih datotek ni mogoče najti.',
        'select_destination_dir'       => 'Prosimo, izberite ciljno mapo.',
        'destination_not_found'        => 'Ciljne mape ni mogoče najti.',
        'error_moving_file'            => 'Napaka pri premikanju datoteke :file.',
        'error_moving_directory'       => 'Napaka pri premikanju mape :dir.',
        'error_deleting_directory'     => 'Napaka pri brisanju originalne mape :dir.',
        'no_list_records'              => 'Ni najdenih datotek.',
        'delete_confirm'               => 'Želite izbrisati izbrane datoteke ali mape?',
        'path'                         => 'Lokacija',
    ],
    'component'    => [
        'menu_label'                 => 'Komponente',
        'unnamed'                    => 'Neimenovano',
        'no_description'             => 'Opis ni podan',
        'alias'                      => 'Vzdevek',
        'alias_description'          => 'Unikatno ime komponente, ki se uporablja na strani ali v kodi postavitve.',
        'validation_message'         => 'Vzdevki komponent so obvezni in lahko vsebujejo le latinične znake, številke in podčrtaje. Vzdevki naj se začnejo z latiničnim znakom.',
        'invalid_request'            => 'Predloge ni bilo mogoče shraniti zaradi neveljavnih podatkov komponente.',
        'no_records'                 => 'Ni najdenih komponent.',
        'not_found'                  => "Komponente :name ni mogoče najti.",
        'method_not_found'           => "Komponenta ':name' ne vsebuje metode ':method'.",
        'soft_component'             => 'Mehka komponenta',
        'soft_component_description' => 'Ta komponenta manjka, vendar ni obvezna.',
    ],
    'template'     => [
        'invalid_type'    => 'Neznan format predloge.',
        'not_found'       => 'Predloge ni mogoče najti.',
        'saved'           => 'Predloga je shranjena.',
        'no_list_records' => 'Ni najdenih zapisov.',
        'delete_confirm'  => 'Želite izbrisati izbrane predloge?',
        'order_by'        => 'Razvrsti po',
    ],
    'permissions'  => [
        'name'                 => 'CMS',
        'manage_content'       => 'Upravljanje datotek z vsebino spletne strani',
        'manage_assets'        => 'Upravljanje z oblikovnimi datotekami - slike, JavaScript, CSS datoteke',
        'manage_pages'         => 'Ustvarjanje, spreminjanje ali brisanje strani',
        'manage_layouts'       => 'Ustvarjanje, spreminjanje ali brisanje CMS postavitev',
        'manage_partials'      => 'Ustvarjanje, spreminjanje ali brisanje CMS predlog',
        'manage_themes'        => 'Aktiviranje, de-aktiviranje ali konfiguriranje CMS tem',
        'manage_theme_options' => 'Konfiguriranje možnosti prilagajanja za aktivno temo',
    ],
    'theme_log'    => [
        'hint'             => 'V tem dnevniku so prikazane vse spremembe teme, ki so jih naredili administratorji v administraciji.',
        'menu_label'       => 'Dnevnik sprememb teme',
        'menu_description' => 'Pokaži spremembe aktivne teme.',
        'empty_link'       => 'Sprazni dnevnik sprememb teme',
        'empty_loading'    => 'Praznjenje dnevnika sprememb...',
        'empty_success'    => 'Dnevnik sprememb je izpraznjen.',
        'return_link'      => 'Vrni se na dnevnik sprememb teme',
        'id'               => 'ID',
        'id_label'         => 'ID dnevnika',
        'created_at'       => 'Čas in datum',
        'user'             => 'Uporabnik',
        'type'             => 'Tip',
        'type_create'      => 'Ustvari',
        'type_update'      => 'Posodobi',
        'type_delete'      => 'Izbriši',
        'theme_name'       => 'Tema',
        'theme_code'       => 'Koda teme',
        'old_template'     => 'Predloga (stara)',
        'new_template'     => 'Predloga (nova)',
        'template'         => 'Predloga',
        'diff'             => 'Spremembe',
        'old_value'        => 'Stara vrednost',
        'new_value'        => 'Nova vrednost',
        'preview_title'    => 'Spremembe predloge',
        'template_updated' => 'Predloga je posodobljena.',
        'template_created' => 'Predloga je ustvarjena.',
        'template_deleted' => 'Predloga je izbrisana.',
    ],
];
