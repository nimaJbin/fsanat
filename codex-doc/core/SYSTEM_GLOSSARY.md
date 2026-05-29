# System Glossary

## 1. Purpose Of This Document

This document defines the official terminology, vocabulary, naming conventions, and domain language for "فروشگاه صنعت جوان".

The glossary is a source-of-truth document for future documentation, architecture discussions, prompts, database naming, feature naming, and development decisions. It exists to reduce ambiguity across AI-assisted development, modular architecture, financial logic, inventory workflows, approval systems, reporting, admin systems, wallet behavior, ticketing, and future AI systems.

Future Codex sessions, developers, documentation writers, and AI tools should use the terms in this document consistently.

## 2. Domain Language Rules

- Use consistent business terms across all documentation and implementation discussions.
- Prefer business-oriented names for domain concepts.
- Prefer reusable system names when a concept applies across multiple modules.
- Avoid ambiguous names that can mean different things in commerce, finance, inventory, or workflow contexts.
- Keep technical names clear, but do not let implementation details replace domain language.
- Treat website commerce and physical store operations as separate business areas.
- Treat documentation as the primary source for project vocabulary.

Important domain clarifications:

- Physical store operations are outside website business scope.
- Only website payment-gateway sales count as Website Sales.
- Inventory inflation is not Profit.
- Base Cost is locked when a product enters the website sales cycle.
- Marketplace and multi-vendor behavior are not supported.
- The platform is Persian-only for users.
- The financial system supports Rial and Toman only.

## 3. Commerce Terms

**Website Sale**: A sale completed through the website flow and payment gateway. Only Website Sales count toward website revenue and website profit calculation.

**Physical Store Sale**: A sale completed outside the website, such as through the physical store or offline operations. Physical Store Sales are outside website profit calculation.

**Product**: A sellable item or offering in the platform catalog. Product can refer to physical, digital, or subscription products depending on context.

**Physical Product**: A product with physical inventory, packaging, logistics, and delivery requirements. Physical products are the phase 1 product type.

**Digital Product**: A future product type delivered through digital access instead of physical delivery.

**Subscription Product**: A future product type that grants time-based or recurring access to a service, content, or benefit.

**Order**: A customer purchase request created through the website commerce flow. Orders may pass through approval, payment, processing, and completion states.

**Invoice**: The finalized financial document or confirmation created after required customer data, order validation, and applicable approval rules are satisfied.

**Cart**: A temporary customer selection of products before final checkout. Customers may add products to the cart before registration.

**Checkout**: The customer flow for completing profile requirements, confirming order details, handling approval requirements, and moving toward payment or invoice creation.

## 4. Financial Terms

**Profit**: The result of website revenue minus valid operational costs. Profit applies only to website business activity.

**Net Profit**: Profit after eligible and approved website-related costs are deducted. Net Profit is the preferred term when discussing shareable website profit.

**Base Cost**: The stored purchase cost of a product when it enters the website sales cycle. Base Cost must not be automatically changed by later market price increases.

**Profit Calculation Cycle**: The business process for calculating website profit from completed Website Sales, Base Cost records, and valid operational costs.

**Operational Cost**: A website-related expense such as advertising, infrastructure, external services, packaging, operational expenses, or documented manual adjustments.

**Approved Cost**: An Operational Cost that is allowed to enter profit calculation. Non-product-purchase costs above 15,000,000 Toman require approval from both parties.

**Wallet**: A customer credit or balance foundation for future wallet-related workflows. Wallet behavior must remain traceable.

**Wallet Transaction**: A future record of wallet balance movement such as credit, debit, refund, manual adjustment, or usage in payment.

**Inventory Appreciation**: Increase in inventory value caused by market price growth or inflation. Inventory Appreciation is not Profit.

**Revenue**: Money received from completed Website Sales through the website payment flow.

**Financial Report**: A report that summarizes website revenue, valid costs, profit, wallet activity, or other traceable financial information.

## 5. Inventory Terms

**Inventory**: The available stock information used by the website for product availability, checkout behavior, and operational control.

**Inventory Sync**: The controlled process of receiving inventory data from Hesabfa or another accounting source. Inventory Sync is not real-time.

**Manual Inventory Adjustment**: An admin action that increases or decreases inventory to correct stock, handle operational issues, or reflect reviewed changes.

**Inventory Reservation**: A future or workflow-specific hold on stock for an order before completion. Reservation rules must be documented before implementation.

**Inventory Approval**: A manual review step required before final invoice confirmation for selected products, categories, orders, or scopes.

## 6. Workflow Terms

**Approval Workflow**: A business process requiring admin review before an order, invoice, payment flow, or operation can continue.

**Pending Approval**: A state where an order or operation is waiting for admin review.

**Approved Order**: An order that has passed the required approval workflow and may continue toward invoice confirmation or payment.

**Rejected Order**: An order rejected during approval or review. Rejected orders should not continue to final payment or fulfillment.

**Expired Order**: An order that is no longer valid because its allowed time, price condition, stock condition, or approval window has ended.

**Dynamic Freeze**: A temporary business control that disables payment or order flow for a defined scope because of price volatility, inventory uncertainty, or operational risk.

**Scope-based Operation**: An operation applied to a selected target such as the whole platform, store section, category, subcategory, or specific product.

**Universal Targeting Engine**: A reusable targeting system for selecting operation scopes across pricing, freeze, inventory, category-wide operations, product targeting, discounts, campaigns, and future bulk operations.

## 7. Reporting Terms

**Report**: A structured view of business, operational, financial, inventory, order, or customer support data.

**Reporting Foundation**: Phase 1 reporting capability that provides basic visibility without over-engineered analytics.

**Smart Reporting**: A future reporting capability that may include advanced analytics, recommendations, or AI-assisted insights.

**Audit Trail**: A traceable record of important actions, decisions, financial changes, or operational changes.

**Operational Report**: A report focused on orders, approvals, inventory status, freeze status, product import, or support activity.

## 8. Import System Terms

**Product Import Pipeline**: The workflow for importing products in bulk through files, validation, preview, image matching, error reporting, and future queue processing.

**Product Import Session**: A single import attempt or batch, including its uploaded file, validation results, preview state, errors, and final processing status.

**Image Matching**: The process of matching product images to imported products, including possible ZIP-based image matching.

**Validation**: The review step that checks imported product data for required fields, invalid values, missing images, duplicate records, or business-rule conflicts.

**Preview Import**: A review state where admins can inspect import results before applying changes to the live catalog.

**Retry Queue**: A future queue-ready mechanism for retrying failed or delayed import operations.

## 9. Access & Permission Terms

**Admin**: A platform user with access to management workflows such as products, categories, inventory, orders, approvals, reports, support, and operational controls.

**Customer**: A user who browses products, adds items to cart, registers, completes profile data, checks out, pays, tracks orders, and uses support.

**User Panel**: The customer-facing account area for profile, orders, wallet, tickets, and future access-controlled content.

**Admin Panel**: The management area for business and operational workflows.

**Permission**: A rule that controls whether a user can access an action, workflow, data area, or management feature.

**Role**: A named group of permissions. Roles should reflect real platform responsibilities rather than temporary implementation details.

**Digital Access**: Future access to digital products, subscription content, membership benefits, or premium visibility.

## 10. Documentation Terms

**Source of Truth**: A documentation file that defines official project behavior, rules, scope, terminology, or architecture decisions.

**Documentation-first**: A workflow where important systems, rules, and decisions are documented before or during implementation and updated after changes.

**Changelog**: A section at the end of a document that records important changes with dates.

**System Document**: A Markdown file describing a major system, including its purpose, responsibilities, workflows, boundaries, and Changelog.

**Business Rule**: A documented rule that defines how the business behaves, regardless of technical implementation.

**Architecture Rule**: A documented rule that guides system structure, boundaries, dependencies, and long-term maintainability.

**Project Rule**: A documented rule that applies broadly to project behavior, documentation, architecture, coding, or AI/Codex workflow.

## 11. Architecture Terms

**Modular Architecture**: A system structure where major business areas are separated into maintainable modules with clear responsibilities.

**Clean Code**: Code that is readable, maintainable, focused, and avoids unnecessary duplication or hidden business logic.

**Domain-first Design**: A design approach where business concepts and domain language guide system structure and naming.

**Docker-first Deployment**: A deployment and development approach where Docker is used to keep environments predictable and scalable.

**Integration**: A connection to another system such as Hesabfa, payment gateway, notification service, or future automation service.

**Internal Integration**: A system-to-system connection used inside the platform or operations. This is different from a Public API.

**Public API**: An externally exposed API for third-party usage. Public API is not part of the current product scope.

## 12. AI & Development Terms

**AI-assisted development**: A development workflow where Codex or other AI tools help create, update, review, and maintain documentation, architecture, and implementation under clear project rules.

**Future-proof System**: A system designed to support expected future growth without adding unnecessary phase 1 complexity.

**Reusable System**: A system designed once and applied across multiple workflows, such as Universal Targeting Engine.

**Business Logic**: Rules and workflows that express how the business behaves. Business Logic should be separated from UI and controllers.

**Codex Session**: A future AI-assisted working session that must read and follow the project documentation before making changes.

## 13. Naming Conventions

- Use consistent terminology from this glossary in all documentation and development discussions.
- Prefer names that describe business meaning before technical mechanism.
- Use reusable system names for shared capabilities, such as Universal Targeting Engine and Dynamic Freeze.
- Avoid using different names for the same concept across documents.
- Avoid names that mix physical store operations with website business logic.
- Use "Website Sale" for payment-gateway sales completed through the website.
- Use "Physical Store Sale" for offline or non-website sales.
- Use "Base Cost" for the locked purchase cost used in website profit logic.
- Use "Inventory Appreciation" for market-driven stock value growth that is not profit.
- Use "Scope" or "Target" for selected operation boundaries.

## 14. Reserved Terms

The following terms have official meanings and should not be reused casually:

- Website Sale
- Physical Store Sale
- Profit
- Net Profit
- Base Cost
- Profit Calculation Cycle
- Operational Cost
- Approved Cost
- Inventory Appreciation
- Dynamic Freeze
- Scope-based Operation
- Universal Targeting Engine
- Product Import Pipeline
- Product Import Session
- Inventory Approval
- Digital Access
- Source of Truth
- Documentation-first

## 15. Deprecated / Avoided Terms

Avoid these terms unless a future source-of-truth document explicitly changes the project scope:

- Marketplace
- Multi-vendor
- Public API
- Multi-language
- Real-time inventory sync
- Inventory profit
- Offline profit
- Store profit as website profit
- Generic CMS
- Template store

Avoid vague terms such as "sale", "cost", "approval", or "sync" without context. Prefer precise terms such as Website Sale, Approved Cost, Approval Workflow, or Inventory Sync.

## 16. Future Terminology

Future terminology may be added when new systems become active or better defined.

Expected future terminology areas include:

- B2B and wholesale workflows.
- Digital products and subscription access.
- Membership access.
- Access-controlled content.
- Advanced wallet behavior.
- Advanced discount engine.
- Smart reporting.
- AI-assisted content, SEO, pricing, analytics, and support automation.
- Mobile application support.
- Telegram and email approval workflows.

New terms must be added to this glossary before they become widely used across documentation or implementation.

## 17. Changelog

- 2026-05-30: Initial system glossary document created.
