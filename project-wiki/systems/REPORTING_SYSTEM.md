# Reporting System

## 1. Purpose

This document defines the Reporting System for "فروشگاه صنعت جوان".

The Reporting System describes reporting, analytics, operational visibility, business intelligence direction, and audit/report philosophy for the platform.

This system is important because the platform includes inventory workflows, order workflows, operational approvals, financial calculations, wallet systems, import systems, Dynamic Freeze, and future AI-assisted analysis.

This is a reporting architecture and operational visibility document. It is not implementation code, a migration plan, an accounting policy, or a replacement for accounting software.

## 2. Reporting Philosophy

Reports are operational and business visibility tools.

The Reporting System must remain:

- Understandable.
- Auditable.
- Practical for phase 1.
- Consistent with documented business rules.
- Useful for operational decisions.
- Scalable for future analytics.

Reports must avoid misleading financial logic. They should explain what happened in the website business flow without mixing website activity with physical store operations.

The reporting system is not intended to replace accounting software. It should provide platform-level visibility into website sales, orders, inventory, approvals, operational actions, profit calculation, imports, freeze controls, wallet activity, and future support or AI insights.

## 3. Core Reporting Areas

Core reporting areas may include:

- Sales reporting.
- Order reporting.
- Inventory reporting.
- Approval reporting.
- Operational reporting.
- Profit reporting.
- Wallet reporting.
- Import reporting.
- Dynamic Freeze and operational control visibility.
- User and customer reporting.
- Product and taxonomy reporting.
- Ticketing and support reporting.
- Future AI analytics.

Phase 1 should focus on useful operational reporting rather than complex business intelligence dashboards.

## 4. Financial Reporting Rules

Financial reports must follow the official website-only business model.

Financial reporting rules:

- Only Website Sales are included in website reports.
- Website Sales must come from completed website checkout and payment gateway flow.
- Physical store operations are outside reporting scope for website business reports.
- Physical Store Sales must not be mixed into website revenue, website profit, or website operational reports.
- Inventory Appreciation is not Profit.
- Profit reports rely on preserved Base Cost snapshots.
- Canceled orders must not affect operational profit.
- Rejected orders must not affect operational profit.
- Expired orders must not affect operational profit.
- Failed payment orders must not affect operational profit.
- Approved Operational Costs may affect profit reports according to the Profit Calculation System.
- Non-product-purchase costs above 15,000,000 Toman must be approved before entering profit calculation reports.

Financial reports should be traceable enough to explain revenue, Base Cost, valid costs, Net Operational Profit, and related order records.

## 5. Operational Visibility

The Reporting System should provide visibility into current and historical operations.

Operational visibility should include:

- Pending approvals.
- Inventory uncertainty.
- Low stock.
- Out-of-stock products.
- Sync failures.
- Dynamic Freeze situations.
- Failed imports.
- Import warnings.
- Operational warnings.
- Manual interventions.
- Payment failures.
- Canceled, rejected, or expired orders.
- Support and ticket workload where relevant.

Reports should help admins understand what needs attention, what changed, and which workflows may require manual review.

## 6. Dashboard Philosophy

The architecture should support admin dashboard widgets and operational summaries.

Dashboard areas may include:

- Sales summary.
- Pending approval count.
- Inventory alerts.
- Low stock alerts.
- Freeze status summary.
- Import status summary.
- Ticket alerts.
- Payment issue summary.
- Financial summary.
- Future analytics cards.

Dashboard widgets should prioritize actionable information. Phase 1 dashboards should remain operationally simple and should not become a complex BI system too early.

## 7. Report Filtering

Reports should support practical filtering so admins can investigate business and operational activity.

Expected filtering dimensions may include:

- Date or date range.
- Product.
- Category.
- Taxonomy.
- Order status.
- Payment status.
- Inventory status.
- Operator or admin.
- Approval state.
- Freeze state.
- Import session.
- Future wallet state.
- Future payment state.

Filters should remain consistent with the System Glossary and related system documents. Reporting filters should not introduce marketplace, multi-language, multi-currency, or physical store reporting assumptions.

## 8. Export Philosophy

The reporting architecture should remain compatible with practical export needs.

Possible export formats and outputs include:

- Excel export.
- CSV export.
- Printable reports.
- Future scheduled reports.
- Future report attachments for notifications.

Exports should preserve report context, including date range, filters, generated time, and relevant source data where practical.

Exported financial reports must still respect website-only profit rules, Base Cost snapshots, Approved Costs, and the distinction between website activity and physical store operations.

## 9. Auditability

Reports must remain traceable and auditable.

The reporting system should support future visibility into:

- Who changed data.
- Who approved operations.
- Manual cost additions.
- Manual cost approvals.
- Inventory adjustments.
- Import actions.
- Freeze actions.
- Order status changes.
- Payment actions.
- Wallet adjustments.
- Settings changes that affect business behavior.

Reports should not hide the underlying source of important numbers. Where practical, report rows should be traceable back to orders, products, inventory logs, import sessions, freeze logs, operational cost records, or audit events.

## 10. Inventory Relation

Reporting must integrate with the Inventory System.

Inventory reports may include:

- Current website stock.
- Low stock reports.
- Out-of-stock reports.
- Inventory adjustments.
- Inventory sync status.
- Sync failures.
- Inventory approval workflows.
- Reservation activity.
- Stock changes by product.
- Stock changes by category or taxonomy.
- Import-related inventory changes.
- Dynamic Freeze relation to inventory uncertainty.

Inventory reports must not treat Inventory Appreciation as Profit. Inventory reports should support website operations and reconciliation, not physical store sales management or marketplace inventory.

## 11. Order Relation

Reporting must integrate with the Order Workflow.

Order reports may include:

- Order lifecycle visibility.
- Order status reports.
- Payment state reports.
- Approval state reports.
- Cancellation reports.
- Expiration reports.
- Failed payment reports.
- Completed order reports.
- Processing and fulfillment visibility.
- Customer order history.
- Future refund reports.

Order reports should preserve the distinction between order state, payment state, approval state, and fulfillment state when those concepts become separate in implementation.

Only valid completed Website Sales should enter sales and profit reporting.

## 12. Profit Relation

Reporting must support the Profit Calculation System.

Profit-related reports may include:

- Monthly profit reports.
- Operational cost reports.
- Approved Cost reports.
- Product-level profit visibility.
- Category-level profit visibility.
- Base Cost visibility.
- Payment cost visibility.
- Shipping loss visibility where applicable.
- Pending settlement visibility.
- Future partner or share visibility.

Profit reports must rely on completed Website Sales, preserved Base Cost snapshots, valid Operational Costs, and documented payment records.

Reports must not count unsold inventory value growth, physical store sales, rejected orders, canceled orders, expired orders, or failed payment flows as operational profit.

## 13. Wallet Relation

The Reporting System should remain compatible with future wallet behavior.

Future wallet reports may include:

- Wallet balance reports.
- Wallet transaction reports.
- Refund visibility.
- Credit tracking.
- Manual wallet adjustment reports.
- Mixed wallet and payment gateway payment visibility.
- Customer credit history.

Wallet reporting must remain ledger-oriented and traceable. Wallet reports should not hide the underlying order, refund, credit, or manual adjustment source.

Exact wallet reporting rules are open decisions and must be documented after wallet behavior is defined in detail.

## 14. Import Pipeline Relation

Reporting should integrate with the Import Pipeline System.

Import reports may include:

- Import history.
- Import session status.
- Validation errors.
- Validation warnings.
- Retry statistics.
- Import success or failure visibility.
- Products created by import.
- Products updated by import.
- Image matching results.
- Inventory changes caused by import.
- Operator or admin responsible for import.

Import reports should help admins understand what was uploaded, what changed, what failed, what was retried, and which data needs review.

## 15. Dynamic Freeze Relation

Reporting should integrate with the Dynamic Freeze System.

Freeze reports may include:

- Freeze history.
- Active freeze visibility.
- Affected products.
- Affected categories or scopes.
- Freeze frequency.
- Freeze duration.
- Freeze reasons.
- Operational impact visibility.
- Manual interventions.
- Order, checkout, or payment impact.
- Inventory-related freeze events.

Freeze reports should help the business understand how often volatility, inventory uncertainty, sync issues, supplier problems, or manual review affect website operations.

## 16. Notification Relation

The Reporting System should remain compatible with future notification workflows.

Future notification-related reporting may include:

- Scheduled reports.
- Operational alerts.
- Telegram report delivery.
- Email report delivery.
- Anomaly notifications.
- Approval summary notifications.
- Inventory warning notifications.
- Freeze status notifications.

Notification reports should not replace audit logs. Reports sent through notifications should preserve enough context for admins to understand the source and importance of the alert.

Notification channels are future expansion unless a specific phase-1 workflow requires them.

## 17. Future AI Relation

The reporting architecture should remain compatible with future AI-assisted analysis.

Future AI-assisted reporting may include:

- Anomaly detection.
- Sales prediction.
- Inventory forecasting.
- AI-generated insights.
- SEO analytics.
- Operational optimization.
- Automated reporting summaries.
- Product profitability insights.
- Category performance insights.
- Support workload insights.

AI-generated insights must be reviewable. AI must not automatically change financial records, profit calculations, inventory, prices, orders, freeze rules, or operational costs without documented approval rules.

AI analysis must respect source-of-truth business definitions such as Website Sale, Base Cost, Inventory Appreciation, Approved Cost, Dynamic Freeze, and Physical Store Sale.

## 18. Performance Philosophy

The reporting system should remain scalable without over-engineering phase 1.

Performance direction:

- Start with clear, direct reports where data volume allows.
- Avoid heavy synchronous calculations when they could slow operational workflows.
- Use queues for expensive report generation when needed.
- Support future caching strategies.
- Support future aggregation or summary tables when direct transactional reporting becomes too slow.
- Keep report definitions understandable and traceable.
- Avoid premature enterprise BI complexity.

Financial and operational reports should prefer correctness, traceability, and clear business meaning over flashy dashboards.

## 19. Out of Scope

The Reporting System must not support:

- Full accounting software replacement.
- Marketplace or vendor analytics.
- Multi-currency financial reporting.
- Enterprise BI systems in phase 1.
- Real-time analytics dashboards as a phase-1 requirement.
- Physical store sales as website reports.
- Inventory Appreciation as Profit.
- Public reporting APIs in phase 1.
- Multi-language reporting behavior.

Future advanced analytics are allowed only when they remain aligned with documented product scope, business rules, and source-of-truth financial logic.

## 20. Open Decisions

The following decisions are still open:

- Exact phase-1 report list.
- Exact dashboard widget list.
- Exact report filtering model.
- Exact report export formats for phase 1.
- Exact financial report layout.
- Exact monthly profit report format.
- Exact inventory report format.
- Exact order report format.
- Exact approval report format.
- Exact import report format.
- Exact Dynamic Freeze report format.
- Exact wallet reporting rules.
- Exact audit log integration strategy.
- Exact caching or aggregation strategy.
- Exact scheduled report requirements.
- Exact future AI analytics boundaries.

Open decisions must be documented before they become implementation commitments.

## 21. Changelog

- 2026-05-30: Initial reporting system document created.
