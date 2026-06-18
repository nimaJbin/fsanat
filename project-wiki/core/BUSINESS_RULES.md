# Business Rules

## 1. Business Overview

"فروشگاه صنعت جوان" is a custom commerce platform for the Iranian market. The platform focuses on website-based commerce, financial transparency, modular workflows, inventory-aware operations, and controlled order processing.

This document defines official business behavior for the platform. It is not a technical implementation document. Future implementation, financial systems, workflows, and business logic must follow these rules.

The current business direction is B2C. B2B and wholesale support may be added in a future phase. Marketplace and multi-vendor behavior are not allowed.

## 2. Commerce Rules

Only website sales are part of the platform business model. A sale is considered a website sale only when it is completed through the website flow and payment gateway.

Physical store sales are outside the website business scope and must not be included in website profit, website reporting, or website financial sharing.

The platform must support controlled commerce workflows for products, cart, checkout, orders, payment, support, and admin review. Phase 1 should stay simple and avoid unnecessary business complexity.

## 3. Financial Rules

The financial model must be transparent, traceable, and based on explicit records.

Website financial rules apply only to website sales and website-related costs. Physical store operations, unsold physical inventory, and physical store losses are outside the website financial cycle.

All financial calculations must be auditable. Important financial records should preserve the data needed to explain how revenue, costs, and profit were calculated.

## 4. Profit Calculation Rules

Profit is calculated from website business activity only:

```text
Profit = Website revenue - valid operational costs
```

Only sales completed through the website and payment gateway count as website revenue. Physical store sales are excluded.

When a product enters the website sales flow, its base purchase cost must be stored. This base cost snapshot is used to prevent future market changes from artificially changing website profit.

Inflation, market price increase, or appreciation of unsold inventory is not operational profit. Inventory value growth must not be counted as website profit.

Non-product-purchase costs above 15,000,000 Toman require approval from both parties before entering profit calculation.

Manual operational costs must be supported for advertising, infrastructure, external services, packaging, operational expenses, and future manual adjustments.

Inventory not assigned to website sales is outside the website profit cycle.

## 5. Inventory Rules

Inventory is expected to sync from Hesabfa or another accounting source. This sync is not real-time.

Manual inventory adjustment must exist. Admins must be able to manually increase or decrease inventory when business operations require correction or review.

The platform must not assume live parity between website inventory and physical store stock. Controlled sync, manual review, and adjustment are preferred over real-time synchronization.

Inventory behavior must support website sales without treating the physical store as part of the website profit cycle.

## 6. Order Workflow Rules

Orders should support clear states that reflect the business process. Expected order states include:

- pending
- waiting for approval
- approved
- rejected
- paid
- processing
- completed
- canceled
- expired

Order states must be understandable to admins and suitable for reporting, approval workflows, payment control, and customer support.

Registration is mandatory before final invoice creation. Some orders may require admin approval before invoice confirmation or payment completion, depending on product, category, scope, or operational rule.

## 7. Approval Workflow Rules

Some products, categories, subcategories, orders, or broader scopes may require manual admin approval before final invoice confirmation.

Approval workflows are required for situations where price volatility, inventory uncertainty, operational review, or business risk makes automatic finalization unsafe.

Approval outcomes should clearly allow continuation, rejection, cancellation, or expiration of the related order flow.

Future notification-based approval workflows through Telegram or email may be added, but they are not required as phase 1 core behavior.

## 8. Pricing Rules

Pricing must support business control in a volatile market. The platform must allow price changes and future bulk price operations through reusable scope-based logic.

Price updates may target the whole platform, store section, category, subcategory, or specific product when the related operation supports that scope.

Inventory price increase for unsold products must not be treated as profit. Profit must come from completed website sales and valid cost calculations.

Advanced discount and pricing automation may be added in future phases. Phase 1 should include only a basic discount system that can be extended later.

## 9. Payment Rules

Payment must be connected to the website order flow and payment gateway. Only completed payment gateway sales count as website sales.

The platform must support dynamic payment freeze behavior because of Iranian market price volatility. Payment or order flow may be temporarily disabled for:

- entire platform
- store section
- category
- subcategory
- specific product

Payment freeze rules should be operational controls, not permanent product deletion or catalog removal.

## 10. Customer Rules

Customers may add products to the cart before registration.

Registration is mandatory before final invoice creation.

Before checkout completion, the customer must provide:

- phone number
- full name
- postal address
- postal code
- email

The customer-facing experience must be Persian-only. The platform must support Iranian currency only: Rial and Toman.

## 11. Wallet & Credit Rules

The platform should include a wallet foundation in phase 1.

Wallet behavior must remain traceable and compatible with future financial reporting. Any future wallet credit, refunds, manual credit changes, or customer balance behavior must be documented before implementation.

Advanced wallet rules are future-phase business decisions and should not be over-engineered in phase 1.

## 12. Ticketing & Support Rules

The platform must support a ticketing and support system so customers can contact the business through a controlled workflow.

Support records should be connected to customer accounts where possible and should help admins manage customer issues related to orders, payments, products, and account questions.

Future support automation and AI-assisted support may be added later, but phase 1 should focus on a clear and reliable support workflow.

## 13. Product Import Rules

Bulk product import must support:

- file import
- image matching
- validation
- preview
- error reporting
- future queue processing

The Product Import workflow should help admins review imported data before it affects the live catalog.

Image matching may use ZIP-based image matching. Import behavior should be queue-ready for future scaling, but phase 1 should keep the workflow understandable and controllable.

## 14. Digital Product Rules

Digital products are future-phase features, not phase 1 core implementation.

Future digital product behavior may include subscription products, access-controlled content, membership access, and premium content visibility.

Digital product rules must be documented in detail before implementation, especially around access control, payment dependency, expiration, renewal, and customer visibility.

## 15. Scope Operation Rules

The platform must support reusable scope-based targeting logic for business operations.

Scope-based operations should support:

- price updates
- freeze operations
- inventory changes
- category-wide operations
- product targeting
- future bulk operations

Supported targeting levels may include the entire platform, store section, category, subcategory, and specific product.

This shared targeting logic should prevent repeated business-rule definitions across pricing, inventory, payment freeze, and future operational systems.

## 16. Documentation Rules

Every feature must be documented when it becomes part of the project scope.

Every major system needs its own Markdown document when the system becomes active or detailed enough to require separate tracking.

Documentation must stay synchronized with implementation. Business behavior, financial rules, workflow changes, and scope changes must update the related documentation.

Every system document must include Changelog entries.

Codex must treat documentation as a source of truth for future work.

## 17. Future Business Expansion

Future business expansion may include:

- B2B and wholesale workflows.
- Mobile application support.
- Digital products.
- Subscription products.
- Membership access.
- Access-controlled content.
- Advanced discounts.
- Smart reporting.
- AI-assisted content, SEO, pricing, analytics, and support tools.
- Telegram and email approval workflows.

Future expansion must not change current business boundaries unless the source-of-truth documentation is updated first.

## 18. Out of Scope

The following behaviors are outside the current business scope:

- Marketplace or multi-vendor mode.
- Physical store sales inside website profit calculation.
- Public API.
- Multi-language customer experience.
- Non-Iranian currencies.
- Real-time inventory synchronization as a required rule.
- Treating inventory appreciation as operational profit.
- Treating unsold physical store inventory as website profit.

Future mobile application support is allowed, but it is not phase 1 core business behavior.

## 19. Changelog

- 2026-05-29: Initial business rules document created.
