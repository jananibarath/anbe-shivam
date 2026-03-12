# AGENTS.md

## Project overview
This repository builds the WordPress website for AnbeShivam (anbeshivam.in), a service that helps people handle old, damaged, unused, or unwanted Hindu religious items with practical clarity and respect.

Primary goal: WhatsApp inquiries  
Secondary goal: establish trust, seriousness, and authority

## Non-negotiable rules
- Build for WordPress using Gutenberg-first architecture.
- Homepage content must remain editable in the default WordPress block editor.
- Do not hardcode editable marketing copy into PHP templates unless it is truly global site chrome.
- Do not hardcode the hero banner image into PHP or CSS.
- The hero media area must be shortcode-replaceable for future Smart Slider use.
- Keep important text as live text, not text inside images.
- Do not publicly display the WhatsApp number anywhere in visible page text.
- Do not use a WhatsApp plugin.
- Avoid plugin bloat.
- If OceanWP causes friction with Gutenberg or layout control, prefer a lighter block-friendly approach instead of forcing OceanWP.

## Website type
Single-page lead-generation / authority site with supporting legal and utility pages.

Essential pages now:
- Home
- Privacy Policy
- Terms / Disclaimer
- 404
- Thank-you / WhatsApp continuation page if useful

Phase 2:
- Blog
- Gallery
- SEO landing pages

## Visual direction
- Traditional temple-inspired
- Content-rich but controlled
- Leadership implied through hierarchy and seriousness
- Medium decorative intensity only
- Deep maroon, sandalwood, restrained gold highlights
- Subtle gold dividers with lotus / temple motif influence
- Mixed imagery approach with placeholders now, replaceable later

## Typography
- Traditional/devotional-feeling serif for headings
- Clean readable sans-serif for body, forms, buttons, and nav
- Readability over flourish

## Header and hero
- Header must be non-sticky
- Header: wordmark on left, compact nav + CTA on right
- Hero must be text left + shortcode/media right on desktop
- Tablet/mobile must collapse cleanly
- Mobile should simplify rather than force desktop styling

Hero text:
Eyebrow: Respectful guidance for old religious items

H1: Old sacred items deserve a thoughtful next step

Supporting text:
AnbeShivam helps families review old, damaged, or unused religious items and handle them with practical clarity and respect. Based in Bangalore, approved items may be sent after WhatsApp review from anywhere in India or the world.

Primary CTA:
Start WhatsApp Review

Trust note:
No service charge. Packing and shipping are borne by the sender. Please share clear photos first.

## WhatsApp behavior
Use this number internally only for all WhatsApp functionality:
916364659339

Implement without a plugin:
- Direct WhatsApp CTA buttons
- Floating WhatsApp button
- Form-to-WhatsApp redirect with prefilled message

The number must not appear visibly in:
- header
- footer
- contact section
- button labels
- page copy

## Form fields
- Name
- Phone / WhatsApp number
- City
- State
- Type of items
- Brief description / message

The form should not email or store submissions unless explicitly added as a later enhancement.
Default behavior: build a prefilled WhatsApp message and open WhatsApp.

## Homepage section order
1. Header
2. Hero
3. Intro / service explanation
4. What we accept
5. What we do not accept
6. How it works
7. What happens to accepted items
8. From review to renewed purpose
9. Why people trust this service
10. Testimonials
11. FAQ
12. Contact / form-to-WhatsApp
13. Footer

## Content and UX rules
- Copy must be credible, clear, spiritual but not exaggerated
- Do not invent credentials, affiliations, or founder story
- Do not overclaim that all accepted items are donated
- Be explicit that final handling depends on material, condition, and usability
- If desktop decoration harms mobile UX, reduce or hide it on mobile
- Prioritize clarity, editability, and trust over visual drama

## SEO and accessibility
- Use live text and semantic headings
- Build around real search intent for old idols, deity photos, puja items, and respectful disposal
- Do not keyword-stuff
- Use descriptive alt text placeholders
- Maintain strong contrast, clear focus states, keyboard usability, and tap-friendly controls

## Working style
- Make reasonable assumptions and document them
- Favor simple, robust, editable implementation
- If something is risky or suboptimal, explain it in docs and choose the safer path
- Keep implementation notes concise and practical
