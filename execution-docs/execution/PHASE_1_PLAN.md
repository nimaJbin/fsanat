# Phase 1 — Frontend Foundation, Admin Experience and Storefront Home

Document ID: EXEC-PHASE-1-PLAN
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/ADMIN_PANEL_STRUCTURE.md, project-wiki/roadmap/ROADMAP.md, project-wiki/ui-ux/README.md
Dependencies: ../core/PROJECT_RULES.md, ../architecture/TECH_STACK_DECISIONS.md, ../systems/AUTH_SYSTEM.md, ../systems/ADMIN_PANEL_SYSTEM.md, ../ui/DESIGN_SYSTEM.md, ../ui/DESIGN_TOKENS.md, ../ui/COMPONENT_STANDARDS.md
Next Documents: PHASE_1_STATUS.md, ../qa/ACCEPTANCE_CRITERIA.md, ../qa/TEST_SCENARIOS.md
Length Exception: Approved by the user on 2026-08-18. This complete phase plan is exempt from the normal execution-document character limit and must remain one file.

## 1. Purpose

Phase 1 creates the reusable frontend and administrative foundation for فروشگاه صنعت جوان. Its first priority is a secure, Persian, RTL admin experience; its second priority is the public storefront homepage. It does not implement the full commerce domain. Product, category, inventory, order, payment, ticket and reporting widgets may use clearly identified preview data until their owning systems exist.

This document is the stable scope and acceptance contract. Progress, evidence and current position belong in `PHASE_1_STATUS.md`. Every objective has a permanent ID so future AI sessions can identify what is complete and what remains.

## 2. Approved Product and Design Decisions

| Decision | Approved value |
|---|---|
| Brand name | فروشگاه صنعت جوان |
| Design direction | Industrial Precision: trustworthy, durable, precise, modern and uncluttered |
| Admin density | Operational and information-dense without visual noise |
| Storefront density | Modern, spacious and product-focused |
| Primary color | Industrial navy `#16324F` |
| Accent color | Amber/orange `#F59E0B` |
| Persian typeface | Vazirmatn with system sans-serif fallbacks |
| Direction and language | Persian and RTL-first; established terms such as SKU, SEO and API may remain Latin |
| Admin UI stack | Custom Laravel Blade panel using open-source Tabler and Bootstrap 5 |
| Storefront UI stack | Laravel Blade and Bootstrap-compatible custom styling; no SPA framework |
| JavaScript | Minimal vanilla JavaScript |
| Theme | Light-only for version 1; dark-mode-ready semantic tokens, no dark-mode UI yet |
| Initial roles | owner, admin, operator |
| Password recovery | Deferred until outbound mail is configured; authenticated password change is in scope |
| Initial owner credentials | Read from environment variables; no production password committed to Git |
| Dashboard data | Real data when an owning module exists; otherwise explicit preview fixtures |
| Logo | Accessible text wordmark until an approved logo asset is supplied |

## 3. Global Engineering Rules

- Preserve Laravel 12 and its standard root layout.
- Use Blade; do not introduce React, Vue, Inertia or an SPA architecture.
- Use semantic design tokens. Page-specific hard-coded visual systems are prohibited.
- Keep storefront and admin controllers, requests and views explicitly separated.
- Controllers coordinate only; validation belongs in Form Requests, authorization in middleware, Gates or Policies, and use-case behavior in Actions.
- All protected admin routes require an authenticated active staff user with an allowed role.
- UI copy is Persian, concise and operational.
- Components cover applicable default, hover, focus-visible, active, disabled, loading, empty, error and success states.
- UI is responsive and keyboard-operable, uses visible focus and targets WCAG AA contrast.
- Every completed objective must update `PHASE_1_STATUS.md` with evidence.
- A UI objective is not complete merely because markup exists; build, relevant tests and visual/responsive review must be recorded, or the objective remains partially verified.

## 4. Objective Status Vocabulary

| Status | Meaning |
|---|---|
| Pending | Work has not started |
| In progress | Active implementation is underway |
| Implemented | Code exists but one or more required verification steps are unavailable |
| Verified | Implementation and all available required checks passed |
| Blocked | A specific external dependency prevents progress and safe alternatives are exhausted |
| Deferred | Explicitly outside Phase 1 or postponed by an approved decision |

## 5. Phase 1.1 — Frontend Infrastructure

Goal: replace temporary inline styling with one maintainable, token-driven frontend foundation.

### Objectives

- **P1.1.1 — Package foundation:** install and pin Bootstrap 5, Tabler UI and the selected icon support through npm; commit the lockfile.
- **P1.1.2 — Vite entry points:** create explicit shared/admin/storefront CSS and JavaScript entry points with production builds.
- **P1.1.3 — Semantic tokens:** implement the accepted color, typography, spacing, radius, control-size, shadow and motion tokens as CSS custom properties.
- **P1.1.4 — Persian typography:** load Vazirmatn locally or through a controlled package strategy, define reliable fallbacks and avoid render-blocking remote dependencies where practical.
- **P1.1.5 — RTL baseline:** configure document direction, Bootstrap RTL behavior, Persian-friendly typography and logical CSS properties.
- **P1.1.6 — Base accessibility:** implement visible focus, reduced-motion handling, skip-link behavior and accessible base states.
- **P1.1.7 — Remove temporary styling:** remove inline layout CSS from shared Blade layouts and move it into maintained assets.

### Exit criteria

- `npm run build` succeeds and produces the expected Vite bundles.
- Both admin and storefront layouts use Vite-managed assets.
- No page owns a duplicate color/spacing/typography system.
- RTL, keyboard focus and reduced motion are represented in shared assets.

## 6. Phase 1.2 — Admin Authentication and Access Security

Goal: ensure `/admin` is an actual staff boundary rather than a generic authenticated-user area.

### Objectives

- **P1.2.1 — Staff attributes:** add role and active-state persistence with safe defaults and explicit model casts.
- **P1.2.2 — Role vocabulary:** define `owner`, `admin` and `operator` in a central enum or equivalent typed source.
- **P1.2.3 — Admin authorization boundary:** add dedicated middleware/Gate behavior so customers and inactive accounts cannot access admin routes.
- **P1.2.4 — Safe login:** authenticate only active allowed staff accounts, regenerate sessions and return a non-enumerating Persian error.
- **P1.2.5 — Login throttling:** rate-limit repeated login attempts per username and IP and provide a usable Persian retry message.
- **P1.2.6 — Context-aware redirects:** prevent admin redirect rules from accidentally hijacking future customer authentication flows.
- **P1.2.7 — Environment owner seeding:** accept initial owner name, username, email and password from environment configuration; allow a local-only documented fallback while rejecting unsafe production fallback.
- **P1.2.8 — Password change:** allow authenticated staff to change their own password after verifying the current password; invalidate other sessions when supported.
- **P1.2.9 — Security tests:** cover guest, customer, inactive staff, operator/admin/owner access, successful login, failed login, throttling and logout.

### Exit criteria

- A normal customer cannot access any admin page.
- An inactive staff account cannot log in or keep using protected admin pages.
- Allowed staff roles can log in and log out securely.
- Credentials are not hard-coded for production.
- Permission-sensitive tests exist and pass in the supported runtime.

## 7. Phase 1.3 — Admin Shell

Goal: create the persistent Persian operational frame used by every future admin module.

### Objectives

- **P1.3.1 — Guest admin layout:** focused branded shell for login and future recovery states.
- **P1.3.2 — Authenticated layout:** reusable page shell with sidebar, topbar, main content and footer/meta area.
- **P1.3.3 — Navigation architecture:** Persian module groups covering dashboard, users, products, taxonomy, inventory, orders, approvals, freeze, bulk operations, imports, finance, wallet, tickets, reports, settings and activity logs.
- **P1.3.4 — Availability states:** unavailable future modules are visually identifiable and not linked to fake routes.
- **P1.3.5 — Permission-aware navigation:** role/permission visibility is centrally controlled rather than conditionally duplicated across pages.
- **P1.3.6 — Responsive sidebar:** desktop collapse and mobile drawer work in RTL with keyboard and focus support.
- **P1.3.7 — Topbar:** page context, mobile menu trigger and accessible user menu with profile/password/logout actions.
- **P1.3.8 — Breadcrumb and titles:** standard page heading contract with optional description and actions.
- **P1.3.9 — Feedback channel:** shared success, warning and error flash messages.
- **P1.3.10 — Error pages:** Persian 403 and 404 experiences provide safe navigation paths.

### Exit criteria

- Admin pages share one responsive layout.
- Navigation works in RTL on narrow and wide screens.
- Keyboard users can open, traverse and close interactive navigation.
- Placeholder modules are honest and cannot generate broken links.

## 8. Phase 1.4 — Shared Blade Components

Goal: prevent future admin and storefront pages from inventing inconsistent controls and data states.

### Objectives

- **P1.4.1 — Action components:** primary, secondary, quiet and destructive buttons/links with disabled and loading contracts.
- **P1.4.2 — Form components:** label, text/password/search inputs, select, checkbox, help and Persian validation feedback.
- **P1.4.3 — Feedback components:** alert, status badge, toast/flash surface and validation summary.
- **P1.4.4 — Content components:** card, page header, breadcrumb and section header.
- **P1.4.5 — Data components:** responsive table contract, pagination location, filter bar and mobile alternative behavior.
- **P1.4.6 — State components:** loading, empty, error and success surfaces.
- **P1.4.7 — Overlay components:** accessible dropdown, drawer and confirmation dialog behavior.
- **P1.4.8 — Metric component:** value, label, trend/context and semantic state without color-only meaning.
- **P1.4.9 — Component documentation:** record API, slots/props, allowed variants, accessibility behavior and examples.

### Exit criteria

- Login, dashboard and homepage reuse shared components where behaviors overlap.
- Component variants use semantic tokens and documented APIs.
- Applicable state coverage and keyboard behavior are verified.

## 9. Phase 1.5 — Admin Dashboard

Goal: provide a trustworthy operational overview that prioritizes action, not decorative analytics.

### Objectives

- **P1.5.1 — Dashboard query contract:** dashboard data is supplied by a dedicated Query/view model; Blade contains no aggregation logic.
- **P1.5.2 — Preview-data honesty:** all values not backed by implemented modules are explicitly labelled as preview data.
- **P1.5.3 — Core metrics:** orders requiring attention, active products, low inventory, failed payments and open tickets.
- **P1.5.4 — Attention queue:** prioritized operational actions with status, context and future destination behavior.
- **P1.5.5 — Recent orders:** responsive preview table/card state without fake working links.
- **P1.5.6 — Inventory alerts:** actionable empty/preview state.
- **P1.5.7 — Sales chart:** accessible summary and restrained visualization; the numeric meaning remains available without the chart.
- **P1.5.8 — Import and freeze status:** clear operational preview states.
- **P1.5.9 — Dashboard states:** useful loading, empty, error and success presentations.
- **P1.5.10 — Dashboard tests:** authorized access, view contract and critical Persian labels.

### Exit criteria

- Dashboard is responsive, Persian and operationally prioritized.
- Preview information cannot be mistaken for production truth.
- Future real data can replace fixtures without rewriting the view.

## 10. Phase 1.6 — Public Storefront Homepage

Goal: publish a responsive, credible first storefront surface whose components can later bind to real catalog data.

### Objectives

- **P1.6.1 — Storefront shell:** announcement/header, brand, search, navigation, main content and footer landmarks.
- **P1.6.2 — Mobile navigation:** accessible RTL menu/drawer and search experience.
- **P1.6.3 — Hero:** clear industrial value proposition with one dominant call to action and no invented commercial claims.
- **P1.6.4 — Category previews:** reusable category cards with honest preview content.
- **P1.6.5 — Product previews:** reusable product cards covering image fallback, name, price placeholder policy, stock and CTA states.
- **P1.6.6 — Featured/new sections:** structured preview collections ready for future catalog queries.
- **P1.6.7 — Brand previews:** restrained brand surface without implying unauthorized partnerships.
- **P1.6.8 — Trust section:** only neutral, verifiable service principles; no fake statistics, guarantees or customer reviews.
- **P1.6.9 — Footer:** navigation groups, contact placeholders clearly marked for configuration and legal placeholders without fabricated registration data.
- **P1.6.10 — Metadata:** page title, description, canonical foundation, social metadata foundation and meaningful heading hierarchy.
- **P1.6.11 — Performance:** responsive images/fallbacks, minimal JavaScript and no unnecessary blocking dependencies.
- **P1.6.12 — Homepage tests:** successful render and presence of critical structural/RTL content.

### Exit criteria

- Homepage works from mobile through desktop and uses shared storefront components.
- No fake product, price, review, partnership or legal claim appears as real data.
- Catalog fixtures can later be replaced by Queries without redesigning markup.

## 11. Phase 1.7 — Quality, Verification and Handoff

Goal: close Phase 1 with reproducible evidence rather than subjective completion claims.

### Objectives

- **P1.7.1 — PHP quality:** run Laravel tests and relevant formatting/static checks available in the project runtime.
- **P1.7.2 — Asset quality:** run a clean npm production build and record versions/results.
- **P1.7.3 — Route review:** verify route names, middleware and no broken navigation targets.
- **P1.7.4 — Security review:** review admin boundary, seed safety, session behavior, validation and throttling.
- **P1.7.5 — Responsive review:** inspect login, dashboard and homepage at representative mobile, tablet and desktop widths.
- **P1.7.6 — Accessibility review:** keyboard path, landmarks, headings, labels, focus, contrast and reduced motion.
- **P1.7.7 — State review:** verify applicable default, hover, focus, active, disabled, loading, empty, error and success states.
- **P1.7.8 — Documentation sync:** update status, acceptance criteria, test scenarios, page/form/dashboard catalogs and decision log.
- **P1.7.9 — Git handoff:** provide a clean list of project changes and recommended commits; never include unrelated user-owned working-tree changes.
- **P1.7.10 — Runtime limitations:** any check prevented by missing Docker/PHP must remain explicitly unverified, with exact commands for the user environment.

### Exit criteria

- Every objective is marked Verified, Deferred with approval, or explicitly Blocked with evidence.
- No objective is silently treated as complete.
- The live status document identifies the next project phase and any residual risks.

## 12. Phase-Level Definition of Done

Phase 1 is complete only when:

1. The token-driven Vite frontend foundation builds successfully.
2. Admin access is restricted to active allowed staff roles.
3. Login, password change and logout follow the documented security behavior.
4. The admin shell and shared components are Persian, RTL, responsive and reusable.
5. The dashboard is implemented with honest preview-data boundaries.
6. The storefront homepage is implemented without fabricated business claims.
7. Relevant automated tests pass in the supported PHP runtime.
8. Responsive and accessibility review evidence is recorded.
9. `PHASE_1_STATUS.md` contains a final objective matrix with no ambiguous state.
10. Documentation and Git handoff are synchronized.

## 13. Out of Scope

- Full CRUD implementations for products, categories, inventory, orders, payments, tickets, wallet, imports, reports or users.
- Customer registration/login and customer account.
- Real payment, accounting, shipping, email, SMS or search integrations.
- Real dashboard analytics before owning modules provide trustworthy data.
- Dark mode.
- Email password reset before mail infrastructure exists.
- React, Vue, Inertia, SPA or a separate frontend repository.
- AI-generated changes to financial, inventory, order or access records.

## 14. Change Control

New requirements may be added only with a new permanent objective ID, rationale, dependencies and acceptance criteria. Existing IDs are never reused for different work. Scope changes update the version and decision log. Implementation progress never edits historical outcomes out of `PHASE_1_STATUS.md`; corrections are appended with date and reason.
