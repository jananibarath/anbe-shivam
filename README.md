# AnbeShivam WordPress Build (Production-Ready v1)

## Theme decision (OceanWP vs lighter Gutenberg-first)
OceanWP was **not kept** for this build. Reason: this project prioritizes strict Gutenberg editability, predictable full-width section control, and minimal plugin/theme overhead. A lightweight custom Gutenberg-first theme provides cleaner block behavior and avoids common third-party theme wrapper/sidebar friction for this single-page lead-generation structure.

## What is implemented
- Custom lightweight WordPress theme at `wp-content/themes/anbeshivam`
- Gutenberg block pattern for complete homepage section structure (editable in page editor)
- Hero section with **shortcode-ready media area** (`[smartslider3 slider="1"]` placeholder)
- Internal WhatsApp CTA logic (number not shown in visible text)
- Floating WhatsApp button without plugin
- Form-to-WhatsApp flow (no storage, no email)
- Privacy Policy, Terms / Disclaimer, and Continue to WhatsApp starter pages
- Custom 404 template with Home + WhatsApp actions

## Setup
1. Copy the theme folder into your WordPress site under `wp-content/themes/anbeshivam`.
2. Activate **AnbeShivam** from Appearance → Themes.
3. On first activation, starter pages are auto-created and Home is set as front page.
4. Go to Appearance → Menus and create a Primary menu with anchor links:
   - `#what-we-accept`
   - `#process`
   - `#trust`
   - `#faq`
   - `#contact`

## Where to edit homepage content
- WP Admin → Pages → **Home**
- Every major section is regular Gutenberg block content (group/heading/list/columns/details/html).
- You can edit copy, reorder sections, remove/add blocks, and replace images directly.

## Hero media replacement (Smart Slider)
- In the Home page hero right column, edit the **Shortcode block**.
- Replace `[smartslider3 slider="1"]` with your final Smart Slider shortcode.
- No template or code rebuild is needed.

## WhatsApp configuration (internal only)
- Internal number is defined once in `functions.php` as `AS_WHATSAPP_NUMBER`.
- Used by:
  - header CTA
  - floating WhatsApp button
  - form-to-WhatsApp JavaScript
- The number is intentionally not rendered as visible page text.

## Separation of control
- **Page-editable blocks**: hero text, accept/exclude lists, process, trust, testimonials, FAQ, contact copy, images.
- **Global theme styling**: typography, colors, card style, buttons, spacing, header/footer.
- **CSS responsive/mobile behavior**: section spacing reduction, column stacking, form grid collapse, simplified nav.
- **Developer-only logic**: page auto-creation on activation, floating button rendering, WhatsApp URL generation, JS prefill behavior.

## Form-to-WhatsApp tradeoffs
- No server-side form storage.
- No email backup.
- If a user closes WhatsApp before sending, inquiry is not retained.

## Utility pages included
- Home
- Privacy Policy
- Terms / Disclaimer
- Continue to WhatsApp
- 404 template
