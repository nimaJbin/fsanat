# Architecture

Document ID: ARCH-COMPAT-ARCHITECTURE
Status: Accepted
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/architecture/ARCHITECTURE.md
Dependencies: SYSTEM_ARCHITECTURE.md, TECH_STACK_DECISIONS.md
Next Documents: SYSTEM_ARCHITECTURE.md, TECH_STACK_DECISIONS.md

This compatibility document exists because some task prompts reference `architecture/ARCHITECTURE.md`. The canonical architecture file is `SYSTEM_ARCHITECTURE.md`.

Accepted decision: fsanat uses Laravel 12, PHP 8.3+, MySQL 8, Redis 7, Redis queues, Vite, Laravel Blade, Docker and a Custom Laravel Blade Admin Panel.

Admin UI direction: use the open-source Tabler Bootstrap 5 template and minimal vanilla JavaScript. Tabler is only a UI/template layer.

Rejected for version 1: Filament, Nova, Backpack, paid admin packages, React, Vue, Inertia and SPA architecture.
