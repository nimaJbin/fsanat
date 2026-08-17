# Agent Instructions

These rules apply to the entire repository.

## Required reading

Before changing application code, read the minimum relevant path defined in
`execution-docs/README.md` and `execution-docs/DOCUMENT_GRAPH.md`.

Before creating or changing any user interface, stylesheet, Blade view, UI
component, or visual asset, also read and follow:

1. `execution-docs/ui/DESIGN_SYSTEM.md`
2. `execution-docs/ui/DESIGN_TOKENS.md`
3. `execution-docs/ui/COMPONENT_STANDARDS.md`

These files are the canonical and mandatory UI rules. Do not introduce visual
values, interaction patterns, or components that conflict with them. If a
requirement cannot be satisfied within the system, document and approve a
design-system decision before implementation; do not silently create an
exception.

## Enforcement

- Reuse semantic design tokens; do not hard-code duplicate colors, spacing,
  radii, shadows, typography, or control sizes in application UI.
- Preserve RTL-first behavior, responsive behavior, keyboard operation, visible
  focus, and WCAG AA contrast.
- Reuse shared components and states before creating page-specific variants.
- Public storefront UI is light-first. Admin UI is light-first for version 1;
  dark mode may be added only through the documented semantic tokens.
- UI review must cover default, hover, focus, active, disabled, loading, empty,
  error, and success states where applicable.

## Application structure

- Keep Laravel's standard root layout. The `app` directory is the application's
  PHP source root; do not introduce `src`, `backend`, or `app/Modules` without an
  accepted ADR and a demonstrated need such as a real monorepo or independently
  owned module.
- Keep controllers thin. They may coordinate validated input, an Action or
  Query, and an HTTP response; business rules do not belong in controllers.
- Put validation in `app/Http/Requests`, authorization in `app/Policies`,
  single use-case commands in `app/Actions/<Domain>`, and reusable complex read
  operations in `app/Queries/<Domain>`.
- Use `app/Services` only for a cohesive, reusable capability that does not fit
  a single use-case Action. Do not create generic manager/helper service
  classes or use Services as a catch-all.
- Organize Actions and Queries by business domain such as `Auth`, `Catalog`,
  `Inventory`, `Orders`, or `Payments`. Create directories only when they contain
  real code; do not add placeholder files to preserve empty folders.
- Keep Eloquent models in `app/Models`, asynchronous work in `app/Jobs`, events
  and handlers in `app/Events` and `app/Listeners`, notifications in
  `app/Notifications`, and framework registration in `app/Providers`.
- Storefront and admin HTTP concerns must remain explicitly separated under
  their respective Controller, Request, and Blade namespaces.
- Before adding a new top-level directory under `app`, confirm that no existing
  responsibility fits and document any lasting architectural exception.
