# Tech Stack Decisions

Document ID: ARCH-TECH-STACK
Status: Accepted
Version: 0.2
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/TECH_STACK_DECISIONS.md, project-wiki/architecture/ARCHITECTURE.md
Dependencies: SYSTEM_ARCHITECTURE.md, ../core/DECISION_LOG.md
Next Documents: DATABASE_VISION.md, ../adr/README.md

Purpose: record fixed technology decisions for implementation.

Accepted backend stack:

- Framework: Laravel 12.
- PHP: 8.3+.
- Database: MySQL 8.
- Cache: Redis 7.
- Queue driver: Redis.
- Asset bundler: Vite.
- Frontend rendering: Laravel Blade.
- Admin panel: Custom Laravel Blade Admin Panel inside the Laravel app.
- Admin UI template: Tabler Bootstrap 5 open-source template.
- CSS framework: Bootstrap 5 via Tabler.
- JavaScript: minimal vanilla JavaScript.
- Deployment: Docker-based local and production-ready structure.

Rejected: Filament, Laravel Nova, Backpack, paid admin panel packages, React, Vue, Inertia and SPA architecture for the first version.

Decision rule: Tabler is only a UI/template layer. Business logic belongs in Services, Actions or Domain code, never in Blade.
