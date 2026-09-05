# Graph Report - fsanat  (2026-09-05)

## Corpus Check
- 192 files · ~69,017 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 1212 nodes · 1344 edges · 119 communities (104 shown, 15 thin omitted)
- Extraction: 98% EXTRACTED · 2% INFERRED · 0% AMBIGUOUS · INFERRED: 26 edges (avg confidence: 0.85)
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `a0b3f870`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- composer.json
- Illuminate\Http\Request
- Ticketing System
- Field Matrix
- Execution Docs
- package.json
- معرفی پروژه
- scripts
- Illuminate\Support\Facades\Schema
- User
- Admin Panel System
- Notification System
- Product Scope
- Phase Implementation Log
- UserFactory.php
- Phase 1 — Frontend Foundation, Admin Experience and Storefront Home
- logging.php
- Role Matrix
- Acceptance Criteria
- ExampleTest
- Milestones
- console.php
- entrypoint.sh
- Fixed Technology Stack
- Project Rules
- Systems Documentation
- UI/UX Documentation
- Crawler Access Policy
- admin.js
- Docker Compose Stack
- database/README.md
- deployment/README.md
- prompts/README.md
- roadmap/README.md
- Implementation Log
- Auth System
- authenticated.blade.php
- Admin Panel Structure
- Product System
- storefront.blade.php
- Order Workflow
- Reporting System
- Import Pipeline System
- Business Rules
- Database Vision
- 4. Initial Project Decisions
- Dynamic Freeze System
- Inventory System
- Profit Calculation System
- Wallet System
- System Glossary
- Product Scope
- Tech Stack Decisions
- Roadmap
- Payment System
- Auth And Permission System
- System Name
- Category System
- Inventory System
- Order System
- Product System
- Migration Report
- Project Vision
- project-wiki/architecture/ARCHITECTURE.md
- Document Graph
- Decision Log
- project-wiki/core/PROJECT_RULES.md
- require-dev
- Agent Instructions
- config
- Document Title
- psr-4
- extra
- require
- post-create-project-cmd
- autoload-dev
- Order Lifecycle

## God Nodes (most connected - your core abstractions)
1. `User` - 30 edges
2. `Admin Panel Structure` - 28 edges
3. `Migration Report` - 24 edges
4. `Product System` - 24 edges
5. `Order Workflow` - 23 edges
6. `Reporting System` - 23 edges
7. `Database Vision` - 23 edges
8. `Order System` - 22 edges
9. `Ticketing System` - 22 edges
10. `Import Pipeline System` - 22 edges

## Surprising Connections (you probably didn't know these)
- `Agent Instructions` --references--> `ADR Index`  [EXTRACTED]
  AGENTS.md → execution-docs/adr/README.md
- `Agent Instructions` --references--> `Document Graph`  [EXTRACTED]
  AGENTS.md → execution-docs/DOCUMENT_GRAPH.md
- `Agent Instructions` --references--> `Execution Docs`  [EXTRACTED]
  AGENTS.md → execution-docs/README.md
- `Agent Instructions` --references--> `README`  [EXTRACTED]
  AGENTS.md → README.md
- `Migration Report` --references--> `README`  [EXTRACTED]
  execution-docs/MIGRATION_REPORT.md → README.md

## Import Cycles
- None detected.

## Hyperedges (group relationships)
- **Commerce Checkout Flow** — execution_docs_systems_product_system_product_system, execution_docs_systems_inventory_system_inventory_system, execution_docs_systems_order_system_order_system, execution_docs_systems_payment_system_payment_system [EXTRACTED 1.00]
- **Order Fulfillment Flow** — execution_docs_systems_order_system_order_system, execution_docs_systems_inventory_system_inventory_system, execution_docs_systems_shipping_system_shipping_system, execution_docs_systems_notification_system_notification_system [EXTRACTED 1.00]
- **UI Governance System** — execution_docs_ui_design_system_design_system, execution_docs_ui_design_tokens_design_tokens, execution_docs_ui_component_standards_component_standards [EXTRACTED 1.00]
- **Operational Safeguards** — project_wiki_systems_auth_and_permission_system_permission_aware_access_control, project_wiki_systems_dynamic_freeze_system_scoped_operational_freeze, project_wiki_systems_import_pipeline_system_reviewable_import_pipeline [INFERRED 0.75]
- **Commerce Domain Definition** — execution_docs_core_product_scope_in_scope_commerce_capabilities, execution_docs_domain_entity_catalog_commerce_entities, execution_docs_domain_relationship_matrix_commerce_entity_relationships, execution_docs_domain_field_matrix_field_approval_contract [INFERRED 0.85]
- **Controlled Commerce Workflows** — execution_docs_core_business_rules_commerce_business_rules, execution_docs_domain_enum_catalog_workflow_enums, execution_docs_domain_state_machine_catalog_commerce_lifecycles [INFERRED 0.85]
- **Core Commerce Workflow** — project_wiki_systems_product_system_extensible_product_model, project_wiki_systems_inventory_system_website_inventory_control, project_wiki_systems_order_workflow_auditable_order_lifecycle [INFERRED 0.85]
- **Event-Driven Background Operations** — execution_docs_development_event_catalog_commerce_domain_events, execution_docs_development_queue_catalog_background_work_contract, execution_docs_development_automation_catalog_workflow_automation_candidates [INFERRED 0.85]
- **Financial Traceability** — project_wiki_systems_order_workflow_auditable_order_lifecycle, project_wiki_systems_profit_calculation_system_website_profit_calculation, project_wiki_systems_wallet_system_ledger_based_wallet, project_wiki_systems_reporting_system_traceable_operational_reporting [INFERRED 0.85]

## Communities (119 total, 15 thin omitted)

### Community 0 - "composer.json"
Cohesion: 0.18
Nodes (10): description, keywords, license, minimum-stability, name, prefer-stable, $schema, type (+2 more)

### Community 1 - "Illuminate\Http\Request"
Cohesion: 0.05
Nodes (30): LoginAdmin, LogoutAdmin, UpdateAdminPassword, AdminAuthenticatedSessionController, DashboardController, PasswordController, Controller, HomeController (+22 more)

### Community 2 - "Ticketing System"
Cohesion: 0.05
Nodes (50): Stability Before Expansion, Permission-Aware Access Control, 10. Import Pipeline Compatibility, 11. Reporting Relation, 12. Dynamic Freeze Relation, 13. Future AI Relation, 14. Out of Scope, 15. Open Decisions (+42 more)

### Community 3 - "Field Matrix"
Cohesion: 0.07
Nodes (22): Shared Commerce Language, System Glossary, API Catalog, API Readiness Contract, Automation Catalog, Workflow Automation Candidates, Commerce Domain Events, Event Catalog (+14 more)

### Community 4 - "Execution Docs"
Cohesion: 0.26
Nodes (7): ADR Index, Database Vision, Tech Stack Decisions, Document Rules, Migration Plan, Execution Docs, README

### Community 5 - "package.json"
Cohesion: 0.08
Nodes (23): axios, bootstrap, concurrently, laravel-vite-plugin, dependencies, bootstrap, @tabler/core, @tabler/icons-webfont (+15 more)

### Community 6 - "معرفی پروژه"
Cohesion: 0.13
Nodes (9): Form Catalog, Page Catalog, معرفی پروژه, Architecture Documentation, Changelog Documentation, Core Documentation, Documentation Rules, Fsanat Documentation (+1 more)

### Community 7 - "scripts"
Cohesion: 0.18
Nodes (11): scripts, dev, post-autoload-dump, post-root-package-install, post-update-cmd, Composer\\Config::disableProcessTimeout, Illuminate\\Foundation\\ComposerScripts::postAutoloadDump, npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\" \"php artisan pail --timeout=0\" \"npm run dev\" --names=server,queue,logs,vite (+3 more)

### Community 8 - "Illuminate\Support\Facades\Schema"
Cohesion: 0.09
Nodes (3): Illuminate\Database\Migrations\Migration, Illuminate\Database\Schema\Blueprint, Illuminate\Support\Facades\Schema

### Community 9 - "User"
Cohesion: 0.05
Nodes (23): User, AdminUserSeeder, DatabaseSeeder, Illuminate\Database\Eloquent\Factories\HasFactory, Illuminate\Database\Seeder, Illuminate\Foundation\Auth\User, Illuminate\Foundation\Testing\RefreshDatabase, Illuminate\Foundation\Testing\TestCase (+15 more)

### Community 10 - "Admin Panel System"
Cohesion: 0.07
Nodes (27): 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors, 4. User Stories (+19 more)

### Community 11 - "Notification System"
Cohesion: 0.06
Nodes (30): Order Fulfillment Scenario Group, 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors (+22 more)

### Community 12 - "Product Scope"
Cohesion: 0.14
Nodes (11): Admin Catalog Management Journey, Admin Order Operations Journey, Customer Commerce Journey, User Journey Map, Business Rules, Commerce Business Rules, Deferred Capabilities, In-Scope Commerce Capabilities (+3 more)

### Community 13 - "Phase Implementation Log"
Cohesion: 0.12
Nodes (14): Application Skeleton and Admin Authentication, Frontend Phase 1 - Foundation, Admin and Storefront, Laravel Docker Bootstrap, Phase 1 - Laravel Docker Bootstrap, Phase 2 - Application Skeleton & Admin Authentication, Phase Implementation Log, Custom Laravel Admin Decision, Decision Log (+6 more)

### Community 14 - "UserFactory.php"
Cohesion: 0.24
Nodes (4): UserFactory, Illuminate\Database\Eloquent\Factories\Factory, Illuminate\Support\Str, static

### Community 15 - "Phase 1 — Frontend Foundation, Admin Experience and Storefront Home"
Cohesion: 0.04
Nodes (45): 10. Phase 1.6 — Public Storefront Homepage, 11. Phase 1.7 — Quality, Verification and Handoff, 12. Phase-Level Definition of Done, 13. Out of Scope, 14. Change Control, 15. Shared Component API Catalog, 16. Component Usage Rules, 1. Purpose (+37 more)

### Community 17 - "logging.php"
Cohesion: 0.40
Nodes (4): Monolog\Handler\NullHandler, Monolog\Handler\StreamHandler, Monolog\Handler\SyslogUdpHandler, Monolog\Processor\PsrLogMessageProcessor

### Community 18 - "Role Matrix"
Cohesion: 0.33
Nodes (5): Admin, Customer, Guest, Owner, Role Matrix

### Community 19 - "Acceptance Criteria"
Cohesion: 0.25
Nodes (5): Task Breakdown, Implementation Task Traceability, Acceptance Criteria, Allowed and Denied Permission Cases, Test Scenarios

### Community 21 - "Milestones"
Cohesion: 0.40
Nodes (3): Milestone Completion Rule, Milestones, Roadmap

### Community 50 - "Implementation Log"
Cohesion: 0.07
Nodes (26): 2026-08-18 — Phase 1.1 verified, 2026-08-18 — Phase 1.2 implemented, runtime verification pending, 2026-08-18 — Phase 1.3 implemented, runtime and visual verification pending, 2026-08-18 — Phase 1.4 implemented, runtime and visual verification pending, 2026-08-18 — Phase 1.5 implemented, runtime and visual verification pending, 2026-08-18 — Phase 1.6 implemented and verified, 2026-08-18 — Phase 1.7 verification loop, 2026-08-18 — Phase 1 closed at 100% (+18 more)

### Community 51 - "Auth System"
Cohesion: 0.06
Nodes (29): 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors, 4. User Stories (+21 more)

### Community 54 - "authenticated.blade.php"
Cohesion: 0.50
Nodes (3): admin.partials.flash, admin.partials.sidebar, admin.partials.topbar

### Community 74 - "Admin Panel Structure"
Cohesion: 0.07
Nodes (27): 10. Order Management Structure, 11. Approval Workflow Structure, 12. Dynamic Freeze Structure, 13. Bulk Operation Structure, 14. Import Pipeline Structure, 15. Financial & Profit Structure, 16. Wallet Structure, 17. Ticketing Structure (+19 more)

### Community 75 - "Product System"
Cohesion: 0.08
Nodes (23): 10. Base Cost Rules, 11. Inventory Relation, 12. Media & Image Rules, 13. SEO Rules, 14. Category & Taxonomy Relation, 15. Import Pipeline Compatibility, 16. Order Workflow Relation, 17. Dynamic Freeze Relation (+15 more)

### Community 81 - "Order Workflow"
Cohesion: 0.09
Nodes (22): 10. Expiration & Cancellation Rules, 11. Dynamic Freeze Relation, 12. Operational Logging, 13. Customer Visibility, 14. Admin Operational Flow, 15. Future Wallet Relation, 16. Future Digital Product Relation, 17. Notification Relation (+14 more)

### Community 82 - "Reporting System"
Cohesion: 0.09
Nodes (22): 10. Inventory Relation, 11. Order Relation, 12. Profit Relation, 13. Wallet Relation, 14. Import Pipeline Relation, 15. Dynamic Freeze Relation, 16. Notification Relation, 17. Future AI Relation (+14 more)

### Community 83 - "Import Pipeline System"
Cohesion: 0.09
Nodes (21): 10. Import Sessions, 11. Queue & Background Processing, 12. Taxonomy Relation, 13. Inventory Relation, 14. SEO Relation, 15. Admin Panel Relation, 16. Operational Logging, 17. Future AI Relation (+13 more)

### Community 84 - "Business Rules"
Cohesion: 0.10
Nodes (20): 10. Customer Rules, 11. Wallet & Credit Rules, 12. Ticketing & Support Rules, 13. Product Import Rules, 14. Digital Product Rules, 15. Scope Operation Rules, 16. Documentation Rules, 17. Future Business Expansion (+12 more)

### Community 85 - "Database Vision"
Cohesion: 0.10
Nodes (20): 10. Wallet Entities, 11. Ticketing Entities, 12. Import Pipeline Entities, 13. Reporting & Audit Entities, 14. Naming Conventions, 15. Relationship Philosophy, 16. Financial Consistency Rules, 17. Scalability Direction (+12 more)

### Community 86 - "4. Initial Project Decisions"
Cohesion: 0.10
Nodes (21): 4. Initial Project Decisions, DECISION-001 - Documentation-first architecture, DECISION-002 - English documentation policy, DECISION-003 - Modular architecture direction, DECISION-004 - Docker-first development, DECISION-005 - Laravel-first backend strategy, DECISION-006 - Node.js reserved for specialized future services, DECISION-007 - No realtime-first architecture (+13 more)

### Community 87 - "Dynamic Freeze System"
Cohesion: 0.10
Nodes (20): 10. Inventory Relation, 11. Order Workflow Relation, 12. Admin Panel Relation, 13. Auditability, 14. Notification Relation, 15. Reporting Relation, 16. Future AI Relation, 17. Out of Scope (+12 more)

### Community 88 - "Inventory System"
Cohesion: 0.10
Nodes (20): 10. Inventory Approval Workflow, 11. Order Workflow Relation, 12. Product System Relation, 13. Profit Calculation Relation, 14. Dynamic Freeze Relation, 15. Import Pipeline Relation, 16. Reporting Relation, 17. Out of Scope (+12 more)

### Community 89 - "Profit Calculation System"
Cohesion: 0.10
Nodes (20): 10. Manual Cost Registration, 11. Wallet Relation, 12. Reporting Philosophy, 13. Profit Settlement Tracking, 14. Auditability, 15. Hesabfa Relation, 16. Future AI Relation, 17. Out of Scope (+12 more)

### Community 90 - "Wallet System"
Cohesion: 0.10
Nodes (19): 10. Permission & Security Relation, 11. Auditability, 12. Reporting Relation, 13. Future Subscription Relation, 14. Future AI Relation, 15. Performance Philosophy, 16. Out of Scope, 17. Open Decisions (+11 more)

### Community 91 - "System Glossary"
Cohesion: 0.11
Nodes (18): 10. Documentation Terms, 11. Architecture Terms, 12. AI & Development Terms, 13. Naming Conventions, 14. Reserved Terms, 15. Deprecated / Avoided Terms, 16. Future Terminology, 17. Changelog (+10 more)

### Community 92 - "Product Scope"
Cohesion: 0.11
Nodes (17): 10. Commerce & Financial Scope, 11. Inventory & Operational Scope, 12. User Experience Scope, 13. Technical Scope, 14. Documentation Scope, 15. Future Research Areas, 16. Changelog, 1. Scope Overview (+9 more)

### Community 93 - "Tech Stack Decisions"
Cohesion: 0.11
Nodes (17): 10. Docker & Deployment Direction, 11. Realtime Strategy, 12. External Integrations, 13. Security & Operations, 14. Future Technical Options, 15. Decisions Not Final Yet, 16. Changelog, 1. Purpose (+9 more)

### Community 94 - "Roadmap"
Cohesion: 0.11
Nodes (17): 10. Technical Roadmap, 11. Documentation Roadmap, 12. Operational Roadmap, 13. Open Research Areas, 14. Out of Scope, 15. Open Decisions, 16. Changelog, 1. Purpose (+9 more)

### Community 95 - "Payment System"
Cohesion: 0.12
Nodes (15): Customer Checkout Scenario Group, 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors (+7 more)

### Community 96 - "Auth And Permission System"
Cohesion: 0.12
Nodes (15): 10. Audit & Activity Logging, 11. Future Subscription Access, 12. Future Security Expansion, 13. Open Decisions, 14. Changelog, 1. Purpose, 2. Authentication Philosophy, 3. Authorization Philosophy (+7 more)

### Community 97 - "System Name"
Cohesion: 0.13
Nodes (14): 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors, 4. User Stories (+6 more)

### Community 98 - "Category System"
Cohesion: 0.13
Nodes (14): 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors, 4. User Stories (+6 more)

### Community 99 - "Inventory System"
Cohesion: 0.13
Nodes (14): 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors, 4. User Stories (+6 more)

### Community 100 - "Order System"
Cohesion: 0.13
Nodes (14): 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors, 4. User Stories (+6 more)

### Community 101 - "Product System"
Cohesion: 0.13
Nodes (14): 10. Events, 11. Permissions, 12. Edge Cases, 13. Future Considerations, 1. Purpose, 2. Business Goal, 3. Actors, 4. User Stories (+6 more)

### Community 102 - "Migration Report"
Cohesion: 0.15
Nodes (10): Business Process Map, Permission Matrix, Changed/Created Files, Links Changed, Manual Review Needed, Migration Report, Suggested Next Step, What Was Created (+2 more)

### Community 103 - "Project Vision"
Cohesion: 0.14
Nodes (13): 10. Out of Scope, 11. Documentation Policy, 12. Changelog, 1. Overview, 2. Product Mission, 3. Long-Term Vision, 4. Business Direction, 5. Partnership Context (+5 more)

### Community 104 - "project-wiki/architecture/ARCHITECTURE.md"
Cohesion: 0.18
Nodes (10): Changelog, Nima, Peyman, اصول معماری, سیستم Targeting Engine, سیستم محاسبه سود, مالکیت‌ها, ماژول‌های اصلی (+2 more)

### Community 105 - "Document Graph"
Cohesion: 0.27
Nodes (5): Architecture, Module Map, System Architecture, Task Breakdown, Document Graph

### Community 106 - "Decision Log"
Cohesion: 0.22
Nodes (8): 1. Purpose, 2. Decision Logging Rules, 3. Decision Status Types, 5. Future Decision Guidelines, 6. Open Decisions, 7. Deprecated Decisions, 8. Changelog, Decision Log

### Community 107 - "project-wiki/core/PROJECT_RULES.md"
Cohesion: 0.22
Nodes (8): Changelog, Owner Draft Rules, زبان مستندات, قوانین تغییر مستندات, قوانین مدیریت تغییر, قوانین معماری, قوانین منطق مالی, قوانین کدنویسی

### Community 108 - "require-dev"
Cohesion: 0.25
Nodes (8): require-dev, fakerphp/faker, laravel/pail, laravel/pint, laravel/sail, mockery/mockery, nunomaduro/collision, phpunit/phpunit

### Community 109 - "Agent Instructions"
Cohesion: 0.29
Nodes (6): Agent Instructions, Application structure, Enforcement, graphify, Product delivery constraints, Required reading

### Community 110 - "config"
Cohesion: 0.29
Nodes (7): pestphp/pest-plugin, php-http/discovery, config, allow-plugins, optimize-autoloader, preferred-install, sort-packages

### Community 111 - "Document Title"
Cohesion: 0.29
Nodes (6): Current Truth, Document Title, Migration Notes, Open Questions, Purpose, Update Rules

### Community 112 - "psr-4"
Cohesion: 0.40
Nodes (5): autoload, psr-4, App\\, Database\\Factories\\, Database\\Seeders\\

### Community 113 - "extra"
Cohesion: 0.40
Nodes (5): dev-master, extra, branch-alias, laravel, dont-discover

### Community 114 - "require"
Cohesion: 0.50
Nodes (4): require, laravel/framework, laravel/tinker, php

### Community 115 - "post-create-project-cmd"
Cohesion: 0.50
Nodes (4): post-create-project-cmd, @php artisan key:generate --ansi, @php artisan migrate --graceful --ansi, @php -r \"file_exists('database/database.sqlite') || touch('database/database.sqlite');\

### Community 116 - "autoload-dev"
Cohesion: 0.67
Nodes (3): autoload-dev, psr-4, Tests\\

### Community 117 - "Order Lifecycle"
Cohesion: 0.67
Nodes (3): Stock Lifecycle, Order Lifecycle, Valid Payment State

## Knowledge Gaps
- **706 isolated node(s):** `Product delivery constraints`, `Required reading`, `Enforcement`, `Application structure`, `graphify` (+701 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **15 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `Extensible Product Model` connect `Ticketing System` to `Product System`?**
  _High betweenness centrality (0.016) - this node is a cross-community bridge._
- **Why does `Auditable Order Lifecycle` connect `Ticketing System` to `Order Workflow`?**
  _High betweenness centrality (0.015) - this node is a cross-community bridge._
- **Why does `معرفی پروژه` connect `معرفی پروژه` to `Project Vision`, `project-wiki/architecture/ARCHITECTURE.md`, `Admin Panel Structure`, `Decision Log`, `project-wiki/core/PROJECT_RULES.md`, `Database Vision`, `System Glossary`, `Product Scope`, `Tech Stack Decisions`?**
  _High betweenness centrality (0.015) - this node is a cross-community bridge._
- **Are the 14 inferred relationships involving `User` (e.g. with `.test_customer_receives_the_persian_forbidden_page()` and `.test_dashboard_marks_all_preview_information_honestly()`) actually correct?**
  _`User` has 14 INFERRED edges - model-reasoned connections that need verification._
- **What connects `Product delivery constraints`, `Required reading`, `Enforcement` to the rest of the system?**
  _706 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `Illuminate\Http\Request` be split into smaller, more focused modules?**
  _Cohesion score 0.05480769230769231 - nodes in this community are weakly interconnected._
- **Should `Ticketing System` be split into smaller, more focused modules?**
  _Cohesion score 0.05128205128205128 - nodes in this community are weakly interconnected._