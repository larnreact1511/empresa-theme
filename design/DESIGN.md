---
name: Kinetic Enterprise
colors:
  surface: '#f7f9fb'
  surface-dim: '#d8dadc'
  surface-bright: '#f7f9fb'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f4f6'
  surface-container: '#eceef0'
  surface-container-high: '#e6e8ea'
  surface-container-highest: '#e0e3e5'
  on-surface: '#191c1e'
  on-surface-variant: '#424752'
  inverse-surface: '#2d3133'
  inverse-on-surface: '#eff1f3'
  outline: '#727784'
  outline-variant: '#c2c6d4'
  surface-tint: '#115cb9'
  primary: '#003f87'
  on-primary: '#ffffff'
  primary-container: '#0056b3'
  on-primary-container: '#bbd0ff'
  inverse-primary: '#acc7ff'
  secondary: '#545f73'
  on-secondary: '#ffffff'
  secondary-container: '#d5e0f8'
  on-secondary-container: '#586377'
  tertiary: '#334358'
  on-tertiary: '#ffffff'
  tertiary-container: '#4a5a70'
  on-tertiary-container: '#c1d1eb'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d7e2ff'
  primary-fixed-dim: '#acc7ff'
  on-primary-fixed: '#001a40'
  on-primary-fixed-variant: '#004491'
  secondary-fixed: '#d8e3fb'
  secondary-fixed-dim: '#bcc7de'
  on-secondary-fixed: '#111c2d'
  on-secondary-fixed-variant: '#3c475a'
  tertiary-fixed: '#d3e4fe'
  tertiary-fixed-dim: '#b7c8e1'
  on-tertiary-fixed: '#0b1c30'
  on-tertiary-fixed-variant: '#38485d'
  background: '#f7f9fb'
  on-background: '#191c1e'
  surface-variant: '#e0e3e5'
typography:
  display:
    fontFamily: Inter
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Inter
    fontSize: 28px
    fontWeight: '600'
    lineHeight: 36px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 20px
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 8px
  xs: 4px
  sm: 12px
  md: 24px
  lg: 48px
  xl: 80px
  gutter: 24px
  margin: 16px
---

## Brand & Style

The design system is rooted in **Modern Corporate Minimalism**. It aims to evoke a sense of absolute reliability, technical expertise, and forward-thinking innovation. The aesthetic is characterized by high clarity, intentional whitespace, and a rigorous adherence to a logical hierarchy.

The visual language avoids unnecessary decoration, focusing instead on precision and functional elegance. By utilizing a "Content-First" approach, the interface remains unobtrusive, allowing the software solutions and professional services to take center stage. The emotional response should be one of confidence—users must feel they are interacting with an industry leader that values efficiency and precision.

## Colors

The palette is anchored by a high-contrast relationship between the primary professional blue and a pure white background.

- **Primary (#0056B3):** Used for primary actions, active states, and brand-critical identifiers. It provides a strong focal point against the white canvas.
- **Secondary (#1E293B):** A deep slate blue used for headlines and navigation elements to ensure maximum legibility and a grounded, professional feel.
- **Tertiary (#64748B):** A muted grey-blue for secondary text, icons, and decorative accents.
- **Neutral (#F8FAFC):** Used for subtle section backgrounds and "off-white" surfaces to distinguish content blocks without breaking the minimalist aesthetic.
- **Success/Warning/Error:** Utilize standard industry semantical colors (Green, Amber, Red) but desaturated slightly to match the professional tone.

## Typography

The typography system utilizes **Inter** exclusively to maintain a systematic and utilitarian feel. The hierarchy is driven by weight and scale rather than decorative shifts.

- **Headlines:** Use semi-bold and bold weights with tight letter-spacing to create a "dense" and authoritative look.
- **Body Text:** Designed for maximum readability at 16px. Ensure a comfortable line height (1.5x) to facilitate scanning of technical documentation and service descriptions.
- **Labels:** Use medium weights and slightly increased letter spacing for small UI metadata to maintain clarity.

## Layout & Spacing

The layout follows a **8px linear scale** to ensure mathematical consistency across all components.

- **Grid:** Use a 12-column fluid grid for desktop and tablet, transitioning to a single-column stack for mobile.
- **Container:** Max-width for content is 1200px. 
- **Rhythm:** Vertical spacing between sections should be generous (80px+) to emphasize the minimalist style. Smaller components like input fields and list items should use 12px or 16px internal padding.
- **Breakpoints:**
  - Mobile: < 768px (16px margins)
  - Tablet: 768px - 1024px (24px margins)
  - Desktop: > 1024px (Auto margins)

## Elevation & Depth

This design system uses a **Low-Contrast Outline** approach combined with **Tonal Layers** to define depth.

- **Surfaces:** Use `#FFFFFF` for the primary background and `#F8FAFC` for secondary containers.
- **Borders:** Define boundaries with 1px solid strokes in `#E2E8F0`. Shadows are used sparingly; only a single "Ambient Drop Shadow" (0px 4px 12px, 5% opacity) should be applied to floating elements like dropdowns or active cards.
- **Interactive Depth:** On hover, cards should transition from a subtle border to a slightly more pronounced border color (#CBD5E1) rather than increasing shadow depth, maintaining the flat, minimalist integrity.

## Shapes

The shape language is **Soft and Structural**. 

- **Components:** Standard UI elements (Buttons, Inputs, Cards) use a 4px (0.25rem) corner radius. This provides a professional edge that is modern without being overly "friendly" or rounded.
- **Icons:** Use linear icons with a 2px stroke weight and slight rounding on terminals to match the font geometry.
- **Images:** Software screenshots or team photos should adhere to the same 4px radius or remain sharp-edged if spanning the full width of the viewport.

## Components

### Buttons
- **Primary:** Solid `#0056B3` fill with white text. No gradient. 4px border radius.
- **Secondary:** Transparent fill with a 1px `#0056B3` stroke and blue text.
- **Tertiary:** Ghost style; text only with primary color, appearing with a light neutral background on hover.

### Cards (Services & Features)
- Use a white background with the standard 1px `#E2E8F0` border.
- Internal padding should be 24px or 32px.
- Feature cards should lead with a small icon in the primary blue.

### Input Fields
- 1px `#CBD5E1` border that transitions to `#0056B3` on focus.
- Placeholder text in `#94A3B8`.
- Labels are positioned strictly above the input in `label-md` style.

### Navigation
- A clean, sticky top-bar with a height of 72px.
- Use `label-md` for links with a 2px bottom border indicator for the active state.

### Lists & Tables
- Data-heavy tables should use "Zebra" striping with the neutral color for alternate rows.
- Remove vertical borders between columns; use only horizontal dividers for a cleaner, modern look.