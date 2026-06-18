# Project Rules

Document ID: CORE-PROJECT-RULES
Status: Accepted
Version: 0.2
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/PROJECT_RULES.md
Dependencies: DOCUMENT_RULES.md
Next Documents: DECISION_LOG.md, ../execution/TASK_BREAKDOWN.md

Purpose: define how project work is documented and prepared for execution.

Rules:

- Documentation changes must preserve historical knowledge.
- execution-docs is the source for implementation tasks.
- No application code should be changed during docs migration.
- A task must reference business goal, module, entity, API/UI surface and acceptance criteria where applicable.
- New decisions must be logged before they affect architecture or scope.
- Laravel 12, PHP 8.3+, MySQL 8, Redis 7, Redis queues, Vite, Blade, Docker and Tabler Bootstrap 5 are accepted stack decisions.
- Filament, Nova, Backpack, paid admin packages, React, Vue, Inertia and first-version SPA architecture are rejected.
- Admin controllers must be thin; validation must use Form Requests; authorization must use Policies and Gates.
- Business logic must live in Services, Actions or Domain layer, never in Blade files.
- Admin CRUD pages must follow shared layout, naming, route and permission conventions.

Open migration work: review old project rules and promote only rules that are active, enforceable and relevant to current development.
