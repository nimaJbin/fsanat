# Project Vision

## 1. Overview

"فروشگاه صنعت جوان" is a custom commerce platform for the Iranian market. The brand name is "فاطر صنعت جوان" and the primary domain is Fsanat.ir.

The platform is not intended to be a simple online shop. It should become a scalable, modular, documentation-first commerce system that can begin with physical product sales and later support more advanced business models and operational systems.

The user experience must be Persian-only, and the supported currency scope is Iranian currency only: Rial and Toman.

## 2. Product Mission

The mission of the platform is to create a controlled, reliable, and extensible digital sales channel for "فاطر صنعت جوان". It should help the business sell products through the website, manage website-related operations, track financial outcomes, and support future growth without rebuilding the platform from scratch.

The system exists to separate website business activity from physical store activity and to provide clear digital workflows for products, orders, payments, inventory, reporting, customer support, and future automation.

## 3. Long-Term Vision

The long-term vision is to build a custom commerce platform, not only a basic shop. The platform should start with the practical needs of physical product sales, then grow into a broader business system with reusable modules and clear operational boundaries.

Future growth may include digital products, subscription access, customer wallet, ticketing, reporting, automation, AI-assisted features, and a mobile application. The architecture must remain flexible enough to support these future systems without treating them as immediate phase-one requirements.

## 4. Business Direction

The main business direction is B2C-first. The first phase should focus on direct sales from the website to customers.

B2B or wholesale workflows may be added in a future phase if the business requires them. Marketplace or multi-vendor mode is not planned and must not be treated as part of the product vision.

Physical product sales are the phase-one priority. Digital products and subscription products may be added later. The platform has no public API in the current vision, although internal integrations may be added where needed.

## 5. Partnership Context

The project is built around a practical partnership between Nima and Peyman.

Nima is responsible for the digital, technical, software, product, and website side of the project. This includes source code, software architecture, technical systems, product workflows, website implementation, and long-term technical maintainability.

Peyman is responsible for product sourcing, inventory, warehouse operations, packaging, logistics, shipping, physical store operations, and operational costs.

Physical store sales are outside the scope of the website platform. Only sales completed through the website and its payment gateway are considered part of the website business model.

## 6. Core Product Principles

- Documentation-first development.
- Domain-first design.
- Modular architecture.
- Clean code.
- Scalable and future-proof structure.
- Docker-first deployment.
- AI-assisted development with clear rules.
- Every major system must have its own documentation.
- Every meaningful change must update the related documentation.
- Every system document must include a Changelog section.
- Codex must treat documentation as a source of truth for future work.

## 7. Financial Vision

Website profit must be calculated only from real completed website sales. Inventory value growth, market inflation, or price increases for unsold stock must not be treated as website profit.

When a product enters the website sales cycle, its base cost must be stored as a stable financial snapshot. Future market changes should not artificially increase shared profit for stock that has not been sold through the website.

Costs related to website sales must be tracked and deducted before profit sharing. Expensive non-product-purchase costs above 15,000,000 Toman must require approval from both parties before entering profit calculation.

Nima is not financially responsible for business losses, physical store losses, unsold stock, operational costs, or negative profit periods. Unsold physical store inventory is outside the website profit cycle.

The future Profit Calculation Engine should be designed to make website financial logic traceable, auditable, and based on explicit stored records.

## 8. Operational Vision

The platform should support practical inventory management for website sales while keeping physical store operations outside the website profit model.

Important operational capabilities may include Inventory Management, manual inventory adjustment, admin approval before final invoice confirmation for selected products, categories, or scopes, and dynamic payment or freeze control for products affected by high price volatility.

The system should not depend on real-time synchronization with every external or physical process. A controlled, non-realtime sync approach is acceptable when it improves reliability, reviewability, and operational control.

The platform should also include a universal targeting or scope selection engine so operational rules can apply to the whole site, store-only areas, categories, subcategories, or specific products.

## 9. Future Expansion

Planned or possible future systems include:

- Profit Calculation Engine.
- Base Cost Snapshot System.
- Inventory Management.
- Manual inventory adjustment.
- Admin approval before final invoice confirmation for selected products, categories, or scopes.
- Dynamic payment and freeze control for high price volatility.
- Universal targeting and scope selection engine.
- Bulk product import system with image matching.
- Accounting sync, probably with Hesabfa.
- Wallet system.
- Ticketing and customer support system.
- Digital subscription access system.
- AI-assisted product, content, SEO, pricing, sales analytics, and support automation features.
- Future mobile application.
- Future B2B or wholesale workflows.

## 10. Out of Scope

The following items are outside the current product vision:

- Marketplace or multi-vendor mode.
- Multi-language user experience.
- Public API.
- Physical store sales as part of the website profit model.
- Real-time synchronization as a required architecture principle.

## 11. Documentation Policy

This document is a high-level product vision document and one of the main sources of truth for the project. Future Codex sessions should use it to understand the project direction without needing previous chat history.

When the project vision changes, this file must be updated. Related system documents, architecture documents, and rule documents must also be updated when the change affects their scope.

Documentation must stay clean, structured, and suitable for future AI-assisted development. Major systems must have their own documentation files, and each system document must include a Changelog section.

## 12. Changelog

- 2026-05-29: Initial project vision document created.
