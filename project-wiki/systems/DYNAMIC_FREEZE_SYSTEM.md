# Dynamic Freeze System

## 1. Purpose

This document defines the Dynamic Freeze System for "فروشگاه صنعت جوان".

The Dynamic Freeze System is a reusable operational control system that allows administrators to temporarily control or disable checkout, payment, ordering, product visibility, or other operational flows for selected scopes.

This system exists because the Iranian market may experience rapid price volatility, inventory inconsistency, delayed sync, supplier instability, and operational uncertainty.

This is an operational workflow and architecture behavior document. It is not implementation code, a migration plan, or a UI design document.

## 2. System Philosophy

Dynamic Freeze is not only a payment toggle. It is a reusable operational restriction system for controlling business risk when automated flow is unsafe.

The system must remain:

- Operationally simple.
- Reusable across multiple workflows.
- Scope-aware.
- Reversible.
- Auditable.
- Permission-aware.
- Compatible with future automation.

Freeze actions should protect the business without deleting products, destroying catalog data, hiding historical records, or corrupting orders, inventory, Base Cost, or financial reports.

Phase 1 should keep freeze controls practical and admin-driven. Future phases may add scheduling, notifications, AI-assisted suggestions, or automated expiration only after the related rules are documented.

## 3. Core Concepts

**Dynamic Freeze** is a temporary business control that restricts one or more commerce or operational flows for a defined scope.

**Operational Freeze** is a freeze applied because an admin or business rule needs manual control over unstable conditions such as price, stock, supplier, or sync uncertainty.

**Scope-based Control** means the restriction applies only to the selected target, such as the whole platform, a store section, category, subcategory, product, or future taxonomy scope.

**Reusable Targeting** means the same scope selection logic should be usable by future systems such as bulk price updates, campaigns, notifications, inventory actions, and AI-driven operational actions.

**Operational Restriction Workflow** is the process for activating, displaying, enforcing, logging, and removing a freeze.

## 4. Scope Philosophy

The freeze system must support operations on multiple scope levels.

Supported scope direction:

- Whole platform.
- Store section.
- Category.
- Subcategory.
- Product.
- Future taxonomy scopes.

Scope rules:

- A broader scope may affect many products or workflows.
- A narrower scope should affect only the selected products or operations.
- Scope selection should be reusable and aligned with the Universal Targeting Engine.
- Freeze behavior should be clear enough for admins to understand what is affected before activation.
- Future taxonomy scopes may include compatibility, brand, model, or other documented classifications.

The scope engine should remain reusable for:

- Bulk price updates.
- Operational actions.
- Campaigns.
- Notifications.
- Inventory actions.
- Future AI-driven actions.

## 5. Freeze Types

The system should support multiple freeze or control types.

Possible freeze types include:

- Payment freeze: Disable payment for the selected scope.
- Checkout freeze: Prevent checkout continuation for the selected scope.
- Ordering freeze: Prevent order creation or final confirmation for the selected scope.
- Visibility freeze: Hide selected products or scopes from public visibility when business rules allow it.
- Approval-required mode: Force affected orders or products into manual approval before continuation.
- Temporary hidden mode: Temporarily remove affected catalog items from customer-facing discovery without deleting them.
- Future operational restriction modes: Additional documented restrictions for future workflows.

Freeze types should be explicit. The system should not use one vague flag for every business behavior when different restrictions have different effects.

## 6. Freeze Reasons

Each freeze should have a documented reason.

Supported reason concepts may include:

- Price instability.
- Stock uncertainty.
- Supplier issues.
- Manual review.
- Accounting sync issues.
- Operational maintenance.
- Admin intervention.
- Low stock or suspected stock mismatch.
- Payment or checkout risk.
- Import or product data review.

Freeze reasons should be visible to admins and stored for auditability. Customer-facing messages, if needed, should be handled separately from internal operational notes.

## 7. Freeze Workflow

The freeze workflow should be clear and reversible.

Expected workflow:

1. Admin selects freeze type.
2. Admin selects affected scope.
3. Admin enters reason and operational note when needed.
4. System shows the affected scope or estimated impact where practical.
5. Admin confirms activation.
6. System applies the freeze to relevant workflows.
7. Affected products, orders, or checkout/payment flows respect the freeze.
8. Freeze remains active until removed, expired, or replaced by a documented rule.
9. Admin removes the freeze when the issue is resolved.
10. Activation and removal are logged.

Operational behavior during freeze:

- Frozen scopes should not proceed through restricted flows.
- Freeze should clearly block only the selected operation or scope.
- Freeze should not delete carts, products, orders, inventory logs, or financial records.
- Existing orders affected by a new freeze require documented handling before implementation.
- Admins should be able to see active freezes and understand why they exist.

## 8. Freeze Duration

The architecture should support multiple duration models.

Possible duration types:

- Manual freeze.
- Temporary freeze.
- Scheduled freeze.
- Indefinite freeze.
- Future automated expiration.

Phase 1 can start with manual activation and manual removal.

Future scheduled or expiring freezes should record start time, end time, activation status, and expiration behavior. Expired freezes should remain visible in history for auditability.

Exact expiration rules and scheduled freeze behavior are open decisions.

## 9. Product Relation

Products must support freeze-aware behavior.

Product relation rules:

- Products may be directly frozen.
- Products may inherit freeze restrictions from category, subcategory, section, whole platform, or future taxonomy scopes.
- Product status or operational indicators should make freeze state visible to admins.
- Frozen products should not proceed through restricted checkout, payment, ordering, or visibility workflows.
- Freeze should not permanently change product identity, product history, media, SEO data, Base Cost, or catalog structure.

The Product System should treat `frozen` as an operational state or restriction, not as deletion or archival by default.

## 10. Inventory Relation

Dynamic Freeze must integrate with inventory uncertainty and inventory operations.

Inventory-related freeze reasons may include:

- Sync failure.
- Delayed Hesabfa sync.
- Suspected stock mismatch.
- Low stock.
- Manual stock review.
- Supplier instability.
- Import-related inventory review.

Inventory relation rules:

- Admins may freeze sales, checkout, payment, or ordering when inventory is uncertain.
- Freeze may be applied to products, categories, subcategories, or broader scopes affected by stock uncertainty.
- Freeze does not replace Inventory Logs, Manual Inventory Adjustment, or Inventory Approval Workflow.
- Freeze actions caused by inventory issues should remain traceable for future reporting.
- Freeze should not treat inventory value increase as Profit.

## 11. Order Workflow Relation

Orders must respect Dynamic Freeze rules.

Freeze may affect:

- Checkout flow.
- Payment flow.
- Order creation.
- Invoice confirmation.
- Approval workflow.
- Future notification workflows.

Order relation rules:

- A frozen scope should prevent restricted checkout, payment, or order confirmation where the freeze applies.
- Freeze may move an affected flow into approval-required behavior when that freeze type is selected.
- Freeze should be checked before final invoice creation and before payment continuation.
- Payment retry should respect active freeze rules.
- Frozen products or scopes must not bypass inventory, pricing, customer, approval, or financial rules.
- Existing orders affected by a newly activated freeze require documented handling before implementation.

Freeze is an operational control and must not turn canceled, rejected, expired, or failed orders into Website Sales.

## 12. Admin Panel Relation

The Admin Panel should provide practical freeze management.

Admin freeze features should include:

- Freeze management area.
- Scope selection.
- Freeze type selection.
- Freeze reason visibility.
- Operational notes.
- Active freeze list.
- Freeze removal.
- Freeze history.
- Affected scope visibility.
- Future scheduling.

Freeze actions should be permission-aware. Sensitive freeze controls that affect payment, checkout, order confirmation, or broad platform scopes should require explicit permissions.

The admin panel should make active freezes visible in relevant areas such as products, inventory, orders, dashboard, reports, and settings where practical.

## 13. Auditability

Every freeze operation should be loggable.

Freeze logs should record:

- Who activated the freeze.
- When it was activated.
- Freeze type.
- Freeze reason.
- Affected scope.
- Operational notes.
- Whether it was manual, scheduled, temporary, or future automated.
- Who removed it.
- When it was removed.
- Removal reason or note.
- Affected products or workflows where practical.

Auditability should help answer why a product, category, checkout, payment, or order flow was restricted at a given time.

Freeze logs should remain compatible with future audit logs, reporting, admin dashboards, and operational reviews.

## 14. Notification Relation

Notification support is future expansion unless required by a specific phase-1 workflow.

Future notification support may include:

- Admin alerts.
- Operational alerts.
- Telegram notifications.
- Email notifications.
- Internal dashboard notifications.
- Customer-facing notifications when needed.

Notification rules:

- Internal admin notifications may explain operational details.
- Customer-facing notifications should be simple and should not expose sensitive business notes.
- Notification workflows must not replace audit logs.
- Notification-based freeze approvals or removals must be documented before implementation.

## 15. Reporting Relation

The system should support future reporting for operational visibility.

Freeze reports may include:

- Freeze frequency.
- Active freeze count.
- Affected products.
- Affected categories or scopes.
- Operational impact.
- Freeze duration.
- Manual interventions.
- Freeze reasons.
- Order or checkout impact.
- Inventory-related freeze events.

Reports should help the business understand how often market volatility, inventory uncertainty, sync failure, supplier issues, or manual intervention affects website operations.

Reports must preserve the distinction between website operations and physical store activity.

## 16. Future AI Relation

The Dynamic Freeze architecture should remain compatible with future AI-assisted operational support.

Future AI-assisted features may include:

- Anomaly detection.
- Automatic freeze suggestions.
- Inventory risk analysis.
- Operational alerts.
- Pricing anomaly detection.
- Supplier instability signals.
- Product or category risk scoring.

AI must not automatically freeze, unfreeze, hide products, disable payment, or block checkout without documented approval and governance rules.

AI recommendations should remain reviewable by authorized admins.

## 17. Out of Scope

The Dynamic Freeze System must not support:

- Marketplace or vendor restrictions.
- Real-time operational automation as a phase-1 requirement.
- Public freeze APIs.
- Automatic financial system shutdown.
- Hardcoded category-specific logic.
- Product deletion as freeze behavior.
- Permanent catalog restructuring as freeze behavior.
- Physical store POS controls.
- Multi-language freeze behavior.
- Multi-currency operational restrictions.

Dynamic Freeze may affect website checkout, payment, ordering, visibility, and operational flow, but it must not become a hidden replacement for inventory, order, product, pricing, or financial rules.

## 18. Open Decisions

The following decisions are still open:

- Exact freeze type list for phase 1.
- Exact scope selection model.
- Exact relationship between Dynamic Freeze and Universal Targeting Engine.
- Exact behavior for existing carts when a freeze is activated.
- Exact behavior for existing orders when a freeze is activated.
- Exact customer-facing messages for frozen products or flows.
- Exact freeze duration and expiration behavior.
- Exact scheduled freeze requirements.
- Exact permission model for freeze activation and removal.
- Exact audit log structure for freeze operations.
- Exact reporting format for freeze impact.
- Exact notification events for freeze activation, expiration, and removal.
- Exact future AI-assisted freeze suggestion workflow.

Open decisions must be documented before they become implementation commitments.

## 19. Changelog

- 2026-05-30: Initial dynamic freeze system document created.
