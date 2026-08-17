# Graph Report - fsanat  (2026-08-18)

## Corpus Check
- 142 files · ~56,882 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 352 nodes · 418 edges · 50 communities (36 shown, 14 thin omitted)
- Extraction: 97% EXTRACTED · 3% INFERRED · 0% AMBIGUOUS · INFERRED: 12 edges (avg confidence: 0.91)
- Token cost: 30,520 input · 22,760 output

## Community Hubs (Navigation)
- PHP Composer Dependencies
- Admin Authentication Flow
- Legacy Commerce Systems
- Domain Development Catalogs
- Architecture and Agent Rules
- Frontend NPM Dependencies
- Legacy Project Documentation
- Composer Lifecycle Scripts
- Database Migrations
- User Model and Seeding
- Admin UI Governance
- Commerce Fulfillment Systems
- Business Journeys and Rules
- Implementation Decisions and History
- Persistence Configuration
- Laravel Feature Tests
- Application Service Provider
- Logging Configuration
- User Roles
- Quality and Acceptance
- PHP Unit Tests
- Delivery Roadmap
- Artisan Console
- Container Entrypoint
- Admin Technology Stack
- Controller Architecture Rules
- Legacy System Index
- Legacy UI Guidance
- Crawler Policy
- Docker Services
- Database Documentation
- Deployment Documentation
- Prompt Documentation
- Legacy Roadmap Index

## God Nodes (most connected - your core abstractions)
1. `Migration Report` - 17 edges
2. `معرفی پروژه` - 13 edges
3. `Document Graph` - 12 edges
4. `Execution Docs` - 9 edges
5. `require-dev` - 8 edges
6. `Document Rules` - 8 edges
7. `Order System` - 8 edges
8. `Stability Before Expansion` - 8 edges
9. `Controller` - 7 edges
10. `AdminLoginRequest` - 7 edges

## Surprising Connections (you probably didn't know these)
- `Page Catalog` --references--> `معرفی پروژه`  [EXTRACTED]
  execution-docs/ui/PAGE_CATALOG.md → project-wiki/architecture/ARCHITECTURE.md
- `Agent Instructions` --references--> `ADR Index`  [EXTRACTED]
  AGENTS.md → execution-docs/adr/README.md
- `Agent Instructions` --references--> `Document Graph`  [EXTRACTED]
  AGENTS.md → execution-docs/DOCUMENT_GRAPH.md
- `Agent Instructions` --references--> `Execution Docs`  [EXTRACTED]
  AGENTS.md → execution-docs/README.md
- `Agent Instructions` --references--> `README`  [EXTRACTED]
  AGENTS.md → README.md

## Import Cycles
- None detected.

## Hyperedges (group relationships)
- **Commerce Domain Definition** — execution_docs_core_product_scope_in_scope_commerce_capabilities, execution_docs_domain_entity_catalog_commerce_entities, execution_docs_domain_relationship_matrix_commerce_entity_relationships, execution_docs_domain_field_matrix_field_approval_contract [INFERRED 0.85]
- **Event-Driven Background Operations** — execution_docs_development_event_catalog_commerce_domain_events, execution_docs_development_queue_catalog_background_work_contract, execution_docs_development_automation_catalog_workflow_automation_candidates [INFERRED 0.85]
- **Controlled Commerce Workflows** — execution_docs_core_business_rules_commerce_business_rules, execution_docs_domain_enum_catalog_workflow_enums, execution_docs_domain_state_machine_catalog_commerce_lifecycles [INFERRED 0.85]
- **Commerce Checkout Flow** — execution_docs_systems_product_system_product_system, execution_docs_systems_inventory_system_inventory_system, execution_docs_systems_order_system_order_system, execution_docs_systems_payment_system_payment_system [EXTRACTED 1.00]
- **Order Fulfillment Flow** — execution_docs_systems_order_system_order_system, execution_docs_systems_inventory_system_inventory_system, execution_docs_systems_shipping_system_shipping_system, execution_docs_systems_notification_system_notification_system [EXTRACTED 1.00]
- **UI Governance System** — execution_docs_ui_design_system_design_system, execution_docs_ui_design_tokens_design_tokens, execution_docs_ui_component_standards_component_standards [EXTRACTED 1.00]
- **Core Commerce Workflow** — project_wiki_systems_product_system_extensible_product_model, project_wiki_systems_inventory_system_website_inventory_control, project_wiki_systems_order_workflow_auditable_order_lifecycle [INFERRED 0.85]
- **Financial Traceability** — project_wiki_systems_order_workflow_auditable_order_lifecycle, project_wiki_systems_profit_calculation_system_website_profit_calculation, project_wiki_systems_wallet_system_ledger_based_wallet, project_wiki_systems_reporting_system_traceable_operational_reporting [INFERRED 0.85]
- **Operational Safeguards** — project_wiki_systems_auth_and_permission_system_permission_aware_access_control, project_wiki_systems_dynamic_freeze_system_scoped_operational_freeze, project_wiki_systems_import_pipeline_system_reviewable_import_pipeline [INFERRED 0.75]

## Communities (50 total, 14 thin omitted)

### Community 0 - "PHP Composer Dependencies"
Cohesion: 0.05
Nodes (42): pestphp/pest-plugin, php-http/discovery, autoload, autoload-dev, psr-4, psr-4, dev-master, config (+34 more)

### Community 1 - "Admin Authentication Flow"
Cohesion: 0.09
Nodes (18): LoginAdmin, LogoutAdmin, AdminAuthenticatedSessionController, DashboardController, Controller, HomeController, AdminLoginRequest, Illuminate\Contracts\View\View (+10 more)

### Community 2 - "Legacy Commerce Systems"
Cohesion: 0.14
Nodes (24): Roadmap, Stability Before Expansion, Auth And Permission System, Permission-Aware Access Control, Category And Taxonomy System, Flexible Product Discovery, Dynamic Freeze System, Scoped Operational Freeze (+16 more)

### Community 3 - "Domain Development Catalogs"
Cohesion: 0.11
Nodes (22): Shared Commerce Language, System Glossary, API Catalog, API Readiness Contract, Automation Catalog, Workflow Automation Candidates, Commerce Domain Events, Event Catalog (+14 more)

### Community 4 - "Architecture and Agent Rules"
Cohesion: 0.31
Nodes (19): Agent Instructions, ADR Index, Architecture, Database Vision, Module Map, System Architecture, Tech Stack Decisions, Task Breakdown (+11 more)

### Community 5 - "Frontend NPM Dependencies"
Cohesion: 0.11
Nodes (18): axios, concurrently, laravel-vite-plugin, devDependencies, axios, concurrently, laravel-vite-plugin, tailwindcss (+10 more)

### Community 6 - "Legacy Project Documentation"
Cohesion: 0.17
Nodes (16): Form Catalog, Page Catalog, معرفی پروژه, Architecture Documentation, Changelog Documentation, Admin Panel Structure, Business Rules, Database Vision (+8 more)

### Community 7 - "Composer Lifecycle Scripts"
Cohesion: 0.13
Nodes (15): scripts, dev, post-autoload-dump, post-create-project-cmd, post-root-package-install, post-update-cmd, Composer\\Config::disableProcessTimeout, Illuminate\\Foundation\\ComposerScripts::postAutoloadDump (+7 more)

### Community 8 - "Database Migrations"
Cohesion: 0.19
Nodes (3): Illuminate\Database\Migrations\Migration, Illuminate\Database\Schema\Blueprint, Illuminate\Support\Facades\Schema

### Community 9 - "User Model and Seeding"
Cohesion: 0.20
Nodes (8): User, AdminUserSeeder, DatabaseSeeder, Illuminate\Database\Eloquent\Factories\HasFactory, Illuminate\Database\Seeder, Illuminate\Foundation\Auth\User, Illuminate\Notifications\Notifiable, Illuminate\Support\Facades\Hash

### Community 10 - "Admin UI Governance"
Cohesion: 0.19
Nodes (14): Admin Panel System, Removable and Replaceable Admin Code, Identity and Access Boundaries, Auth System, Customer System, Component Standards, Interaction State Coverage, Shared Component Reuse (+6 more)

### Community 11 - "Commerce Fulfillment Systems"
Cohesion: 0.27
Nodes (13): Customer Checkout Scenario Group, Order Fulfillment Scenario Group, Category System, Inventory System, Stock Lifecycle, Event-Driven Notifications, Notification System, Order Lifecycle (+5 more)

### Community 12 - "Business Journeys and Rules"
Cohesion: 0.20
Nodes (11): Admin Catalog Management Journey, Admin Order Operations Journey, Customer Commerce Journey, User Journey Map, Business Rules, Commerce Business Rules, Deferred Capabilities, In-Scope Commerce Capabilities (+3 more)

### Community 13 - "Implementation Decisions and History"
Cohesion: 0.20
Nodes (11): Application Skeleton and Admin Authentication, Laravel Docker Bootstrap, Phase Implementation Log, Custom Laravel Admin Decision, Decision Log, Standard Laravel Structure Decision, Execution-Ready Work, Project Rules (+3 more)

### Community 14 - "Persistence Configuration"
Cohesion: 0.24
Nodes (4): UserFactory, Illuminate\Database\Eloquent\Factories\Factory, Illuminate\Support\Str, static

### Community 15 - "Laravel Feature Tests"
Cohesion: 0.40
Nodes (3): Illuminate\Foundation\Testing\TestCase, ExampleTest, TestCase

### Community 17 - "Logging Configuration"
Cohesion: 0.40
Nodes (4): Monolog\Handler\NullHandler, Monolog\Handler\StreamHandler, Monolog\Handler\SyslogUdpHandler, Monolog\Processor\PsrLogMessageProcessor

### Community 18 - "User Roles"
Cohesion: 0.40
Nodes (5): Admin, Customer, Guest, Owner, Role Matrix

### Community 19 - "Quality and Acceptance"
Cohesion: 0.40
Nodes (5): Task Breakdown, Implementation Task Traceability, Acceptance Criteria, Allowed and Denied Permission Cases, Test Scenarios

### Community 21 - "Delivery Roadmap"
Cohesion: 0.67
Nodes (3): Milestone Completion Rule, Milestones, Roadmap

## Knowledge Gaps
- **109 isolated node(s):** `$schema`, `name`, `type`, `description`, `laravel` (+104 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **14 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `scripts` connect `Composer Lifecycle Scripts` to `PHP Composer Dependencies`?**
  _High betweenness centrality (0.011) - this node is a cross-community bridge._
- **What connects `$schema`, `name`, `type` to the rest of the system?**
  _109 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `PHP Composer Dependencies` be split into smaller, more focused modules?**
  _Cohesion score 0.046511627906976744 - nodes in this community are weakly interconnected._
- **Should `Admin Authentication Flow` be split into smaller, more focused modules?**
  _Cohesion score 0.08888888888888889 - nodes in this community are weakly interconnected._
- **Should `Legacy Commerce Systems` be split into smaller, more focused modules?**
  _Cohesion score 0.14492753623188406 - nodes in this community are weakly interconnected._
- **Should `Domain Development Catalogs` be split into smaller, more focused modules?**
  _Cohesion score 0.10822510822510822 - nodes in this community are weakly interconnected._
- **Should `Frontend NPM Dependencies` be split into smaller, more focused modules?**
  _Cohesion score 0.10526315789473684 - nodes in this community are weakly interconnected._