# Queue Catalog

Document ID: DEV-QUEUE-CATALOG
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/architecture/ARCHITECTURE.md
Dependencies: EVENT_CATALOG.md
Next Documents: AUTOMATION_CATALOG.md, ../systems/NOTIFICATION_SYSTEM.md

Purpose: identify background work that should not block user requests.

Initial queue candidates:

| Job | Trigger | Status |
|---|---|---|
| Send notification | Business event | Draft |
| Import products | Admin/import workflow | Future review |
| Recalculate inventory signals | Inventory change | To define |
| Generate report | Admin request | Future review |

Rule: queue jobs need retry, idempotency and failure behavior before implementation.
