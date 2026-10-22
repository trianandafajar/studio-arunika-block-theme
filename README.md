# Studio Arunika

A WordPress block theme for **Studio Arunika**, a fictional Indonesian architecture and interior design studio. The pattern content is written in Bahasa Indonesia.

Studio Arunika is a derivative of [Frost](https://github.com/wpengine/frost) by WP Engine. It keeps Frost's solid block-theme base and changes the visual identity, layout and content.

> *Arunika* means "morning light". Every studio name, project, address, figure and testimonial in this theme is sample content made up for the demo.

## What was customized

| Area | Changes compared to Frost |
| --- | --- |
| **Identity** | Theme name, description (Indonesian), author and version in `style.css`, with a credit line to Frost. |
| **Palette** (`theme.json`) | Earthy palette: Pasir `#f6f1e9`, Arang `#2b2a26`, Zaitun `#4e5a3c`, Zaitun Tua `#363f2a`, Terakota `#a9502e`, Batu Hangat `#cbbfac`, Pasir Tua `#ebe3d5`. New `accent` and `stone` slugs, three gradients, matching duotones. Buttons and links hover to terracotta. |
| **Typography** | Serif display stack (Iowan Old Style, Palatino, Book Antiqua, Georgia...) for headings and the site title. Outfit (bundled, OFL) for body text. New 96px size, letter-spacing tokens, square uppercase buttons, uppercase navigation. |
| **Layout** | Content width 680px and wide width 1280px, 32px gap, fluid type tuned for 480 to 1280px viewports. |
| **Style variations** | The seven Frost color variations are replaced by **Arunika Malam** (dark charcoal) and **Arunika Batu** (limestone and graphite). |
| **Patterns** (`patterns/arunika-*.php`, category *Studio Arunika*) | `arunika/hero-studio`, `arunika/about-intro`, `arunika/services` (Arsitektur, Interior, Renovasi), `arunika/project-grid`, `arunika/process-steps`, `arunika/testimonials` (clearly labelled as sample), `arunika/contact-cta`, `arunika/header`, `arunika/footer`. |
| **Templates and parts** | New `front-page.html` built from the Arunika patterns. `home.html` is now a "Jurnal Studio" posts grid. The header and footer parts use the new Arunika header and footer. The 404 page is in Indonesian. |
| **Fixes** | Fixed invalid `wp:query` attribute JSON in the `posts-grid` and `posts-list` patterns (inherited from upstream). |

The original Frost patterns are still included and available in the inserter.

To keep upgrades and merges with upstream simple, the text domain (`frost`) and PHP function prefixes (`frost_*`) were **not** renamed.

## Installation

1. Copy or clone this folder into `wp-content/themes/` (for example `wp-content/themes/studio-arunika`).
2. In WordPress (6.9 or later, PHP 7.2 or later), go to **Appearance > Themes** and activate **Studio Arunika**.
3. To show the studio landing page, go to **Settings > Reading** and choose a static front page. The `front-page.html` template is then used for it.
4. Optional: switch to the dark or stone look under **Appearance > Editor > Styles** (Arunika Malam or Arunika Batu).
5. Replace the sample images in `assets/images/` and the placeholder contact details (`halo@studioarunika.example`, *Jl. Contoh No. 12*) with real ones.

## Development notes

- The theme has no build step. Everything lives in `theme.json`, `styles/`, `templates/`, `parts/` and `patterns/`.
- New patterns use the `arunika/` slug prefix and the `arunika` pattern category, which is registered in `functions.php`.

## Credits / Attribution

- **Frost** by [WP Engine](https://wpengine.com/): <https://github.com/wpengine/frost>. Studio Arunika is a modified version of Frost and, like Frost, is licensed under the **GNU General Public License v3.0 (GPL-3.0)**. The full license text is in [`LICENSE`](LICENSE).
- **Outfit** font, (c) 2021 The Outfit Project Authors, licensed under the SIL Open Font License 1.1 (`assets/fonts/OFL.txt`). It is inherited from Frost.
- Sample images in `assets/images/` are inherited unchanged from the Frost repository.
- Heading fonts are system serif fonts already installed on the visitor's device. No additional font files are bundled.

## License

Studio Arunika, (C) 2026 trianandafajar.
Based on Frost, (C) 2022-2023 WP Engine.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version. See [`LICENSE`](LICENSE).
