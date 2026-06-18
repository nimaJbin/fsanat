# Relationship Matrix

Document ID: DOM-RELATIONSHIP-MATRIX
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/database/README.md, project-wiki/systems
Dependencies: ENTITY_CATALOG.md
Next Documents: FIELD_MATRIX.md, ../architecture/DATABASE_VISION.md

Purpose: define entity relationships before schema work.

Initial relationships:

| Source | Relationship | Target | Status |
|---|---|---|---|
| Product | belongs to | Category | Draft |
| Product | has | Inventory Item | Draft |
| Order | has many | Order Items | To define |
| Order | may have | Payment | Draft |
| Order | may have | Shipment | Draft |

Open migration work: validate cardinality and lifecycle rules before implementation.
