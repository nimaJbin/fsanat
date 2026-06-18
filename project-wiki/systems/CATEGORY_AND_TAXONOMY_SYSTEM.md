# Category And Taxonomy System

## 1. Purpose

This document defines the category, taxonomy, classification, filtering, and product discovery architecture for "فروشگاه صنعت جوان".

The platform must not be designed around a simple one-dimensional category tree. Products may need to appear through multiple discovery paths at the same time, especially because the platform includes automotive-related products, inventory-aware commerce, advanced filtering, and future SEO scalability.

This is an architecture and business behavior document, not an implementation file, migration plan, or database schema.

## 2. Taxonomy Philosophy

The Category And Taxonomy System must support flexible product discovery instead of forcing every product into only one fixed hierarchy.

A product such as a mirror may be discoverable through:

- Mirrors.
- Car Accessories.
- Peugeot 206 Parts.
- Side Mirrors.
- Brand-specific pages.
- Compatibility filters.

The taxonomy architecture should support:

- Flexible discovery paths.
- Reusable classifications.
- Scalable filtering.
- Compatibility-aware structures.
- Future search optimization.
- SEO-friendly product discovery.
- Future AI-assisted categorization.
- Future import automation.

Phase 1 should stay practical, but the system must avoid rigid structures that would block product compatibility, advanced filtering, bulk operations, or future SEO pages.

## 3. Category System

Categories are customer-facing and admin-facing product groupings.

Category rules:

- Categories may have parent and child relations.
- Subcategories should remain understandable and manageable.
- Products may belong to more than one discovery path when business needs require it.
- Categories should support SEO-friendly slugs, titles, and descriptions.
- Category hierarchy should remain simple enough for admins to maintain.
- Categories should support future filters, reports, Dynamic Freeze, and bulk operations.

Categories should not become the only classification mechanism. A category tree may help navigation, but it must not replace taxonomy, attributes, compatibility, brand, model, or future filter logic.

## 4. Taxonomy System

Taxonomy is the broader classification layer used to describe how products relate to business concepts, search behavior, compatibility, reporting, and operations.

The taxonomy system should support concepts such as:

- Category.
- Subcategory.
- Product type.
- Attribute.
- Compatibility.
- Brand.
- Model.
- Tags.
- Filters.
- Specifications.
- Reusable classifications.

Taxonomy rules:

- Taxonomies should support compatibility logic.
- Taxonomies should allow product grouping beyond the visible category tree.
- Taxonomies should provide reusable filter values where possible.
- Brand and model mapping should be supported for automotive discovery.
- Future AI categorization and import automation should be possible.
- Taxonomy naming must remain consistent with SYSTEM_GLOSSARY.md.

Exact taxonomy storage and relationship structure remains an open decision until implementation planning.

## 5. Compatibility System

Compatibility is especially important for automotive-related products.

The system should be able to support future compatibility relations such as:

- Vehicle brand.
- Vehicle model.
- Production year.
- Compatibility groups.
- Fitment relations.
- Product-to-vehicle compatibility rules.

Compatibility should help customers find products that fit their needs and help admins manage product discovery without duplicating the same product across many unrelated categories.

Compatibility data should remain reusable for search, filtering, SEO pages, import mapping, reporting, Dynamic Freeze, and future AI suggestions.

## 6. Attribute System

Attributes describe product-specific characteristics that may be used for display, filtering, comparison, reporting, and import validation.

Future attribute support may include:

- Size.
- Color.
- Material.
- Dimensions.
- Technical specifications.
- Compatibility data.
- Custom attributes.

Attributes should remain reusable and scalable. The system should avoid hardcoding product-specific filters into fixed fields when a reusable attribute or taxonomy concept would be more maintainable.

Attributes may behave differently depending on product type, category, compatibility group, or future digital/subscription product needs.

## 7. Filtering Philosophy

Filtering should help customers and admins narrow products through meaningful product data.

The platform should support:

- Category filtering.
- Attribute filtering.
- Compatibility filtering.
- Brand and model filtering.
- Future smart filtering.
- SEO-friendly filtering.
- Future AI-assisted filtering.

Filtering must not be rigid or hardcoded around one product type. Filter logic should be reusable where possible and should support future expansion without redesigning the product system.

Phase 1 can start with simple filters, but the architecture should not block richer filtering later.

## 8. SEO & Discovery Rules

The taxonomy system must support structured, SEO-friendly product discovery.

SEO and discovery rules:

- Categories should support clean slugs.
- Taxonomy-based pages should use SEO-friendly URLs when they become public pages.
- Category pages should support SEO title, meta description, and structured content where needed.
- Future dynamic SEO pages may be created for useful discovery combinations.
- Product discovery paths should remain understandable to customers and search engines.
- Filtered pages should be handled carefully so SEO value does not create duplicate or low-quality pages.

SEO behavior should remain compatible with future AI-assisted SEO optimization, but AI-generated taxonomy or SEO suggestions must remain reviewable.

## 9. Product Relation Rules

Products may relate to categories, taxonomies, attributes, brands, models, compatibility records, and future classifications.

Product relation rules:

- A product may appear in multiple logical discovery paths.
- A product should not need to be duplicated to appear in multiple categories or compatibility views.
- Product relations should support reporting and operational targeting.
- Product relations should support Dynamic Freeze and bulk operations by category, taxonomy, or product scope.
- Product relation changes must not corrupt historical order or financial records.

Product relations should support physical products in phase 1 while remaining compatible with future digital and subscription products.

## 10. Import Pipeline Compatibility

The taxonomy system must be compatible with the Product Import Pipeline.

Import workflows should support:

- Bulk imports.
- Category mapping.
- Taxonomy mapping.
- Attribute mapping.
- Brand and model mapping.
- Image matching relation to product records.
- Validation.
- Preview.
- Error reporting.
- Future AI-assisted classification.

Imported products should be reviewable before they affect the live catalog. Import automation must not bypass taxonomy rules, product validation, or admin review where required.

## 11. Reporting Relation

The taxonomy system should support operational and business reporting.

Reporting may include:

- Category-level reports.
- Compatibility reports.
- Brand/model reports.
- Inventory reports grouped by taxonomy.
- Sales grouping by category or classification.
- Product discovery and SEO reports.
- Dynamic Freeze and bulk operation reports.
- Operational reporting for admin workflows.

Reports must preserve the difference between Website Sales and physical store operations. Taxonomy reports should support website business visibility, not marketplace or multi-vendor reporting.

## 12. Dynamic Freeze Relation

Dynamic Freeze must be able to use category and taxonomy structures as targeting inputs.

The system should support freeze or unfreeze operations for:

- Entire platform.
- Store section.
- Category.
- Subcategory.
- Specific product.
- Future documented taxonomy-based scopes.

Category and taxonomy targeting should also support future bulk operations, including price updates, inventory actions, campaign targeting, discount targeting, and operational controls.

Freeze behavior should be auditable, reversible, and compatible with the Universal Targeting Engine.

## 13. Future AI Relation

The taxonomy architecture should remain compatible with future AI-assisted workflows.

Future AI features may include:

- Automatic categorization.
- Product tagging.
- SEO optimization.
- Compatibility suggestions.
- Search optimization.
- Import mapping suggestions.
- Attribute extraction from product descriptions.

AI suggestions must be reviewable and must not bypass admin approval, taxonomy rules, import validation, business rules, or financial rules.

## 14. Out of Scope

The Category And Taxonomy System must not support:

- Marketplace vendor taxonomies.
- Multi-language taxonomy.
- Multi-region taxonomy.
- Public taxonomy APIs in phase 1.
- Multi-currency product classification.
- Physical store sales as website taxonomy reporting.
- Real-time physical store inventory synchronization as a taxonomy requirement.

The system may support future mobile app product discovery, but mobile app implementation is outside this document.

## 15. Open Decisions

The following decisions are still open:

- Exact taxonomy data model.
- Exact relationship between category, taxonomy, tags, and attributes.
- Exact compatibility model for vehicle brand, model, year, and fitment.
- Exact filter behavior for phase 1.
- Exact SEO URL strategy for taxonomy and filtered pages.
- Exact import mapping rules for categories, attributes, brands, and compatibility.
- Exact admin workflows for managing taxonomy at scale.
- Exact AI-assisted categorization review workflow.
- Exact reporting dimensions required for taxonomy-based reports.
- Exact taxonomy-based Dynamic Freeze scope rules.

Open decisions must be documented before they become implementation commitments.

## 16. Changelog

- 2026-05-30: Initial category and taxonomy system document created.
