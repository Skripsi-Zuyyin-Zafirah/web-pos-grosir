# Design System Strategy: Architectural Precision

## 1. Overview & Creative North Star
**The Creative North Star: "The Institutional Architect"**

In the world of wholesale management (Toko Jasa Grosir), complexity is the baseline. Our goal is not to simplify the data until it’s hollow, but to organize it with the authority and precision of a modern architectural blueprint. We are moving away from the "app-like" fluff of standard Material Design and toward a **High-End Editorial Dashboard**. 

This design system rejects the "boxed-in" look of legacy enterprise software. By utilizing intentional asymmetry, deep tonal layering, and a sophisticated typographic scale, we create a sense of "quiet power." The interface should feel like a high-end Swiss watch: incredibly dense with information, yet perfectly legible and premium in every interaction.

---

## 2. Colors & Tonal Soul
Our palette transitions from the deep, authoritative `primary` (#005bbf) to the more intellectual `secondary` indigo (#4355b9). This isn't just about color; it's about hierarchy.

### The "No-Line" Rule
**Explicit Instruction:** Do not use 1px solid borders to define sections or containers. Lines create visual noise that exhausts the user’s eye in high-density environments. Instead, define boundaries through:
*   **Background Shifts:** Use `surface-container-low` for secondary content areas and `surface-container-highest` for active workspaces.
*   **Tonal Nesting:** A card (`surface-container-lowest`) sitting on a dashboard background (`surface`) creates a natural, soft boundary without a single stroke of a pen.

### Surface Hierarchy
Treat the UI as a series of stacked, physical layers:
1.  **Base:** `surface` (#f7f9ff) – The canvas.
2.  **Sectioning:** `surface-container-low` (#f1f4fa) – For grouping large modules.
3.  **Actionable Elements:** `surface-container-lowest` (#ffffff) – For cards and interactive data points.
4.  **Overlays:** Semi-transparent `surface-bright` with a 12px Backdrop Blur (Glassmorphism) for "floating" filters or navigation drawers.

### Signature Textures
To escape the "flat" look, apply a subtle linear gradient to Primary CTAs:
*   **Direction:** 135 degrees.
*   **Colors:** `primary` (#005bbf) to `primary_container` (#1a73e8).
This provides a subtle "soul" and tactile depth that flat hex codes cannot replicate.

---

## 3. Typography: Editorial Authority
We use a dual-font strategy to balance character with utility.

*   **The Display & Headline (Manrope):** A geometric sans-serif that feels engineered. Use `display-lg` through `headline-sm` to announce major sections. Its wide stance gives the wholesale system a sense of "stability."
*   **The Workhorse (Inter):** For everything else. `body-md` is our standard for data entry. Its tall x-height ensures that even at high densities, stock numbers and SKU codes remain crystal clear.

**Hierarchy Note:** Use `on_surface_variant` (#414754) for labels to create a soft contrast against the high-contrast `on_surface` (#181c20) used for the actual data. This allows the user's eye to "skip" labels and find values instantly.

---

## 4. Elevation & Depth
We achieve depth through **Tonal Layering** rather than traditional structural shadows.

*   **The Layering Principle:** Place a `surface-container-lowest` card on a `surface-container-low` section. This creates a "soft lift" that feels integrated into the environment.
*   **Ambient Shadows:** For floating elements (Modals/Popovers), use "Shadow-Indigo." Instead of a grey shadow, use a 8% opacity version of `secondary` (#4355b9) with a 24px blur. It mimics natural light passing through blue-tinted glass.
*   **The "Ghost Border" Fallback:** If a border is required for accessibility in data tables, use the `outline-variant` (#c1c6d6) at **15% opacity**. It should be felt, not seen.
*   **Glassmorphism:** Use for "Fixed" elements like top navigation bars. A background of `surface` at 80% opacity with a `blur(20px)` allows the dashboard content to scroll underneath, maintaining a sense of spatial awareness.

---

## 5. Components

### Buttons: The Weighted Action
*   **Elevated (Primary):** No borders. Gradient fill (Primary to Primary Container). 8px roundedness (`lg`). Subtle Ambient Shadow on hover.
*   **Tertiary:** No background. Use `primary` text. Use for low-priority actions like "Cancel" or "Export CSV."

### Data Tables: The Information Engine
*   **Rule:** Forbid divider lines. 
*   **Spacing:** Use "Comfortable" vertical padding (16px). 
*   **Separation:** Use a subtle background shift (`surface-container-low`) on every second row (Zebra striping) or on-hover to maintain tracking across wide screens.
*   **Status Indicators:** Use `tertiary` (#006e1c) for "In Stock" and `error` (#ba1a1a) for "Out of Stock," but keep the background containers at 10% opacity to ensure the text remains the hero.

### Input Fields: The Professional Entry
*   **Style:** Filled text fields. Use `surface-container-high` as the background. 
*   **Indicator:** A 2px bottom-stroke using `primary` only when the field is focused.
*   **Success/Warning:** When a queue is full, the field container should shift to a very pale `error_container`.

### Cards & Lists
*   **Structure:** Cards should not have shadows by default. They are defined by their `surface-container-lowest` color against the darker `surface`.
*   **Negative Space:** Use the 8px grid religiously. Content inside cards should have a minimum of 24px padding to allow the data to "breathe."

---

## 6. Do’s and Don’ts

### Do:
*   **Do** use `letter-spacing: -0.01em` on Inter for body text to give it a premium, tighter "printed" feel.
*   **Do** use `tertiary` (Green) for positive stock status, but ensure it meets a 4.5:1 contrast ratio against the surface.
*   **Do** lean into white space. In a complex wholesale system, white space is a functional tool that prevents user fatigue.

### Don’t:
*   **Don’t** use pure black (#000000). Always use `on_surface` (#181c20).
*   **Don’t** use 100% opaque borders. They create "grid-lock" and make the UI feel like an Excel spreadsheet from 1998.
*   **Don’t** use "Drop Shadows" on buttons. Use "Ambient Glows" that use the button's own color as the shadow tint.
*   **Don’t** use standard Material 3 "Pink/Purple" defaults. This system is strictly Blue/Indigo/Green to maintain professional "Wholesale" authority.

---

**Director’s Final Note:** This design system is a living document. When in doubt, ask: "Does this look like a template, or does it look like it was custom-built for a high-volume business?\" If it feels like a template, add more white space and remove a line.
