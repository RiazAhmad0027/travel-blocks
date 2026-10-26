# Travel Blocks

Custom Gutenberg blocks for WordPress, built with **Secure Custom Fields** (free ACF blocks).

## Blocks
- **Offer Card**: photo, title, price, nights, a features list (repeater) and a button.
- **Testimonial Card**: quote, name, role, photo and an accessible star rating.

## How it works
- Each block has its own folder with `block.json`, a PHP template (`render.php`) and `style.css`.
- CSS loads only on pages that use the block.
- All output is escaped (`esc_html`, `esc_url`, `esc_attr`).
- The blocks live in a plugin, so they keep working if the theme changes.

## Requirements
- WordPress 6.5+
- Secure Custom Fields (or ACF PRO)

## Install
1. Upload the `travel-blocks` folder to `wp-content/plugins/`.
2. Activate **Travel Blocks**.
3. Create the field groups (Location: Block is equal to Offer Card / Testimonial Card).
