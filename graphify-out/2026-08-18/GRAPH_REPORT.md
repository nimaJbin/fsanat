# Graph Report - fsanat  (2026-08-18)

## Corpus Check
- 186 files · ~68,161 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 538 nodes · 634 edges · 81 communities (66 shown, 15 thin omitted)
- Extraction: 96% EXTRACTED · 4% INFERRED · 0% AMBIGUOUS · INFERRED: 26 edges (avg confidence: 0.85)
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `473ec099`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- composer.json
- Illuminate\Http\Request
- Stability Before Expansion
- Field Matrix
- Migration Report
- package.json
- معرفی پروژه
- scripts
- 0001_01_01_000000_create_users_table.php
- User
- Component Standards
- Order System
- Product Scope
- Custom Laravel Admin Decision
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
- System Source Documents
- Experience and Structure
- Crawler Access Policy
- admin.js
- Docker Compose Stack
- Database Documentation
- Deployment Documentation
- Prompts Documentation
- Roadmap Documentation
- Phase 1 — Live Implementation Status
- ComponentRenderTest
- authenticated.blade.php
- App\Http\Controllers\Controller
- TestCase
- storefront.blade.php

## God Nodes (most connected - your core abstractions)
1. `User` - 26 edges
2. `Phase 1 — Frontend Foundation, Admin Experience and Storefront Home` - 17 edges
3. `Migration Report` - 17 edges
4. `15. Shared Component API Catalog` - 15 edges
5. `AuthenticationTest` - 14 edges
6. `معرفی پروژه` - 13 edges
7. `Document Graph` - 12 edges
8. `Phase 1 — Live Implementation Status` - 10 edges
9. `Implementation Log` - 9 edges
10. `AdminShellTest` - 9 edges

## Surprising Connections (you probably didn't know these)
- `Page Catalog` --references--> `معرفی پروژه`  [EXTRACTED]
  execution-docs/ui/PAGE_CATALOG.md → project-wiki/architecture/ARCHITECTURE.md
- `Customer System` --references--> `Order System`  [EXTRACTED]
  execution-docs/systems/CUSTOMER_SYSTEM.md → execution-docs/systems/ORDER_SYSTEM.md
- `Task Promotion Gate` --semantically_similar_to--> `Execution-Ready Work`  [INFERRED] [semantically similar]
  execution-docs/execution/BACKLOG.md → execution-docs/core/PROJECT_RULES.md
- `Agent Instructions` --references--> `ADR Index`  [EXTRACTED]
  AGENTS.md → execution-docs/adr/README.md
- `Agent Instructions` --references--> `Document Graph`  [EXTRACTED]
  AGENTS.md → execution-docs/DOCUMENT_GRAPH.md

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

## Communities (81 total, 15 thin omitted)

### Community 0 - "composer.json"
Cohesion: 0.05
Nodes (42): pestphp/pest-plugin, php-http/discovery, autoload, autoload-dev, psr-4, psr-4, dev-master, config (+34 more)

### Community 1 - "Illuminate\Http\Request"
Cohesion: 0.07
Nodes (26): LoginAdmin, LogoutAdmin, UpdateAdminPassword, App\Http\Controllers\Admin\AdminAuthenticatedSessionController, AdminAuthenticatedSessionController, PasswordController, Controller, EnsureActiveStaff (+18 more)

### Community 2 - "Stability Before Expansion"
Cohesion: 0.14
Nodes (24): Roadmap, Stability Before Expansion, Auth And Permission System, Permission-Aware Access Control, Category And Taxonomy System, Flexible Product Discovery, Dynamic Freeze System, Scoped Operational Freeze (+16 more)

### Community 3 - "Field Matrix"
Cohesion: 0.11
Nodes (22): Shared Commerce Language, System Glossary, API Catalog, API Readiness Contract, Automation Catalog, Workflow Automation Candidates, Commerce Domain Events, Event Catalog (+14 more)

### Community 4 - "Migration Report"
Cohesion: 0.31
Nodes (19): Agent Instructions, ADR Index, Architecture, Database Vision, Module Map, System Architecture, Tech Stack Decisions, Task Breakdown (+11 more)

### Community 5 - "package.json"
Cohesion: 0.08
Nodes (23): axios, bootstrap, concurrently, laravel-vite-plugin, dependencies, bootstrap, @tabler/core, @tabler/icons-webfont (+15 more)

### Community 6 - "معرفی پروژه"
Cohesion: 0.17
Nodes (16): Form Catalog, Page Catalog, معرفی پروژه, Architecture Documentation, Changelog Documentation, Admin Panel Structure, Business Rules, Database Vision (+8 more)

### Community 7 - "scripts"
Cohesion: 0.13
Nodes (15): scripts, dev, post-autoload-dump, post-create-project-cmd, post-root-package-install, post-update-cmd, Composer\\Config::disableProcessTimeout, Illuminate\\Foundation\\ComposerScripts::postAutoloadDump (+7 more)

### Community 8 - "0001_01_01_000000_create_users_table.php"
Cohesion: 0.16
Nodes (3): Illuminate\Database\Migrations\Migration, Illuminate\Database\Schema\Blueprint, Illuminate\Support\Facades\Schema

### Community 9 - "User"
Cohesion: 0.07
Nodes (16): App\Enums\UserRole, App\Models\User, User, AdminUserSeeder, DatabaseSeeder, Illuminate\Database\Eloquent\Factories\HasFactory, Illuminate\Database\Seeder, Illuminate\Foundation\Auth\User (+8 more)

### Community 10 - "Component Standards"
Cohesion: 0.19
Nodes (14): Admin Panel System, Removable and Replaceable Admin Code, Identity and Access Boundaries, Auth System, Customer System, Component Standards, Interaction State Coverage, Shared Component Reuse (+6 more)

### Community 11 - "Order System"
Cohesion: 0.27
Nodes (13): Customer Checkout Scenario Group, Order Fulfillment Scenario Group, Category System, Inventory System, Stock Lifecycle, Event-Driven Notifications, Notification System, Order Lifecycle (+5 more)

### Community 12 - "Product Scope"
Cohesion: 0.20
Nodes (11): Admin Catalog Management Journey, Admin Order Operations Journey, Customer Commerce Journey, User Journey Map, Business Rules, Commerce Business Rules, Deferred Capabilities, In-Scope Commerce Capabilities (+3 more)

### Community 13 - "Custom Laravel Admin Decision"
Cohesion: 0.20
Nodes (11): Application Skeleton and Admin Authentication, Laravel Docker Bootstrap, Phase Implementation Log, Custom Laravel Admin Decision, Decision Log, Standard Laravel Structure Decision, Execution-Ready Work, Project Rules (+3 more)

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
Cohesion: 0.40
Nodes (5): Admin, Customer, Guest, Owner, Role Matrix

### Community 19 - "Acceptance Criteria"
Cohesion: 0.40
Nodes (5): Task Breakdown, Implementation Task Traceability, Acceptance Criteria, Allowed and Denied Permission Cases, Test Scenarios

### Community 21 - "Milestones"
Cohesion: 0.67
Nodes (3): Milestone Completion Rule, Milestones, Roadmap

### Community 50 - "Phase 1 — Live Implementation Status"
Cohesion: 0.08
Nodes (25): 2026-08-18 — Phase 1.1 verified, 2026-08-18 — Phase 1.2 implemented, runtime verification pending, 2026-08-18 — Phase 1.3 implemented, runtime and visual verification pending, 2026-08-18 — Phase 1.4 implemented, runtime and visual verification pending, 2026-08-18 — Phase 1.5 implemented, runtime and visual verification pending, 2026-08-18 — Phase 1.6 implemented and verified, 2026-08-18 — Phase 1.7 verification loop, 2026-08-18 — Phase tracking initialized (+17 more)

### Community 51 - "ComponentRenderTest"
Cohesion: 0.15
Nodes (6): AppServiceProvider, Illuminate\Support\Facades\Blade, Illuminate\Support\Facades\View, Illuminate\Support\ServiceProvider, Illuminate\Support\ViewErrorBag, ComponentRenderTest

### Community 54 - "authenticated.blade.php"
Cohesion: 0.50
Nodes (3): admin.partials.flash, admin.partials.sidebar, admin.partials.topbar

### Community 74 - "App\Http\Controllers\Controller"
Cohesion: 0.22
Nodes (6): DashboardController, App\Http\Controllers\Controller, HomeController, GetDashboardOverview, GetHomePagePreview, Illuminate\Contracts\View\View

### Community 75 - "TestCase"
Cohesion: 0.50
Nodes (3): Illuminate\Foundation\Testing\TestCase, ExampleTest, TestCase

## Knowledge Gaps
- **176 isolated node(s):** `Current Position`, `Progress Summary`, `Phase 1.1`, `Phase 1.2`, `Phase 1.3` (+171 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **15 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `User` connect `User` to `Illuminate\Http\Request`?**
  _High betweenness centrality (0.019) - this node is a cross-community bridge._
- **Why does `GetAdminNavigation` connect `Illuminate\Http\Request` to `ComponentRenderTest`?**
  _High betweenness centrality (0.006) - this node is a cross-community bridge._
- **Are the 14 inferred relationships involving `User` (e.g. with `.test_customer_receives_the_persian_forbidden_page()` and `.test_dashboard_marks_all_preview_information_honestly()`) actually correct?**
  _`User` has 14 INFERRED edges - model-reasoned connections that need verification._
- **What connects `Current Position`, `Progress Summary`, `Phase 1.1` to the rest of the system?**
  _176 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `composer.json` be split into smaller, more focused modules?**
  _Cohesion score 0.046511627906976744 - nodes in this community are weakly interconnected._
- **Should `Illuminate\Http\Request` be split into smaller, more focused modules?**
  _Cohesion score 0.0663265306122449 - nodes in this community are weakly interconnected._
- **Should `Stability Before Expansion` be split into smaller, more focused modules?**
  _Cohesion score 0.14492753623188406 - nodes in this community are weakly interconnected._