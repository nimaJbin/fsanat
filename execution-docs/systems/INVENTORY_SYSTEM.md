# Inventory System

Document ID: SYS-INVENTORY
Status: MVP Partial
Version: 0.2
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/systems/INVENTORY_SYSTEM.md
Dependencies: PRODUCT_SYSTEM.md, ORDER_SYSTEM.md
Next Documents: SHIPPING_SYSTEM.md, ../domain/FIELD_MATRIX.md

## 1. Purpose
Track stock availability and operational inventory changes.
## 2. Business Goal
Prevent inaccurate sales and support fulfillment.
## 3. Actors
Admin, owner.
## 4. User Stories
Admin updates stock; order flow checks availability.
## 5. Business Rules
Product create/update records on-hand quantity changes as append-only movements. Reservation and order deduction remain deferred to checkout.
## 6. Data Model
One inventory row per product with on-hand, reserved, reorder point, base cost and optimistic version; movements retain actor, delta, resulting quantity and reason.
## 7. Workflow
Receive, adjust, reserve, deduct and reconcile stock.
## 8. UI Requirements
Inventory panel and product stock indicators.
## 9. API Requirements
Stock lookup and adjustment APIs to define.
## 10. Events
Stock adjusted, reserved, released, depleted.
## 11. Permissions
Admin-only changes; storefront reads availability.
## 12. Edge Cases
Oversell risk, concurrent orders, negative stock.
## 13. Future Considerations
Warehouse support and audit trails.
