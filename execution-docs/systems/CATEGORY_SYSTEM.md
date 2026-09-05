# Category System

Document ID: SYS-CATEGORY
Status: MVP Implemented
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/systems/CATEGORY_AND_TAXONOMY_SYSTEM.md
Dependencies: PRODUCT_SYSTEM.md, ../domain/RELATIONSHIP_MATRIX.md
Next Documents: PRODUCT_SYSTEM.md, ../ui/PAGE_CATALOG.md

## 1. Purpose
Organize products into navigable catalog groups.
## 2. Business Goal
Help customers and admins find industrial products reliably.
## 3. Actors
Admin, customer.
## 4. User Stories
Admin manages hierarchy; customer browses categories.
## 5. Business Rules
Hierarchy is optional, self/descendant cycles are rejected, and categories with children or products cannot be deleted.
## 6. Data Model
Adjacency-list hierarchy plus many-to-many product assignment with one primary category.
## 7. Workflow
Create, reorder, publish, hide or archive category.
## 8. UI Requirements
Category admin views and storefront navigation.
## 9. API Requirements
Category CRUD and read endpoints to define.
## 10. Events
Category changed, category visibility changed.
## 11. Permissions
Admin manages; customers read visible categories.
## 12. Edge Cases
Empty category, circular hierarchy, deleted parent.
## 13. Future Considerations
Taxonomy attributes and campaign targeting.
