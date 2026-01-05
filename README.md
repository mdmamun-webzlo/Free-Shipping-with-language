# WoodMart Free Shipping Goal Per Language (Polylang)

This snippet customizes the **WoodMart theme’s free shipping progress bar goal** depending on the current language when using **Polylang**.

---

## What It Does

* Hooks into `xts-woodmart-options` (WoodMart theme options)
* Detects the current language via Polylang (`pll_current_language()`)
* Sets a **different free shipping goal** based on language:

  * English (`en`) → 180
  * Lithuanian (`lt`) → 100
  * Latvian (`lv`) → 100

This allows **per-language pricing for free shipping** without duplicating templates or writing multiple PHP overrides.

---

## Requirements

* WordPress
* WoodMart Theme
* Polylang plugin

---

## How to Use

1. Add the snippet to your **child theme’s `functions.php`** or a **custom plugin**.
2. Adjust the shipping amounts as needed per language.
3. Clear caches if you are using a caching plugin.

```php
// Example: change English free shipping goal to 200
case 'en':
    $opts['shipping_progress_bar_amount'] = 200;
    break;
```

---

## Notes

* This snippet **only affects the progress bar** in the WoodMart theme.
* Works only when Polylang is active.
* Supports multiple languages; you can add additional `case` statements for more languages.

---

## License

MIT — free to use, modify, and distribute.

---

**One-line summary:**
Dynamically sets WoodMart’s free shipping progress bar goal based on the current Polylang language.
