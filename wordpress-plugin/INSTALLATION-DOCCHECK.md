# Ultherapy PRIME – Installation Guide

**Local agency contact:** Merz Aesthetics France  
**To be sent to:** merzaesthetics@doccheck.com

---

## What's in this package

A self-contained **WordPress plugin** (`ultherapy-prime/`) that adds the Ultherapy PRIME landing page to the Merz Aesthetics France website.

The plugin:
- **Does not interfere** with the existing Merzaesthetics theme
- Activates **only** on the page it is assigned to
- Contains all assets (CSS, JS, images, videos) locally

---

## Plugin structure

```
ultherapy-prime/
├── ultherapy-prime.php          ← main plugin file
├── templates/
│   └── page-ultherapy.php       ← full HTML page template
└── assets/
    ├── ultherapy.css            ← isolated landing page styles
    ├── ultherapy.js             ← scripts (GSAP animations, interactions)
    └── img/                     ← all images and videos
```

---

## Installation (3 steps)

### Step 1 – Upload the plugin

Drop the `ultherapy-prime/` folder into:
```
/wp-content/plugins/ultherapy-prime/
```
Then activate the plugin via **WordPress Admin → Plugins → Installed Plugins**.

### Step 2 – Create the page

1. Go to **Pages → Add New Page**
2. Title: `Ultherapy PRIME`
3. Slug: `ultherapy-prime` (or follow the FR site URL convention)
4. In the right-hand sidebar → **Template** → select **"Ultherapy PRIME"**
5. Publish the page

### Step 3 – Verify

Open the page URL. The landing page should display full-screen, with no Merzaesthetics theme navigation or footer.

---

## Technical notes

| Item | Detail |
|---|---|
| External dependencies | Google Fonts, Font Awesome 7 (CDN), GSAP 3.12 (CDN) |
| No page builder | The template is a standalone HTML/PHP file |
| Images & videos | Served from `/wp-content/plugins/ultherapy-prime/assets/img/` |
| Minimum PHP | 7.4+ |
| Minimum WordPress | 5.8+ |

---

## Legal disclaimer

The page includes a mandatory medical device regulatory notice:
> *"Ultherapy® PRIME est un dispositif médical de classe IIa..."*

Please ensure this copy is validated by Merz France before going live.

---

*Package prepared on 2026-05-08 – Merz Aesthetics France*
