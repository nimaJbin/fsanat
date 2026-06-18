# Migration Report

Document ID: EXEC-MIGRATION-REPORT
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki
Dependencies: MIGRATION_PLAN.md
Next Documents: execution/BACKLOG.md, core/PROJECT_VISION.md

Length note: this report exceeds the normal target because the requested deliverable requires a full moved/created file inventory. Do not expand it further without approval.

## What Was Moved

Renamed `codex-doc/` to `project-wiki/` to preserve the existing documentation as raw project knowledge.

Backup list of moved files:
`README.md`; `architecture/ARCHITECTURE.md`; `architecture/README.md`; `changelog/README.md`; `core/ADMIN_PANEL_STRUCTURE.md`; `core/BUSINESS_RULES.md`; `core/DATABASE_VISION.md`; `core/DECISION_LOG.md`; `core/PRODUCT_SCOPE.md`; `core/PROJECT_RULES.md`; `core/PROJECT_VISION.md`; `core/README.md`; `core/SYSTEM_GLOSSARY.md`; `core/TECH_STACK_DECISIONS.md`; `database/README.md`; `deployment/README.md`; `prompts/README.md`; `roadmap/README.md`; `roadmap/ROADMAP.md`; `systems/AUTH_AND_PERMISSION_SYSTEM.md`; `systems/CATEGORY_AND_TAXONOMY_SYSTEM.md`; `systems/DYNAMIC_FREEZE_SYSTEM.md`; `systems/IMPORT_PIPELINE_SYSTEM.md`; `systems/INVENTORY_SYSTEM.md`; `systems/ORDER_WORKFLOW.md`; `systems/PRODUCT_SYSTEM.md`; `systems/PROFIT_CALCULATION_SYSTEM.md`; `systems/README.md`; `systems/REPORTING_SYSTEM.md`; `systems/TICKETING_SYSTEM.md`; `systems/WALLET_SYSTEM.md`; `ui-ux/README.md`.

## What Was Created

Created `execution-docs/` with indexes, rules, templates, migration plan, core docs, architecture docs, business docs, domain docs, system docs, UI docs, development docs, QA docs, execution docs and ADR index.

## Links Changed

Updated `project-wiki/architecture/ARCHITECTURE.md`: `codex-doc/systems/` -> `project-wiki/systems/`.

## Manual Review Needed

Review preserved Persian wiki content for encoding quality before detailed migration. Review all `project-wiki/core`, `project-wiki/systems`, roadmap and UI notes. Confirm payment, shipping, customer, notification and admin-panel details before implementation tasks.

## Suggested Next Step

Start with `execution-docs/core/PROJECT_VISION.md`, `PRODUCT_SCOPE.md`, `BUSINESS_RULES.md` and `architecture/MODULE_MAP.md`; migrate only confirmed facts from project-wiki into those documents.

## Changed/Created Files

`project-wiki/architecture/ARCHITECTURE.md`
`execution-docs/README.md`
`execution-docs/DOCUMENT_GRAPH.md`
`execution-docs/TRACEABILITY_MATRIX.md`
`execution-docs/DOCUMENT_RULES.md`
`execution-docs/MIGRATION_PLAN.md`
`execution-docs/DOCUMENT_TEMPLATE.md`
`execution-docs/SYSTEM_DOCUMENT_TEMPLATE.md`
`execution-docs/MIGRATION_REPORT.md`
`execution-docs/core/PROJECT_VISION.md`
`execution-docs/core/PRODUCT_SCOPE.md`
`execution-docs/core/BUSINESS_RULES.md`
`execution-docs/core/PROJECT_RULES.md`
`execution-docs/core/DECISION_LOG.md`
`execution-docs/core/SYSTEM_GLOSSARY.md`
`execution-docs/architecture/SYSTEM_ARCHITECTURE.md`
`execution-docs/architecture/MODULE_MAP.md`
`execution-docs/architecture/TECH_STACK_DECISIONS.md`
`execution-docs/architecture/DATABASE_VISION.md`
`execution-docs/business/BUSINESS_PROCESS_MAP.md`
`execution-docs/business/USER_JOURNEY_MAP.md`
`execution-docs/business/ROLE_MATRIX.md`
`execution-docs/business/PERMISSION_MATRIX.md`
`execution-docs/domain/ENTITY_CATALOG.md`
`execution-docs/domain/RELATIONSHIP_MATRIX.md`
`execution-docs/domain/FIELD_MATRIX.md`
`execution-docs/domain/ENUM_CATALOG.md`
`execution-docs/domain/STATE_MACHINE_CATALOG.md`
`execution-docs/systems/AUTH_SYSTEM.md`
`execution-docs/systems/PRODUCT_SYSTEM.md`
`execution-docs/systems/CATEGORY_SYSTEM.md`
`execution-docs/systems/ORDER_SYSTEM.md`
`execution-docs/systems/PAYMENT_SYSTEM.md`
`execution-docs/systems/INVENTORY_SYSTEM.md`
`execution-docs/systems/SHIPPING_SYSTEM.md`
`execution-docs/systems/CUSTOMER_SYSTEM.md`
`execution-docs/systems/ADMIN_PANEL_SYSTEM.md`
`execution-docs/systems/NOTIFICATION_SYSTEM.md`
`execution-docs/ui/PAGE_CATALOG.md`
`execution-docs/ui/FORM_CATALOG.md`
`execution-docs/ui/DASHBOARD_CATALOG.md`
`execution-docs/development/API_CATALOG.md`
`execution-docs/development/EVENT_CATALOG.md`
`execution-docs/development/QUEUE_CATALOG.md`
`execution-docs/development/AUTOMATION_CATALOG.md`
`execution-docs/development/INTEGRATION_CATALOG.md`
`execution-docs/qa/TEST_SCENARIOS.md`
`execution-docs/qa/ACCEPTANCE_CRITERIA.md`
`execution-docs/execution/ROADMAP.md`
`execution-docs/execution/MILESTONES.md`
`execution-docs/execution/BACKLOG.md`
`execution-docs/execution/TASK_BREAKDOWN.md`
`execution-docs/adr/README.md`
