# Page Catalog

Document ID: UI-PAGE-CATALOG
Status: Phase 1 Baseline
Version: 1.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/ui-ux/README.md
Dependencies: ../business/USER_JOURNEY_MAP.md, DESIGN_SYSTEM.md, DESIGN_TOKENS.md, COMPONENT_STANDARDS.md
Next Documents: FORM_CATALOG.md, DASHBOARD_CATALOG.md

Purpose: list UI pages before design or implementation tasks.

Initial pages:

| Page | Actor | System | Status |
|---|---|---|---|
| Public homepage | Visitor | Storefront preview | Phase 1 verified |
| Admin login | Staff | Auth | Phase 1 verified |
| Admin dashboard | Staff | Admin preview | Phase 1 verified |
| Change password | Staff | Auth | Phase 1 verified |
| Brand management | Owner, Admin | Catalog | MVP implemented |
| Category management | Owner, Admin | Catalog | MVP implemented |
| Product management | Staff | Product, Inventory | MVP implemented |
| 403 / 404 | Any | Error handling | Phase 1 verified |
| Product listing | Customer | Product, Category | Draft |
| Product detail | Customer | Product, Inventory | Draft |
| Checkout | Customer | Order, Payment | Draft |
| Order management | Admin | Order, Payment, Shipping, Tabler | Draft |

Rule: each page must link to user journey, system module, API needs and acceptance criteria before implementation.

Design rule: every page must comply with the accepted UI design system, tokens
and shared component standards before it can be marked complete.

Admin UI rule: admin pages use Laravel Blade and Tabler Bootstrap 5 with minimal vanilla JavaScript. Filament, Nova, Backpack, paid admin packages, React, Vue, Inertia and first-version SPA architecture are rejected.

The homepage catalog sections now read active categories, products, inventory and brands from the database and render honest empty states.
