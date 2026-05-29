# Database Vision

## 1. Purpose

This document defines the high-level database philosophy and data architecture direction for "فروشگاه صنعت جوان".

This is not a migration file, schema dump, or implementation checklist. It exists to guide how the database should be designed, how entities should relate, how naming should stay consistent, and how financial, inventory, workflow, and reporting data should remain understandable over time.

Future Codex sessions must use this document as database architecture guidance before proposing data models, migrations, schema changes, or persistence-related workflows.

## 2. Database Philosophy

The platform should use a relational-first database architecture. The project contains financial workflows, orders, inventory, approvals, wallet behavior, reporting, import sessions, and audit requirements, so explicit relationships and transactional consistency are important.

The database should be designed for:

- Financial consistency.
- Auditability.
- Explicit relationships.
- Modular entity separation.
- Clean reporting.
- Future extensibility.
- Domain-driven naming.
- Business transparency.

The database must avoid hidden business logic, unclear naming, and untraceable financial state. Data design should make it possible to explain what happened, when it happened, who changed it, and which business rule was involved.

## 3. Core Design Principles

- Use relational consistency for core business data.
- Keep entity boundaries clear and modular.
- Preserve financial history instead of overwriting meaningful values.
- Prefer explicit state fields for business workflows.
- Separate current operational state from historical records when needed.
- Keep audit-relevant changes traceable.
- Keep names aligned with SYSTEM_GLOSSARY.md.
- Avoid database structures that imply marketplace, multi-vendor, multi-language, or real-time physical store sync behavior.
- Support future growth without over-engineering phase 1.

## 4. Entity Architecture Vision

The database should be organized around business domains rather than random feature tables.

Core entity areas include:

- User and access entities.
- Product and taxonomy entities.
- Inventory entities.
- Order and workflow entities.
- Financial entities.
- Wallet entities.
- Ticketing entities.
- Import pipeline entities.
- Reporting and audit entities.
- Scope-based operation entities.

Each area should have clear ownership, relationships, lifecycle states, and documentation before implementation.

## 5. User & Access Entities

The user system should support:

- users
- profiles
- addresses
- permissions
- future role expansion

Customer identity and profile completion are important because checkout requires phone number, full name, postal address, postal code, and email before final invoice creation.

Access entities should support role-based access control and permissions for admin workflows, operational controls, financial records, reporting, inventory adjustment, approvals, and support.

The design should allow future role expansion without hard-coding all admin behavior into a single role.

## 6. Product & Taxonomy Entities

The product system should support:

- products
- categories
- product attributes
- media and images
- product status
- inventory-aware products
- future digital products
- future subscription products

The category and taxonomy system must not be designed as a simple one-dimensional category tree only. Products may need to be discoverable through multiple classification paths, including:

- product type
- vehicle compatibility
- brand
- future classifications

Product design should support physical products in phase 1 while leaving clear room for future digital access and subscription products.

Product status should make catalog and commerce behavior explicit, such as draft, active, inactive, frozen, unavailable, or future documented statuses.

## 7. Inventory Entities

Inventory entities must support:

- inventory sync
- manual inventory adjustment
- inventory logs
- inventory approval workflows
- stock tracking

Inventory Sync should support controlled synchronization from Hesabfa or another accounting source. Real-time sync is not required and should not be assumed.

Manual Inventory Adjustment must be traceable. The database should record meaningful changes, reasons, actor information where applicable, and timestamps.

Inventory Approval should support selected products, categories, subcategories, orders, or scopes requiring admin approval before final invoice confirmation.

## 8. Order & Workflow Entities

Order entities should support:

- workflow states
- approval states
- payment states
- cancellation
- expiration
- future extensibility

Expected order workflow states include pending, waiting for approval, approved, rejected, paid, processing, completed, canceled, and expired.

The database should avoid mixing all order behavior into a single unclear status when separate workflow, approval, and payment state concepts are needed.

Orders should preserve historical data needed for reporting, customer support, payment review, and financial calculation.

## 9. Financial Entities

Financial entities must support:

- profit calculation
- Base Cost snapshots
- operational costs
- Approved Costs
- wallet-related financial records
- future accounting integration
- reports
- audit logs

Financial records must preserve history. Historical price changes, product cost changes, or inventory valuation changes must not corrupt old profit calculations.

Base Cost must be stored when a product enters the Website Sale cycle. Inventory value increase is not operational Profit and must not be modeled as shareable website profit.

Operational Costs should support manual registration, approval status, category or reason, amount, date, and auditability.

## 10. Wallet Entities

Wallet architecture should be ledger-based and transaction-safe.

Wallet data should avoid storing unexplained balance changes. Each balance movement should be represented by a Wallet Transaction or equivalent traceable record.

Future wallet behavior may include credits, debits, refunds, manual adjustments, customer balance usage, and reporting. These rules must be documented before implementation.

Wallet entities must remain compatible with financial reporting and audit requirements.

## 11. Ticketing Entities

Ticketing entities must support:

- customer tickets
- replies
- statuses
- attachments
- future automation

Tickets should connect to customers where possible and may connect to orders, payments, products, or support categories when useful.

Ticket statuses should be explicit enough for support workflow and reporting, without over-engineering the first phase.

Future AI-assisted support can build on ticket data, but AI behavior should not be assumed in the initial schema.

## 12. Import Pipeline Entities

The Product Import Pipeline must support:

- import sessions
- import logs
- validation
- preview state
- retry tracking
- image matching

Import Session records should make each import batch reviewable. Validation results and errors should be preserved enough for admins to understand what failed and why.

Image Matching should support file-based or ZIP-based workflows without hard-coding a single irreversible assumption.

The import architecture should be queue-ready for future scaling, but phase 1 should remain understandable and controlled.

## 13. Reporting & Audit Entities

The database should support:

- activity logs
- historical tracking
- financial transparency
- future reporting systems
- operational reporting
- audit trails

Auditability is especially important for financial records, inventory adjustments, approvals, payment-related actions, wallet behavior, product imports, and admin operations.

Reporting entities or reporting-friendly structures should be introduced when direct transactional queries become too complex or too slow. Phase 1 can start simple, but the data model should avoid blocking future reporting.

## 14. Naming Conventions

Naming must be consistent and aligned with SYSTEM_GLOSSARY.md.

General naming direction:

- Use clear business names.
- Prefer plural table names if following Laravel conventions.
- Use singular model/entity names in documentation when discussing a single concept.
- Use consistent timestamp fields such as created_at and updated_at when using Laravel conventions.
- Use deleted_at only when soft deletes are intentionally useful.
- Name relationships by business meaning, not only technical linkage.
- Name pivot tables consistently based on the related entities.
- Avoid ambiguous terms such as generic "data", "item", "thing", "record", or "status" when a domain term exists.

Soft delete philosophy:

- Use soft deletes for records where operational recovery or history is useful.
- Avoid soft deletes for financial records when deletion would damage auditability.
- Prefer explicit reversal, cancellation, or adjustment records for financial changes.

UUID/open decision discussion:

- Primary key strategy is an open decision.
- Auto-increment IDs are acceptable for Laravel-first phase 1.
- UUIDs may be considered for public-facing references, future APIs, distributed systems, or mobile-facing identifiers.
- Public identifiers should not expose sensitive business sequencing if that becomes a concern.

Indexing philosophy:

- Index foreign keys and high-use lookup fields.
- Index workflow states used in admin dashboards.
- Index financial/reporting fields only when real query patterns justify it.
- Avoid premature indexing without expected query value.

## 15. Relationship Philosophy

Relationships should be explicit and understandable.

The database should make it clear how users, profiles, addresses, orders, products, inventory records, approvals, costs, wallet transactions, tickets, import sessions, and reports connect.

Many-to-many relationships should be modeled intentionally and named clearly. Pivot relationships should not hide important business state; if a relationship has meaningful lifecycle, status, audit data, or financial behavior, it may deserve its own entity.

Historical relationships must be preserved where business meaning depends on past data. For example, old order and profit calculations must not be corrupted by later product, price, inventory, or category changes.

## 16. Financial Consistency Rules

Inventory value increase is not operational Profit.

Base Cost must be stored when a product enters the Website Sale cycle.

Financial history must be preserved. Historical price changes, later inventory valuation, and product updates must not corrupt old profit calculations.

Financial operations must be auditable. This includes Website Sales, Base Cost snapshots, Operational Costs, Approved Costs, wallet activity, refunds, manual adjustments, payment records, and future accounting sync records.

The database should prefer append-style financial records, snapshots, adjustments, and explicit state changes over destructive updates.

The financial system supports Rial and Toman only.

## 17. Scalability Direction

The database should support current phase 1 needs while leaving room for:

- digital products
- subscriptions
- AI systems
- analytics
- mobile app
- future APIs if needed later
- advanced reporting
- accounting integration
- larger product catalogs
- queue-based import and image workflows

Scalability should come from clean domain separation, explicit relationships, indexing based on real query patterns, queues for heavy workflows, and reporting-friendly structures when needed.

The database should not introduce marketplace, multi-vendor, multi-language, or real-time physical store sync assumptions.

## 18. Open Decisions

The following database decisions are still open:

- Final primary key strategy: auto-increment IDs, UUIDs, or mixed internal/public identifiers.
- Final relational database choice between MySQL and MariaDB.
- Whether PostgreSQL becomes useful later for reporting or advanced data needs.
- Exact taxonomy structure for product type, vehicle compatibility, brand, and future classifications.
- Exact inventory reservation model.
- Exact wallet ledger rules.
- Exact audit log package or custom audit structure.
- Exact reporting storage strategy for advanced analytics.
- Exact Hesabfa sync data mapping and frequency.
- Exact strategy for future digital products and subscription access data.

Open decisions must be documented before they become implementation commitments.

## 19. Changelog

- 2026-05-30: Initial database vision document created.
