# Import Pipeline System

## 1. Purpose

This document defines the Import Pipeline System for "فروشگاه صنعت جوان".

The Import Pipeline System describes bulk product import architecture, import workflow, validation logic, image matching strategy, retry behavior, import sessions, and operational import philosophy.

This is a system architecture and workflow document. It is not implementation code, a migration plan, or a schema definition.

The import system is important because the platform may handle large product imports, image ZIP packages, inventory updates, taxonomy mapping, SEO data, and future automated imports.

## 2. Import Philosophy

The import system must be operationally safe, reviewable, retryable, auditable, and scalable.

The platform must not blindly import external files directly into the live catalog. Imports should behave as staged workflows where data is uploaded, validated, reviewed, confirmed, and logged before it affects production data.

Core principles:

- Imports must protect live product, inventory, taxonomy, pricing, and SEO data.
- Validation must happen before final import.
- Admins must be able to preview changes before confirmation.
- Failed imports should be recoverable where practical.
- Important import actions must be traceable.
- Phase 1 may stay simple, but the architecture should remain queue-ready for larger future imports.
- Import workflows must not bypass Product System, Inventory System, Category And Taxonomy System, Base Cost, approval, or financial rules.

## 3. Import Workflow

The import pipeline should follow a staged workflow.

Expected stages:

1. File Upload.
2. Validation.
3. Preview.
4. Mapping.
5. Error Detection.
6. Approval or Confirmation.
7. Final Import.
8. Reporting.
9. Retry Handling.

Workflow rules:

- Uploading a file should create an import context before live data changes.
- Validation should detect required-field, structure, pricing, inventory, taxonomy, attribute, duplicate, and media issues before final import.
- Preview should show what will be created, updated, skipped, or rejected.
- Mapping should allow imported data to connect to products, categories, taxonomies, attributes, images, and SEO fields.
- Final import should happen only after review and confirmation by an authorized admin.
- Import results should be recorded for later review and reporting.
- Destructive overwrite behavior must be avoided unless a future documented rule explicitly allows it.

## 4. Supported Import Types

The system should support these import concepts:

- Product import.
- Inventory import.
- Pricing import.
- Category mapping.
- Taxonomy mapping.
- Attribute mapping.
- Image matching.
- SEO field import.
- Future digital product import.

Phase 1 should prioritize physical product imports, product images, inventory-related values, pricing, category/taxonomy mapping, and reviewable admin workflows.

Future import types must be documented before implementation when they affect digital products, subscription access, wallet behavior, financial workflows, or automation.

## 5. Import Sources

Possible import sources include:

- Excel files.
- CSV files.
- Structured data files.
- ZIP image packages.
- Future external integrations.

The import system should not assume that every source is trusted or perfectly structured. Each source must pass validation before final application.

External integrations are future expansion and should not turn the import system into full ERP synchronization or real-time sync without updated source-of-truth documentation.

## 6. Validation Rules

Validation must happen before final import.

The system should validate:

- Missing required fields.
- Invalid prices.
- Invalid inventory values.
- Invalid Base Cost values where Base Cost is included.
- Duplicate products.
- Duplicate SKU or internal codes where relevant.
- Invalid taxonomy or category mapping.
- Invalid attribute mapping.
- Unsupported file structure.
- Invalid image references.
- Missing images when images are required by the import rules.
- Unsupported product types.
- Data that conflicts with documented Product System, Inventory System, or financial rules.

Validation results should be understandable to admins. Errors should block final import when they would corrupt data, while warnings may allow review and manual confirmation when business rules permit it.

## 7. Preview & Review Workflow

The import system should provide a preview before final import.

Preview should show:

- Products that will be created.
- Products that will be updated.
- Products that will be skipped.
- Detected conflicts.
- Validation errors.
- Validation warnings.
- Inventory changes.
- Price changes.
- Taxonomy and category mappings.
- Attribute mappings.
- Image matching results.

Preview exists to make imports reviewable and operationally safe. Admins should be able to understand the impact of the import before confirming it.

The review workflow should be permission-aware. Imports that affect sensitive data such as pricing, inventory, Base Cost, or product availability may require stronger permissions than simple product content updates.

## 8. Image Matching System

The platform must support future image matching behavior for bulk imports.

Image matching may support:

- Matching by SKU or internal product code.
- Matching by filename.
- Multiple images per product.
- Main image selection.
- Gallery image ordering.
- Unmatched image detection.
- Missing image detection.
- Duplicate image detection.
- Image SEO fields such as alt text when provided.

ZIP image packages should be handled as staged import assets. Images should be matched, previewed, and confirmed before they are attached to live products.

Image matching must not overwrite existing product media blindly. Replacement, append, ordering, and duplicate rules are open decisions and must be documented before implementation.

## 9. Retry & Recovery Workflow

Failed imports should support controlled recovery.

Retry behavior may include:

- Full retry.
- Partial retry.
- Correction and re-validation.
- Resumable processing.
- Failed-row review.
- Import history review.
- Retry status tracking.

Retry should not create duplicate products, duplicate images, or repeated inventory adjustments. The system should preserve enough import context to know what already succeeded, what failed, and what still needs review.

Phase 1 can use simple retry behavior, but the architecture should not block future queue-based or resumable processing.

## 10. Import Sessions

An Import Session represents one import attempt or batch.

Import Sessions should support:

- Import history.
- Import logs.
- Import status tracking.
- Operator visibility.
- Uploaded file reference.
- Validation results.
- Preview results.
- Mapping results.
- Final import result.
- Retry history.

Expected import session status concepts may include:

- uploaded
- validating
- validation_failed
- ready_for_review
- awaiting_confirmation
- importing
- partially_imported
- completed
- failed
- canceled

Exact statuses and transitions are open decisions and should be finalized before implementation.

## 11. Queue & Background Processing

The import architecture should remain compatible with queue workers and background processing.

Queue-ready areas include:

- Large file parsing.
- Image ZIP extraction.
- Image processing.
- Validation.
- Duplicate detection.
- Final product creation or update.
- Inventory update processing.
- Import reporting.
- Future AI-assisted analysis.

Phase 1 does not need complex asynchronous processing if imports are small enough, but the architecture should avoid choices that make future queue processing difficult.

Laravel queues are the preferred initial direction for import jobs. Node.js may be considered later only if there is a clear need for specialized heavy processing.

## 12. Taxonomy Relation

The Import Pipeline System must work with the Category And Taxonomy System.

Imports should support:

- Category mapping.
- Taxonomy mapping.
- Compatibility mapping.
- Attribute assignment.
- Brand and model mapping where relevant.
- Future AI-assisted categorization.

Imported taxonomy data must be validated before final import. The import process must not create chaotic categories, duplicate classifications, or hardcoded filters without review.

When imported data cannot be mapped confidently, it should be reported as a validation issue or review item instead of being silently guessed.

## 13. Inventory Relation

The import system should support inventory-related imports while preserving inventory auditability.

Inventory-related import behavior may include:

- Inventory updates.
- Inventory corrections.
- Initial inventory values for new products.
- Base Cost values where included in the import.
- Operational inventory synchronization support.

Inventory update rules:

- Imported inventory values must be validated before final application.
- Inventory changes should be visible in preview.
- Inventory changes must be traceable after final import.
- Imported stock must not bypass approval, Base Cost, product validation, or taxonomy rules.
- Import must not treat Inventory Appreciation as Profit.
- Import must not silently overwrite local inventory decisions without documented conflict rules.

Exact behavior for import-based inventory overwrite, merge, correction, and conflict handling is an open decision.

## 14. SEO Relation

The import system should support SEO-ready product data.

SEO import fields may include:

- Slug.
- Meta title.
- Meta description.
- Image alt text.
- SEO-friendly product descriptions.
- Structured product content where available.

SEO data should be validated and previewed like other product data. Imported SEO values should not create duplicate or broken URLs without review.

Future AI-assisted SEO generation may suggest improvements, but AI-generated SEO content must remain reviewable before it affects live product pages.

## 15. Admin Panel Relation

The Admin Panel should provide practical import management.

Admin import features should include:

- Import dashboard.
- Import session management.
- File upload.
- Import preview.
- Validation error visibility.
- Validation warning visibility.
- Mapping review.
- Image matching visibility.
- Retry operations.
- Import history.
- Final confirmation.

Admin actions in the import panel must be permission-aware. Imports that affect pricing, inventory, Base Cost, product availability, or SEO should be limited to authorized roles.

The panel should help admins understand what changed, what failed, what needs correction, and whether the import affected live catalog data.

## 16. Operational Logging

The import system must support operational logging.

Import logs should record:

- Who imported.
- When the import was uploaded.
- When validation happened.
- When final import was confirmed.
- What changed.
- Which products were created or updated.
- Which inventory values changed.
- Which images were matched or rejected.
- Validation errors.
- Import warnings.
- Retry history.
- Cancellation or failure reasons.

Logs should help answer who did what, when it happened, what changed, why a row failed, and whether the import affected products, inventory, taxonomy, images, SEO, or pricing.

Import logs should remain compatible with future audit logs, reporting, and troubleshooting.

## 17. Future AI Relation

The Import Pipeline System should remain compatible with future AI-assisted workflows.

Future AI-assisted import features may include:

- Product categorization suggestions.
- SEO generation.
- Product data cleanup.
- Duplicate detection assistance.
- Attribute suggestions.
- Image suggestions.
- Compatibility suggestions.
- Import validation assistance.

AI suggestions must be reviewable. AI must not automatically publish products, change prices, update inventory, assign Base Cost, create taxonomy structures, or overwrite images without documented admin review and confirmation rules.

## 18. Out of Scope

The Import Pipeline System must not support:

- Marketplace vendor imports.
- Public import APIs in phase 1.
- Real-time synchronization.
- Full ERP synchronization.
- Automatic blind overwrite imports.
- Multi-language import workflows.
- Multi-currency pricing imports.
- Physical store sales imports into website profit calculation.
- Vendor ownership or vendor payout imports.

Future external integrations are allowed only when they follow documented validation, preview, confirmation, and auditability rules.

## 19. Open Decisions

The following decisions are still open:

- Exact accepted file formats for phase 1.
- Exact required product import fields.
- Exact SKU and duplicate detection rules.
- Exact image filename matching rules.
- Exact behavior for replacing existing product images.
- Exact taxonomy mapping workflow.
- Exact attribute mapping workflow.
- Exact inventory overwrite, merge, or correction rules.
- Exact Base Cost import behavior.
- Exact import approval permissions.
- Exact import session statuses and transitions.
- Exact retry behavior for partial failures.
- Exact queue usage timing in phase 1.
- Exact import report format.
- Exact future AI-assisted import review workflow.

Open decisions must be documented before they become implementation commitments.

## 20. Changelog

- 2026-05-30: Initial import pipeline system document created.
