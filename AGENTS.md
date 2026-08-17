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
