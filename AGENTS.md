# Agent Instructions

These rules apply to the entire repository.

## Product delivery constraints

- Never generate, synthesize, download, or add any image, video, audio, or other
  media asset without the user's explicit permission. The default responsibility
  is code and documentation development only. Use an existing approved asset or
  a code-rendered/text fallback when a visual placeholder is needed.
- Build every area as a lean, working MVP unless the user explicitly expands the
  scope. Prefer the smallest end-to-end implementation that works now while
  keeping clear extension points; do not pre-build speculative features.
- Optimize for a fast, reliable launch. Add schema, abstractions, indexes, and
  infrastructure only when they support an identified MVP flow or prevent a
  known migration dead end.

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

## graphify

This project has a knowledge graph at graphify-out/ with god nodes, community structure, and cross-file relationships.

When the user types `/graphify`, use the installed graphify skill or instructions before doing anything else.

Rules:
- For codebase questions, first run `graphify query "<question>"` when graphify-out/graph.json exists. Use `graphify path "<A>" "<B>"` for relationships and `graphify explain "<concept>"` for focused concepts. These return a scoped subgraph, usually much smaller than GRAPH_REPORT.md or raw grep output.
- Dirty graphify-out/ files are expected after hooks or incremental updates; dirty graph files are not a reason to skip graphify. Only skip graphify if the task is about stale or incorrect graph output, or the user explicitly says not to use it.
- If graphify-out/wiki/index.md exists, use it for broad navigation instead of raw source browsing.
- Read graphify-out/GRAPH_REPORT.md only for broad architecture review or when query/path/explain do not surface enough context.
- After modifying code, run `graphify update .` to keep the graph current (AST-only, no API cost).
