# AGENTS.md

## Project overview
This repository builds the WordPress website for AnbeShivam (anbeshivam.in), a service that helps people handle old, damaged, unused, or unwanted Hindu religious items with practical clarity and respect.

Primary goal: WhatsApp inquiries  
Secondary goal: establish trust, seriousness, authority, and leadership in this niche

Business positioning:
- Based in Bangalore
- Approved items may be sent from anywhere in India or the world
- No public founder identity
- No public phone number display
- No service charge for review/handling
- Packing and shipping are borne by the sender

## Core build objective
Build the first production-ready version of this website as a real, launchable WordPress project.

This is not a rough prototype.
This is not a generic brochure site.
This is not an ecommerce build.
This is not a page-builder build.

The website must be:
- professional
- Gutenberg-editable
- mobile-friendly
- easy to maintain
- SEO-aware
- credible
- restrained in styling
- simple to extend later

---

## Non-negotiable rules
- Build for WordPress using Gutenberg-first architecture.
- Homepage content must remain editable in the default WordPress block editor.
- Every major homepage section must be implemented as normal Gutenberg blocks or block groups inside the page editor.
- A non-technical user must be able to edit text, replace images, remove sections, reorder sections, and add new blocks later.
- Do not trap editable homepage content inside hardcoded PHP templates.
- Do not hardcode editable marketing copy into PHP templates unless it is truly global site chrome.
- Do not hardcode the hero banner image into PHP or CSS.
- The hero media area must be shortcode-replaceable for future Smart Slider use.
- Keep important text as live text, not text inside images.
- Do not publicly display the WhatsApp number anywhere in visible page text.
- Do not use a WhatsApp plugin.
- Avoid plugin bloat.
- Avoid page builders such as Elementor.
- If OceanWP causes friction with Gutenberg or layout control, prefer a lighter block-friendly approach instead of forcing OceanWP.
- If visual ambition conflicts with editability, choose editability.
- If desktop styling harms mobile UX, simplify on mobile.

---

## Mandatory implementation workflow
Follow this order:

1. Inspect the repository and determine whether OceanWP is worth keeping or whether a lighter Gutenberg-friendly approach is better.
2. Document that decision briefly in the repo documentation.
3. Build the theme structure with Gutenberg compatibility as the priority.
4. Build the homepage so the content remains editable as page blocks.
5. Implement the hero as text plus shortcode-ready media area.
6. Implement direct WhatsApp CTA behavior without public number exposure.
7. Implement the floating WhatsApp button without a plugin.
8. Implement the form-to-WhatsApp flow without exposing the number.
9. Add responsive styling for desktop, tablet, and mobile.
10. Add legal/utility pages and 404 page.
11. Add concise setup and editing documentation.

Do not skip ahead into hardcoded design shortcuts that reduce editability.

---

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

Do not overbuild Phase 2 now.

---

## Target audience
The website speaks to:
- Hindus in Bangalore, elsewhere in India, and abroad
- families unsure how to respectfully handle old or damaged religious items
- people relocating, downsizing, cleaning, renovating, or managing inherited devotional objects
- users who want clarity, respect, and a practical process
- users who may be emotionally attached to these items and do not want them discarded carelessly

Tone toward users:
- respectful
- calm
- serious
- clear
- not theatrical
- not overly sentimental
- not preachy

---

## Conversion strategy
Primary conversion path:
1. User lands on homepage
2. Understands the service quickly
3. Sees accepted and not accepted items
4. Understands the process
5. Builds trust through clarity and testimonials
6. Clicks WhatsApp CTA or completes the form and continues to WhatsApp

Primary CTA:
- Start WhatsApp Review

Secondary CTA variants may include:
- Share Photos for Review
- Continue to WhatsApp
- Send Item Photos

Do not create multiple competing CTA concepts.

---

## Visual direction
- Traditional temple-inspired
- Content-rich but controlled
- Leadership implied through hierarchy, spacing, seriousness, and clarity
- Medium decorative intensity only
- Deep maroon, sandalwood, restrained gold highlights
- Subtle gold dividers with lotus / temple motif influence
- Mixed imagery approach with placeholders now, replaceable later
- Quiet authority rather than flashy ornamentation

Do not create:
- garish gold-heavy layouts
- cluttered decorative borders everywhere
- wedding-card aesthetics
- overly ornate religious clipart overload
- overly dark sections with weak contrast
- visually crowded multi-column sections that collapse badly on mobile

---

## Typography
- Use a devotional / traditional-feeling serif for headings.
- Use a clean, readable sans-serif for body text, forms, buttons, and navigation.
- Prioritize readability over flourish.
- Avoid decorative calligraphic fonts for body copy.
- Avoid tiny serif body text.
- Avoid excessive uppercase styling.

---

## Color and styling guidance
Preferred palette direction:
- Deep maroon as primary authority color
- Sandalwood / warm beige as supporting base
- Restrained gold as accent only
- Light neutral backgrounds for readability
- Dark text with strong contrast

Styling behavior:
- Buttons should be soft rounded, not sharp and not pill-cartoonish.
- Cards should be clean, dignified, lightly separated, and easy to scan.
- Dividers can use subtle gold lines and small lotus/temple-inspired accents.
- Gold should guide attention, not dominate the page.
- Decorative elements should remain secondary to content.

---

## Header and hero
Header rules:
- Header must be non-sticky.
- Header should be simple:
  - Left: wordmark “AnbeShivam”
  - Right: compact nav + primary CTA
- Keep navigation lean and useful.

Recommended nav anchors:
- What We Accept
- Process
- Trust
- FAQ
- Contact

Hero rules:
- Hero must be text left + shortcode/media right on desktop.
- Tablet/mobile must collapse cleanly.
- Mobile should simplify rather than force desktop styling.
- No hardcoded hero image.
- No important text inside image.
- The hero media area must be replaceable later with a Shortcode block for Smart Slider.
- Do not require rebuilding the homepage to replace the hero media.

Hero text:
Eyebrow: Respectful guidance for old religious items

H1: Old sacred items deserve a thoughtful next step

Supporting text:
AnbeShivam helps families review old, damaged, or unused religious items and handle them with practical clarity and respect. Based in Bangalore, approved items may be sent after WhatsApp review from anywhere in India or the world.

Primary CTA:
Start WhatsApp Review

Trust note:
No service charge. Packing and shipping are borne by the sender. Please share clear photos first.

Hero behavior by device:
- Desktop: 2-column layout, text left, media right
- Tablet: collapse as needed for balance and readability
- Mobile: stacked, shorter visible text blocks, simpler spacing, reduced ornamentation

---

## Responsive design rules
The site must be intentionally responsive across desktop, tablet, and mobile.

Do not assume desktop can simply shrink.

For each major section, account for:
- layout stacking
- spacing reduction
- text wrap/readability
- button size and tap targets
- image crop behavior
- performance impact
- whether decorative elements should be reduced or hidden

Mobile simplification rule:
If decorative or multi-column desktop elements reduce clarity or usability on mobile, simplify, stack, reduce, or hide them on mobile.
Do not force desktop ornamentation onto mobile layouts.

Keep visible on mobile:
- wordmark
- key CTA
- accepted/not accepted content
- process steps
- FAQ
- form-to-WhatsApp section
- floating WhatsApp button

Reduce or hide on mobile if needed:
- non-essential decorative motifs
- extra side images
- wide multi-column ornamental sections
- oversized divider treatments
- anything that crowds the hero or form

---

## Gutenberg editability rule
Every major homepage section must be implemented as normal Gutenberg blocks or block groups inside the page editor so a non-technical user can:
- edit text
- replace images
- remove sections
- reorder sections
- add new blocks later

Do not trap editable homepage content inside hardcoded PHP templates.

Editable content should stay in the page editor wherever possible.

---

## Reusable patterns
Where appropriate, create reusable block patterns for:
- section intro blocks
- accepted / not accepted item sections
- process steps
- trust cards
- testimonials
- FAQ structure
- CTA strip
- contact/form section
- decorative divider block

Use patterns when they improve consistency and later editing.
Do not create unnecessary abstraction that makes simple edits harder.

---

## Separation of control
Clearly separate and document:
- page-editable content
- global theme styling
- CSS-controlled presentation
- developer-only logic

Examples:

Page-editable content:
- homepage copy
- lists of accepted/not accepted items
- testimonials
- FAQs
- section images
- hero text
- shortcode block for hero media

Global/theme-controlled:
- typography system
- colors
- button styling
- spacing scale
- header/footer style
- card appearance
- divider style
- layout width rules

CSS-controlled:
- responsive adjustments
- mobile hide/show decisions
- spacing refinements
- decorative motif placement
- form styling polish

Developer-only logic:
- child theme creation
- theme structure decisions
- WhatsApp prefill logic
- floating WhatsApp button implementation
- any custom scripts needed

Document this clearly in README or implementation notes.

---

## WhatsApp behavior
Use this number internally only for all WhatsApp functionality:
916364659339

Implement without a plugin:
- Direct WhatsApp CTA buttons
- Floating WhatsApp button
- Form-to-WhatsApp redirect with prefilled message

WhatsApp privacy rule:
The internal WhatsApp number must never appear as visible text in:
- header
- footer
- contact section
- button labels
- page copy
- floating button label

Use it only in internal links and scripts.

Do not use:
- visible public phone number text
- WhatsApp chat plugins
- external SaaS WhatsApp widgets

CTA labels may be:
- Start WhatsApp Review
- Share Photos for Review
- Continue to WhatsApp
- Send Item Photos

---

## Form behavior
Form fields:
- Name
- Phone / WhatsApp number
- City
- State
- Type of items
- Brief description / message

The form should not email or store submissions unless explicitly added as a later enhancement.
Default behavior: build a prefilled WhatsApp message and open WhatsApp.

Contact section explanatory text should make clear:
WhatsApp is the only contact route. Complete the details below and continue to WhatsApp with your message. Please attach clear item photos there for review.

Do not use an unnecessarily heavy form plugin for this if a lightweight native/custom implementation is sufficient.

Document any tradeoff:
- no stored submissions
- no email backup
- if user abandons before sending in WhatsApp, the inquiry is lost

---

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

This order should not be randomly rearranged without a good UX reason.

---

## Homepage section guidance
Use this structure:

1. Header  
Simple, clear, compact, wordmark + nav + CTA

2. Hero  
Text left, shortcode-ready media right

3. Intro / service explanation  
Explain the problem and service clearly

4. What we accept  
Clear, scan-friendly cards or list blocks

5. What we do not accept  
Equally clear exclusions to prevent wasteful inquiries

6. How it works  
Simple, linear, trust-building process steps

7. What happens to accepted items  
Explain respectful reuse / donation / sale where feasible / appropriate final handling

8. From review to renewed purpose  
Three-image storytelling strip with explanatory copy

9. Why people trust this service  
Credibility cues such as since 2021, clarity-first process, Bangalore base, seriousness of handling

10. Testimonials  
Real testimonials presented cleanly, not theatrically

11. FAQ  
Answer practical objections and reduce repetitive inquiries

12. Contact / form-to-WhatsApp  
Clear explanation + direct CTA + form route

13. Footer  
Minimal, useful, clean

---

## Content source and copy rules
Use the user-provided business content as the base source and improve wording for clarity, SEO, trust, and conversion without becoming fluffy or fake.

Copy must be:
- credible
- clear
- respectful
- spiritual but not exaggerated
- authoritative but not cold
- practical
- restrained

Do not:
- invent credentials
- invent affiliations
- invent founder story
- invent impact statistics
- overclaim that all accepted items are donated
- overstate global service capabilities
- use empty marketing adjectives
- use generic filler language

Be explicit that:
- final handling depends on material, condition, and usability
- accepted items may be reused, donated, sold where feasible, or handled appropriately
- not every accepted item will be donated
- dispatch details are shared only after approval

---

## Approved source content to use and refine
About the service:
Many families wonder how to dispose religious items respectfully when they become old, damaged, or unusable. Anbeshivam offers a practical and transparent process so these items can be reviewed and handled with dignity.
Since 2021, this Bangalore-based service has supported people with old idols disposal guidance and old religious items collection after WhatsApp approval.

What we accept:
- Idols of any size
- Old framed or unframed deity photos
- Selected puja items and devotional articles
- Damaged or unused religious items, subject to review

Important:
Please share clear photos on WhatsApp first. Dispatch details are shared only after review and approval.

What we do not accept:
- POP idols
- Plastic idols
- Old flowers
- Edible offerings
- Food items
- Perishable puja materials
- General waste mixed with puja items

How it works:
- Send clear photos of items on WhatsApp
- We review and confirm whether items are acceptable
- If approved, we share address and dispatch guidance
- Pack the items safely and respectfully
- Send by post/courier after approval
- Please do not send items without approval
- There is no service charge, but packing and shipping are borne by the sender

Handling logic:
We try to find another home for suitable items. This may include donation, reuse, or sale where feasible to help recover some costs and expenses. If that is not possible, we choose an appropriate respectful path such as agni arpan, jala arpan, or bhoomi arpan depending on the item and material.

What happens to accepted items:
Accepted items may be respectfully reused, donated, sold where feasible, or otherwise handled appropriately depending on their condition and material.
This service does not guarantee that every accepted item will be donated. The final path depends on the nature, condition, and usability of each item.

Trust section:
Why people trust this service
- Since 2021
- Clarity first
- Bangalore based, India-wide reach
- We understand these items can hold emotional and spiritual value. Our aim is to handle them with care, practical clarity, and respect.

Testimonials:
1. “I was unsure how to dispose old puja items respectfully. I had to relocate to Dubai. AnbeShivam services helped me by finding a way to respectfully pass on my religious items.” — Arjun Divedi
2. “The process was transparent and easy. I appreciated knowing in advance what is accepted and what is not.” — Meghana Mehta
3. “It was a huge relief for us to know that the idols and photos that we worshipped would not end up in landfill. Thank you AnbeShivam services.” — Kripa D

FAQ topics:
- Is there any fee for this service?
- Can I send items from outside Bangalore?
- Can I send items without contacting first?
- Do you accept POP idols?
- Do you accept plastic idols?
- Do you accept flowers or edible offerings?
- What should I do with damaged idols or old puja items?
- Where can I send old religious items from outside Bangalore?
- Will all accepted items be donated?

---

## Trust and credibility rules
This brand is anonymous and does not publicly display a founder, personal number, or address.
Therefore the site must compensate through:
- process clarity
- acceptance/exclusion clarity
- consistent tone
- since 2021 credibility cue
- testimonials
- calm serious presentation
- clean design
- strong FAQ handling
- clear dispatch-after-approval rule

Do not fabricate institutional trust signals.

---

## SEO requirements
SEO is high priority.

Build the homepage around real intent such as:
- old religious items disposal
- old idols disposal
- respectful disposal of puja items
- what to do with damaged idols
- disposal of old deity photos
- how to dispose religious items respectfully

On-page SEO rules:
- use live text, not image text
- use semantic heading hierarchy
- use descriptive internal section anchors where useful
- write descriptive alt text placeholders
- keep content natural
- avoid keyword stuffing

Prepare for future SEO expansion through Phase 2 blog/landing pages.
Possible later content areas:
- how to dispose damaged idols respectfully
- what to do with old deity photos
- can old puja items be thrown away
- POP idol disposal guidance
- handling framed god photos
- respectful disposal after relocation or moving house

If useful, include documentation comments or notes on schema recommendations.

---

## Accessibility requirements
- Maintain strong contrast
- Use readable font sizes
- Keep important text live and selectable
- Provide clear focus states
- Ensure keyboard-accessible navigation and FAQ interactions
- Use proper form labels
- Use tap-friendly button sizes
- Use descriptive alt text placeholders
- Avoid low-contrast gold text on light backgrounds
- Avoid tiny decorative text

---

## Performance requirements
Performance priority is medium, but obvious bloat must be avoided.

Do not introduce:
- unnecessary front-end libraries
- multiple overlapping plugins
- heavy decorative scripts
- animation-heavy assumptions for the hero
- bloated WhatsApp tools
- giant dependency chains for simple functionality

Keep implementation simple and robust.

---

## Theme decision logic
Start by assessing whether OceanWP is suitable without causing layout, sidebar, container, or Gutenberg conflicts.

Preferred route:
- If OceanWP can be used cleanly, create an OceanWP child theme and keep page content Gutenberg-based.
- If OceanWP introduces layout friction, extra wrappers, sidebar defaults, page title clutter, or block-editor mismatch, explicitly document that and switch to a lighter Gutenberg-friendly custom or starter approach.

Do not force OceanWP if it makes the build worse.

---

## Templates and structure
At minimum, create or plan for:
- child theme or lightweight custom theme files as needed
- stylesheet(s)
- functions.php if needed
- page template logic only where useful
- full-width content behavior with no unnecessary sidebar
- 404 template
- privacy/disclaimer page content or starter templates
- concise setup documentation

The homepage content itself should remain editable in the WordPress page editor, not trapped in the template.

---

## Hero replacement rule
The hero media area must be implemented so that it can be replaced later with a Shortcode block for Smart Slider without rebuilding the homepage structure.
Do not hardcode hero media into templates.

Document clearly how the user can replace the hero media area with a Smart Slider shortcode later.

---

## Documentation requirement
Include concise setup documentation covering:
- theme choice and why it was selected
- where homepage content is edited
- how to replace the hero with Smart Slider shortcode
- how WhatsApp links are configured internally
- what is globally styled
- what is mobile-specific
- what is controlled in blocks vs CSS vs developer logic
- any assumptions or tradeoffs
- any limitations of form-to-WhatsApp behavior

Documentation should be practical, not verbose theory.

---

## Expected deliverables
Produce:
- actual theme/build files
- concise README or implementation notes
- clear comments where the editor/user will need to replace content
- explicit documentation for:
  - where homepage content is edited
  - how the hero shortcode is replaced
  - how WhatsApp links are controlled internally
  - what is globally styled
  - what is mobile-specific

---

## Working style
- Make reasonable assumptions and document them.
- Favor simple, robust, editable implementation.
- If something is risky or suboptimal, explain it in docs and choose the safer path.
- Keep implementation notes concise and practical.
- Make decisions instead of asking unnecessary follow-ups.
- Prefer clarity, conversion, editability, and mobile usability over decorative complexity.

---

## What not to do
- Do not hardcode homepage marketing copy into PHP if it should be editable.
- Do not publicly display the WhatsApp number.
- Do not use a WhatsApp plugin.
- Do not use Elementor or another page builder.
- Do not bury important text inside images.
- Do not create a cluttered ornamental design.
- Do not make desktop layout the only real layout.
- Do not create sidebars unless absolutely necessary.
- Do not introduce unnecessary dependencies.
- Do not overclaim donation outcomes.
- Do not fake authority signals.
- Do not let decorative motifs weaken readability or mobile performance.
