# Enum Catalog

Document ID: DOM-ENUM-CATALOG
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/systems
Dependencies: FIELD_MATRIX.md
Next Documents: STATE_MACHINE_CATALOG.md, ../qa/TEST_SCENARIOS.md

Purpose: list controlled values used by fields, APIs and workflows.

Initial candidates:

| Enum | Values | Owner | Status |
|---|---|---|---|
| product_status | draft, active, inactive, frozen, unavailable | Catalog | MVP |
| order_status | pending, processing, completed, canceled, expired | Order | MVP |
| approval_status | not_required, pending, approved, rejected | Order | MVP |
| order_payment_status | unpaid, pending, paid, failed, refunded | Order | MVP |
| payment_status | pending, paid, failed, canceled, refunded | Payment | MVP |
| shipment_status | pending, shipped, delivered, canceled | Shipping | MVP |
| inventory_movement_type | receipt, adjustment, reservation, release, sale, return | Inventory | MVP |

Rule: PHP string-backed enums are the single source for controlled values. Database columns remain strings so later additive states do not require destructive enum-column migrations. Allowed transitions belong in Actions when each workflow is implemented.
