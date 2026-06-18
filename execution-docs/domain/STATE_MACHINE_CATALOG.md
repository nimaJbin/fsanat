# State Machine Catalog

Document ID: DOM-STATE-MACHINE-CATALOG
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/systems/ORDER_WORKFLOW.md, project-wiki/systems
Dependencies: ENUM_CATALOG.md
Next Documents: ../systems/ORDER_SYSTEM.md, ../qa/ACCEPTANCE_CRITERIA.md

Purpose: track workflows that require controlled state transitions.

Initial state machines:

| State Machine | Entity | Owning system | Status |
|---|---|---|---|
| Order lifecycle | Order | Order System | Draft |
| Payment lifecycle | Payment | Payment System | Draft |
| Shipment lifecycle | Shipment | Shipping System | Draft |
| Inventory adjustment | Inventory Item | Inventory System | To define |

Open migration work: extract allowed transitions from wiki notes before coding workflow logic.
