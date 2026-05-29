# Product System

## 1. Purpose

This document defines the Product System for "فروشگاه صنعت جوان".

The Product System describes what a product means in this platform, how physical products behave in phase 1, how future digital and subscription products should be considered, and how the system must remain extensible without becoming over-engineered.

This is a product behavior and architecture document, not an implementation file, migration plan, or database schema.

## 2. Product Philosophy

The Product System must not be designed as a simple flat product table only.

Products are central to commerce, inventory, pricing, profit calculation, SEO, import workflows, reporting, order workflows, Dynamic Freeze, and future AI-assisted tools.

The product model must support:

- Physical products.
- Future digital products.
- Future subscription products.
- Product images and galleries.
- SEO fields.
- Pricing.
- Base Cost.
- Inventory awareness.
- Category and taxonomy relations.
- Attributes.
- Future compatibility logic.
- Import pipeline compatibility.
- Reporting needs.
- Future mobile app usage.

Phase 1 should stay practical and focused on physical products, while the architecture should avoid choices that block future product types.

## 3. Product Types

The Product System should recognize these product types:

- Physical Product.
- Digital Product, future.
- Subscription Product, future.

Product type must affect business behavior. For example, a Physical Product has inventory and shipping behavior, while a future Digital Product may have access or download behavior.

Product type design must not introduce marketplace, multi-vendor, multi-language, or multi-currency assumptions.

## 4. Physical Product Rules

Physical Product is the main phase-1 product type.

A Physical Product should support:

- Inventory quantity.
- Price.
- Base Cost.
- Product images.
- Gallery images.
- SEO fields.
- Category and taxonomy relations.
- Attributes.
- Cart and checkout behavior.
- Order and shipping behavior.
- Reporting visibility.
- Import pipeline compatibility.
- Possible admin approval before final invoice confirmation.

Physical Products are inventory-aware and may be affected by Inventory Sync, Manual Inventory Adjustment, Dynamic Freeze, and approval workflows.

Physical store stock and physical store sales are outside the website profit cycle unless the product explicitly enters the Website Sale flow.

## 5. Future Digital Product Rules

Digital Product is a future-phase product type.

A Digital Product may represent:

- Downloadable files.
- Digital content.
- Access-based content.
- Premium content.
- Other documented digital resources.

Digital Product behavior must be documented in detail before implementation. Future digital products may require access rules, download rules, expiration rules, payment dependency, and customer visibility rules.

Digital Product support should build on the same product foundation where practical, but it must not complicate phase 1 physical product delivery.

## 6. Future Subscription Product Rules

Subscription Product is a future-phase product type.

A Subscription Product may grant access to:

- Specific pages.
- Videos.
- Premium content.
- Digital resources.
- Membership-based benefits.

Subscription Product rules must define access duration, renewal behavior, expiration, customer visibility, wallet/payment relation, and support behavior before implementation.

Subscription Product support should remain compatible with future Digital Access and permission workflows.

## 7. Product Data Model Vision

Product data should be clear, reportable, and compatible with future expansion.

Important product data may include:

- Title.
- Slug.
- Description.
- Short description.
- SKU or internal code.
- Price.
- Base Cost.
- Inventory quantity.
- Product status.
- Visibility status.
- SEO title.
- SEO description.
- Images.
- Gallery.
- Category and taxonomy relations.
- Attributes.
- Brand or manufacturer if needed.
- Future compatibility data.
- Future digital access data.

Product data should preserve historical meaning where needed. Later product changes must not corrupt old order, price, Base Cost, or profit calculations.

## 8. Product Statuses

Product statuses should make product lifecycle and commerce behavior explicit.

Possible product states include:

- draft
- active
- inactive
- out of stock
- hidden
- archived
- pending review
- frozen

Status meanings:

- draft: Product exists but is not ready for public sale.
- active: Product is visible and available according to inventory, pricing, and freeze rules.
- inactive: Product is not available for sale.
- out of stock: Product is not available because inventory is unavailable.
- hidden: Product is not publicly visible but may remain available for admin workflows.
- archived: Product is kept for history but removed from normal operational use.
- pending review: Product requires admin review before becoming active or sellable.
- frozen: Product payment or order flow is temporarily disabled by Dynamic Freeze or operational control.

Exact status transitions are an open decision and should be documented before implementation.

## 9. Pricing Rules

The Product System must support:

- Sale price.
- Base Cost.
- Future price updates.
- Manual price changes.
- Future price history if needed.
- Bulk price changes through reusable scope-based operations.

Product price changes must not corrupt historical profit calculations, old order records, or Base Cost snapshots.

Price updates may be applied manually or through future Bulk Operation workflows. Scope-based price operations should reuse the Universal Targeting Engine where possible.

The financial system supports Rial and Toman only.

## 10. Base Cost Rules

Base Cost is used for profit calculation.

When a product enters the Website Sale cycle, its Base Cost must be stored and preserved as a financial snapshot.

Inventory market value increase is not Profit. Inflation or market price increase of unsold inventory must not be counted as operational profit.

Base Cost history must remain auditable. Later product cost changes should not overwrite the historical Base Cost used for completed Website Sales.

## 11. Inventory Relation

The Product System must be inventory-aware.

Inventory is mainly expected to sync from Hesabfa or another accounting source. Inventory Sync is not real-time.

The system must support:

- Inventory visibility.
- Inventory quantity.
- Manual Inventory Adjustment.
- Inventory logs.
- Stock warnings.
- Inventory Sync status.
- Inventory Approval workflows.

Some products, categories, subcategories, or scopes may require admin approval before final invoice confirmation.

Inventory behavior must support website sales while keeping physical store operations outside the website profit cycle.

## 12. Media & Image Rules

The Product System must support:

- Main image.
- Gallery images.
- Multiple images per product.
- Image SEO fields.
- Image alt text.
- Future bulk image matching through the Product Import Pipeline.

Product images should support clean product presentation, SEO, admin review, and future mobile app usage.

Image handling must be compatible with future import ZIP matching and should not assume all images are uploaded manually one by one.

## 13. SEO Rules

The Product System must support SEO-ready product pages.

SEO fields and behavior should include:

- Slug.
- Meta title.
- Meta description.
- Structured content.
- Image alt text.
- Clean URLs.

SEO data should be editable by authorized admin or content roles.

Future AI-assisted SEO optimization may suggest titles, descriptions, structured content, and product description improvements, but AI-generated content should remain reviewable.

## 14. Category & Taxonomy Relation

The Product System must work with a flexible category and taxonomy system.

Products may be discoverable through multiple paths, including:

- Product type.
- Vehicle compatibility.
- Brand.
- Model.
- Part type.
- Category.
- Subcategory.
- Future filters.

The system must not assume a simple one-dimensional category tree is enough.

Taxonomy relations should support product discovery, filtering, reporting, SEO, import workflows, Dynamic Freeze, and Bulk Operations.

## 15. Import Pipeline Compatibility

The Product System must support future bulk product import from files.

It must be compatible with:

- Import sessions.
- Validation.
- Preview.
- Image matching.
- Duplicate detection.
- Error reporting.
- Retry logic.
- Future queue processing.

Imported product data should be reviewable before it affects the live catalog.

The import process should not bypass product validation, taxonomy rules, media rules, pricing rules, or Base Cost requirements.

## 16. Order Workflow Relation

Products must support order workflows.

Relevant order stages may include:

- Cart.
- Checkout.
- Pending approval.
- Approved.
- Paid.
- Shipped or completed.
- Canceled.
- Rejected.
- Expired.

Product data used in orders should preserve historical meaning. Later changes to product title, price, Base Cost, images, taxonomy, or status must not corrupt completed order records or financial calculations.

Products may require approval before final invoice confirmation when inventory, price volatility, category rules, or scope rules require review.

## 17. Dynamic Freeze Relation

Products must support freeze or disable behavior through Dynamic Freeze.

Freeze may apply at:

- Product level.
- Category level.
- Section level.
- Whole store level.

Frozen products should not proceed through normal payment or order flow while the freeze is active.

Freeze actions are operational controls. They should not delete product data, erase catalog history, or permanently change the product structure.

Dynamic Freeze should use reusable scope selection logic where possible.

## 18. Reporting Relation

The Product System should support reporting needs.

Product reporting may include:

- Product sales.
- Inventory status.
- Stock warnings.
- Price changes.
- Base Cost visibility.
- Profit relevance.
- Product import history.
- Freeze status.
- Approval requirements.
- SEO completeness.
- Future analytics.

Reports must preserve the distinction between Website Sales and physical store operations.

Product reporting should be compatible with future AI-assisted analytics, but phase 1 should focus on useful operational visibility.

## 19. Future AI Relation

The Product System should be future-ready for AI-assisted workflows.

Future AI-assisted features may include:

- Content generation.
- SEO optimization.
- Product description improvement.
- Price analysis.
- Image suggestions.
- Categorization assistance.
- Import validation assistance.
- Reporting insights.

AI suggestions should be reviewable and should not bypass admin approval, business rules, pricing rules, taxonomy rules, or financial rules.

## 20. Out of Scope

The Product System must not support:

- Marketplace or multi-vendor ownership.
- Multi-language products.
- Multi-currency pricing.
- Public API-first product distribution in phase 1.
- Physical store sales as website product profit.
- Treating inventory appreciation as Profit.
- Real-time physical store inventory synchronization as a requirement.

Future mobile app usage is allowed, but mobile app implementation is not part of this system document.

## 21. Open Decisions

The following decisions are still open:

- Exact product status transitions.
- Exact product type storage model.
- Exact taxonomy structure for product type, vehicle compatibility, brand, model, part type, and future filters.
- Exact attribute model.
- Exact product media storage strategy.
- Exact price history requirements.
- Exact Base Cost snapshot workflow.
- Exact import duplicate detection rules.
- Exact approval rules for products, categories, and scopes.
- Exact future digital product access model.
- Exact future subscription product model.
- Exact AI-assisted product workflow boundaries.

Open decisions must be documented before they become implementation commitments.

## 22. Changelog

- 2026-05-30: Initial product system document created.
