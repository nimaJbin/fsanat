# Field Matrix

Document ID: DOM-FIELD-MATRIX
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/database/README.md, project-wiki/systems
Dependencies: ENTITY_CATALOG.md, RELATIONSHIP_MATRIX.md
Next Documents: ENUM_CATALOG.md, ../development/API_CATALOG.md

Purpose: track fields needed by entities, APIs and UI.

Initial rule: no database field is considered approved until it has an entity, purpose, type direction, validation need and consuming UI/API surface.

Seed rows:

| Entity | Field | Purpose | Status |
|---|---|---|---|
| Product | name | Display and search identity | Draft |
| Order | status | Lifecycle control | Draft |
| Payment | status | Payment tracking | Draft |

Open migration work: expand only after entity review.
