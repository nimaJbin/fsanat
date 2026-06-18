# System Architecture

Document ID: ARCH-SYSTEM-ARCHITECTURE
Status: Accepted
Version: 0.2
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/architecture/ARCHITECTURE.md
Dependencies: ../core/PROJECT_VISION.md
Next Documents: MODULE_MAP.md, TECH_STACK_DECISIONS.md

Purpose: provide the high-level structure for implementation planning.

Current direction: the platform is a Laravel 12 modular commerce application using PHP 8.3+, MySQL 8, Redis 7, Redis queues, Vite, Blade and Docker. Core commerce capabilities remain separated by responsibility: catalog, inventory, order, payment, customer, admin and notifications.

Admin architecture: the admin panel is a Custom Laravel Blade Admin Panel using Tabler Bootstrap 5. Filament, Nova, Backpack, paid admin packages, React, Vue, Inertia and SPA architecture are rejected for version 1.

Architecture rule: controllers stay thin; validation uses Form Requests; authorization uses Policies and Gates; business logic belongs in Services, Actions or Domain layer. Blade files must not contain business logic.

Open migration work: review the preserved architecture text after encoding validation and migrate stable decisions into module and tech-stack documents.
