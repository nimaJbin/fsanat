# Product Scope

## 1. Scope Overview

This document defines the product scope for "فروشگاه صنعت جوان", a custom commerce platform for the Iranian market.

The platform is not a generic CMS, a marketplace, or a simple template-based online store. It is intended to become a modular commerce platform that starts with physical product sales and can later support digital products, subscriptions, financial reporting, inventory management, wallet features, ticketing, admin workflows, AI-assisted tools, and future mobile support.

This document separates phase 1 scope, future scope, excluded scope, and project boundaries so future Codex sessions can understand what the platform should and should not become.

## 2. Product Identity

The project name is "فروشگاه صنعت جوان". The brand identity is connected to "فاطر صنعت جوان" and the platform is designed for Fsanat.ir.

The platform must be built as a custom commerce system with clear business rules, maintainable documentation, and a scalable technical foundation. It should support long-term product development instead of behaving like a short-term store template.

## 3. Target Market

The target market is Iran. The user-facing experience must support Persian language only.

The supported currency scope is Iranian currency only: Rial and Toman. Multi-currency behavior is not part of the current scope.

The main customer direction is B2C. B2B and wholesale workflows may be researched and added in a future phase, but they are not part of the initial product scope.

## 4. Business Model Scope

Only website sales are part of the system business model. A sale belongs to the website business model only when it is completed through the website flow and payment gateway.

Physical store operations and physical store sales are outside the platform business scope. Inventory may come from accounting or operational sources, but unsold physical store stock and physical store sales must not be treated as website profit.

Marketplace and multi-vendor mode are not planned. The platform should be designed for the business itself, not for third-party sellers.

## 5. Phase 1 Scope

Phase 1 should prioritize a working, clean, and understandable commerce foundation. Simplicity in phase 1 is preferred over unnecessary complexity.

Phase 1 includes:

- Authentication system.
- User registration and login.
- User profile completion before checkout.
- Admin panel.
- User panel.
- Product management.
- Category management.
- Product image management.
- Inventory management.
- Manual inventory adjustment.
- Shopping cart.
- Checkout flow.
- Order system.
- Payment gateway integration.
- Ticketing and support system.
- Wallet foundation.
- Basic discount system.
- Profit calculation foundation.
- Base cost logic.
- Manual cost registration.
- Accounting sync foundation.
- Dynamic payment freeze system.
- Admin approval before invoice confirmation.
- Scope-based operation system.
- Reporting foundation.
- Documentation-first architecture.
- Docker-first development structure.

## 6. Future Scope

Future phases may expand the platform after the phase 1 foundation is stable.

Future planned systems include:

- B2B and wholesale support.
- Mobile application.
- AI-assisted systems.
- Digital products.
- Subscription products.
- Access-controlled content.
- Membership system.
- Smart reporting.
- Advanced discount engine.
- Notification integrations.
- Telegram and email approval workflows.
- Advanced analytics.
- SEO automation.
- Bulk import automation improvements.

These systems should be planned as extensions of the core platform, not as reasons to overcomplicate phase 1.

## 7. Out of Scope

The following items are intentionally excluded from the current product scope:

- Generic CMS behavior.
- Marketplace or multi-vendor mode.
- Public API.
- Multi-language support.
- Non-Iranian currencies.
- Physical store sales as part of the website business model.
- Real-time synchronization as a required platform behavior.
- Complex phase 1 systems that do not directly support the initial commerce foundation.

## 8. Product Boundaries

The platform boundary is the website business model. It includes products, carts, checkout, website orders, payment gateway activity, website-related inventory controls, support workflows, reporting foundations, and website financial tracking.

Physical store operations remain outside this boundary. The platform may receive inventory or accounting data from systems such as Hesabfa, but it should not assume real-time synchronization with physical store stock.

The platform must remain Persian-only for users and must support only Rial and Toman. Public API, marketplace behavior, and multi-language behavior must not be introduced unless the project vision is formally changed.

## 9. Core Platform Systems

The core platform systems are:

- Authentication and user account management.
- Admin panel.
- User panel.
- Product Management.
- Category Management.
- Product Image Management.
- Inventory Management.
- Shopping Cart.
- Checkout and Order System.
- Payment Gateway Integration.
- Ticketing and Support System.
- Wallet Foundation.
- Basic Discount System.
- Profit Calculation System.
- Base Cost Snapshot System.
- Manual Cost Registration.
- Accounting Sync Foundation.
- Dynamic Payment Freeze System.
- Universal Scope Selection System.
- Inventory Approval Workflow.
- Product Import Pipeline.
- Reporting Foundation.

The Universal Scope Selection System must be reusable for price updates, freeze actions, inventory actions, category-wide operations, and product targeting.

The Dynamic Payment Freeze System must support disabling payment or order flow for the whole platform, store section, category, subcategory, or specific product.

The Product Import Pipeline should support bulk import, ZIP image matching, validation, preview, retry, and a queue-ready architecture.

## 10. Commerce & Financial Scope

The Profit Calculation System must be based on website-only profit. Profit is calculated from real completed website sales, not from inventory value growth.

The system must store a base cost snapshot when a product enters the website sales cycle. Inflation, market price increase, or appreciation of unsold inventory must not be treated as profit.

Manual operational costs related to website sales must be supported. These costs must be tracked and deducted before profit sharing when they are approved and eligible.

Expensive non-product-purchase costs above 15,000,000 Toman must require approval from both parties before entering profit calculation.

## 11. Inventory & Operational Scope

Inventory data may come from Hesabfa or accounting sync. The platform must also support manual inventory adjustment.

Inventory and physical store stock are not real-time synchronized. The platform should use controlled sync and manual review where needed instead of assuming live stock parity with the physical store.

Selected products, categories, subcategories, or scopes may require admin approval before invoice finalization. This Inventory Approval Workflow helps protect the business when price volatility, inventory uncertainty, or operational review is required.

The platform should support operational controls through the Universal Scope Selection System so actions can apply to broad or narrow product scopes.

## 12. User Experience Scope

The customer-facing experience must be Persian-only.

Customers can add products to the shopping cart before registration. Registration is mandatory before final invoice creation.

Before checkout completion, the customer must complete the required profile information:

- Phone number.
- Full name.
- Address.
- Postal code.
- Email.

The first user experience scope should remain practical and direct: browse products, add to cart, register or log in, complete profile, checkout, pay, track orders, and contact support through the ticketing system.

## 13. Technical Scope

The technical direction must support a modular, maintainable, documentation-first commerce platform.

The project should follow Docker-first development and deployment structure. The architecture should remain scalable, but phase 1 should avoid unnecessary technical complexity.

The platform has no public API in the current scope. Internal integrations, accounting sync, queue-ready import workflows, and future service boundaries may be added when they support project needs.

Real-time sync is intentionally avoided as a required architecture principle. Controlled sync, queues, admin review, and manual correction are acceptable where they improve reliability.

## 14. Documentation Scope

Documentation is part of the product scope. Codex must treat documentation as a source of truth for future work.

Every major system must have its own documentation file when the system becomes active or detailed enough to require separate tracking. Every system document must include a Changelog section.

Every meaningful change to product behavior, business rules, architecture, or system boundaries must update the related documentation. This file must be updated when product scope changes.

Documentation should stay clean, structured, and suitable for future AI/Codex usage.

## 15. Future Research Areas

The following areas require future research before implementation:

- B2B and wholesale workflows.
- Mobile application scope and platform choice.
- AI-assisted product, content, SEO, pricing, sales analytics, and support automation.
- Digital product and subscription access rules.
- Membership system boundaries.
- Advanced discount engine requirements.
- Notification integrations and approval workflows through Telegram or email.
- Advanced analytics and smart reporting.
- SEO automation.
- Bulk import automation improvements.
- Hesabfa accounting sync details and operational limitations.

## 16. Changelog

- 2026-05-29: Initial product scope document created.
