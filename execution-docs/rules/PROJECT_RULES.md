# Project Rules

Document ID: RULES-PROJECT-RULES
Status: Accepted
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/PROJECT_RULES.md
Dependencies: ../core/PROJECT_RULES.md
Next Documents: ../architecture/TECH_STACK_DECISIONS.md, ../systems/ADMIN_PANEL_SYSTEM.md

This compatibility document points to the canonical rules file at `../core/PROJECT_RULES.md`.

Fixed stack rules: use Laravel 12, PHP 8.3+, MySQL 8, Redis 7, Redis queues, Vite, Blade, Docker and Tabler Bootstrap 5.

Admin rules: use a Custom Laravel Blade Admin Panel. Do not use Filament, Nova, Backpack, paid admin packages, React, Vue, Inertia or SPA architecture for version 1.

Implementation rules: controllers stay thin, validation uses Form Requests, authorization uses Policies and Gates, and business logic lives in Services, Actions or Domain layer. Blade files must not contain business logic.
