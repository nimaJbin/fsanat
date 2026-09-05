# Relationship Matrix

Document ID: DOM-RELATIONSHIP-MATRIX
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/database/README.md, project-wiki/systems
Dependencies: ENTITY_CATALOG.md
Next Documents: FIELD_MATRIX.md, ../architecture/DATABASE_VISION.md

Purpose: define entity relationships before schema work.

Initial relationships:

| Source | Relationship | Target | Status |
|---|---|---|---|
| User | has one / many | Customer Profile / Addresses | MVP |
| Category | optionally belongs to | Parent Category | MVP |
| Product | belongs to / many-to-many | Brand / Categories | MVP |
| Product | has one | Inventory | MVP |
| Inventory | has many | Inventory Movements | MVP |
| User | has many | Orders | MVP |
| Order | has many | Order Items | MVP |
| Order | has many | Payments | MVP |
| Order | has many | Shipments | MVP |

Order-item and shipping-address snapshots remain valid when source records change. Financial and inventory-history rows use restrictive deletion; retry payments and partial shipments therefore require no schema redesign.
