# Entity Catalog

Document ID: DOM-ENTITY-CATALOG
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/DATABASE_VISION.md, project-wiki/systems
Dependencies: ../architecture/DATABASE_VISION.md
Next Documents: RELATIONSHIP_MATRIX.md, FIELD_MATRIX.md

Purpose: list business entities before schema or API implementation.

Initial entities:

| Entity | Owning system | Status |
|---|---|---|
| User, Customer Profile, Address | Auth, Customer | MVP |
| Brand, Product, Category | Catalog | MVP |
| Inventory, Inventory Movement | Inventory | MVP |
| Order, Order Item | Order | MVP |
| Payment | Payment | MVP |
| Shipment | Shipping | MVP |

Deferred extension entities: product media/attributes, warehouses/reservations, refunds, wallets, imports, tickets and generalized audit logs. Add them only with a working use case.
