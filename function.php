// WoodMart: Set Free Shipping goal per language (Polylang: en-GB, lt-LT, lv)

add_filter('option_xts-woodmart-options', function($opts) {
    if (!is_array($opts)) {
        return $opts;
    }

    if (function_exists('pll_current_language')) {
        $lang = pll_current_language('slug'); // returns en, lt, lv

        switch ($lang) {
            case 'en': // English (UK)
                $opts['shipping_progress_bar_amount'] = 180;
                break;

            case 'lt': // Lithuanian
            case 'lv': // Latvian (default)
                $opts['shipping_progress_bar_amount'] = 100;
                break;
        }
    }

    return $opts;
});
