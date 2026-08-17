# Design System

Document ID: UI-DESIGN-SYSTEM
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/ui-ux/README.md
Dependencies: ../core/PROJECT_VISION.md, ../core/PROJECT_RULES.md
Next Documents: DESIGN_TOKENS.md, COMPONENT_STANDARDS.md, PAGE_CATALOG.md

Purpose: define the mandatory visual and interaction language for فروشگاه صنعت جوان.

Direction: **Industrial Precision**. The product must feel industrial, durable,
precise, trustworthy, modern and uncluttered. Prefer clear structure, useful
white space, restrained shadows, moderately square shapes and real product
imagery. Avoid decorative effects, excessive gradients, playful styling and
visual noise.

Theme rules:

- Public storefront is light-first.
- Admin is light-first in version 1. Dark mode is a later enhancement and must
  use semantic tokens rather than component-specific colors.
- Every interface is RTL-first and responsive from mobile through desktop.
- Persian copy uses clear, direct and operational language.
- Accessibility target is WCAG AA: sufficient contrast, keyboard access,
  visible focus and no meaning conveyed by color alone.

System rules:

- Use semantic tokens from DESIGN_TOKENS.md. Raw visual values must not be
  repeated inside pages or components.
- Use shared components and behaviors from COMPONENT_STANDARDS.md before adding
  a new variant.
- Orange is an accent for primary actions, important commercial information and
  warnings; it must not dominate page backgrounds.
- Status colors retain their semantic meaning across storefront and admin.
- New UI decisions must update these documents before implementation.
- Exceptions require an explicit documented decision; local silent exceptions
  are prohibited.

Definition of done: UI work is not complete until RTL, responsive layout,
contrast, keyboard behavior and applicable interaction states are verified.
