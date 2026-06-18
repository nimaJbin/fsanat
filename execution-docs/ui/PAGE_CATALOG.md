# Page Catalog

Document ID: UI-PAGE-CATALOG
Status: Draft
Version: 0.2
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/ui-ux/README.md
Dependencies: ../business/USER_JOURNEY_MAP.md
Next Documents: FORM_CATALOG.md, DASHBOARD_CATALOG.md

Purpose: list UI pages before design or implementation tasks.

Initial pages:

| Page | Actor | System | Status |
|---|---|---|---|
| Product listing | Customer | Product, Category | Draft |
| Product detail | Customer | Product, Inventory | Draft |
| Checkout | Customer | Order, Payment | Draft |
| Admin dashboard | Admin | Custom Laravel Blade Admin Panel, Tabler | Accepted direction |
| Order management | Admin | Order, Payment, Shipping, Tabler | Draft |

Rule: each page must link to user journey, system module, API needs and acceptance criteria before implementation.

Admin UI rule: admin pages use Laravel Blade and Tabler Bootstrap 5 with minimal vanilla JavaScript. Filament, Nova, Backpack, paid admin packages, React, Vue, Inertia and first-version SPA architecture are rejected.

Open migration work: review UI/UX wiki notes and add only confirmed pages.
