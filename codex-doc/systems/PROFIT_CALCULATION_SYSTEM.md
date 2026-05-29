# Profit Calculation System

## 1. Purpose

This document defines the Profit Calculation System for "فروشگاه صنعت جوان".

The system describes profit calculation philosophy, financial flow, Base Cost logic, Operational Cost tracking, website-only profit scope, settlement direction, auditability, and financial reporting direction.

This is one of the most important business architecture documents in the project. It defines business and financial behavior, not implementation code, migrations, tax rules, or full accounting software behavior.

## 2. Financial Philosophy

The Profit Calculation System must calculate real operational profit from website activity.

The system exists to provide business visibility for website operations between:

- Nima, responsible for the technical, digital, software, product, and website side.
- Peyman, responsible for inventory, logistics, sourcing, warehouse, shipping, and financial operations.

The system must focus on:

- Real completed Website Sales.
- Actual sold products.
- Product Base Cost snapshots.
- Approved Operational Costs.
- Platform Costs.
- Payment Costs.
- Shipping Losses if applicable.
- Traceable financial calculations.

Inventory value increase due to inflation or market price increase is not operational profit. Unsold stock value growth must not increase shared website profit.

This system is not an accounting software replacement. It is a business operational visibility layer for website profit and financial reporting.

## 3. Website Profit Scope

Only website sales are included in the website profit cycle.

A sale enters the website profit cycle only when it is completed through:

- Website checkout.
- Website payment gateway.
- A valid website order workflow.

Physical store sales must not:

- Affect website profit.
- Affect website financial reports.
- Enter website operational calculations.
- Be treated as Website Sales.
- Be included in profit sharing for the website business model.

Products not assigned to the website sales flow remain outside the website profit cycle.

## 4. Profit Formula Direction

The high-level profit formula is:

```text
Website Revenue
- Product Base Cost
- Approved Operational Costs
- Platform Costs
- Payment Costs
- Shipping Losses, if applicable
= Net Operational Profit
```

This formula is a business direction, not a final accounting schema.

Formula rules:

- Website Revenue must come from valid completed Website Sales.
- Product Base Cost must come from preserved Base Cost snapshots.
- Operational Costs must be valid and approved when approval is required.
- Platform Costs may include hosting, server, infrastructure, tools, and related website expenses.
- Payment Costs may include payment gateway fees or documented transaction costs.
- Shipping Losses may be included only when they are related to website sales and documented.
- Canceled, rejected, expired, unpaid, or failed payment orders must not generate operational profit.

Exact formulas for refunds, partial refunds, wallet payments, discounts, shipping differences, and settlement periods are open decisions.

## 5. Base Cost Philosophy

Base Cost is the stored purchase cost of a product when it enters the Website Sale cycle.

Base Cost rules:

- When a product enters website sales flow, a Base Cost snapshot should be stored.
- Historical profit calculations must remain stable.
- Future market price changes must not corrupt historical calculations.
- Product price changes must not overwrite completed order profit records.
- Inventory appreciation is not Profit.
- Unsold stock value increase is not Profit.
- Base Cost must remain auditable.

Base Cost snapshots protect financial fairness by preventing inflation or market price growth from being treated as shareable website profit.

The exact Base Cost snapshot workflow is an open decision and must be documented before implementation.

## 6. Inventory Relation

The Profit Calculation System must integrate with the Inventory System.

Inventory relation rules:

- Inventory becomes financially relevant only when products enter the Website Sale cycle.
- Products not assigned to website sales flow remain outside the website profit cycle.
- Inventory value increase is not Profit.
- Unsold physical store inventory is outside website profit calculation.
- Manual Inventory Adjustments are operational events, not profit events by themselves.
- Inventory records should support Base Cost snapshots and sold product cost tracking.
- Inventory history must not be overwritten in a way that corrupts financial reports.

Inventory Sync from Hesabfa or another accounting source may support stock visibility, but profit must be calculated from completed Website Sales and preserved cost records, not from unsold stock valuation.

## 7. Order Relation

Profit should only be recognized from valid website orders.

Order relation rules:

- Only completed or accepted financial website transactions may enter profit calculation.
- Website Sales must come from the website checkout and payment gateway flow.
- Canceled orders must not generate operational profit.
- Rejected orders must not generate operational profit.
- Expired orders must not generate operational profit.
- Failed payment orders must not generate operational profit.
- Refunded orders require documented refund rules before profit treatment is finalized.
- Orders must preserve product price, Base Cost, payment, customer, and operational context needed for later reporting.

The Order Workflow must provide enough historical data for the Profit Calculation System to explain how each sale affected profit.

## 8. Operational Cost System

The system must support operational cost tracking for website-related business expenses.

Supported cost categories may include:

- Advertising.
- Infrastructure.
- Hosting/server.
- Tools and services.
- Operational costs.
- Packaging costs.
- Payment gateway costs.
- Shipping losses.
- Future business expenses.

Operational Costs must be clear, categorized, timestamped, and auditable. Costs should be connected to website operations and should not silently mix physical store expenses into website profit calculation.

Cost categories should remain practical in phase 1 and expandable for future reporting.

## 9. Cost Approval Workflow

Non-product-purchase costs above 15,000,000 Toman require approval from both parties before entering profit calculation.

Approval rule:

- Product purchase cost can be represented through Base Cost and inventory/product purchase records.
- Non-product-purchase costs above 15,000,000 Toman must be approved by both Nima and Peyman before they can reduce Net Operational Profit.
- Costs below the threshold may still require documentation and auditability.
- A cost that requires approval must not enter profit calculation until approved.
- Rejected or unapproved costs must remain visible for review but excluded from profit calculation.

Approval actions must be traceable. The system should record who approved, when approval happened, and what cost was approved.

Exact approval UI, approval permissions, and notification channels are open decisions.

## 10. Manual Cost Registration

The system must support manual cost entries.

Manual cost entries should support:

- Cost amount.
- Cost category.
- Description or note.
- Cost date.
- Approval status.
- Responsible admin or operator.
- Timestamp.
- Audit logs.
- Future attachments.

Manual cost registration should be permission-protected. Sensitive financial operations may require elevated permissions or future approval workflows.

Manual cost entries must not silently alter historical profit calculations without traceable adjustment records.

## 11. Wallet Relation

The Profit Calculation System should remain compatible with future wallet behavior.

Future wallet relation may include:

- Wallet payments.
- Mixed wallet and payment gateway flows.
- Wallet refunds.
- Customer credits.
- Manual wallet adjustments.
- Wallet transaction reporting.

Wallet operations must remain ledger-oriented, auditable, and compatible with financial reporting.

Wallet usage must not hide the underlying Website Sale, refund, credit, or payment source. Exact wallet profit treatment is an open decision and must be documented before implementation.

## 12. Reporting Philosophy

The Profit Calculation System should support clear website-only reporting.

Reports may include:

- Monthly profit reports.
- Operational cost reports.
- Product profit visibility.
- Category profit visibility.
- Website-only sales reports.
- Historical reporting.
- Approved Cost reports.
- Base Cost reports.
- Payment Cost reports.
- Settlement reports.
- Auditability reports.

Reporting rules:

- Reports must preserve the distinction between Website Sales and physical store activity.
- Reports must not count Inventory Appreciation as Profit.
- Reports should show how Net Operational Profit was calculated.
- Reports should support historical consistency even after later price, inventory, or cost changes.
- Reports should be understandable to both business and technical stakeholders.

Phase 1 reporting should be practical and not over-engineered, while preserving enough data for future analysis.

## 13. Profit Settlement Tracking

The system should support future tracking of profit settlement.

Future settlement tracking may include:

- Paid profit shares.
- Unpaid profit shares.
- Pending settlement.
- Settlement periods.
- Operational balance tracking.
- Settlement notes.
- Settlement audit history.

If profit is not withdrawn, it should remain tracked as project liability or balance. It should not automatically become compounded investment unless future business rules explicitly define that behavior.

Profit settlement tracking should remain separate from profit calculation. Calculation explains profit; settlement explains whether and how that profit was distributed or carried forward.

## 14. Auditability

Every important financial operation should be traceable.

Auditability should answer:

- Who added a cost?
- Who approved a cost?
- When was a cost approved or rejected?
- Which order affected profit?
- Which product and Base Cost were used?
- Which inventory record or product assignment was relevant?
- Which payment record created Website Revenue?
- When did profit change?
- What manual changes were made?
- Why was a financial adjustment made?

Financial operations should prefer traceable records, snapshots, approvals, and adjustments over destructive updates.

Auditability is required for Website Sales, Base Cost snapshots, Operational Costs, Approved Costs, wallet activity, refunds, manual adjustments, payment records, and future accounting sync records.

## 15. Hesabfa Relation

The Profit Calculation System should remain compatible with future accounting sync through Hesabfa.

Hesabfa may support:

- Inventory source data.
- Product purchase cost context.
- Accounting references.
- Future reconciliation.
- Operational reporting support.

Important rules:

- This system is not intended to fully replace accounting software.
- Hesabfa Sync should be treated as an integration boundary.
- Sync should not overwrite local financial decisions without documented rules.
- Failed sync should be logged when it affects financial visibility.
- Website profit must remain based on website orders, Base Cost snapshots, and approved website-related costs.

Exact Hesabfa financial mapping and reconciliation behavior are open decisions.

## 16. Future AI Relation

The architecture should remain compatible with future AI-assisted financial analysis.

Future AI-assisted features may include:

- Sales analysis.
- Profit analysis.
- Anomaly detection.
- Cost optimization.
- Reporting insights.
- Financial forecasting.
- Product profitability suggestions.
- Category profitability insights.

AI suggestions must not bypass financial rules, approval workflows, auditability, or source-of-truth documentation.

AI-generated insights should be reviewable and must not automatically change costs, profit calculations, settlements, or approvals without explicit future rules.

## 17. Out of Scope

The Profit Calculation System must not support:

- Marketplace revenue sharing.
- Vendor payout workflows.
- Multi-currency accounting.
- Full accounting software replacement.
- Payroll management.
- Physical store accounting.
- Tax or legal accounting automation in phase 1.
- Physical store sales inside website profit calculation.
- Inventory Appreciation as Profit.
- Unsold physical inventory as Website Revenue.
- Public financial APIs in phase 1.

Future accounting integrations are allowed, but they must not turn this system into a full accounting replacement without updated source-of-truth documentation.

## 18. Open Decisions

The following decisions are still open:

- Exact Base Cost snapshot workflow.
- Exact moment a product enters the Website Sale cycle.
- Exact definition of completed or accepted financial order for profit recognition.
- Exact refund and partial refund profit behavior.
- Exact wallet payment and wallet refund treatment.
- Exact payment gateway fee handling.
- Exact shipping loss handling.
- Exact operational cost categories for phase 1.
- Exact approval workflow for high-value costs.
- Exact permission model for cost entry and approval.
- Exact reporting period rules.
- Exact settlement period rules.
- Exact treatment of unpaid or unwithdrawn profit balances.
- Exact Hesabfa mapping and reconciliation behavior.
- Exact audit log implementation strategy.
- Exact AI-assisted financial analysis boundaries.

Open decisions must be documented before they become implementation commitments.

## 19. Changelog

- 2026-05-30: Initial profit calculation system document created.
