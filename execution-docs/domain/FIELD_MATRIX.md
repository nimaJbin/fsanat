# Field Matrix

Document ID: DOM-FIELD-MATRIX
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/database/README.md, project-wiki/systems
Dependencies: ENTITY_CATALOG.md, RELATIONSHIP_MATRIX.md
Next Documents: ENUM_CATALOG.md, ../development/API_CATALOG.md

Purpose: track fields needed by entities, APIs and UI.

Initial rule: no database field is considered approved until it has an entity, purpose, type direction, validation need and consuming UI/API surface.

MVP field groups:

| Entity | Field | Purpose | Status |
|---|---|---|---|
| Product | sku, name, slug, price_rial, status | Catalog identity, price and visibility | MVP |
| Category | parent_id, name, slug, sort_order, is_active | Navigable hierarchy | MVP |
| Inventory | quantity_on_hand, quantity_reserved, reorder_point, base_cost_rial, version | Availability and safe updates | MVP |
| Inventory Movement | type, quantity_delta/after, reference, actor, reason | Append-style trace | MVP |
| Order | number, three statuses, totals, customer/address snapshot, timestamps | Purchase lifecycle and history | MVP |
| Order Item | product link plus name/SKU/price/cost snapshots, quantity, total | Immutable commercial line | MVP |
| Payment | provider, status, amount, authority/reference, response, timestamps | Retryable payment trace | MVP |
| Shipment | status, carrier, tracking number, lifecycle timestamps | Minimal fulfillment | MVP |

All money fields are integer Rial. Application validation owns controlled string values; database indexes cover SKU/slug, workflow queues and user/order history.
