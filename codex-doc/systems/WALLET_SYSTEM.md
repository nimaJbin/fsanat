# Wallet System

## 1. Purpose

This document defines the Wallet System for "فروشگاه صنعت جوان".

The Wallet System describes wallet architecture, wallet transaction philosophy, operational credit behavior, financial traceability, refund compatibility, and future payment flexibility for the platform.

This is a financial behavior and operational architecture document. It is not implementation code, a migration plan, a payment gateway specification, or a replacement for banking or accounting software.

The wallet is intended to support:

- Customer wallet balances.
- Refunds.
- Future credit systems.
- Mixed payments.
- Operational financial flexibility.
- Future subscription and digital product flows.

## 2. Wallet Philosophy

The Wallet System must be ledger-based, auditable, traceable, operationally safe, and future-proof.

Wallet balance must not behave as a simple mutable number only. Every meaningful balance movement should be backed by a wallet transaction or equivalent ledger record.

Core principles:

- Wallet behavior must be transaction-oriented.
- Wallet history must be reconstructable.
- Wallet operations must be permission-aware.
- Manual wallet changes must require clear reason and audit context.
- Wallet reports must be traceable to transactions.
- Wallet behavior must remain compatible with orders, refunds, profit calculation, reporting, and future subscription flows.
- Phase 1 should keep the wallet practical, but the architecture must not block future financial workflows.

The wallet must support the Iranian market context. Financial values are limited to Rial/Toman according to the platform financial scope.

## 3. Core Wallet Concepts

The wallet domain should use consistent terminology.

**Wallet** is the customer's platform-level credit or balance container.

**Wallet Balance** is the current usable amount available to a customer. The balance may be cached for performance, but it must remain reconstructable from wallet transactions.

**Wallet Transaction** is a ledger record that explains one wallet movement, such as a credit, debit, refund, payment, adjustment, or correction.

**Credit** is a positive wallet movement that increases usable or pending wallet value.

**Debit** is a negative wallet movement that decreases usable or pending wallet value.

**Refund** is a wallet credit related to an order, payment failure recovery, cancellation, partial refund, or future automated refund workflow.

**Adjustment** is a manual admin-created wallet movement used for correction, operational credit, or documented financial handling.

**Pending Balance** is a wallet amount that is reserved, awaiting confirmation, or not yet available for normal customer use.

**Transaction History** is the chronological ledger of wallet movements that allows financial reconstruction and operational review.

## 4. Wallet Transaction Philosophy

Every wallet operation should generate a transaction record.

Wallet transaction rules:

- Transactions should be immutable after creation where practical.
- Corrections should use reversal or correction transactions instead of destructive edits.
- Each transaction should include amount, direction, type, status, timestamp, and related user.
- Admin or operator actions should record the responsible admin.
- Manual actions should include a reason or description.
- Order-related wallet movements should reference the related order when applicable.
- Refund-related wallet movements should reference the source order or payment context when applicable.
- Transactions should support reporting, auditability, and future reconciliation.

Wallet transaction history must explain why a customer's balance changed. Hidden balance edits are not acceptable for financial operations.

## 5. Wallet Usage Flows

The Wallet System should support current foundation needs and future usage flows.

Supported or planned wallet usage may include:

- Order payment.
- Partial payment.
- Mixed wallet and payment gateway payment.
- Refunds.
- Promotional credit.
- Manual admin adjustments.
- Future subscription payments.
- Future digital product purchases.
- Future customer credit handling.

Phase 1 may implement only the wallet foundation if full payment usage is not yet required. Advanced wallet payment, subscription, and automated refund flows must be documented before implementation.

Wallet usage must not hide the underlying Website Sale, payment source, refund reason, customer credit, or admin adjustment.

## 6. Transaction Types

Wallet transaction types should be explicit and reportable.

Expected transaction type concepts include:

- deposit: Customer or system credit added to the wallet through a documented flow.
- payment: Wallet debit used for an order or future subscription/digital purchase.
- refund: Wallet credit created because of an order cancellation, partial refund, failed payment recovery, or refund workflow.
- admin adjustment: Manual credit or debit created by an authorized admin with a reason.
- promotional credit: Credit granted through a documented campaign, support decision, or future promotion workflow.
- correction: A traceable correction for a previous wallet mistake or reconciliation issue.
- expiration: Future transaction type for expiring promotional or time-limited wallet credit if such behavior is later approved.

Exact transaction type names, statuses, and accounting meanings are open decisions and must be finalized before implementation.

## 7. Refund Relation

The wallet architecture should support refund workflows.

Refund relation may include:

- Order refunds.
- Partial refunds.
- Failed payment recovery.
- Cancellation refunds.
- Future automated refund workflows.
- Future refund approval workflows.

Refund rules:

- Refunds must be traceable to their source order or payment context when applicable.
- Refunds should create wallet transaction records.
- Partial refunds must preserve the original order and payment context.
- Refunds must not create operational profit by themselves.
- Refunded orders require documented profit treatment in the Profit Calculation System.
- Customer-visible refund history should remain understandable.

Exact refund timing, refund eligibility, partial refund rules, and payment gateway refund behavior are open decisions.

## 8. Order Workflow Relation

The Wallet System must remain compatible with the Order Workflow.

Order relation may include:

- Checkout flow.
- Pending payments.
- Wallet-only payments.
- Partial wallet payments.
- Mixed wallet and payment gateway payments.
- Payment retry workflows.
- Order cancellation.
- Order expiration.
- Future refund and credit workflows.

Order relation rules:

- Wallet debit timing must be documented before implementation.
- Cart actions should not create wallet transactions by themselves.
- Wallet payment should only affect financial state when the order workflow allows it.
- Failed, canceled, rejected, or expired orders must have clear wallet reversal or release rules.
- Wallet transactions must preserve enough context for order reports, financial reports, and audit history.
- Wallet usage must not bypass registration, profile completion, approval, payment, inventory, or Dynamic Freeze rules.

The exact relationship between wallet balance reservation, order creation, invoice confirmation, and payment success is an open decision.

## 9. Admin Panel Relation

The Admin Panel should provide practical wallet visibility and control.

Admin wallet features should include:

- Customer wallet visibility.
- Wallet balance visibility.
- Wallet transaction history.
- Manual wallet adjustment.
- Operational notes.
- Audit visibility.
- Refund-related wallet visibility.
- Future wallet freeze or restriction support.

Admin wallet actions must be permission-aware. Viewing wallet balance, viewing transaction history, applying manual adjustments, and handling refunds may require different permissions.

The Admin Panel should make wallet operations understandable without allowing unsafe or unexplained financial changes.

## 10. Permission & Security Relation

Wallet operations are sensitive financial actions and must be protected by permissions.

Permission and security rules:

- Sensitive wallet operations should require elevated permissions.
- Manual wallet adjustments must be limited to authorized roles.
- Refund-related wallet actions should be permission-protected.
- Future high-risk wallet actions may require approval workflows.
- Wallet transaction visibility may be separated from wallet adjustment permission.
- Wallet actions should be logged for auditability.
- Admin authentication and session security should protect wallet operations.

Wallet permissions should align with the Auth And Permission System. Role names must not be hardcoded into wallet behavior; permissions or policies should protect actions.

## 11. Auditability

Wallet operations must be historically reconstructable.

The system should support audit visibility for:

- Full transaction logs.
- Operator or admin tracking.
- Customer relation.
- Order relation.
- Payment relation where applicable.
- Timestamp.
- Transaction type.
- Transaction direction.
- Reason or description.
- Manual adjustment notes.
- Refund source.
- Correction source.

Auditability should help answer:

- Why did the balance change?
- Who changed it?
- When did it change?
- Which order or payment caused it?
- Was it customer-driven, admin-driven, refund-related, promotional, or corrective?
- What was the previous financial context?

Wallet records should prefer traceable transactions, reversals, and corrections over destructive updates.

## 12. Reporting Relation

The Reporting System should support wallet-related visibility.

Wallet reports may include:

- Wallet balance reports.
- Wallet transaction reports.
- Refund reports.
- Manual adjustment reports.
- Promotional credit reports.
- Mixed payment visibility.
- Customer credit history.
- Operational financial visibility.

Wallet reporting rules:

- Reports must be ledger-oriented and traceable.
- Wallet reports should not hide the source order, refund, credit, payment, or adjustment.
- Reports must remain compatible with website-only financial rules.
- Wallet reporting must not mix physical store sales into website financial behavior.
- Wallet reports should support future reconciliation and audit review.

Exact wallet reporting formats are open decisions.

## 13. Future Subscription Relation

The wallet architecture should remain compatible with future subscription and digital access systems.

Future subscription relation may include:

- Subscription billing.
- Recurring access.
- Premium memberships.
- Digital product purchases.
- Access-controlled content.
- Future wallet-funded renewals.
- Future wallet refunds for digital or subscription products.

Subscription and digital access wallet behavior must be documented before implementation. Wallet payments must not grant access unless the related order, payment, and access rules define that behavior clearly.

## 14. Future AI Relation

The wallet architecture should remain compatible with future AI-assisted financial and operational analysis.

Future AI-assisted wallet features may include:

- Fraud detection.
- Anomaly detection.
- Spending analysis.
- Refund analysis.
- Operational alerts.
- Suspicious adjustment detection.
- Customer credit behavior insights.

AI must not automatically change wallet balances, create transactions, approve refunds, issue credits, or perform financial corrections without documented approval and governance rules.

AI-generated insights should be reviewable and traceable to wallet transactions and related business records.

## 15. Performance Philosophy

The Wallet System should prioritize consistency, traceability, and financial safety over premature optimization.

Performance direction:

- Wallet balances may be cached only if they remain reconstructable from transactions.
- Expensive reports may use future queues, caching, or aggregation when needed.
- Financial correctness is more important than fast but unclear balance updates.
- Concurrent wallet operations must avoid inconsistent balances.
- Transaction history must remain reliable even if summary values are optimized later.

Phase 1 should avoid unnecessary complexity, but it must not use shortcuts that make future financial reconstruction impossible.

## 16. Out of Scope

The Wallet System must not support:

- Cryptocurrency support.
- Multi-currency wallets.
- Banking replacement.
- Marketplace vendor wallets.
- Real-time banking infrastructure.
- Financial investment systems.
- Physical store wallet behavior as website financial scope.
- Public wallet APIs in phase 1.
- Automatic AI-driven financial changes.

Future wallet expansion is allowed only when it remains aligned with documented business rules, financial traceability, permissions, and reporting requirements.

## 17. Open Decisions

The following decisions are still open:

- Exact wallet ledger data model.
- Exact wallet balance derivation and caching strategy.
- Exact pending balance behavior.
- Exact wallet debit timing during checkout.
- Exact wallet reservation behavior for orders.
- Exact mixed payment settlement rules.
- Exact refund eligibility and refund timing.
- Exact partial refund behavior.
- Exact wallet transaction status list.
- Exact manual adjustment permission model.
- Exact approval workflow for high-risk wallet operations.
- Exact promotional credit expiration rules.
- Exact wallet reporting formats.
- Exact audit log integration strategy.
- Exact subscription billing relation.
- Exact AI-assisted wallet analysis boundaries.

Open decisions must be documented before they become implementation commitments.

## 18. Changelog

- 2026-05-30: Initial wallet system document created.
