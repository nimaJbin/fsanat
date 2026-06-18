# Decision Log

Document ID: CORE-DECISION-LOG
Status: Accepted
Version: 0.2
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/DECISION_LOG.md
Dependencies: PROJECT_RULES.md
Next Documents: ../adr/README.md, ../architecture/TECH_STACK_DECISIONS.md

Purpose: track project decisions before or alongside ADR creation.

Format:

| Date | Decision | Status | Impact | Source |
|---|---|---|---|---|
| 2026-06-18 | Split docs into project-wiki and execution-docs | Draft | Establishes two-layer documentation model | User request |
| 2026-06-18 | Use Laravel 12 with a custom Blade-based admin panel | Accepted | Fixes Laravel 12, PHP 8.3+, MySQL 8, Redis 7, Vite, Blade, Docker, Tabler and rejects Filament/admin packages/SPA for v1 | User request |

Decision: The project will use Laravel 12 as the core backend framework. Filament and paid admin panel packages are explicitly rejected. The admin panel will be built manually using Laravel Blade, Bootstrap 5 and the open-source Tabler admin template.

Reason: The project needs long-term flexibility, low vendor lock-in, simple customization, full control over business flows and AI-friendly code generation. A custom Laravel admin panel keeps the system transparent and easier to refactor.

Consequences: Development may take longer than using Filament, but the codebase remains more flexible, lightweight and independent. CRUD conventions, UI patterns, permissions, validation and services must be documented before implementation.

Use this log for concise decision tracking. Use adr/ for decisions that need context, alternatives and consequences.

Open migration work: review project-wiki/core/DECISION_LOG.md and migrate only decisions still active for current implementation.
