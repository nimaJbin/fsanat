# Event Catalog

Document ID: DEV-EVENT-CATALOG
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/systems, project-wiki/architecture/ARCHITECTURE.md
Dependencies: ../systems/NOTIFICATION_SYSTEM.md, API_CATALOG.md
Next Documents: QUEUE_CATALOG.md, AUTOMATION_CATALOG.md

Purpose: list business and technical events used by modules.

Initial events:

| Event | Source system | Consumers | Status |
|---|---|---|---|
| product.updated | Product | Search/UI/notifications to define | Draft |
| order.placed | Order | Payment, notification, inventory | Draft |
| payment.confirmed | Payment | Order, notification | Draft |
| stock.depleted | Inventory | Admin, notification | Draft |

Open migration work: confirm event names, payloads and consumers before implementation.
