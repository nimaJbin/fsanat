# Product System

Document ID: SYS-PRODUCT
Status: MVP Implemented
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/systems/PRODUCT_SYSTEM.md
Dependencies: ../domain/ENTITY_CATALOG.md, ../architecture/MODULE_MAP.md
Next Documents: CATEGORY_SYSTEM.md, INVENTORY_SYSTEM.md, ../ui/FORM_CATALOG.md

## 1. Purpose
Manage sellable product records and catalog-facing data.
## 2. Business Goal
Maintain accurate product information for commerce operations.
## 3. Actors
Admin, owner, customer.
## 4. User Stories
Staff creates, edits, deactivates and safely deletes unused products; visitors see active products on the homepage.
## 5. Business Rules
Only active products appear publicly. Each product requires a primary category, SKU, integer Rial price and inventory row. Products with order history cannot be deleted.
## 6. Data Model
Product fields are tracked in FIELD_MATRIX.md.
## 7. Workflow
Create as draft or active, update catalog/inventory data, deactivate or delete when unused.
## 8. UI Requirements
Admin product forms and storefront display entries.
## 9. API Requirements
Product CRUD and read APIs pending catalog review.
## 10. Events
Product created, updated, published.
## 11. Permissions
Admin-only management; public/customer read rules to define.
## 12. Edge Cases
Missing category, unavailable inventory, invalid price.
## 13. Future Considerations
Bulk import, SEO fields and advanced attributes.
