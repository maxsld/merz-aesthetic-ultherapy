=== Ultherapy PRIME – Landing Page ===
Contributors: merzaestheticsfrance
Requires at least: 5.8
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Standalone page template for the Ultherapy PRIME France landing page.

== Description ==

Adds a custom WordPress page template "Ultherapy PRIME" to the site.
The template is a fully self-contained landing page that does not inherit
the active theme's header, footer, or styles.

All assets (CSS, JavaScript, fonts, images) are bundled locally inside
the plugin — no external CDN dependencies.

== Installation ==

1. Upload the `ultherapy-prime` folder to `/wp-content/plugins/`.
2. Activate the plugin via WordPress Admin → Plugins → Installed Plugins.
3. Create a new page (Pages → Add New).
4. In the right sidebar, set Template to "Ultherapy PRIME".
5. Publish the page.

== Pending configuration after installation ==

* **Vimeo video ID** — open `templates/page-ultherapy.php` and replace
  the placeholder `XXXXXXXXX` with the real Vimeo video ID for the
  treatment demonstration video (France folder).

* **DocLocator URL** — in the same file, replace `href="#"` on the
  practitioner finder CTA with the actual Merz Aesthetics France
  DocLocator URL.

* **Footer links** — footer navigation links currently use `href="#"`.
  Replace with the correct internal URLs from the France site.

== Changelog ==

= 1.0.0 =
* Initial release.
