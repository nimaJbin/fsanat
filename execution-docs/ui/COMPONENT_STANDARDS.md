# Component Standards

Document ID: UI-COMPONENT-STANDARDS
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/ui-ux/README.md
Dependencies: DESIGN_SYSTEM.md, DESIGN_TOKENS.md
Next Documents: PAGE_CATALOG.md, FORM_CATALOG.md, DASHBOARD_CATALOG.md

Purpose: define the required shared UI inventory and behavior.

Storefront components: header/navigation, search, product card, category card,
price/discount, stock state, filters, sorting, pagination, cart, checkout steps,
modal, drawer, toast and loading/empty/error states.

Admin components: sidebar, topbar, breadcrumb, metric card, data table,
pagination, search/filter bar, form controls, validation message, status badge,
tabs, dropdown, date picker, confirmation dialog, chart and activity log.

Rules:

- Build one shared component for one behavior; page-specific duplication is not
  allowed without a documented need.
- Buttons must distinguish primary, secondary, quiet and destructive actions.
  A view should normally have one visually dominant primary action.
- Form labels remain visible. Placeholder text is not a label. Errors identify
  the field and explain the correction in Persian.
- Tables must support RTL alignment, narrow screens, loading, empty results and
  pagination. Do not rely on horizontal overflow as the only mobile strategy.
- Product price, discount and inventory use consistent formatting everywhere.
- Destructive operations require clear wording and confirmation when recovery is
  difficult.
- Interactive elements require default, hover, focus-visible, active, disabled
  and loading states as applicable. Data surfaces also require empty, error and
  success states.
- Touch targets are at least 44px in storefront UI. Dense 36px admin controls
  remain keyboard accessible and must not be used for primary mobile actions.
- Motion is brief, purposeful and reduced when the user requests reduced motion.
- Icons supplement text and must not be the sole carrier of critical meaning.

Review checklist: semantic tokens, RTL, responsive layout, Persian typography,
keyboard path, focus visibility, AA contrast, state coverage and component reuse.
