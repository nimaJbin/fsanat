# Inventory System

## 1. Purpose

This document defines the Inventory System for "فروشگاه صنعت جوان".

The Inventory System describes stock behavior, inventory sync, manual adjustment, approval logic, and the relationship between inventory, products, orders, profit calculation, Dynamic Freeze, import workflows, reporting, and Hesabfa.

This is a system behavior and business logic document. It is not a migration file, implementation plan, or source code document.

## 2. Inventory Philosophy

Inventory must support website commerce without pretending to fully manage every physical operation of the business.

The platform should treat inventory as controlled, auditable, and operationally adjustable. Inventory data may come from Hesabfa or another accounting source, but the website must not assume real-time parity with physical store stock.

Core principles:

- Website inventory exists to support website sales.
- Physical store sales are outside the website business model.
- Inventory Sync is not real-time.
- Manual Inventory Adjustment must be possible.
- Inventory changes must be logged.
- Inventory uncertainty may require admin approval.
- Inventory value increase is not Profit.
- Base Cost must be preserved when a product enters the Website Sale cycle.

Phase 1 should keep inventory practical and understandable while leaving room for future sync improvements, approval channels, and reporting.

## 3. Inventory Ownership

Inventory is owned and operated by Peyman.

Peyman is responsible for product sourcing, warehouse operations, physical stock, packaging, logistics, shipping, and related operational costs. The website platform should support inventory visibility and website-related controls, but it does not take ownership of physical store operations.

Nima is responsible for the technical system that records, displays, syncs, adjusts, and protects website inventory behavior according to documented rules.

Inventory ownership must remain separate from source code ownership, software architecture ownership, and website platform responsibilities.

## 4. Inventory Source

Hesabfa is the expected accounting and inventory source.

Inventory data should be received through a controlled sync or integration flow. The sync should be designed as an integration boundary, not as hidden business logic scattered across unrelated systems.

Inventory Source rules:

- Hesabfa is the expected source for stock data.
- Sync does not need to be real-time.
- Failed sync attempts must be logged.
- Manual override and correction must remain possible.
- Sync should not overwrite important local business decisions without documented rules.
- Sync behavior must be auditable enough for admins to understand what changed and why.

Exact Hesabfa mapping, sync frequency, and conflict rules are open decisions.

## 5. Website Inventory Scope

The Inventory System applies to inventory used by the website sales flow.

Scope rules:

- Physical store inventory is outside website scope unless assigned or exposed to website sales.
- Website inventory may differ from physical store stock.
- Unsold physical store inventory is outside the website profit cycle.
- Physical store sales must not reduce website financial profit calculations.
- Website inventory should support product availability, cart behavior, checkout behavior, order review, approval, reporting, and Dynamic Freeze.

Only inventory that enters the website sales cycle can become relevant to website profit calculation through Base Cost and completed Website Sales.

## 6. Inventory Statuses

Inventory statuses should make stock behavior understandable to admins, order workflows, reporting, and future automation.

Expected inventory status concepts include:

- available
- reserved
- low stock
- out of stock
- pending approval
- manually adjusted
- sync pending
- sync failed

Status meanings:

- available: Stock is currently available for website sale according to inventory, product, approval, and freeze rules.
- reserved: Stock is held for an order workflow according to documented reservation rules.
- low stock: Stock is below a configured warning threshold.
- out of stock: Stock is unavailable for sale.
- pending approval: Stock or order availability requires admin review before final invoice confirmation.
- manually adjusted: Stock was changed by an admin action.
- sync pending: Inventory sync is waiting, queued, or not yet completed.
- sync failed: Inventory sync failed and requires review or retry.

Exact status transitions are open decisions and should be finalized with the Order Workflow and database design.

## 7. Manual Inventory Adjustment

Admins must be able to increase or decrease product stock manually.

Manual Inventory Adjustment is required because Hesabfa sync is not real-time and real-world stock conditions may differ from website-visible stock.

Each manual adjustment must require:

- Product.
- Quantity change.
- Reason.
- Admin user.
- Timestamp.

Manual adjustment rules:

- Every manual increase or decrease must be logged.
- Manual adjustment should not silently erase sync history.
- Manual adjustment should be permission-protected.
- Manual adjustment may trigger inventory status changes, stock warnings, approval requirements, or Dynamic Freeze review.
- Manual adjustment must not corrupt historical order, Base Cost, or profit records.

Manual adjustments are operational corrections, not financial profit events by themselves.

## 8. Inventory Logs

Inventory Logs must preserve the history of important stock changes and operational actions.

The system must log:

- Stock increases.
- Stock decreases.
- Manual corrections.
- Sync updates.
- Failed sync attempts.
- Order reservations.
- Reservation releases.
- Cancellations.
- Payment failures that affect stock.
- Order expirations that affect stock.
- Approval actions.
- Admin user who performed the action.
- Reason or note when the action is manual.
- Timestamp.

Inventory Logs should help answer:

- What changed?
- Which product was affected?
- How much changed?
- Who caused the change?
- Why was it changed?
- Was it caused by sync, manual correction, order workflow, approval, or another operation?

Inventory Logs should be auditable and useful for reporting, support, reconciliation, and future troubleshooting.

## 9. Hesabfa Sync

Hesabfa Sync should be designed as a controlled service or integration.

Sync behavior should support:

- Receiving inventory data from Hesabfa.
- Detecting changed stock values.
- Logging sync results.
- Logging failed sync attempts.
- Preserving manual override rules.
- Supporting retry or review when sync fails.
- Avoiding accidental overwrite of local decisions without documented conflict handling.

Sync must not be assumed to be real-time. Scheduled sync, manual sync, queued sync, or admin-triggered sync may be considered later.

Hesabfa Sync should remain compatible with:

- Product System.
- Inventory Logs.
- Manual Inventory Adjustment.
- Order workflows.
- Approval workflows.
- Reporting.
- Profit Calculation System.

Exact sync frequency, field mapping, retry behavior, and conflict resolution are open decisions.

## 10. Inventory Approval Workflow

The system must support inventory approval before final invoice confirmation for selected products, categories, subcategories, orders, or scopes.

Approval is needed because actual stock may be less than website-visible stock due to market conditions, sync delay, physical operations, inventory uncertainty, or price volatility.

Inventory Approval Workflow rules:

- Approval may be configured by product, category, subcategory, or broader scope.
- Orders containing approval-required items may enter a pending approval state.
- Admins must be able to approve or reject the flow from the Admin Panel in phase 1.
- Approval actions must be logged.
- Approval should explain why review was required where possible.
- Approved orders may continue toward invoice confirmation or payment according to order rules.
- Rejected orders must not continue to final payment or fulfillment.

Future approval channels may include:

- Telegram.
- Email.
- Other messaging systems.

Future notification-based approval is allowed, but phase 1 should rely on Admin Panel approval.

## 11. Order Workflow Relation

Inventory must be connected to the order workflow.

Inventory behavior should support:

- Cart behavior.
- Checkout behavior.
- Reservation.
- Approval.
- Cancellation.
- Payment failure.
- Order expiration.
- Stock restoration when needed.

Adding a product to the cart should not necessarily reduce final stock. Cart behavior should avoid creating false stock reductions unless a future rule explicitly defines temporary holds.

Stock reduction, reservation timing, reservation release, payment failure behavior, and expiration behavior must be clearly defined later in `ORDER_WORKFLOW.md`.

Inventory must preserve enough information for orders to remain traceable even when later stock, product, price, or sync values change.

## 12. Product System Relation

The Product System must be inventory-aware.

Inventory affects:

- Product availability.
- Product status.
- Out-of-stock behavior.
- Low-stock warnings.
- Cart and checkout eligibility.
- Approval requirements.
- Dynamic Freeze review.
- Reporting visibility.
- Import validation.

Physical Products are the main phase-1 product type and require inventory behavior. Future Digital Products and Subscription Products may not use physical stock, but they may still require access, availability, or entitlement rules documented in their own future system documents.

Product changes must not corrupt historical inventory logs, orders, Base Cost snapshots, or profit calculations.

## 13. Profit Calculation Relation

Inventory is connected to profit calculation only when products enter the Website Sale cycle.

Profit relation rules:

- Inventory value increase is not Profit.
- Inflation or market price increase of unsold inventory must not be counted as operational profit.
- Base Cost must be stored when a product enters the Website Sale flow.
- Sold product cost tracking must preserve historical meaning.
- Profit reports must use completed Website Sales and valid cost records, not unsold inventory valuation.
- Inventory not assigned to website sales remains outside the website profit cycle.

Inventory changes are operational events. They become financially relevant only when connected to documented website sales, Base Cost snapshots, and profit calculation rules.

## 14. Dynamic Freeze Relation

The Inventory System must work with Dynamic Freeze.

Admins may freeze sales, payment, or order flow when stock or price uncertainty exists for:

- Whole store.
- Category.
- Subcategory.
- Specific product.

Dynamic Freeze may be used when inventory is uncertain, sync has failed, stock is under review, price volatility is high, or approval workflows are needed.

Freeze actions must be auditable, reversible, and compatible with the Universal Targeting Engine. Freeze must not delete product data, erase inventory history, or replace the need for inventory logs.

## 15. Import Pipeline Relation

The Product Import Pipeline may create or update products and initial inventory data.

Inventory import rules:

- Imported inventory data must be validated before final application.
- Import previews should show inventory-related changes before they affect live products.
- Import errors must be reported clearly.
- Imported stock must not bypass approval, Base Cost, product validation, or taxonomy rules.
- Import workflows should be queue-ready for future scaling.
- Import actions that affect inventory should create logs or traceable records.

Bulk import should support operational efficiency without silently changing critical inventory data.

## 16. Reporting Relation

The Inventory System should support practical operational reporting.

Inventory reports may include:

- Current website stock.
- Low-stock products.
- Out-of-stock products.
- Manually adjusted products.
- Sync status.
- Sync failures.
- Inventory approval queues.
- Reservation activity.
- Stock changes by product.
- Stock changes by category or taxonomy.
- Import-related inventory changes.
- Dynamic Freeze relation to stock uncertainty.

Reports must preserve the distinction between website inventory behavior and physical store sales. Inventory reports should support website operations and reconciliation, not marketplace or multi-vendor reporting.

## 17. Out of Scope

The Inventory System must not support:

- Real-time inventory sync as a phase-1 requirement.
- Physical store sales management.
- Marketplace or vendor inventory.
- Multi-warehouse support in phase 1.
- Public inventory API.
- Multi-language inventory behavior.
- Multi-currency inventory valuation.
- Treating Inventory Appreciation as Profit.
- Treating unsold physical store stock as website profit.

Future multi-warehouse support may be researched only if business operations require it and source-of-truth documents are updated first.

## 18. Open Decisions

The following decisions are still open:

- Exact Hesabfa sync frequency.
- Exact Hesabfa field mapping.
- Exact sync conflict resolution rules.
- Exact inventory reservation timing.
- Exact stock reduction timing.
- Exact cart stock behavior.
- Exact order expiration and stock restoration rules.
- Exact inventory status transitions.
- Exact approval configuration model for products, categories, subcategories, and scopes.
- Exact permission model for manual inventory adjustment.
- Exact reporting formats for inventory logs and stock status.
- Exact integration between inventory logs and future audit logs.
- Exact import behavior for initial inventory values.
- Exact low-stock threshold rules.

Open decisions must be documented before they become implementation commitments.

## 19. Changelog

- 2026-05-30: Initial inventory system document created.
