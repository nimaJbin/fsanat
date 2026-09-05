# Database Vision

Document ID: ARCH-DATABASE-VISION
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/DATABASE_VISION.md, project-wiki/database/README.md
Dependencies: TECH_STACK_DECISIONS.md, ../domain/ENTITY_CATALOG.md
Next Documents: ../domain/RELATIONSHIP_MATRIX.md, ../domain/FIELD_MATRIX.md

Purpose: guide database planning without defining final schema prematurely.

Current direction: MySQL 8 with relational, domain-owned tables. MVP uses bigint internal IDs, string workflow states, integer Rial amounts, explicit foreign keys and timestamps. Orders retain customer/address and product/price/cost snapshots. Inventory and payments retain append-style operational history.

MVP domains: customer profiles/addresses, brands/categories/products, inventory/movements, orders/items, payments and shipments. Product media, attributes, reservations, warehouses, refunds, wallets, imports and generalized audit logs are extension points, not launch schema.

Rules: store money as unsigned integer Rial; avoid database enums so controlled values can evolve through application enums; index foreign keys and active workflow lookups; use soft deletes only for catalog records; never delete financial history—cancel, fail or reverse it explicitly.
