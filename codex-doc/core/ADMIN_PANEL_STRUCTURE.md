# Admin Panel Structure

## 1. Purpose

This document defines the high-level structure, philosophy, sections, workflows, and navigation architecture of the Admin Panel and User Panel for "فروشگاه صنعت جوان".

This is not a UI design file and not a frontend implementation file. It defines panel organization, major sections, permission mindset, navigation philosophy, workflows, and future expansion direction.

Future Codex sessions should use this document before designing admin workflows, panel navigation, permissions, dashboards, or customer account features.

## 2. Panel Philosophy

The platform is admin-heavy and operations-focused. The Admin Panel is one of the most important parts of the system because it controls products, inventory, orders, approvals, financial visibility, support, imports, freezes, and reporting.

The panel must be:

- Operational.
- Scalable.
- Modular.
- Maintainable.
- Permission-aware.
- Auditable.
- Suitable for future expansion.

The interface must be Persian-only. Marketplace and multi-vendor logic must not appear in panel structure. Real-time updates are not required in phase 1. Physical store operations are outside panel scope unless they are explicitly connected to website sales or website inventory workflows.

## 3. Admin Panel Overview

The Admin Panel should be organized around business operations, not implementation details.

Main admin navigation areas should include:

- Dashboard.
- Users.
- Products.
- Categories and Taxonomy.
- Inventory.
- Orders.
- Approvals.
- Dynamic Freeze.
- Bulk Operations.
- Import Pipeline.
- Financial and Profit.
- Wallet.
- Tickets.
- Reports.
- Settings.
- Audit and Activity Logs.

Navigation should remain modular so future sections can be added without redesigning the whole panel.

## 4. Authentication & Access

Authentication and access workflows should include:

- Login.
- Logout.
- Password reset.
- Session handling.
- Future 2FA possibility.

Access must be permission-aware from the beginning. Admin users should only see sections and actions allowed by their role and permissions.

Session handling should be secure and suitable for business operations. Future 2FA may be added for sensitive roles such as super admin, accountant, or operators with financial permissions.

## 5. Dashboard Structure

The dashboard should provide a quick operational overview.

Initial dashboard areas may include:

- Sales summary.
- Pending approvals.
- Inventory alerts.
- Ticket alerts.
- Financial summary.
- Import status summary.
- Freeze status summary.
- Future analytics widgets.

The dashboard should prioritize actionable information. It should help admins understand what needs attention now, not become a complex analytics product in phase 1.

## 6. User Management Structure

User Management should support:

- Users.
- Profiles.
- Addresses.
- Wallet visibility.
- User activity.
- Permissions.
- Future role system.

Admins should be able to review customer profile completion, contact information, addresses, order history, ticket history, and wallet visibility where permissions allow.

Permission and role management should be designed for future growth, even if phase 1 starts with simple roles.

## 7. Product Management Structure

Product Management should support:

- Products.
- Product status.
- Categories.
- Attributes.
- Media and images.
- SEO fields.
- Bulk actions.
- Inventory-aware product information.
- Future digital products.

Product pages should make operational status clear, such as active, inactive, frozen, unavailable, draft, or other documented statuses.

Product Management must support physical products in phase 1 and leave room for digital products, subscription products, and access-controlled products in future phases.

## 8. Category & Taxonomy Structure

The platform requires flexible category and taxonomy thinking.

Category and taxonomy management should support product discovery and operational targeting through multiple classification paths, including:

- Category.
- Subcategory.
- Product type.
- Vehicle compatibility.
- Brand.
- Future classifications.

The panel must not assume a simple one-dimensional category mindset. Taxonomy should support future search, filtering, reporting, product targeting, Dynamic Freeze, bulk operations, and SEO workflows.

## 9. Inventory Management Structure

Inventory Management should support:

- Inventory visibility.
- Inventory adjustment.
- Inventory logs.
- Stock warnings.
- Sync status.
- Manual correction tools.
- Inventory approval signals.

Inventory is expected to sync from Hesabfa or another accounting source, but sync is not real-time. Admins must be able to manually correct inventory when needed.

Inventory changes must be traceable because they affect website availability, order flow, approvals, and operational reporting.

## 10. Order Management Structure

Order Management should support:

- Order list.
- Order details.
- Order states.
- Approval workflow.
- Invoice review.
- Payment status.
- Shipping status.
- Cancellation.
- Expiration.
- Future automation.

Orders should expose clear states such as pending, waiting for approval, approved, rejected, paid, processing, completed, canceled, and expired.

The order view should help admins understand customer data, product details, payment state, approval needs, shipping progress, support history, and financial relevance.

## 11. Approval Workflow Structure

Approval workflows allow admins to review business-sensitive actions before they continue.

Admins must be able to:

- Approve or reject orders.
- Review inventory-sensitive orders.
- Handle manual verification workflows.
- See why approval is required.
- Track approval history.

Approval may be required for selected products, categories, subcategories, orders, or broader scopes.

Future notification integrations may include:

- Telegram.
- Email.
- Messaging systems.

Notification-based approvals are future expansion and should not be required for phase 1.

## 12. Dynamic Freeze Structure

Dynamic Freeze controls temporary disabling of payment or order flow because of price volatility, inventory uncertainty, or operational risk.

Admins must be able to freeze or unfreeze payment/order flow for:

- Entire platform.
- Section.
- Category.
- Subcategory.
- Product.

The panel must support reusable scope selection logic. Freeze controls should be clear, auditable, and reversible.

Freeze actions should not delete products, remove catalog data, or permanently alter product structure. They are operational controls.

## 13. Bulk Operation Structure

Bulk Operation structure should support reusable operations for:

- Price changes.
- Inventory updates.
- Freeze actions.
- Future mass actions.

Bulk operations must use shared scope selection logic where possible.

Bulk actions should include preview, confirmation, permission checks, and audit logging when they affect important business data.

Phase 1 should keep bulk operations simple and controlled.

## 14. Import Pipeline Structure

The Import Pipeline Panel should support:

- Import session management.
- Import preview.
- Validation errors.
- Image matching status.
- Retry handling.
- Import history.

Admins should be able to review imported data before it affects the live catalog.

The import panel should support future queue processing and image ZIP matching, while keeping phase 1 understandable and operationally safe.

## 15. Financial & Profit Structure

Financial and Profit sections should support website-only financial visibility.

This area should include:

- Website-only profit reports.
- Operational costs.
- Manual costs.
- Base Cost visibility.
- Profit cycle visibility.
- Approved Cost visibility.
- Future accounting integration.

The panel must not treat inventory appreciation, physical store sales, or unsold physical inventory as website profit.

Financial actions and reports must be permission-aware and auditable.

## 16. Wallet Structure

Wallet structure should support:

- Wallet balance.
- Transactions.
- Manual adjustments.
- Transaction history.

Wallet behavior must remain ledger-oriented and traceable. Advanced wallet behavior may be added later, but phase 1 should focus on a stable foundation.

Manual wallet adjustments should require proper permissions and audit logging.

## 17. Ticketing Structure

Ticketing should support:

- Customer tickets.
- Replies.
- Ticket states.
- Attachments.
- Future automation.

Admins should be able to view customer context, related orders, replies, status changes, and ticket history.

Future AI-assisted support may use ticket data, but phase 1 should focus on reliable manual support workflows.

## 18. Reporting Structure

Reporting should support:

- Sales reports.
- Inventory reports.
- Operational reports.
- Financial reports.
- Approval reports.
- Ticket reports.
- Import reports.
- Future AI analytics.

Phase 1 reporting should provide useful operational visibility without over-engineering analytics.

Reports should respect permissions and should preserve the distinction between website business activity and physical store operations.

## 19. Settings Structure

Settings should be modular and permission-controlled.

Settings areas may include:

- Payment settings.
- Inventory settings.
- Notification settings.
- Operational settings.
- Freeze settings.
- Import settings.
- User and access settings.
- Future AI settings.

Settings changes should be auditable when they affect business behavior, financial workflows, payment behavior, inventory behavior, or customer access.

## 20. Audit & Activity Log Structure

The Admin Panel must support visibility into important actions.

Audit and activity logs should include:

- Activity logs.
- Operational logs.
- Approval logs.
- Financial logs.
- Inventory adjustment logs.
- Import logs.
- Freeze logs.
- Future audit trails.

Audit views should help answer who did what, when it happened, what changed, and why it matters.

## 21. User Panel Structure

The User Panel is the customer-facing account area.

Important User Panel areas include:

- Profile.
- Addresses.
- Orders.
- Wallet.
- Tickets.
- Subscriptions, future.
- Downloads/content access, future.
- Notifications, future.

Customers must be able to complete required profile information before final invoice creation. Required information includes phone number, full name, postal address, postal code, and email.

The User Panel should remain Persian-only and focused on practical customer needs.

## 22. Permission Philosophy

Permissions should control both visibility and actions.

Future role direction may include:

- Super admin.
- Admin.
- Support.
- Warehouse operator.
- Accountant.
- Content manager.
- Future operational roles.

Roles should reflect real responsibilities. Sensitive operations such as financial changes, wallet adjustments, inventory corrections, approvals, freeze actions, and settings changes should require explicit permissions.

The permission system should be able to grow without rewriting panel structure.

## 23. UI/UX Direction

The panel should prioritize admin-first usability and operational clarity.

UI/UX direction:

- Keep navigation scalable.
- Use reusable UI sections.
- Support a future design system.
- Keep workflows clear and action-oriented.
- Make important states visible.
- Keep responsive-friendly structure.
- Avoid unnecessary visual complexity in phase 1.

This document does not define visual design implementation. It defines structure and workflow expectations.

## 24. Future Expansion

Future panel expansion may include:

- Digital product management.
- Subscription management.
- Membership access management.
- Advanced discount engine.
- Advanced analytics.
- AI-assisted product, content, SEO, pricing, analytics, and support tools.
- Mobile/admin compatibility improvements.
- Telegram, email, or messaging approval workflows.
- More detailed accounting integration.
- Advanced role and permission controls.

Future expansion should be added as modular sections or extensions to existing sections, not as a full panel redesign.

## 25. Open Decisions

The following decisions are still open:

- Final admin panel technology approach.
- Final frontend approach for admin and user panels.
- Exact role and permission model.
- Exact dashboard widgets for phase 1.
- Exact order state transitions.
- Exact approval rules for products, categories, and scopes.
- Exact financial report formats.
- Exact wallet adjustment rules.
- Exact notification channels for future approvals.
- Exact design system direction.

Open decisions must be documented before they become implementation commitments.

## 26. Changelog

- 2026-05-30: Initial admin panel structure document created.
