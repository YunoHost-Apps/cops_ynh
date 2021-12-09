<?php
    if (!isset($config))
        $config = array();

    /*
     ***************************************************
     * Please read config_default.php for all possible
     * configuration items
     ***************************************************
     */

    /*
     * The directory containing calibre's metadata.db file, with sub-directories
     * containing all the formats.
     * BEWARE : it has to end with a /
     */
    $config['calibre_directory'] = '__CALIBRE_DIR__/';


    /*
     * Catalog's title
     */
    $config['cops_title_default'] = "COPS";
    
    /*
     * use URL rewriting for downloading of ebook in HTML catalog
     * See README for more information
     *  1 : enable
     *  0 : disable
     */
    $config['cops_use_url_rewriting'] = "1";

        /*
     * Set language code to force a language (see lang/ directory for available languages).
     * When empty it will auto detect the language.
     */
    $config['cops_language'] = '__LANGUAGE__';

        /*
     * Default timezone
     * Check following link for other timezones :
     * http://www.php.net/manual/en/timezones.php
     */
    $config['default_timezone'] = '__TIMEZONE__';
