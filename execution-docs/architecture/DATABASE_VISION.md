# Database Vision

Document ID: ARCH-DATABASE-VISION
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/DATABASE_VISION.md, project-wiki/database/README.md
Dependencies: TECH_STACK_DECISIONS.md, ../domain/ENTITY_CATALOG.md
Next Documents: ../domain/RELATIONSHIP_MATRIX.md, ../domain/FIELD_MATRIX.md

Purpose: guide database planning without defining final schema prematurely.

Current direction: use a relational model suitable for commerce entities, traceable order/payment data and maintainable admin operations. Entity, relationship and field catalogs must be reviewed before schema tasks are created.

Rule: migrations, table names and field definitions must be derived from confirmed domain documents, not directly from raw wiki notes.

Open migration work: extract stable database principles from the wiki and convert them into domain matrices.
